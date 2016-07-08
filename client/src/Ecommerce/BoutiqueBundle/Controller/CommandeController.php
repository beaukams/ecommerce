<?php

namespace Ecommerce\BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
use ymfony\Component\HttpFoundation\Session;

class CommandeController extends Controller
{
	/* ajout d'un Commande */
    public function ajouteCommandeAction(){

    	//on crée un objet Commande
    	$Commande = new Commande();
        
    		
        $form = $this->createForm(new CommandeType, $Commande);

        if($this->get('request')->getMethod() == "POST"){
            
                $request = $this->get('request');

                //lier le formulaire à la requete
                $form->bind($request);

                if($form->isValid()){
                    
                    $this->reqAddCommande($Commande);

                    //visulaiser le resultat
                    return $this->redirect($this->generateUrl('voirCommande', array('id' => $Commande->getIdCommande())));
                }else{
                    $this->render("EcommerceBoutiqueBundle:Commande:ajoutCommande.html.twig", array('form' => $form->createView(), ));
                }

        }else{

    	   return $this->render("EcommerceBoutiqueBundle:Commande:ajoutCommande.html.twig", array('form' => $form->createView(), ));
        }
    }

    public function voirCommandeAction($id){
    	
        if($id >= 0){
            //on recupere le Commande
            $Commande = $this->reqSelectCommande($id);
            if($Commande === null){
                return $this->render("EcommerceBoutiqueBundle:Commande:errorCommandeInexistant.html.twig");
            }else{

                //on affiche
                return $this->render("EcommerceBoutiqueBundle:Commande:voirCommande.html.twig", array('Commande' => $Commande->getContenu()));
            }
        }
        else{
            return $this->render("EcommerceBoutiqueBundle:Commande:listeCommande.html.twig");
        }
    }

    public function listeCommandeAction(){

            //on recupere le Commande
            $Commandes = $this->reqSelectAllCommande();

            if($Commandes === null){
                return $this->render("EcommerceBoutiqueBundle:Commande:errorCommandeInexistant.html.twig");
            }else{

                //on affiche
                $res = array();
                foreach ($Commandes as $key => $Commande) {
                    $res[$key] = $Commande->getContenu();
                }

                return $this->render("EcommerceBoutiqueBundle:Commande:listeCommande.html.twig", array('Commandes' => $res ));
            }
    }


    public function modifieCommandeAction($id){

        //on crée un objet Commande
        $Commande = $this->reqSelectCommande($id);

        
        $form = $this->createForm(new CommandeType, $Commande);

        if($this->get('request')->getMethod() == "POST"){
                

                $request = $this->get('request');

                //lier le formulaire à la requete
                $form->bind($request);

                if($form->isValid()){
                    
                    //$Commande->setIdCommande($id);
                    $this->reqUpdateCommande($Commande);

                    //visulaiser le resultat
                    return $this->redirect($this->generateUrl('voirCommande', array('id' => $Commande->getIdCommande())));
                }else{

                    //ajouter le Commande
                    return $this->redirect($this->generateUrl('ajouteCommande'));
                }

        }elseif($Commande != null){

           return $this->render("EcommerceBoutiqueBundle:Commande:modifieCommande.html.twig", array('form' => $form->createView(), 'id' => $id ));

        }else{
            return $this->redirect($this->generateUrl('listeCommande'));
        }
    }


    public function supprimeCommandeAction($id){

        if(intval($id) >= 0){
            //on supprime le Commande
            $this->reqRemoveCommandeById($id);
           
            return $this->redirect($this->generateUrl('listeCommande'));
        }
        else{
            return $this->redirect($this->generateUrl('listeCommande'));
        }
    }

    private function reqAddCommandeParam($nom, $prix, $details, $photo, $id_departement, $id_typeCommande){
        
        //on cree un objet Commande
        $Commande = new Commande();
        $Commande->setNomCommande($nom);
        $Commande->setPrixUnitaire($prix);
        $Commande->setDetailsCommande($details);
        $Commande->setIdDepartement($id_departement);
        $Commande->setIdTypeCommande($id_typeCommande);
        $Commande->setPhotoCommande($photo);

        $this->reqAddCommande();
    }

    private function reqAddCommande($Commande){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        //on persiste l'élèment
        $em->persist($Commande);

        //flush
        $em->flush();

    }

    private function reqSelectCommande($id_Commande){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $Commande = $em->getRepository('EcommerceBoutiqueBundle:Commande')->find($id_Commande);

        //flush
        $em->flush();

        return $Commande;

    }

    private function reqSelectAllCommande(){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $Commandes = $em->getRepository('EcommerceBoutiqueBundle:Commande')->findAll();

        //flush
        $em->flush();

        return $Commandes;

    }

    private function reqUpdateCommande(Commande $Commande){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $em->persist($Commande);

        //flush
        $em->flush();

    }

    private function reqUpdateCommandeById($id_Commande){

        //recupere le Commande
        $Commande = $this->reqSelectCommande($id_Commande);

        //mise a jour
        $this->reqUpdateCommande($Commande);

        return $Commande;

    }


    private function reqRemoveCommande($Commande){

        //on recupere le manager
        $em = $this->getDoctrine()->getEntityManager();

        $em->remove($Commande);

        //flush
        $em->flush();

    }

    private function reqRemoveCommandeById($id_Commande){

        //recupere le Commande
        $Commande = $this->reqSelectCommande($id_Commande);

        //suppression
        $this->reqRemoveCommande($Commande);

    }
}
