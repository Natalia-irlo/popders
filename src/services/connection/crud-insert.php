<?php
include 'connection.php';

function addContent($connection)
{
    $addRowQuery = 'INSERT INTO song (Title, Artist, Genre, URL, Date, Status, Img) VALUES ("Flowers", "Miley Cirus", "Genre", "hahahah", "05/07/2020", "no", "hahah")';
    $connection->query($addRowQuery);
}

addContent($conn);