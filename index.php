<?php
require_once 'vendor/autoload.php';
use App\Model\ModelFilm;

$modelFilm = new ModelFilm();
$films = $modelFilm->getFilms();

foreach ($films as $film) {
    echo "Titre : " . $film['titre'] . "<br>";
}

