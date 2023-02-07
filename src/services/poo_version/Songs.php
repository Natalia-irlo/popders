<?php
require 'CrudConnection.php';

class Songs extends CrudConnection
{
    private $connection;

    public function __construct()
    {
        $this->connection = $this->connectDatabase();
    }

    public function getRows()
    {
        $seeAllQuery = 'SELECT title, artist FROM song';
        foreach ($this->connection->query($seeAllQuery) as $row) {
            echo "\n";
            echo $row['title'] . "\n";
            echo $row['artist'] . "\n";
        }
    }

    public function addRow($id_coder, $title, $artist, $genre, $url, $date, $status)
    {
        $addRowQuery = "insert into song (id_coder,title,artist,genre,url,date,status) values ('$id_coder','$title' ,'$artist', '$genre', '$url', '$date', '$status')";
        $this->connection->query($addRowQuery);
    }

    function updateRow($id_song, $id_coder, $title, $artist, $genre, $url, $date, $status)
    {
        $updateQuery = "UPDATE song
    SET id_coder ='$id_coder', title = '$title', artist = '$artist', genre = '$genre', url = '$url', date = '$date', status='$status'
    WHERE id_song = '$id_song' ";

        $this->connection->query($updateQuery);
    }

    function deleteRow($id_song)
    {
        $deleteQuery = "DELETE FROM song WHERE id_song = '$id_song'";
        $this->connection->query($deleteQuery);
    }
}

$movement = new Songs;
$movement->deleteRow(12);
var_dump($movement);
