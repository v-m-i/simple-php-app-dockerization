<?php

use Doctrine\DBAL\DriverManager;

require_once dirname(__DIR__).'/vendor/autoload.php';

# Example how to connect to a database
$conn = DriverManager::getConnection([
    'dbname' => 'best_db',
    'user' => 'root',
    'password' => 'groot',
    'host' => 'db',
    'driver' => 'pdo_mysql'
]);

$data = $conn->fetchAllAssociative('SHOW DATABASES');

echo 'Best databases:';
echo '<ul>';

foreach ($data as $item) {
    echo "<li>$item[Database]</li>";
}

echo '</ul>';
