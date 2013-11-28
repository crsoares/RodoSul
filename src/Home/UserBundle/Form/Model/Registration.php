<?php

namespace Home\UserBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Home\UserBundle\Entity\User;
use Home\UserBundle\Entity\Role;

class Registration
{
    /**
     * @Assert\Type(type="Home\UserBundle\Entity\User")
     * @Assert\Valid()
     */
    protected $user;
    
    /**
     * @Assert\Type(type="Home\UserBundle\Entity\Role")
     * @Assert\Valid()
     */
    protected $role;
    
    public function setUser(User $user)
    {
        $this->user = $user;
    }
    
    public function getUser()
    {
        return $this->user;
    }
    
    public function setRole(Role $role)
    {
        $this->role = $role;
    }
    
    public function getRole()
    {
        return $this->role;
    }
    
    /*public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }
    
    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (Boolean) $termsAccepted;
    }*/
}
