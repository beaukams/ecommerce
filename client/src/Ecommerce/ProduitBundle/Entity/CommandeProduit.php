<?php

namespace Ecommerce\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecommerce\ProduitBundle\Entity\CommandeProduit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecommerce\ProduitBundle\Entity\CommandeProduitRepository")
 */
class CommandeProduit
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
     * @var integer $id_commande
     *
     * @ORM\Column(name="id_commande", type="integer")
     */
    private $id_commande;

    /**
     * @var integer $id_produit
     *
     * @ORM\Column(name="id_produit", type="integer")
     */
    private $id_produit;

    /**
     * @var float $quantite
     *
     * @ORM\Column(name="quantite", type="float")
     */
    private $quantite;

    /**
     * @var float $prix
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;


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
     * Set id_commande
     *
     * @param integer $idCommande
     */
    public function setIdCommande($idCommande)
    {
        $this->id_commande = $idCommande;
    }

    /**
     * Get id_commande
     *
     * @return integer 
     */
    public function getIdCommande()
    {
        return $this->id_commande;
    }

    /**
     * Set id_produit
     *
     * @param integer $idProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->id_produit = $idProduit;
    }

    /**
     * Get id_produit
     *
     * @return integer 
     */
    public function getIdProduit()
    {
        return $this->id_produit;
    }

    /**
     * Set quantite
     *
     * @param float $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * Get quantite
     *
     * @return float 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prix
     *
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }
}