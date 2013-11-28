<?php

namespace Home\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="E-mail já tomadas")
 */
class User 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") 
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email() 
     */
    protected $email;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(max = 4096) 
     */
    protected $plainPassword;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
    
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }
}

