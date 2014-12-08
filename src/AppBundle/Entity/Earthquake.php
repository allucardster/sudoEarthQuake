<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Rest;

/**
 * Earthquake
 * @ORM\Entity
 * @ORM\Table(name="hello_user")
 */
class Earthquake
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var float
     */
    private $lat;

    /**
     * @var float
     */
    private $lon;

    /**
     * @var float
     */
    private $smajax;

    /**
     * @var float
     */
    private $sminax;

    /**
     * @var float
     */
    private $strike;

    /**
     * @var String
     */
    private $q;

    /**
     * @var float
     */
    private $depth;

    /**
     * @var float
     */
    private $unc;

    /**
     * @var String
     */
    private $q2;

    /**
     * @var float
     */
    private $mw;

    /**
     * @var float
     */
    private $unc2;

    /**
     * @var String
     */
    private $q3;

    /**
     * @var String
     */
    private $s;

    /**
     * @var float
     */
    private $mo;

    /**
     * @var float
     */
    private $fac;

    /**
     * @var String
     */
    private $mo_auth;

    /**
     * @var float
     */
    private $mpp;

    /**
     * @var float
     */
    private $mpr;

    /**
     * @var float
     */
    private $mrr;

    /**
     * @var float
     */
    private $mrt;

    /**
     * @var float
     */
    private $mtp;

    /**
     * @var float
     */
    private $mtt;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Earthquake
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set lat
     *
     * @param float $lat
     * @return Earthquake
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lon
     *
     * @param float $lon
     * @return Earthquake
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon
     *
     * @return float 
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set smajax
     *
     * @param float $smajax
     * @return Earthquake
     */
    public function setSmajax($smajax)
    {
        $this->smajax = $smajax;

        return $this;
    }

    /**
     * Get smajax
     *
     * @return float 
     */
    public function getSmajax()
    {
        return $this->smajax;
    }

    /**
     * Set sminax
     *
     * @param float $sminax
     * @return Earthquake
     */
    public function setSminax($sminax)
    {
        $this->sminax = $sminax;

        return $this;
    }

    /**
     * Get sminax
     *
     * @return float 
     */
    public function getSminax()
    {
        return $this->sminax;
    }

    /**
     * Set strike
     *
     * @param float $strike
     * @return Earthquake
     */
    public function setStrike($strike)
    {
        $this->strike = $strike;

        return $this;
    }

    /**
     * Get strike
     *
     * @return float 
     */
    public function getStrike()
    {
        return $this->strike;
    }

    /**
     * Set q
     *
     * @param \String $q
     * @return Earthquake
     */
    public function setQ(\String $q)
    {
        $this->q = $q;

        return $this;
    }

    /**
     * Get q
     *
     * @return \String 
     */
    public function getQ()
    {
        return $this->q;
    }

    /**
     * Set depth
     *
     * @param float $depth
     * @return Earthquake
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return float 
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set unc
     *
     * @param float $unc
     * @return Earthquake
     */
    public function setUnc($unc)
    {
        $this->unc = $unc;

        return $this;
    }

    /**
     * Get unc
     *
     * @return float 
     */
    public function getUnc()
    {
        return $this->unc;
    }

    /**
     * Set q2
     *
     * @param \String $q2
     * @return Earthquake
     */
    public function setQ2(\String $q2)
    {
        $this->q2 = $q2;

        return $this;
    }

    /**
     * Get q2
     *
     * @return \String 
     */
    public function getQ2()
    {
        return $this->q2;
    }

    /**
     * Set mw
     *
     * @param float $mw
     * @return Earthquake
     */
    public function setMw($mw)
    {
        $this->mw = $mw;

        return $this;
    }

    /**
     * Get mw
     *
     * @return float 
     */
    public function getMw()
    {
        return $this->mw;
    }

    /**
     * Set unc2
     *
     * @param float $unc2
     * @return Earthquake
     */
    public function setUnc2($unc2)
    {
        $this->unc2 = $unc2;

        return $this;
    }

    /**
     * Get unc2
     *
     * @return float 
     */
    public function getUnc2()
    {
        return $this->unc2;
    }

    /**
     * Set q3
     *
     * @param \String $q3
     * @return Earthquake
     */
    public function setQ3(\String $q3)
    {
        $this->q3 = $q3;

        return $this;
    }

    /**
     * Get q3
     *
     * @return \String 
     */
    public function getQ3()
    {
        return $this->q3;
    }

    /**
     * Set s
     *
     * @param \String $s
     * @return Earthquake
     */
    public function setS(\String $s)
    {
        $this->s = $s;

        return $this;
    }

    /**
     * Get s
     *
     * @return \String 
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * Set mo
     *
     * @param float $mo
     * @return Earthquake
     */
    public function setMo($mo)
    {
        $this->mo = $mo;

        return $this;
    }

    /**
     * Get mo
     *
     * @return float 
     */
    public function getMo()
    {
        return $this->mo;
    }

    /**
     * Set fac
     *
     * @param float $fac
     * @return Earthquake
     */
    public function setFac($fac)
    {
        $this->fac = $fac;

        return $this;
    }

    /**
     * Get fac
     *
     * @return float 
     */
    public function getFac()
    {
        return $this->fac;
    }

    /**
     * Set mo_auth
     *
     * @param \String $moAuth
     * @return Earthquake
     */
    public function setMoAuth(\String $moAuth)
    {
        $this->mo_auth = $moAuth;

        return $this;
    }

    /**
     * Get mo_auth
     *
     * @return \String 
     */
    public function getMoAuth()
    {
        return $this->mo_auth;
    }

    /**
     * Set mpp
     *
     * @param float $mpp
     * @return Earthquake
     */
    public function setMpp($mpp)
    {
        $this->mpp = $mpp;

        return $this;
    }

    /**
     * Get mpp
     *
     * @return float 
     */
    public function getMpp()
    {
        return $this->mpp;
    }

    /**
     * Set mpr
     *
     * @param float $mpr
     * @return Earthquake
     */
    public function setMpr($mpr)
    {
        $this->mpr = $mpr;

        return $this;
    }

    /**
     * Get mpr
     *
     * @return float 
     */
    public function getMpr()
    {
        return $this->mpr;
    }

    /**
     * Set mrr
     *
     * @param float $mrr
     * @return Earthquake
     */
    public function setMrr($mrr)
    {
        $this->mrr = $mrr;

        return $this;
    }

    /**
     * Get mrr
     *
     * @return float 
     */
    public function getMrr()
    {
        return $this->mrr;
    }

    /**
     * Set mrt
     *
     * @param float $mrt
     * @return Earthquake
     */
    public function setMrt($mrt)
    {
        $this->mrt = $mrt;

        return $this;
    }

    /**
     * Get mrt
     *
     * @return float 
     */
    public function getMrt()
    {
        return $this->mrt;
    }

    /**
     * Set mtp
     *
     * @param float $mtp
     * @return Earthquake
     */
    public function setMtp($mtp)
    {
        $this->mtp = $mtp;

        return $this;
    }

    /**
     * Get mtp
     *
     * @return float 
     */
    public function getMtp()
    {
        return $this->mtp;
    }

    /**
     * Set mtt
     *
     * @param float $mtt
     * @return Earthquake
     */
    public function setMtt($mtt)
    {
        $this->mtt = $mtt;

        return $this;
    }

    /**
     * Get mtt
     *
     * @return float 
     */
    public function getMtt()
    {
        return $this->mtt;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Earthquake
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Earthquake
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if(!$this->getCreatedAt()) {
            $this->created_at = new \DateTime();
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updated_at = new \DateTime();
    }

    /**
     * @Rest\VirtualProperty
     * @Rest\SerializedName("latitude")
     * 
     * @return float
     */
    public function getLatitude()
    {
        return $this->lat;
    }

    /**
     * @Rest\VirtualProperty
     * @Rest\SerializedName("longitude")
     * 
     * @return float
     */
    public function getLongitude()
    {
        return $this->lon;
    }
}
