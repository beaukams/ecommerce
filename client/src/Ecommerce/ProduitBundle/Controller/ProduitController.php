<?php

namespace Ecommerce\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

//ajouter l'entite produit
use Ecommerce\ProduitBundle\Entity\Produit;


class ProduitController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EcommerceProduitBundle:Produit:index.html.twig', array('name' => $name));
        
    }

    /* ajout d'un produit */
    public function ajouteProduitAction(){

    	if($this->get("request")->getMethod() == "POST" && $this->get("request")->request->get('nom') != null ){

    		$request = $this->get("request");
    		$nom = $request->request->get('nom');
    		$prix = $request->request->get('prix');
    		$photo = $request->request->get('photo');
    		$details = $request->request->get('details');
    		$id_departement = $request->request->get('departement');
    		$id_typeproduit = $request->request->get('typeproduit');

    		//ajouter le produit à la base
    		$produit = $this->reqAddProduit($nom, $prix, $details, $photo, $id_departement, $id_typeproduit);

    		//session temporaire
    		$this->get('session')->setFlash('notice', 'Produit bien enregistré');

    		//on visualise le résultat
    		return $this->redirect( $this->generateUrl('ajouteProduit', array('id' => $produit->getIdProduit())) );

    	}else{

        	return $this->render('EcommerceProduitBundle:Produit:ajoutProduit.html.twig', array());
    	}
    }

    

    public function modifieProduitAction(){
    	
    }

    public function supprimeProduitAction(){

    }

    private function reqAddProduit($nom, $prix, $details, $photo, $id_departement, $id_typeproduit){
        
        //on cree un objet produit
        $produit = new Produit();
        $produit->setNomProduit($nom);
        $produit->setPrixUnitaire($prix);
        $produit->setDetailsProduit($details);
        $produit->setIdDepartement($id_departement);
        $produit->setIdTypeproduit($id_typeproduit);
        $produit->setPhotoProduit($photo);

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        //on persiste l'élèment
        $em->persist($produit);

        //flush
        $em->flush();


        return $produit;
    }
}
