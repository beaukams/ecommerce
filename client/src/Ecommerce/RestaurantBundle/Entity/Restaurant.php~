<?php

namespace Ecommerce\RestaurantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restaurant
 *
 * @ORM\Table(name="restaurant")
 * @ORM\Entity(repositoryClass="Ecommerce\RestaurantBundle\Repository\RestaurantRepository")
 */
class Restaurant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_restaurant", type="string", length=255)
     */
    private $nomRestaurant;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_restaurant", type="string", length=255)
     */
    private $photoRestaurant;

    /**
     * @var string
     *
     * @ORM\Column(name="dep_restaurant", type="string", length=255)
     */
    private $depRestaurant;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_restaurant", type="string", length=255)
     */
    private $adresseRestaurant;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_restaurant", type="string", length=12)
     */
    private $telRestaurant;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_restaurant", type="string", length=255, nullable=true)
     */
    private $mailRestaurant;

    /**
     * @var string
     *
     * @ORM\Column(name="fcbk_restaurant", type="string", length=255)
     */
    private $fcbkRestaurant;


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
     * Set nomRestaurant
     *
     * @param string $nomRestaurant
     * @return Restaurant
     */
    public function setNomRestaurant($nomRestaurant)
    {
        $this->nomRestaurant = $nomRestaurant;

        return $this;
    }

    /**
     * Get nomRestaurant
     *
     * @return string 
     */
    public function getNomRestaurant()
    {
        return $this->nomRestaurant;
    }

    /**
     * Set photoRestaurant
     *
     * @param string $photoRestaurant
     * @return Restaurant
     */
    public function setPhotoRestaurant($photoRestaurant)
    {
        $this->photoRestaurant = $photoRestaurant;

        return $this;
    }

    /**
     * Get photoRestaurant
     *
     * @return string 
     */
    public function getPhotoRestaurant()
    {
        return $this->photoRestaurant;
    }

    /**
     * Set depRestaurant
     *
     * @param string $depRestaurant
     * @return Restaurant
     */
    public function setDepRestaurant($depRestaurant)
    {
        $this->depRestaurant = $depRestaurant;

        return $this;
    }

    /**
     * Get depRestaurant
     *
     * @return string 
     */
    public function getDepRestaurant()
    {
        return $this->depRestaurant;
    }

    /**
     * Set adresseRestaurant
     *
     * @param string $adresseRestaurant
     * @return Restaurant
     */
    public function setAdresseRestaurant($adresseRestaurant)
    {
        $this->adresseRestaurant = $adresseRestaurant;

        return $this;
    }

    /**
     * Get adresseRestaurant
     *
     * @return string 
     */
    public function getAdresseRestaurant()
    {
        return $this->adresseRestaurant;
    }

    /**
     * Set telRestaurant
     *
     * @param string $telRestaurant
     * @return Restaurant
     */
    public function setTelRestaurant($telRestaurant)
    {
        $this->telRestaurant = $telRestaurant;

        return $this;
    }

    /**
     * Get telRestaurant
     *
     * @return string 
     */
    public function getTelRestaurant()
    {
        return $this->telRestaurant;
    }

    /**
     * Set mailRestaurant
     *
     * @param string $mailRestaurant
     * @return Restaurant
     */
    public function setMailRestaurant($mailRestaurant)
    {
        $this->mailRestaurant = $mailRestaurant;

        return $this;
    }

    /**
     * Get mailRestaurant
     *
     * @return string 
     */
    public function getMailRestaurant()
    {
        return $this->mailRestaurant;
    }

    /**
     * Set fcbkRestaurant
     *
     * @param string $fcbkRestaurant
     * @return Restaurant
     */
    public function setFcbkRestaurant($fcbkRestaurant)
    {
        $this->fcbkRestaurant = $fcbkRestaurant;

        return $this;
    }

    /**
     * Get fcbkRestaurant
     *
     * @return string 
     */
    public function getFcbkRestaurant()
    {
        return $this->fcbkRestaurant;
    }
}
