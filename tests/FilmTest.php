<?php

declare(strict_types=1);
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use App\Model\ModelFilm;
use Sys\Conf;


final class FilmTest extends TestCase
{
      public function testFilmNotEmpty(): void
      {
            $f = new ModelFilm();
            $g = $f->getFilms();
            $this->assertNotEmpty($g);
      }
      public function testFilmTitreAffiche(): void
      {
            $f = new ModelFilm();
            $g = $f->getFilms();
            //foreach ($g as $film) {   // à faire : cibler l'indice 0  
                $this->assertArrayHasKey('titre', $g[0], 'Un des films ne contient pas de clé "titre"');
                $this->assertArrayHasKey('affiche', $g[0], 'Un des films ne contient pas la clé "affiche".');
            //}
        }
        
        public function testFilmNotFalse(): void{
            $f = new ModelFilm();
            $g = $f->getFilms();
            $this->assertNotFalse($g, 'la méthode a retourné false.');
        }
        
        public function testGetfilmsIsArray(): void {
            $f = new ModelFilm();
            $g = $f->getFilms();
            $this->assertIsArray($g, 'Pas un tableau');
        }  

        public function testFilmFalse(): void{
            $f = new ModelFilm();
            $film = Conf::$film;
            Conf::$film = 'blba';
            $g = $f->getFilms();
            Conf::$film =$film;
            $this->assertFalse($g, "la méthode n'a pas retourné false.");
        }
}
