<?php
/**
 * Archivo de conexión contra DB via PDO.
 * 
 * @return $db
 */
require_once('config-db.php');

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}