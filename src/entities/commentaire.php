<?php

namespace App\entities;

class commentaire
{
    private $idCommentaire;
    private $auteurCommentaire;
    private $noteCommentaire;
    private $contenuCommentaire;

    /**
     * commentaire constructor.
     * @param $idCommentaire
     * @param $auteurCommentaire
     * @param $noteCommentaire
     * @param $contenuCommentaire
     */
    public function __construct($idCommentaire, $auteurCommentaire, $noteCommentaire, $contenuCommentaire)
    {
        $this->idCommentaire = $idCommentaire;
        $this->auteurCommentaire = $auteurCommentaire;
        $this->noteCommentaire = $noteCommentaire;
        $this->contenuCommentaire = $contenuCommentaire;

    }

//Getter et Setter
    /**
     * @return mixed
     */
    public function getAuteurCommentaire()
    {
        return $this->auteurCommentaire;
    }

    /**
     * @param mixed $auteurCommentaire
     */
    public function setAuteurCommentaire($auteurCommentaire)
    {
        $this->auteurCommentaire = $auteurCommentaire;
    }

    /**
     * @return mixed
     */
    public function getNoteCommentaire()
    {
        return $this->noteCommentaire;
    }

    /**
     * @param mixed $noteCommentaire
     */
    public function setNoteCommentaire($noteCommentaire)
    {
        $this->noteCommentaire = $noteCommentaire;
    }

    /**
     * @return mixed
     */
    public function getContenuCommentaire()
    {
        return $this->contenuCommentaire;
    }

    /**
     * @param mixed $contenuCommentaire
     */
    public function setContenuCommentaire($contenuCommentaire)
    {
        $this->contenuCommentaire = $contenuCommentaire;
    }



}