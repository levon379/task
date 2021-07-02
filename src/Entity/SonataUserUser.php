<?php
// src/Entity/SonataUserUser.php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Entity\BaseUser;

/**
* @ORM\Entity
* @ORM\Table(name="fos_user__user")
*/
class SonataUserUser extends BaseUser
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id;
    /**
     * @ORM\ManyToMany(targetEntity="Department")
     * @ORM\JoinTable(name="departmentuser",
     *         joinColumns={@ORM\JoinColumn(name="department_id", referencedColumnName="id")},
     *         inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     * )
     * @var Department[]
     */
    protected $department;

    public function __construct()
    {
        parent::__construct();
        $this->department = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Department[]
     */
    public function getDepartment(): Collection
    {
        return $this->department;
    }

    public function addDepartment(Department $department): self
    {
        if (!$this->department->contains($department)) {
            $this->department[] = $department;
        }

        return $this;
    }

    public function removeDepartment(Department $department): self
    {
        $this->department->removeElement($department);

        return $this;
    }
}