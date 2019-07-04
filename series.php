<?php

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
        echo "<li>" . "<a href="serie.php">" . $serie["title"] . "</a>" . "</li>";
    }
    echo "</ul>";
}

mostrarSeries($resultado);