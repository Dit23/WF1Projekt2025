<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (session_status() == PHP_SESSION_NONE) {
    //session name setzen
    session_name('WF1Projekt2025');
    $eineWoche = 7 * 24 * 60 * 60;
    session_set_cookie_params($eineWoche);
    session_start();
}

try {
    $pdo = new PDO('mysql:host=localhost;dbname=wf1', "root", "");
} catch (PDOException $e) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Datenbankverbindung konnte nicht hergestellt werden']);
    die();
}

//Standard Tabellen erstellen

# Klassen
# | id (index) | name | hashPasswort | admin (default: false) | erstelltAm | geaendertAm | untisUsername | untisPasswort |

//MySQL PhpMyAdmin Syntax
$pdo->query('
CREATE TABLE IF NOT EXISTS klassen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    hashPasswort VARCHAR(255) NOT NULL,
    admin BOOLEAN DEFAULT FALSE,
    erstelltAm TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    geaendertAm TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    untisUsername VARCHAR(255),
    untisPasswort VARCHAR(255)
)
');

# Wenn die Tabelle leer ist, wird ein Standard Account erstellt mit dem Namen "admin" und dem Passwort "admin"
$statement = $pdo->prepare('SELECT * FROM klassen');
$statement->execute();
$klassen = $statement->fetchAll();

if (count($klassen) === 0) {
    $statement = $pdo->prepare('INSERT INTO klassen (name, hashPasswort, admin) VALUES (:name, :hashPasswort, :admin)');
    $statement->bindParam(':name', $name);
    $statement->bindParam(':hashPasswort', $hashPasswort);
    $statement->bindParam(':admin', $admin);

    $name = 'admin';
    $hashPasswort = password_hash('admin', PASSWORD_DEFAULT);
    $admin = true;

    $statement->execute();
}

//wenn der benuzter nicht eingeloggt ist, dann wird er auf die login seite weitergeleitet
$allowed = ['login.php', 'api.php', 'error.php'];
if (in_array(basename($_SERVER['PHP_SELF']), $allowed) === false && isset($_SESSION['admin']) === false) {
    session_destroy();
    header('Location: login');
    die();
}

//wenn der benuzter eingeloggt ist dann überschreibe seinen admin status aus der datenbank
if (isset($_SESSION['userId'])) {
    $statement = $pdo->prepare('SELECT * FROM klassen WHERE id = :id');
    $statement->bindParam(':id', $_SESSION['userId']);
    $statement->execute();

    $user = $statement->fetch();

    if ($user === false && !in_array(basename($_SERVER['PHP_SELF']), $allowed)) {
        session_destroy();
        header('Location: login');
        die();
    }

    $_SESSION['admin'] = ($user['admin'] === 1);
}