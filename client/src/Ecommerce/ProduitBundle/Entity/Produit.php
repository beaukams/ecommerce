<?php

namespace Ecommerce\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecommerce\ProduitBundle\Entity\Produit
 *
 * @ORM\Table(name="Produit")
 * @ORM\Entity(repositoryClass="Ecommerce\ProduitBundle\Entity\ProduitRepository")
 */
class Produit
{
    /**
     * @var integer $id_produit
     *
     * @ORM\Column(name="id_produit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_produit;

    /**
     * @var string $nom_produit
     *
     * @ORM\Column(name="nom_produit", type="string", length=255)
     */
    private $nom_produit;

    /**
     * @var string $details_produit
     *
     * @ORM\Column(name="details_produit", type="string", length=600)
     */
    private $details_produit;

    /**
     * @var float $prix_unitaire
     *
     * @ORM\Column(name="prix_unitaire", type="float")
     */
    private $prix_unitaire;

    /**
     * @var string $photo_produit
     *
     * @ORM\Column(name="photo_produit", type="string", length=255)
     */
    private $photo_produit;

    /**
     * @var integer $id_typeproduit
     *
     * @ORM\Column(name="id_typeproduit", type="integer")   
     */
    private $id_typeproduit;

    /**
     * @var integer $id_departement
     *
     * @ORM\Column(name="id_departement", type="integer")   
     */
    private $id_departement;

    public function __construct(){
        
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getIdProduit()
    {
        return $this->id_produit;
    }

    /**
     * Set nom_produit
     *
     * @param string $nomProduit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nom_produit = $nomProduit;
    }

    /**
     * Get nom_produit
     *
     * @return string 
     */
    public function getNomProduit()
    {
        return $this->nom_produit;
    }

    /**
     * Set details_produit
     *
     * @param string $detailsProduit
     */
    public function setDetailsProduit($detailsProduit)
    {
        $this->details_produit = $detailsProduit;
    }

    /**
     * Get details_produit
     *
     * @return string 
     */
    public function getDetailsProduit()
    {
        return $this->details_produit;
    }

    /**
     * Set prix_unitaire
     *
     * @param float $prixUnitaire
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prix_unitaire = $prixUnitaire;
    }

    /**
     * Get prix_unitaire
     *
     * @return float 
     */
    public function getPrixUnitaire()
    {
        return $this->prix_unitaire;
    }

    /**
     * Set photo_produit
     *
     * @param string $photoProduit
     */
    public function setPhotoProduit($photoProduit)
    {
        $this->photo_produit = $photoProduit;
    }

    /**
     * Get photo_produit
     *
     * @return string 
     */
    public function getPhotoProduit()
    {
        return $this->photo_produit;
    }

    /**
     * Set id_typeproduit
     *
     * @param integer $idTypeproduit
     */
    public function setIdTypeproduit($idTypeproduit)
    {
        $this->id_typeproduit = $idTypeproduit;
    }

    /**
     * Get id_typeproduit
     *
     * @return integer 
     */
    public function getIdTypeproduit()
    {
        return $this->id_typeproduit;
    }

    /**
     * Set id_departement
     *
     * @param integer $idDepartement
     */
    public function setIdDepartement($idDepartement)
    {
        $this->id_departement = $idDepartement;
    }

    /**
     * Get id_departement
     *
     * @return integer 
     */
    public function getIdDepartement()
    {
        return $this->id_departement;
    }
}