<?php

namespace Ecommerce\BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeProduit
 *
 * @ORM\Table(name="commande_produit")
 * @ORM\Entity(repositoryClass="Ecommerce\BoutiqueBundle\Repository\CommandeProduitRepository")
 */
class CommandeProduit
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
     * @var int
     *
     * @ORM\Column(name="id_commande", type="integer")
     */
    private $idCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="id_produit", type="integer")
     */
    private $idProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="quantite", type="float")
     */
    private $quantite;


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
     * Set idCommande
     *
     * @param integer $idCommande
     * @return CommandeProduit
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    /**
     * Get idCommande
     *
     * @return integer 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     * @return CommandeProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return integer 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return CommandeProduit
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
}
