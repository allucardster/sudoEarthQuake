<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;


/**
 * @Rest\Route("/api/earthquake", defaults={"_format"="json"})
 */
class EarthquakeRestController extends Controller
{
    /**
     * List
     * 
     * @Rest\Get("/{year}/list", requirements={"year"="\d+"}, defaults={"year"=2009})
     */
    public function listAction($year)
    {
        $startDate = new \DateTime();
        $startDate->setDate($year, 1, 1);
        $startDate->setTime(0, 0, 0);
        $endDate = clone $startDate;
        $endDate->setDate($year, 12, 31);
        $endDate->setTime(23, 59, 59);
        $result = $this->getEartquakeRepository()->getEarthQuakeByInterval($startDate, $endDate);
        return View::create($result, 200);
    }

    /**
     * Accesor to EarthquakeRepository
     * 
     * @return \AppBundle\Repository\EarthquakeRepository
     */
    private function getEartquakeRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('AppBundle:Earthquake');
    }
}