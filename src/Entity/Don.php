<?php

namespace App\Entity;

use App\Repository\DonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DonRepository::class)]
class Don
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_don = null;

    #[ORM\Column]
    private ?int $pois = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[ORM\Column]
    private ?int $id_categorie = null;

    #[ORM\Column]
    private ?int $id_donneur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDon(): ?int
    {
        return $this->id_don;
    }

    public function setIdDon(int $id_don): self
    {
        $this->id_don = $id_don;

        return $this;
    }

    public function getPois(): ?int
    {
        return $this->pois;
    }

    public function setPois(int $pois): self
    {
        $this->pois = $pois;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdCategorie(): ?int
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(int $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    public function getIdDonneur(): ?int
    {
        return $this->id_donneur;
    }

    public function setIdDonneur(int $id_donneur): self
    {
        $this->id_donneur = $id_donneur;

        return $this;
    }
}
