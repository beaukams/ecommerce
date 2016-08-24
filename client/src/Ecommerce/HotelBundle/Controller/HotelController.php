<?php

namespace Ecommerce\HotelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller; 

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response; 

use ymfony\Component\HttpFoundation\Session;

//ajouter l'entite Hotel
use Ecommerce\HotelBundle\Entity\Hotel;

//ajouter le formulaire de type form HotelType 

use Ecommerce\HotelBundle\Form\HotelType;

class HotelController extends Controller
{  

public function indexAction(){

        return $this->render('EcommerceHotelBundle::index.html.twig');
        
    }

 /* ajout d'un Hotel*/ 
 
    public function ajouteHotelAction(){ 

    //on crée un objet Hotel
    	$Hotel = new Hotel();

    	$form = $this->createForm(new HotelType, $Hotel);

    	if($this->get('request')->getMethod() == "POST"){
            
                $request = $this->get('request');

                //lier le formulaire à la requete

                $form->bind($request);

         if($form->isValid()){
                    
                    $this->reqAddHotel($Hotel);

                    //visulaiser le resultat
                    return $this->redirect($this->generateUrl('voirHotel', array('id' => $Hotel->getIdRestaurant())));
                }else{
                    $this->render("EcommerceHotelBundle:Hotel:ajoutHotel.html.twig", array('form' => $form->createView(), ));
                }

        }else{

    	   return $this->render("EcommerceHotelBundle:Hotel:ajoutHotel.html.twig", array('form' => $form->createView(), ));
        }
    }

    public function voirHotelAction($id){
    	
        if($id >= 0){

            //on recupere le Restaurant
            $Hotel = $this->reqSelectHotel($id);
            
            if($Hotel === null){
                return $this->render("EcommerceHotelBundle:Hotel:errorHotelInexistant.html.twig");
            }else{

                //on affiche
                return $this->render("EcommerceHotelBundle:Hotel:voirHotel.html.twig", array('Hotel' => $Hotel->getContenu()));
            }
        }
        else{
            return $this->render("EcommerceHotelBundle:Hotel:listeHotel.html.twig");
        }
    } 

    public function listeRestaurantAction(){

            //on recupere l'hotel
            $Hotels = $this->reqSelectAllHotel();

            if($Hotel=== null){
                return $this->render("EcommerceHotelBundle:Hotel:errorHotelInexistant.html.twig");
            }else{ 

                //on affiche
                $res = array(); 
                foreach ($Hotels as $key => $Hotel) {
                    $res[$key] = $Hotel->getContenu();
                }

                return $this->render("EcommerceRestaurantBundle:Restaurant:listeRestaurant.html.twig", array('Restaurants' => $res ));
            }
    } 


     public function modifieHotelAction($id){

        //on crée un objet Restaurant
        $Hotel= $this->reqSelectHotel($id);

        
        $form = $this->createForm(new HotelType, $Hotel);

        if($this->get('request')->getMethod() == "POST"){
                

                $request = $this->get('request');

                //lier le formulaire à la requete
                $form->bind($request);

                if($form->isValid()){
                    
                    //$Restaurant->setIdRestaurant($id);
                    $this->reqUpdateHotel($Hotel);

                    //visulaiser le resultat
                    return $this->redirect($this->generateUrl('voirHotel', array('id' => $Hotel->getIdHotel())));
                }else{

                    //ajouter le Restaurant
                    return $this->redirect($this->generateUrl('ajouteHotel'));
                }

        }elseif($Hotel != null){

           return $this->render("EcommerceHotelBundle:Hotel:modifieHotel.html.twig", array('form' => $form->createView(), 'id' => $id ));

        }else{
            return $this->redirect($this->generateUrl('listeHotel'));
        }
    }

 public function supprimeHotelAction($id){

        if(intval($id) >= 0){ 

            //on supprime l'hotel 

            $this->reqRemoveHotelById($id);
           
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

private function reqAddHotel($Hotel){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        //on persiste l'élèment
        $em->persist($Hotel);

        //flush
        $em->flush();

    } 

private function reqSelectHotel($id_Hotel){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $Restaurant = $em->getRepository('EcommerceRestaurantBundle:Restaurant')->find($id_Hotel);

        //flush
        $em->flush();

        return $Hotel;
    }    

private function reqSelectAllHotel(){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $Hotels = $em->getRepository('EcommerceHotelBundle:Hotel')->findAll();

        //flush
        $em->flush();

        return $Hotels;

    }  

    private function reqUpdateHotel(Hotel $Hotel){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $em->persist($Hotel);

        //flush
        $em->flush();

    }  

private function reqUpdateHotelById($id_Hotel){

        //recupere le Restaurant
        $Hotel = $this->reqSelectHotel($id_Hotel);

        //mise a jour
        $this->reqUpdateHotel($Hotel);

        return $Hotel;

    }

     private function reqRemoveHotel($Hotel){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $em->remove($Hotel);

        //flush
        $em->flush();

    }

    private function reqRemoveHotelById($id_Hotel){

        //recupere le Restaurant
        $Hotel = $this->reqSelectHotel($id_Hotel);

        //suppression
        $this->reqRemoveHotel($Hotel);

    }
}