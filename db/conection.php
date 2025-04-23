<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

function connection()
{

    $port = $_ENV['PORT'];
    $db = $_ENV['DATABASE'];
    $root = $_ENV['USERNAME'];
    $password = $_ENV['PASSWORD'];

    try {
        $conn = new PDO("mysql:host=localhost;port=$port;dbname=$db", $root, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
