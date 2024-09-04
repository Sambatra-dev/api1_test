<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DataMeteoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DataMeteoRepository::class)]
#[ApiResource]
class DataMeteo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hum_sol = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hum_amb = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $temp_sol = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $temp_sol_1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lum = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHumSol(): ?string
    {
        return $this->hum_sol;
    }

    public function setHumSol(?string $hum_sol): static
    {
        $this->hum_sol = $hum_sol;

        return $this;
    }

    public function getHumAmb(): ?string
    {
        return $this->hum_amb;
    }

    public function setHumAmb(?string $hum_amb): static
    {
        $this->hum_amb = $hum_amb;

        return $this;
    }

    public function getTempSol(): ?string
    {
        return $this->temp_sol;
    }

    public function setTempSol(?string $temp_sol): static
    {
        $this->temp_sol = $temp_sol;

        return $this;
    }

    public function getTempSol1(): ?string
    {
        return $this->temp_sol_1;
    }

    public function setTempSol1(?string $temp_sol_1): static
    {
        $this->temp_sol_1 = $temp_sol_1;

        return $this;
    }

    public function getLum(): ?string
    {
        return $this->lum;
    }

    public function setLum(?string $lum): static
    {
        $this->lum = $lum;

        return $this;
    }
}
