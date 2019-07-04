<?php
/**
 * Archivo de configuración de conector PDO.
 * 
 * Ingresar los parametros que sean acordes a la configuración
 * propia de cada uno de los servidores que se tengan en el equipo.
 * 
 */
    $host       = 'localhost';
    $username   = 'root';
    $password   = 'root';
    $dbname     = 'movies_db';
    $port       = '3306';
    $dsn        = "mysql:host=$host;dbname=$dbname;port=$port";
    $options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );