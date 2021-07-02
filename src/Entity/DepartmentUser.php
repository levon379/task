<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\DepartmentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DepartmentUserRepository::class)
 */
class DepartmentUser
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
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(name="department_id", type="integer")
     */
    private $department_id;

    /**
     * @ORM\Column(name="number", type="integer")
     */

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getDepartmentId(): ?int
    {
        return $this->department_id;
    }

    public function setDepartmentId(int $department_id): self
    {
        $this->department_id = $department_id;

        return $this;
    }
}
