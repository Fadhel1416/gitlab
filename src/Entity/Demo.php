<?php

namespace App\Entity;

use App\Repository\DemoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DemoRepository::class)
 */
class Demo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fadhel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFadhel(): ?string
    {
        return $this->fadhel;
    }

    public function setFadhel(string $fadhel): self
    {
        $this->fadhel = $fadhel;

        return $this;
    }
}
