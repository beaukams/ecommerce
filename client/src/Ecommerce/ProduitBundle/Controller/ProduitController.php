<?php

namespace Ecommerce\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

//ajouter l'entite produit
use Ecommerce\ProduitBundle\Entity\Produit;

//la form ProduitType
use Ecommerce\ProduitBundle\Form\ProduitType;


class ProduitController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EcommerceProduitBundle:Produit:index.html.twig', array('name' => $name));
        
    }

    /* ajout d'un produit */
    public function ajouteProduitAction(){

    	//on crée un objet produit
    	$produit = new Produit();
    		
    	//on génere la formulaire
    	$form = $this->createForm(new ProduitType(), $produit);

    	if($this->get("request")->getMethod() == "POST"){

    		$request = $this->get("request");
    	/*	$nom = $request->request->get('nom');
    		$prix = $request->request->get('prix');
    		$photo = $request->request->get('photo');
    		$details = $request->request->get('details');
    		$id_departement = $request->request->get('departement');
    		$id_typeproduit = $request->request->get('typeproduit');*/

    		//on lie le formulaire à la requete
    		$form->bind($request);

    		//verifier si les valeurs sont bonnes
    		if($form->isValid()){

    			//ajouter le produit à la base
	    		$produit = $this->reqAddProduit($produit);

	    		//session temporaire
	    		$this->get('session')->setFlash('notice', 'Produit bien enregistré');

	    		//on visualise le résultat
	    		return $this->redirect( $this->generateUrl('voirProduit', array('id' => $produit->getIdProduit())) );
    		}else{

    			//création de la vue et affichage

	        	return $this->render('EcommerceProduitBundle:Produit:ajoutProduit.html.twig', 
	        		array(
	        			'form' => $form->createView(),
	        			));
	    		}

    	}else{

    		//création de la vue et affichage
        	return $this->render('EcommerceProduitBundle:Produit:ajoutProduit.html.twig', 
        		array(
        			'form' => $form->createView(),
        			));
    	}
    }

    public function voirProduit($id){
    	//recuperer le produit dans la base
    }

    public function modifieProduitAction($id){
    	
    }

    public function supprimeProduitAction(){

    }

    private function reqAddProduitParam($nom, $prix, $details, $photo, $id_departement, $id_typeproduit){
        
        //on cree un objet produit
        $produit = new Produit();
        $produit->setNomProduit($nom);
        $produit->setPrixUnitaire($prix);
        $produit->setDetailsProduit($details);
        $produit->setIdDepartement($id_departement);
        $produit->setIdTypeproduit($id_typeproduit);
        $produit->setPhotoProduit($photo);


        return $this->reqAddProduit();
    }

    private function reqAddProduit($produit){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        //on persiste l'élèment
        $em->persist($produit);

        //flush
        $em->flush();


        return $produit;
    }
}
