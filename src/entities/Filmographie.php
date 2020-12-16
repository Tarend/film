<?php

namespace App\entities;

class Filmographie
{
    private $idFilmographie;
    private $libelleFilmographie;

    /**
     * Filmographie constructor.
     * @param $idFilmographie
     * @param $libelleFilmographie
     */
    public function __construct($idFilmographie, $libelleFilmographie)
    {
        $this->idFilmographie = $idFilmographie;
        $this->libelleFilmographie = $libelleFilmographie;
    }

    //Getter et Setter

    /**
     * @return mixed
     */
    public function getIdFilmographie()
    {
        return $this->idFilmographie;
    }

    /**
     * @return mixed
     */
    public function getLibelleFilmographie()
    {
        return $this->libelleFilmographie;
    }

    /**
     * @param mixed $libelleFilmographie
     */
    public function setLibelleFilmographie($libelleFilmographie)
    {
        $this->libelleFilmographie = $libelleFilmographie;
    }
}