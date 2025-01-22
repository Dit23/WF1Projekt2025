<?php

header('Content-Type: application/json');

include './shared/global.php';
global $pdo;

//wenn es ein post request ist
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['method']) === false) {
        echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Methode nicht gefunden']);
        die();
    }

    $method = $_POST['method'];

    switch ($method){
        case 'login':
            if (isset($_POST['username']) === false || isset($_POST['password']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Benutzername oder Passwort nicht gefunden']);
                die();
            }

            $username = $_POST['username'];
            $password = $_POST['password'];

            $statement = $pdo->prepare('SELECT * FROM klassen WHERE name = :name');
            $statement->bindParam(':name', $username);
            $statement->execute();

            $user = $statement->fetch();

            if ($user === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Benutzer nicht gefunden']);
                die();
            }

            if (password_verify($password, $user['hashPasswort']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Passwort falsch']);
                die();
            }

            $_SESSION['userId'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['admin'] = $user['admin'];

            echo json_encode(['success' => true, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Login erfolgreich']);
            break;

        case 'createNewClassAccount':
            if (isset($_POST['username']) === false || isset($_POST['password']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Benutzername oder Passwort nicht gefunden']);
                die();
            }

            $username = $_POST['username'];
            $password = $_POST['password'];

            $hashPassword = password_hash($password, PASSWORD_DEFAULT);

            $statement = $pdo->prepare('INSERT INTO klassen (name, hashPasswort) VALUES (:name, :hashPasswort)');
            $statement->bindParam(':name', $username);
            $statement->bindParam(':hashPasswort', $hashPassword);
            $statement->execute();

            echo json_encode(['success' => true, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Benutzer erfolgreich erstellt']);
            break;

        case 'logout':
            session_destroy();
            echo json_encode(['success' => true, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Logout erfolgreich']);
            break;
        default:
            echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Methode nicht gefunden']);
    }

} else {
    //wenn es ein post request ist
    echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Nur POST Requests erlaubt']);
}