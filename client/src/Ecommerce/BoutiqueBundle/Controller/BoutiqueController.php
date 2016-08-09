<?php

namespace Ecommerce\BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ymfony\Component\HttpFoundation\Session;

//ajouter l'entite produit
use Ecommerce\BoutiqueBundle\Entity\Produit;

//la form ProduitType
use Ecommerce\BoutiqueBundle\Form\ProduitType;


class BoutiqueBundle extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig', array('name' => $name));
        
    }

    /* ajout d'un produit */
    public function ajouteProduitAction(){

    	//on crée un objet produit
    	$produit = new Produit();
        
    		
        $form = $this->createForm(new ProduitType, $produit);
         /*           ->add('nom_produit', 'text', array('required' => true))
                    ->add('details_produit', 'text')
                    ->add('prix_unitaire', 'number', array('required' => true))
                    ->add('photo_produit', 'text')
                    ->add('id_typeproduit', 'choice', array('choices' => array(1 => 'kams', 2 => 'moustapha')))
                    ->add('id_departement', 'choice', array('choices' => array(1 => 'kams', 2 => 'moustapha')))
                    ->getForm();*/

        if($this->get('request')->getMethod() == "POST"){
            
                $request = $this->get('request');

                //lier le formulaire à la requete
                $form->bindRequest($request);

                if($form->isValid()){
                    
                    $this->reqAddProduit($produit);

                    //visulaiser le resultat
                    return $this->redirect($this->generateUrl('voirProduit', array('id' => $produit->getIdProduit())));
                }else{
                    $this->render("EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig", array('form' => $form->createView(), ));
                }

        }else{

    	   return $this->render("EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig", array('form' => $form->createView(), ));
        }
    }

    public function voirProduitAction($id){
    	
        if($id >= 0){
            //on recupere le produit
            $produit = $this->reqSelectProduit($id);
            if($produit === null){
                return $this->render("EcommerceBoutiqueBundle:Produit:errorProduitInexistant.html.twig");
            }else{

                //on affiche
                return $this->render("EcommerceBoutiqueBundle:Produit:voirProduit.html.twig", array('produit' => $produit->getContenu()));
            }
        }
        else{
            return $this->render("EcommerceBoutiqueBundle:Produit:listeProduit.html.twig");
        }
    }

    public function listeProduitAction(){

            //on recupere le produit
            $produits = $this->reqSelectAllProduit();

            if($produits === null){
                return $this->render("EcommerceBoutiqueBundle:Produit:errorProduitInexistant.html.twig");
            }else{

                //on affiche
                $res = array();
                foreach ($produits as $key => $produit) {
                    $res[$key] = $produit->getContenu();
                }

                return $this->render("EcommerceBoutiqueBundle:Produit:listeProduit.html.twig", array('produits' => $res ));
            }
    }


    public function modifieProduitAction($id){

        //on crée un objet produit
        $produit = $this->reqSelectProduit($id);

        
        $form = $this->createForm(new ProduitType, $produit);

        if($this->get('request')->getMethod() == "POST"){
                

                $request = $this->get('request');

                //lier le formulaire à la requete
                $form->bindRequest($request);

                if($form->isValid()){
                    
                    //$produit->setIdProduit($id);
                    $this->reqUpdateProduit($produit);

                    //visulaiser le resultat
                    return $this->redirect($this->generateUrl('voirProduit', array('id' => $produit->getIdProduit())));
                }else{

                    //ajouter le produit
                    return $this->redirect($this->generateUrl('ajouteProduit'));
                }

        }elseif($produit != null){

           return $this->render("EcommerceBoutiqueBundle:Produit:modifieProduit.html.twig", array('form' => $form->createView(), 'id' => $id ));

        }else{
            return $this->redirect($this->generateUrl('listeProduit'));
        }
    }


    public function supprimeProduitAction($id){

        if(intval($id) >= 0){
            //on supprime le produit
            $this->reqRemoveProduitById($id);
           
            return $this->redirect($this->generateUrl('listeProduit'));
        }
        else{
            return $this->redirect($this->generateUrl('listeProduit'));
        }
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

        $this->reqAddProduit();
    }

    private function reqAddProduit($produit){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        //on persiste l'élèment
        $em->persist($produit);

        //flush
        $em->flush();

    }

    private function reqSelectProduit($id_produit){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $produit = $em->getRepository('EcommerceBoutiqueBundle:Produit')->find($id_produit);

        //flush
        $em->flush();

        return $produit;

    }

    private function reqSelectAllProduit(){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $produits = $em->getRepository('EcommerceBoutiqueBundle:Produit')->findAll();

        //flush
        $em->flush();

        return $produits;

    }

    private function reqUpdateProduit(Produit $produit){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $em->persist($produit);

        //flush
        $em->flush();

    }

    private function reqUpdateProduitById($id_produit){

        //recupere le produit
        $produit = $this->reqSelectProduit($id_produit);

        //mise a jour
        $this->reqUpdateProduit($produit);

        return $produit;

    }


    private function reqRemoveProduit($produit){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $em->remove($produit);

        //flush
        $em->flush();

    }

    private function reqRemoveProduitById($id_produit){

        //recupere le produit
        $produit = $this->reqSelectProduit($id_produit);

        //suppression
        $this->reqRemoveProduit($produit);

    }
}
