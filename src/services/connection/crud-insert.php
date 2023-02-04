<?php
include 'connection.php';

function addContent($connection, $id_coder, $title, $artist, $genre, $url, $date, $status)
{
    $addRowQuery = "insert into song (id_coder,title,artist,genre,url,date,status) values ('$id_coder','$title' ,'$artist', '$genre', '$url', '$date', '$status')";
    $connection->query($addRowQuery);
}

addContent($conn, 7, "Cryin", "Aerosmith", "pop-rock", "https://www.youtube.com/watch?v=qfNmyxV2Ncw", '2022-09-30', "false");
