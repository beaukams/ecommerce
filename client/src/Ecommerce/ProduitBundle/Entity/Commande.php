<?php

namespace Ecommerce\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecommerce\ProduitBundle\Entity\Commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecommerce\ProduitBundle\Entity\CommandeRepository")
 */
class Commande
{
    /**
     * @var integer $id_commande
     *
     * @ORM\Column(name="id_commande", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_commande;

    /**
     * @var date $date_commande
     *
     * @ORM\Column(name="date_commande", type="date")
     */
    private $date_commande;

    /**
     * @var time $heure_commande
     *
     * @ORM\Column(name="heure_commande", type="time")
     */
    private $heure_commande;

    /**
     * @var boolean $reussie
     *
     * @ORM\Column(name="reussie", type="boolean")
     */
    private $reussie;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getIdCommande()
    {
        return $this->id_commande;
    }

    /**
     * Set date_commande
     *
     * @param date $dateCommande
     */
    public function setDateCommande($dateCommande)
    {
        $this->date_commande = $dateCommande;
    }

    /**
     * Get date_commande
     *
     * @return date 
     */
    public function getDateCommande()
    {
        return $this->date_commande;
    }

    /**
     * Set heure_commande
     *
     * @param time $heureCommande
     */
    public function setHeureCommande($heureCommande)
    {
        $this->heure_commande = $heureCommande;
    }

    /**
     * Get heure_commande
     *
     * @return time 
     */
    public function getHeureCommande()
    {
        return $this->heure_commande;
    }

    /**
     * Set reussie
     *
     * @param boolean $reussie
     */
    public function setReussie($reussie)
    {
        $this->reussie = $reussie;
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
}