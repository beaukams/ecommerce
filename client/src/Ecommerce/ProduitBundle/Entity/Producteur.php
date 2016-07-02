<?php

namespace Ecommerce\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecommerce\ProduitBundle\Entity\Producteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecommerce\ProduitBundle\Entity\ProducteurRepository")
 */
class Producteur
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nom_producteur
     *
     * @ORM\Column(name="nom_producteur", type="string", length=255)
     */
    private $nom_producteur;

    /**
     * @var string $tel_producteur
     *
     * @ORM\Column(name="tel_producteur", type="string", length=15)
     */
    private $tel_producteur;

    /**
     * @var string $mail_producteur
     *
     * @ORM\Column(name="mail_producteur", type="string", length=255)
     */
    private $mail_producteur;

    /**
     * @var string $adresse_producteur
     *
     * @ORM\Column(name="adresse_producteur", type="string", length=255)
     */
    private $adresse_producteur;

    /**
     * @var string $facebook_producteur
     *
     * @ORM\Column(name="facebook_producteur", type="string", length=255)
     */
    private $facebook_producteur;

    /**
     * @var string $bp_producteur
     *
     * @ORM\Column(name="bp_producteur", type="string", length=255)
     */
    private $bp_producteur;

    /**
     * @var string $siteweb_producteur
     *
     * @ORM\Column(name="siteweb_producteur", type="string", length=255)
     */
    private $siteweb_producteur;

    /**
     * @var string $details_producteur
     *
     * @ORM\Column(name="details_producteur", type="string", length=255)
     */
    private $details_producteur;


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
     * Set nom_producteur
     *
     * @param string $nomProducteur
     */
    public function setNomProducteur($nomProducteur)
    {
        $this->nom_producteur = $nomProducteur;
    }

    /**
     * Get nom_producteur
     *
     * @return string 
     */
    public function getNomProducteur()
    {
        return $this->nom_producteur;
    }

    /**
     * Set tel_producteur
     *
     * @param string $telProducteur
     */
    public function setTelProducteur($telProducteur)
    {
        $this->tel_producteur = $telProducteur;
    }

    /**
     * Get tel_producteur
     *
     * @return string 
     */
    public function getTelProducteur()
    {
        return $this->tel_producteur;
    }

    /**
     * Set mail_producteur
     *
     * @param string $mailProducteur
     */
    public function setMailProducteur($mailProducteur)
    {
        $this->mail_producteur = $mailProducteur;
    }

    /**
     * Get mail_producteur
     *
     * @return string 
     */
    public function getMailProducteur()
    {
        return $this->mail_producteur;
    }

    /**
     * Set adresse_producteur
     *
     * @param string $adresseProducteur
     */
    public function setAdresseProducteur($adresseProducteur)
    {
        $this->adresse_producteur = $adresseProducteur;
    }

    /**
     * Get adresse_producteur
     *
     * @return string 
     */
    public function getAdresseProducteur()
    {
        return $this->adresse_producteur;
    }

    /**
     * Set facebook_producteur
     *
     * @param string $facebookProducteur
     */
    public function setFacebookProducteur($facebookProducteur)
    {
        $this->facebook_producteur = $facebookProducteur;
    }

    /**
     * Get facebook_producteur
     *
     * @return string 
     */
    public function getFacebookProducteur()
    {
        return $this->facebook_producteur;
    }

    /**
     * Set bp_producteur
     *
     * @param string $bpProducteur
     */
    public function setBpProducteur($bpProducteur)
    {
        $this->bp_producteur = $bpProducteur;
    }

    /**
     * Get bp_producteur
     *
     * @return string 
     */
    public function getBpProducteur()
    {
        return $this->bp_producteur;
    }

    /**
     * Set siteweb_producteur
     *
     * @param string $sitewebProducteur
     */
    public function setSitewebProducteur($sitewebProducteur)
    {
        $this->siteweb_producteur = $sitewebProducteur;
    }

    /**
     * Get siteweb_producteur
     *
     * @return string 
     */
    public function getSitewebProducteur()
    {
        return $this->siteweb_producteur;
    }

    /**
     * Set details_producteur
     *
     * @param string $detailsProducteur
     */
    public function setDetailsProducteur($detailsProducteur)
    {
        $this->details_producteur = $detailsProducteur;
    }

    /**
     * Get details_producteur
     *
     * @return string 
     */
    public function getDetailsProducteur()
    {
        return $this->details_producteur;
    }
}