<?php
include 'connection.php';

function updateRow($connection, $id_song, $id_coder, $title, $artist, $genre, $url, $date, $status)
{
    $updateQuery = "UPDATE song
    SET id_coder ='$id_coder', title = '$title', artist = '$artist', genre = '$genre', url = '$url', date = '$date', status='$status'
    WHERE id_song = '$id_song' ";

    $connection->query($updateQuery);
}

updateRow($conn, 8, 5, "Flowers", "Miley Cirus", "pop", "https://www.youtube.com/watch?v=G7KNmW9a75Y", "2023-01-23", "False");
