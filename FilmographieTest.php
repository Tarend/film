<?php

require 'vendor/autoload.php';

use App\entities\film;
use App\entities\Filmographie;
use App\entities\genre;
use App\entities\commentaire;
use Faker\Factory;


$faker= Factory::create('fr_FR');

$filmographie = new Filmographie(1,"Ma Filmographie");
// Tableau des genres
$tabGenres = [
    new Genre(1,"Action"),
    new Genre(2,"Comedie"),
    new Genre(3,"Science Fiction")
];


for ($i = 0; $i < 5; $i++) {
$film =new film;
$film->film=$faker->word;
$film->setDateSortieFilm($faker->year($max = 'now') );
$film->setDescriptionFilm($faker->text(100));
$film->setDureeFilm($faker->numberBetween(80,170));
$film->setTitreFilm($faker->sentence(4));
$film->setGenre($faker->numberBetween [1]);

echo $film->getDescriptionFilm();
?><br><?php

}