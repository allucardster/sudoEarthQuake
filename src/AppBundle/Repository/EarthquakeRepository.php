<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * EarthquakeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EarthquakeRepository extends EntityRepository
{
    /**
     * Get Earthquakes by given date time
     * 
     * @param  DateTime $start
     * @param  DateTime $end
     * @return array
     */
    public function getEarthQuakeByInterval(\DateTime $start, \DateTime $end)
    {
        $qb = $this->createQueryBuilder('e');
        $qb
            ->where($qb->expr()->between('e.date', ':start', ':end'))
            ->setParameters(array(
                'start' => $start,
                'end' => $end
            ))
        ;
        return $qb->getQuery()->getResult();
    }
}
