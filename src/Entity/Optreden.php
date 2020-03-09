<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OptredenRepository")
 */
class Optreden
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Artist", inversedBy="optredens")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Artist_id;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="time")
     */
    private $kickoff;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $hall;

    /**
     * @ORM\Column(type="integer")
     */
    private $maxSeats;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArtistId(): ?Artist
    {
        return $this->Artist_id;
    }

    public function setArtistId(?Artist $Artist_id): self
    {
        $this->Artist_id = $Artist_id;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getKickoff(): ?\DateTimeInterface
    {
        return $this->kickoff;
    }

    public function setKickoff(\DateTimeInterface $kickoff): self
    {
        $this->kickoff = $kickoff;

        return $this;
    }

    public function getHall(): ?string
    {
        return $this->hall;
    }

    public function setHall(string $hall): self
    {
        $this->hall = $hall;

        return $this;
    }

    public function getMaxSeats(): ?int
    {
        return $this->maxSeats;
    }

    public function setMaxSeats(int $maxSeats): self
    {
        $this->maxSeats = $maxSeats;

        return $this;
    }
}
