<?php

namespace Ecommerce\RestaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
use ymfony\Component\HttpFoundation\Session;

//ajouter l'entite Restaurant
use Ecommerce\RestaurantBundle\Entity\Restaurant;

//la form RestaurantType
use Ecommerce\RestaurantBundle\Form\RestaurantType;

class RestaurantController extends Controller
{
	public function indexAction(){

        return $this->render('EcommerceRestaurantBundle::index.html.twig');
        
    }

	/* ajout d'un Restaurant */
    public function ajouteRestaurantAction(){

    	//on crée un objet Restaurant
    	$Restaurant = new Restaurant();
        
    		
        $form = $this->createForm(new RestaurantType, $Restaurant);


        if($this->get('request')->getMethod() == "POST"){
            
                $request = $this->get('request');

                //lier le formulaire à la requete
                $form->bind($request);

                if($form->isValid()){
                    
                    $this->reqAddRestaurant($Restaurant);

                    //visulaiser le resultat
                    return $this->redirect($this->generateUrl('voirRestaurant', array('id' => $Restaurant->getIdRestaurant())));
                }else{
                    $this->render("EcommerceRestaurantBundle:Restaurant:ajoutRestaurant.html.twig", array('form' => $form->createView(), ));
                }

        }else{

    	   return $this->render("EcommerceRestaurantBundle:Restaurant:ajoutRestaurant.html.twig", array('form' => $form->createView(), ));
        }
    }

    public function voirRestaurantAction($id){
    	
        if($id >= 0){

            //on recupere le Restaurant
            $Restaurant = $this->reqSelectRestaurant($id);
            
            if($Restaurant === null){
                return $this->render("EcommerceRestaurantBundle:Restaurant:errorRestaurantInexistant.html.twig");
            }else{

                //on affiche
                return $this->render("EcommerceRestaurantBundle:Restaurant:voirRestaurant.html.twig", array('Restaurant' => $Restaurant->getContenu()));
            }
        }
        else{
            return $this->render("EcommerceRestaurantBundle:Restaurant:listeRestaurant.html.twig");
        }
    }

    public function listeRestaurantAction(){

            //on recupere le Restaurant
            $Restaurants = $this->reqSelectAllRestaurant();

            if($Restaurants === null){
                return $this->render("EcommerceRestaurantBundle:Restaurant:errorRestaurantInexistant.html.twig");
            }else{

                //on affiche
                $res = array();
                foreach ($Restaurants as $key => $Restaurant) {
                    $res[$key] = $Restaurant->getContenu();
                }

                return $this->render("EcommerceRestaurantBundle:Restaurant:listeRestaurant.html.twig", array('Restaurants' => $res ));
            }
    }


    public function modifieRestaurantAction($id){

        //on crée un objet Restaurant
        $Restaurant = $this->reqSelectRestaurant($id);

        
        $form = $this->createForm(new RestaurantType, $Restaurant);

        if($this->get('request')->getMethod() == "POST"){
                

                $request = $this->get('request');

                //lier le formulaire à la requete
                $form->bind($request);

                if($form->isValid()){
                    
                    //$Restaurant->setIdRestaurant($id);
                    $this->reqUpdateRestaurant($Restaurant);

                    //visulaiser le resultat
                    return $this->redirect($this->generateUrl('voirRestaurant', array('id' => $Restaurant->getIdRestaurant())));
                }else{

                    //ajouter le Restaurant
                    return $this->redirect($this->generateUrl('ajouteRestaurant'));
                }

        }elseif($Restaurant != null){

           return $this->render("EcommerceRestaurantBundle:Restaurant:modifieRestaurant.html.twig", array('form' => $form->createView(), 'id' => $id ));

        }else{
            return $this->redirect($this->generateUrl('listeRestaurant'));
        }
    }


    public function supprimeRestaurantAction($id){

        if(intval($id) >= 0){
            //on supprime le Restaurant
            $this->reqRemoveRestaurantById($id);
           
            return $this->redirect($this->generateUrl('listeRestaurant'));
        }
        else{
            return $this->redirect($this->generateUrl('listeRestaurant'));
        }
    }

    private function reqAddRestaurantParam($nom, $prix, $details, $photo, $id_departement, $id_typeRestaurant){
        
        //on cree un objet Restaurant
        $Restaurant = new Restaurant();
        $Restaurant->setNomRestaurant($nom);
        $Restaurant->setPrixUnitaire($prix);
        $Restaurant->setDetailsRestaurant($details);
        $Restaurant->setIdDepartement($id_departement);
        $Restaurant->setIdTypeRestaurant($id_typeRestaurant);
        $Restaurant->setPhotoRestaurant($photo);

        $this->reqAddRestaurant();
    }

    private function reqAddRestaurant($Restaurant){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        //on persiste l'élèment
        $em->persist($Restaurant);

        //flush
        $em->flush();

    }

    private function reqSelectRestaurant($id_restaurant){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $Restaurant = $em->getRepository('EcommerceRestaurantBundle:Restaurant')->find($id_restaurant);

        //flush
        $em->flush();

        return $Restaurant;

    }

    private function reqSelectAllRestaurant(){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $Restaurants = $em->getRepository('EcommerceRestaurantBundle:Restaurant')->findAll();

        //flush
        $em->flush();

        return $Restaurants;

    }

    private function reqUpdateRestaurant(Restaurant $Restaurant){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $em->persist($Restaurant);

        //flush
        $em->flush();

    }

    private function reqUpdateRestaurantById($id_restaurant){

        //recupere le Restaurant
        $Restaurant = $this->reqSelectRestaurant($id_restaurant);

        //mise a jour
        $this->reqUpdateRestaurant($Restaurant);

        return $Restaurant;

    }


    private function reqRemoveRestaurant($Restaurant){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $em->remove($Restaurant);

        //flush
        $em->flush();

    }

    private function reqRemoveRestaurantById($id_restaurant){

        //recupere le Restaurant
        $Restaurant = $this->reqSelectRestaurant($id_restaurant);

        //suppression
        $this->reqRemoveRestaurant($Restaurant);

    }
}
