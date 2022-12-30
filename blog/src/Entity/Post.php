<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="text")
     */

     private $reference;

    /**
     * @return mixed
     */
     public function getReference()
     {
        return $this->reference;
     }
     /**
      * @param mixed $reference
      */
      public function setReference($reference):void
      {
        $this->reference = $reference;
      }


    /**
     * @ORM\Column(type="text")
     */
    private $intitule;

    /**
     * @return mixed
     */
    public function getIntitule()
    {
       return $this->intitule;
    }
    /**
     * @param mixed $intitule
     */
     public function setIntitule($intitule):void
     {
       $this->intitule = $intitule;
     }

    /**
     * @ORM\Column(type="text")
     */
    private $descriptif;

     /**
     * @return mixed
     */
    public function getDescriptif()
    {
       return $this->descriptif;
    }
    /**
     * @param mixed $descriptif
     */
     public function setDescriptif($descriptif):void
     {
       $this->descriptif = $descriptif;
     }
    

    /**
     * @ORM\Column(type="text")
     */
    private $localisation;

    /**
     * @return mixed
     */
    public function getLocalisation()
    {
       return $this->localisation;
    }
    /**
     * @param mixed $descriptif
     */
     public function setLocalisation($localisation):void
     {
       $this->localisation = $localisation;
     }
    

    /**
     * @ORM\Column(type="text")
     */
    private $surface;

    /**
     * @return mixed
     */
    public function getSurface()
    {
       return $this->surface;
    }
    /**
     * @param mixed $descriptif
     */
     public function setSurface($surface):void
     {
       $this->surface = $surface;
     }

    /**
     * @ORM\Column(type="text")
     */
    private $prix;
    /**
     * @return mixed
     */
    public function getPrix()
    {
       return $this->prix;
    }
    /**
     * @param mixed $descriptif
     */
     public function setPrix($prix):void
     {
       $this->prix = $prix;
     }


    /**
     * @ORM\Column(type="text")
     */
    private $type;
    /**
     * @return mixed
     */
    public function getType()
    {
       return $this->type;
    }
    /**
     * @param mixed $descriptif
     */
     public function setType($type):void
     {
       $this->type = $type;
     }

    /**
     * @ORM\Column(type="text")
     */
    private $categorie;

    /**
     * @return mixed
     */
    public function getCategorie()
    {
       return $this->categorie;
    }
    /**
     * @param mixed $descriptif
     */
     public function setCategorie($categorie):void
     {
       $this->categorie = $categorie;
     }
}
