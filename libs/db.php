<?php
$host = 'localhost';
$dbname = 'blog';
$user = 'root';
$password = '';
$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];


try {
    $connection = new PDO("mysql:host=$host; dbname=$dbname", $user, $password, $options);
    
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>