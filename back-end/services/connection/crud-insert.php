<?php
include 'Connection.php';

function addContent($connection, $title, $artist, $genre, $url, $date, $status,)
{
    $addRowQuery = "insert into song (title,artist,genre,url,date,status) values ('$title' ,'$artist', '$genre', '$url', '$date', '$status')";
    $connection->query($addRowQuery);
}

addContent($conn, "Toxic", "Britney Spears", "pop", "jaajajaj", 'hahahah', "false");