<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RestaurantRepository")
 */
class Restaurant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Chef;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreEtoile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getChef(): ?string
    {
        return $this->Chef;
    }

    public function setChef(string $Chef): self
    {
        $this->Chef = $Chef;

        return $this;
    }

    public function getNombreEtoile(): ?int
    {
        return $this->nombreEtoile;
    }

    public function setNombreEtoile(int $nombreEtoile): self
    {
        $this->nombreEtoile = $nombreEtoile;

        return $this;
    }
}
