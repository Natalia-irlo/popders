<?php
include 'Connection.php';

class Query extends Connection
{
    public function addContent($conn)
    {
        $addRowQuery = 'INSERT INTO song (title, artist, genre, url, date, status, img) VALUES ("Flowers", "Miley Cirus", "Genre", "hahahah", "05/07/2020", "no", "hahah")';
        echo $conn->query($addRowQuery);
    }


    function showContent($conn)
    {
        $seeAllQuery = 'SELECT title, artist FROM song';
        foreach ($conn->query($seeAllQuery) as $row) {
            echo "\n";
            echo $row['title'] . "\n";
            echo $row['artist'] . "\n";
        }
    }
}

$song_data = new Query;
$song_data->addContent();