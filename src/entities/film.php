<?php

namespace App\entities;

class film
{
    private $idFilm;
    private $titreFilm;
    private $descriptionFilm;
    private $dureeFilm;
    private $dateSortieFilm;
    private $genre=[];


    /**
     * film constructor.
     * @param $idFilm
     * @param $titreFilm
     * @param $descriptionFilm
     * @param $dureeFilm
     * @param $dateSortieFilm
     */
    public function __construct($idFilm, $titreFilm, $descriptionFilm, $dureeFilm, $dateSortieFilm,$genre)
    {
        $this->idFilm = $idFilm;
        $this->titreFilm = $titreFilm;
        $this->descriptionFilm = $descriptionFilm;
        $this->dureeFilm = $dureeFilm;
        $this->dateSortieFilm = $dateSortieFilm;
        $this->genre=$genre;
    }





    //Getter et Setter


    /**
     * @return mixed
     */
    public function getTitreFilm()
    {
        return $this->titreFilm;
    }

    /**
     * @param mixed $titreFilm
     */
    public function setTitreFilm($titreFilm)
    {
        $this->titreFilm = $titreFilm;
    }

    /**
     * @return mixed
     */
    public function getDescriptionFilm()
    {
        return $this->descriptionFilm;
    }

    /**
     * @param mixed $descriptionFilm
     */
    public function setDescriptionFilm($descriptionFilm)
    {
        $this->descriptionFilm = $descriptionFilm;
    }

    /**
     * @return mixed
     */
    public function getDureeFilm()
    {
        return $this->dureeFilm;
    }

    /**
     * @param mixed $dureeFilm
     */
    public function setDureeFilm($dureeFilm)
    {
        $this->dureeFilm = $dureeFilm;
    }

    /**
     * @return mixed
     */
    public function getDateSortieFilm()
    {
        return $this->dateSortieFilm;
    }

    /**
     * @param mixed $dateSortieFilm
     */
    public function setDateSortieFilm($dateSortieFilm)
    {
        $this->dateSortieFilm = $dateSortieFilm;
    }

    /**
     * @param array $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }




}