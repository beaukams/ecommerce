<?php

namespace Ecommerce\BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="Ecommerce\BoutiqueBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commande", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_commande", type="date")
     */
    private $dateCommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_commande", type="time")
     */
    private $heureCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="id_client", type="integer")
     */
    private $idClient;

    /**
     * @var bool
     *
     * @ORM\Column(name="reussie", type="boolean")
     */
    private $reussie;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_commande", type="float")
     */
    private $prixCommande;


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
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime 
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set heureCommande
     *
     * @param \DateTime $heureCommande
     * @return Commande
     */
    public function setHeureCommande($heureCommande)
    {
        $this->heureCommande = $heureCommande;

        return $this;
    }

    /**
     * Get heureCommande
     *
     * @return \DateTime 
     */
    public function getHeureCommande()
    {
        return $this->heureCommande;
    }

    /**
     * Set idClient
     *
     * @param integer $idClient
     * @return Commande
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return integer 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set reussie
     *
     * @param boolean $reussie
     * @return Commande
     */
    public function setReussie($reussie)
    {
        $this->reussie = $reussie;

        return $this;
    }

    /**
     * Get reussie
     *
     * @return boolean 
     */
    public function getReussie()
    {
        return $this->reussie;
    }

    /**
     * Set prixCommande
     *
     * @param float $prixCommande
     * @return Commande
     */
    public function setPrixCommande($prixCommande)
    {
        $this->prixCommande = $prixCommande;

        return $this;
    }

    /**
     * Get prixCommande
     *
     * @return float 
     */
    public function getPrixCommande()
    {
        return $this->prixCommande;
    }
}
