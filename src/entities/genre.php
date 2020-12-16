<?php


namespace App\entities;
class genre
{

    private $idgenre;
    private $libelleGenre;



    /**
     * genre constructor.
     * @param $idgenre
     * @param $libelleGenre
     */
    public function __construct($idgenre, $libelleGenre)
    {
        $this->idgenre = $idgenre;
        $this->libelleGenre = $libelleGenre;
    }



    //Getter et Setter


    /**
     * @return mixed
     */
    public function getLibelleGenre()
    {
        return $this->libelleGenre;
    }

    /**
     * @param mixed $libelleGenre
     */
    public function setLibelleGenre($libelleGenre)
    {
        $this->libelleGenre = $libelleGenre;
    }

    /**
     * @return mixed
     */
    public function getIdgenre()
    {
        return $this->idgenre;
    }
}