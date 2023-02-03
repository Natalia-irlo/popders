<?php
include 'connection.php';

function showContent($connection)
{
    $seeAllQuery = 'SELECT title, artist FROM song';
    foreach ($connection->query($seeAllQuery) as $row) {
        echo "\n";
        echo $row['title'] . "\n";
        echo $row['artist'] . "\n";
    }
}

showContent($conn);