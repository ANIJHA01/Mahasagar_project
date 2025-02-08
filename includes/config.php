<?php
// require 'vendor/autoload.php';

// Load .env variables
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db_host = $_ENV['DB_HOST'];
$db_user = $_ENV['DB_USERNAME'];
$db_pass = $_ENV['DB_PASSWORD'];
$db_name = $_ENV['DB_DATABASE'];

$db = new \mysqli($db_host, $db_user, $db_pass, $db_name);

if ($db->connect_error) {
    die("Connection failed: {$db->connect_error}");
}
