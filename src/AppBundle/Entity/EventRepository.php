<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EventRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventRepository extends EntityRepository
{
    public function findAllActive()
    {
        $dql = "SELECT c FROM AppBundle:Event c WHERE c.accepted=1";
        $query = $this->getEntityManager()->createQuery($dql);
        
        return $query->getResult();
    }
}
