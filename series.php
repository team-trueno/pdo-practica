<?php

require("pdo.php");

function consultarData($db, $idSerie)
{
    $query = $db->prepare('SELECT title FROM movies WHERE :idSerie');
    $query->bindValue(':idSerie', $idSerie);
    $query->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}


function consultarSerie($db, $idSerie)
{
    $consulta = 'SELECT title FROM movies WHERE $idSerie';
    $serie = consultarData($db, $consulta);
}



function traerSeries(PDO $db) {
    $consulta = $db->prepare("SELECT * FROM series");
    //bind
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

$resultado = traerSeries($db);

function mostrarSeries($resultado) {
    echo "<ul>";
    foreach ($resultado as $serie) {
        echo "<li>" . "<a href='serie.php'>" . $serie["title"] . "</a>" . "</li>";
    }
    echo "</ul>";
}

mostrarSeries($resultado);



function mostrarSerieId($db, $id)
{
    $
}