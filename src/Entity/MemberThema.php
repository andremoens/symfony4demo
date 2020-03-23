<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MemberThemaRepository")
 */
class MemberThema
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $memberId;

    /**
     * @ORM\Column(type="integer")
     */
    private $themaId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMemberId(): ?int
    {
        return $this->memberId;
    }

    public function setMemberId(int $memberId): self
    {
        $this->memberId = $memberId;

        return $this;
    }

    public function getThemaId(): ?int
    {
        return $this->themaId;
    }

    public function setThemaId(int $themaId): self
    {
        $this->themaId = $themaId;

        return $this;
    }
}
