<?php

namespace Ecommerce\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecommerce\ProduitBundle\Entity\TypeProduit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecommerce\ProduitBundle\Entity\TypeProduitRepository")
 */
class TypeProduit
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
     * @var string $libelle
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string $desc_type
     *
     * @ORM\Column(name="desc_type", type="string", length=600)
     */
    private $desc_type;


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
     * Set libelle
     *
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set desc_type
     *
     * @param string $descType
     */
    public function setDescType($descType)
    {
        $this->desc_type = $descType;
    }

    /**
     * Get desc_type
     *
     * @return string 
     */
    public function getDescType()
    {
        return $this->desc_type;
    }
}