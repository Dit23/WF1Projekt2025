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

            if ($_POST['username'] === '' || $_POST['password'] === '') {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Benutzername oder Passwort leer']);
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
            $_SESSION['admin'] = ($user['admin'] === 1);

            echo json_encode(['success' => true, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Login erfolgreich']);
            break;
        case 'createNewClassAccount':
            if (isset($_POST['username']) === false || isset($_POST['password']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Benutzername oder Passwort nicht gefunden']);
                die();
            }

            if (isset($_SESSION['admin']) === false || $_SESSION['admin'] === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Nicht autorisiert']);
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
        case 'getAllClasses':
            $statement = $pdo->prepare('SELECT * FROM klassen');
            $statement->execute();

            $classes = $statement->fetchAll();

            echo json_encode(['success' => true, 'requestedAt' => date('Y-m-d H:i:s'), 'classes' => $classes]);
            break;
        case 'deleteClass':
            if (isset($_POST['id']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'ID nicht gefunden']);
                die();
            }

            if (isset($_SESSION['admin']) === false || $_SESSION['admin'] === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Nicht autorisiert']);
                die();
            }

            $id = $_POST['id'];

            $statement = $pdo->prepare('DELETE FROM klassen WHERE id = :id');
            $statement->bindParam(':id', $id);
            $statement->execute();

            echo json_encode(['success' => true, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Klasse erfolgreich gelöscht']);
            break;
        case 'updateClass':
            if (isset($_SESSION['admin']) === false || $_SESSION['admin'] === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Nicht autorisiert']);
                die();
            }

            if (isset($_POST['id']) === false || isset($_POST['name']) === false || isset($_POST['password']) === false || isset($_POST['untisUsername']) === false || isset($_POST['untisKey']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'ID, Name, Passwort, Untis Benutzername oder Untis Key nicht gefunden']);
                die();
            }

            $id = $_POST['id'];
            $name = $_POST['name'];
            $password = $_POST['password'];
            $hashPassword = $password !== '' ? password_hash($password, PASSWORD_DEFAULT) : null;

            $untisUsername = $_POST['untisUsername'];
            $untisKey = $_POST['untisKey'];

            if ($hashPassword !== null) {
                $statement = $pdo->prepare('UPDATE klassen SET name = :name, hashPasswort = :hashPasswort, untisUsername = :untisUsername, untisPasswort = :untisPasswort WHERE id = :id');
            }else {
                $statement = $pdo->prepare('UPDATE klassen SET name = :name, untisUsername = :untisUsername, untisPasswort = :untisPasswort WHERE id = :id');
            }
            $statement->bindParam(':id', $id);
            $statement->bindParam(':name', $name);
            if ($hashPassword !== null) {
                $statement->bindParam(':hashPasswort', $hashPassword);
            }
            $statement->bindParam(':untisUsername', $untisUsername);
            $statement->bindParam(':untisPasswort', $untisKey);
            $statement->execute();

            echo json_encode(['success' => true, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Klasse erfolgreich aktualisiert']);
            break;
        case 'createEvent':
            if (isset($_POST['title']) === false || isset($_POST['start']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Titel oder Startzeit nicht gefunden']);
                die();
            }

            if (isset($_SESSION['userId']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Nicht autorisiert']);
                die();
            }

            $title = $_POST['title'];
            $start = $_POST['start'];
            $description = $_POST['description'] ?? null;

            $statement = $pdo->prepare('INSERT INTO customEvents (klassenId, name, description, start) VALUES (:klassenId, :name, :description, :start)');
            $statement->bindParam(':klassenId', $_SESSION['userId']);
            $statement->bindParam(':name', $title);
            $statement->bindParam(':description', $description);
            $statement->bindParam(':start', $start);
            $statement->execute();

            echo json_encode(['success' => true, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Event erfolgreich erstellt', 'id' => $pdo->lastInsertId()]);
            break;
        case 'getEvents':
            if (isset($_SESSION['userId']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Nicht autorisiert']);
                die();
            }

            $statement = $pdo->prepare('SELECT * FROM customEvents WHERE klassenId = :klassenId');
            $statement->bindParam(':klassenId', $_SESSION['userId']);
            $statement->execute();

            $events = $statement->fetchAll();

            echo json_encode(['success' => true, 'requestedAt' => date('Y-m-d H:i:s'), 'events' => $events]);
            break;

        case 'deleteEvent':
            if (isset($_POST['id']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'ID nicht gefunden']);
                die();
            }

            if (isset($_SESSION['userId']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Nicht autorisiert']);
                die();
            }

            $id = $_POST['id'];

            $statement = $pdo->prepare('DELETE FROM customEvents WHERE id = :id AND klassenId = :klassenId');
            $statement->bindParam(':id', $id);
            $statement->bindParam(':klassenId', $_SESSION['userId']);
            $statement->execute();

            echo json_encode(['success' => true, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Event erfolgreich gelöscht']);
            break;

        case 'updateEvent':
            //var formData = new FormData();
            //            formData.append('method', 'updateEvent');
            //            formData.append('id', items.id);
            //            formData.append('title', items.title);
            //            formData.append('description', items.description);

            if (isset($_POST['id']) === false || isset($_POST['title']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'ID oder Titel nicht gefunden']);
                die();
            }

            if (isset($_SESSION['userId']) === false) {
                echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Nicht autorisiert']);
                die();
            }

            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'] ?? null;

            $statement = $pdo->prepare('UPDATE customEvents SET name = :name, description = :description WHERE id = :id AND klassenId = :klassenId');
            $statement->bindParam(':id', $id);
            $statement->bindParam(':klassenId', $_SESSION['userId']);
            $statement->bindParam(':name', $title);
            $statement->bindParam(':description', $description);
            $statement->execute();

            echo json_encode(['success' => true, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Event erfolgreich aktualisiert']);
            break;


        default:
            echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Methode nicht gefunden']);
    }

} else {
    //wenn es ein post request ist
    echo json_encode(['success' => false, 'requestedAt' => date('Y-m-d H:i:s'), 'message' => 'Nur POST Requests erlaubt']);
}