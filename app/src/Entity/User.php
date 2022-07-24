<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nama_depan = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nama_belakang = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $hp = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Role $role = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNamaDepan(): ?string
    {
        return $this->nama_depan;
    }

    public function setNamaDepan(?string $nama_depan): self
    {
        $this->nama_depan = $nama_depan;

        return $this;
    }

    public function getNamaBelakang(): ?string
    {
        return $this->nama_belakang;
    }

    public function setNamaBelakang(string $nama_belakang): self
    {
        $this->nama_belakang = $nama_belakang;

        return $this;
    }

    public function getHp(): ?string
    {
        return $this->hp;
    }

    public function setHp(?string $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): self
    {
        $this->role = $role;

        return $this;
    }
}
