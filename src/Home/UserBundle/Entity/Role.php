<?php

namespace Home\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Security\Core\Role\RoleInterface;

/**
 * @ORM\Table(name="roles")
 * @ORM\Entity()
 */
class Role implements RoleInterface
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\generatedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;
    
    /**
     * @ORM\Column(name="role", type="string", length=20, unique=true)
     */
    private $role;
    
    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="roles") 
     */
    private $users;
    
    public function __construct()
    {
        $this->users = new ArrayCollection();
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getUsers()
    {
        return $this->users;
    }
    
    /**
     * @see RoleInterface
     */
    public function getRole()
    {
        return $this->role;
    }
    
    public function setRole($role)
    {
        $this->role = $role;
    }
    
    public function toArray()
    {
        return array(
            'role' => $this
        );
    }

    /**
     * Add users
     *
     * @param \Home\UserBundle\Entity\User $users
     * @return Role
     */
    public function addUser(\Home\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;
    
        return $this;
    }

    /**
     * Remove users
     *
     * @param \Home\UserBundle\Entity\User $users
     */
    public function removeUser(\Home\UserBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }
}