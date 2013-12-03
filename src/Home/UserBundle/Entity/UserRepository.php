<?php

namespace Home\UserBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

class UserRepository extends EntityRepository implements UserProviderInterface
{
    public function loadUserByUsername($username)
    {
        $q = $this->createQueryBuilder('u')
                  ->select('u, r')
                  ->leftJoin('u.roles', 'r')
                  ->where('u.username = :username OR u.email = :email')
                  ->setParameter('username', $username)
                  ->setParameter('email', $username)
                  ->getQuery();
        
        try{
            /*
             * O método de consulta :: getSingleResult () lança uma exceção
             * Se não há nenhum registro que correspondem aos critérios.
             */
            $user = $q->getSingleResult();
        }catch(NoResultException $e){
            $message = sprintf(
                        'Incapaz de encontrar um administrador ativo HomeUserBundle:User objecto identificado pela "%s".',
                        $username
                    );
            throw new UsernameNotFoundException($message, 0, $e);
        }
        
        return $user;
    }
    
    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if(!$this->supportsClass($class)) {
            throw new UnsupportedUserException(
                        sprintf(
                                'Instâncias de "%s" não são suportados.',
                                $class
                            )
                    );
        }
        
        return $this->find($user->getId());
    }
    
    public function supportsClass($class)
    {
        return $this->getEntityName() === $class
                || is_subclass_of($class, $this->getEntityName());
    }
}