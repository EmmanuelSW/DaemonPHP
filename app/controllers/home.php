<?php


class Home extends Controller
{

    public function index()
    {
        // cargar vistas
        require APP . 'views/_templates/header.php';
        require APP . 'views/home/index.php';
        require APP . 'views/_templates/footer.php';
    }


    public function ejemplo()
    {
        // cargar vistas
        require APP . 'views/_templates/header.php';
        require APP . 'views/home/ejemplo.php';
        require APP . 'views/_templates/footer.php';
    }


}
