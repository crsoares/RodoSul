<?php

namespace Home\StoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
                    ->createQuery(
                                'SELECT p FROM HomeStoreBundle:Product p ORDER BY p.name ASC'
                            )->getResult();
    }
}
