<?php
include 'connection.php';

function addContent($connection)
{
    $addRowQuery = 'INSERT INTO song (`id_coder`, title, artist, genre, url, date, status, img) VALUES (1, "Flowers", "Miley Cirus", "Genre", "hahahah", "05/07/2020", "no", "hahah")';
    $connection->query($addRowQuery);
}

addContent($conn);