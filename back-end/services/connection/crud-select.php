<?php
include 'connection.php';

function showContent($connection)
{
    $seeAllQuery = 'SELECT nombre FROM animales ORDER BY nombre';
    foreach ($connection->query($seeAllQuery) as $row) {
        echo $row['nombre'] . "\t";
    }
}