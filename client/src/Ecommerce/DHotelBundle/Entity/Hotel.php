<?php

namespace Ecommerce\DHotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * Hotel
 *
 *@ORM\Table(name="hotel")
 *@ORM\Entity(repositoryClass="Ecommerce\DHotelBundle\Repository\DHotelRepository")
 */

 class Hotel
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="nom_hotel", type="string", length=90)
     */
    protected $nomHotel;

    /**
     * @ORM\Column(name="photo_Hotel",type="string", length=90)
     */
    protected $photosHotel;

    /**
     * @ORM\Column(name="departement_Hotel",type="string", length=90)
     */

    protected $departementHotel;


    /**
     * @ORM\Column(name="adresse_Hotel",type="string", length=90)
     */

    protected $adresseHotel;

    /**
     * @ORM\Column(name="telephone_Hotel",type="string", length=90)
     */

    protected $telephoneHotel;

    /**
     * @ORM\Column(name="mail_Hotel",type="string", length=90)
     */

    protected $mailHotel;


    /**
     * @ORM\Column(name="facebook_Hotel",type="string", length=90)
     */

    protected $facebookHotel;



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
     * Set nomHotel
     *
     * @param string $nomHotel
     * @return Hotel
     */
    public function setNomHotel($nomHotel)
    {
        $this->nomHotel = $nomHotel;

        return $this;
    }

    /**
     * Get nomHotel
     *
     * @return string 
     */
    public function getNomHotel()
    {
        return $this->nomHotel;
    }

    /**
     * Set photosHotel
     *
     * @param string $photosHotel
     * @return Hotel
     */
    public function setPhotosHotel($photosHotel)
    {
        $this->photosHotel = $photosHotel;

        return $this;
    }

    /**
     * Get photosHotel
     *
     * @return string 
     */
    public function getPhotosHotel()
    {
        return $this->photosHotel;
    }

    /**
     * Set departementHotel
     *
     * @param string $departementHotel
     * @return Hotel
     */
    public function setDepartementHotel($departementHotel)
    {
        $this->departementHotel = $departementHotel;

        return $this;
    }

    /**
     * Get departementHotel
     *
     * @return string 
     */
    public function getDepartementHotel()
    {
        return $this->departementHotel;
    }

    /**
     * Set adresseHotel
     *
     * @param string $adresseHotel
     * @return Hotel
     */
    public function setAdresseHotel($adresseHotel)
    {
        $this->adresseHotel = $adresseHotel;

        return $this;
    }

    /**
     * Get adresseHotel
     *
     * @return string 
     */
    public function getAdresseHotel()
    {
        return $this->adresseHotel;
    }

    /**
     * Set telephoneHotel
     *
     * @param string $telephoneHotel
     * @return Hotel
     */
    public function setTelephoneHotel($telephoneHotel)
    {
        $this->telephoneHotel = $telephoneHotel;

        return $this;
    }

    /**
     * Get telephoneHotel
     *
     * @return string 
     */
    public function getTelephoneHotel()
    {
        return $this->telephoneHotel;
    }

    /**
     * Set mailHotel
     *
     * @param string $mailHotel
     * @return Hotel
     */
    public function setMailHotel($mailHotel)
    {
        $this->mailHotel = $mailHotel;

        return $this;
    }

    /**
     * Get mailHotel
     *
     * @return string 
     */
    public function getMailHotel()
    {
        return $this->mailHotel;
    }

    /**
     * Set facebookHotel
     *
     * @param string $facebookHotel
     * @return Hotel
     */
    public function setFacebookHotel($facebookHotel)
    {
        $this->facebookHotel = $facebookHotel;

        return $this;
    }

    /**
     * Get facebookHotel
     *
     * @return string 
     */
    public function getFacebookHotel()
    {
        return $this->facebookHotel;
    } 

    public function getContenu(){
        return array(
                "id" => $this->id,
                "nomHotel" => $this->nomHotel,
                "photosHotel" => $this->photosHotel,
                "departementHotel" => $this->departementHotel,
                "adresseHotel" => $this->adresseHotel,
                "telephoneHotel" => $this->telephoneHotel,
                "mailHotel" => $this->mailHotel
            );
    }
}
