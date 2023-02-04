<?php
include 'connection.php';

function deleteRow($connection, $id_song)
{
    $deleteQuery = "DELETE FROM song WHERE id_song = '$id_song'";
    $connection->query($deleteQuery);
}

deleteRow($conn, 5);
