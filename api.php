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
            break;
        case 'register':
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