<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\DepartmentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DepartmentRepository::class)
 */
class Department
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
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="head", type="string")
     */
    private $head;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getHead(): ?string
    {
        return $this->head;
    }

    /**
     * @param string $head
     */
    public function setHead(string $head): void
    {
        $this->head = $head;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string")
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string")
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string")
     */
    private $logo;

    /**
     * @ORM\OneToMany(targetEntity=DepartmentUser::class, mappedBy="department", orphanRemoval=true)
     */
    private $departmentUsers;

    public function __construct()
    {
        $this->departmentUsers = new ArrayCollection();
    }

    /**
     * @return Collection|DepartmentUser[]
     */
    public function getDepartmentUsers(): Collection
    {
        return $this->departmentUsers;
    }

    public function addDepartmentUser(DepartmentUser $departmentUser): self
    {
        if (!$this->departmentUsers->contains($departmentUser)) {
            $this->departmentUsers[] = $departmentUser;
            $departmentUser->setDepartment($this);
        }

        return $this;
    }

    public function removeDepartmentUser(DepartmentUser $departmentUser): self
    {
        if ($this->departmentUsers->removeElement($departmentUser)) {
            // set the owning side to null (unless already changed)
            if ($departmentUser->getDepartment() === $this) {
                $departmentUser->setDepartment(null);
            }
        }

        return $this;
    }
}
