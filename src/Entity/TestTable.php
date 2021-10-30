<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TestTableRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=TestTableRepository::class)
 * @ApiResource()
 */
class TestTable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     *
     */
    private $entier;

    /**
     * @ORM\Column(type="float")
     *
     */
    private $reel;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntier(): ?int
    {
        return $this->entier;
    }

    public function setEntier(int $entier): self
    {
        $this->entier = $entier;

        return $this;
    }

    public function getReel(): ?float
    {
        return $this->reel;
    }

    public function setReel(float $reel): self
    {
        $this->reel = $reel;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
