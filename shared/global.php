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
$pdo->query('

');