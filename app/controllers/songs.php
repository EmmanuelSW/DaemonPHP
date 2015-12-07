<?php

class Songs extends Controller {

    public function index() {

        $model = $this->setModel('SongsModel');
        $songs = $model->getAllSongs();
        $amount_of_songs = $model->getAmountOfSongs();

        require '../app/views/_templates/header.php';
        require '../app/views/songs/index.php';
        require '../app/views/_templates/footer.php';
    }


    public function addSong() {

        if (isset($_POST["add_song"])) {
            $model = $this->setModel('SongsModel');
            $model->addSong($_POST["artist"], $_POST["track"],  $_POST["link"]);
        }
        header('location: ' . URL . 'songs/index');
    }


    public function deleteSong($song_id) {

        if (isset($song_id)) {
            $model = $this->setModel('SongsModel');
            $model->deleteSong($song_id);
        }
        header('location: ' . URL . 'songs/index');
    }

}