<?php

namespace Home\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Home\UserBundle\Entity\UserRepository")
 * @UniqueEntity(fields="email", message="E-mail já tomadas")
 */
class User implements AdvancedUserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") 
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=25, unique=true) 
     */
    private $username;
    
    /**
     * @ORM\Column(type="string", length=32) 
     */
    private $salt;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email() 
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(max = 4096) 
     */
    private $password;
    
    /**
     * @ORM\Column(name="is_active", type="boolean") 
     */
    private $isActive;
    
    /**
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="users", cascade={"persist"}) 
     * @Assert\Type(type="Home\UserBundle\Entity\Role")
     */
    private $roles;
    
    public function __construct()
    {
        $this->roles = new ArrayCollection();
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->username;
    }
    
    /**
     * @inheritDoc
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }
    
    /**
     * @inheritDoc
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }
    
    /**
     * @inheritDoc
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * @inheritDoc
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * @inheritDoc
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }
    
    /**
     * @inheritDoc
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
    
    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }
    
    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id
        ));
    }
    
    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list($this->id) = unserialize($serialized);
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    
    /*
     * Metodo que verifica se a conta do 
     * usuario expirou
     */
    public function isAccountNonExpired()
    {
        return true;
    }
    
    /*
     * Checa se o usuario esta bloqueado
     */
    public function isAccountNonLocked()
    {
        return true;
    }
    
    /*
     * Verifica se a credenciais do usuario(senha)
     * expirou
     */
    public function isCredentialsNonExpired()
    {
        return true;
    }
    
    /*
     * Verifica se o usuario esta habilitado
     */
    public function isEnabled()
    {
        return $this->isActive;
    }

    /**
     * Add roles
     *
     * @param \Home\UserBundle\Entity\Role $roles
     * @return User
     */
    public function addRole(\Home\UserBundle\Entity\Role $roles)
    {
        $this->roles[] = $roles;
    
        return $this;
    }

    /**
     * Remove roles
     *
     * @param \Home\UserBundle\Entity\Role $roles
     */
    public function removeRole(\Home\UserBundle\Entity\Role $roles)
    {
        $this->roles->removeElement($roles);
    }
}