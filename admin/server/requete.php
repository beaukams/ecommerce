<?php


	Class BaseDD{
		private $base;

		public function __construct(){
			$this->connect();
		}

		/*
			connexion à la base 
		*/
		private function connect(){

			$req1 = "mysql:host=" . HOSTNAME . ";dbname=" . BASENAME . "";
			$req2 = "SET NAMES UTF8";

			try{
				$this->base = new PDO($req1, USERNAME, PASSWORD);
				$req = $this->base->prepare($req2);
				$req->execute();

			}catch(Exception $e){
				
			} 
		}

		function deconnect(){

		}

		private function select($req, $array_params, $methode=PDO::FETCH_NUM){
			$req = $this->base->prepare($req);
			$req->execute($array_params);
			return $req->fetchall($methode);
		}

		private function insert($req, $array_params){
			$req = $this->base->prepare($req);
			$req->execute($array_params);
			return $this->base->lastInsertId();
		}

		private function update($req, $array_params){
			$req = $this->base->prepare($req);
			$req->execute($array_params);
		}

		private function delete($req, $array_params){
			$req = $this->base->prepare($req);
			$req->execute($array_params);
		}

		/*
			fonctions associées à la base de données
		*/
		public function selectProduit($id_produit, $methode=PDO::FETCH_NUM){
			$req = "SELECT * FROM produit WHERE id_produit=:id_produit";
			$array_params = array(
				"id_produit" => $id_produit
			);
			return $this->select($req, $array_params, $methode);
		}

		/* sellectionner tous produits */
		public function selectAllProduit($methode=PDO::FETCH_NUM){
			$req = "SELECT * FROM produit";
			$array_params = array(
			);
			return $this->select($req, $array_params, $methode);
		}

		/* sellectionner tous users */
		public function selectAllUsers($methode=PDO::FETCH_NUM){
			$req = "SELECT * FROM utilisateur";
			$array_params = array(
			);
			return $this->select($req, $array_params, $methode);
		}

		/* sellectionner toutes les categories de porduit */
		public function selectAllTypeProduit(){
			$req = "SELECT * FROM type_produit";
			$array_params = array(
			);
			return $this->select($req, $array_params);
		}

		/* sellectionner tous produits */
		public function selectAllCommande($methode=PDO::FETCH_NUM){
			$req = "SELECT commande.id_commande,commande.id_client,commande.date_commande,commande.heure_commande,commande.etat_commande,commande.montant_commande,client.nom,client.prenom,client.num_tel FROM commande, client WHERE client.id_client=commande.id_client";
			$array_params = array(
			);
			return $this->select($req, $array_params, $methode);
		}

		public function selectAllCommandeEtat($etat, $methode=PDO::FETCH_NUM){
			$req = "SELECT commande.id_commande,commande.id_client,commande.date_commande,commande.heure_commande,commande.etat_commande,commande.montant_commande,client.nom,client.prenom,client.num_tel FROM commande, client WHERE client.id_client=commande.id_client AND commande.etat_commande=:etat";
			$array_params = array(
				":etat" => $etat
			);
			return $this->select($req, $array_params, $methode);
		}

		/* selectionner un utilisateur */
		public function selectUser($login, $password){
			$req = "SELECT * FROM utilisateur WHERE login=:login AND password=:password";
			$array_params = array(
				":login" => $login,
				":password" => $password
			);
			return $this->select($req, $array_params);
		}

		/* selectionner un client */
		public function selectClient($nom, $prenom, $num_tel){
			$req = "SELECT * FROM client WHERE nom=:nom AND prenom=:prenom AND num_tel=:num_tel";
			$array_params = array(
				":nom" => $nom,
				":prenom" => $prenom,
				":num_tel" => $num_tel
			);
			return $this->select($req, $array_params);
		}

		/* selectionner un client */
		public function selectClientById($id_client, $methode=PDO::FETCH_NUM){
			$req = "SELECT * FROM client WHERE id_client=:id_client";
			$array_params = array(
				":id_client" => $id_client
			);
			return $this->select($req, $array_params, $methode);
		}

		public function selectCommande($id_commande, $methode=PDO::FETCH_NUM){
			$req = "SELECT * FROM commande WHERE id_commande=:id_commande";
			$array_params = array(
				":id_commande" => $id_commande
			);
			return $this->select($req, $array_params, $methode);
		}

		public function selectLivraison($id_livraison, $methode=PDO::FETCH_NUM){
			$req = "SELECT * FROM livraison WHERE id_livraison=:id_livraison";
			$array_params = array(
				":id_livraison" => $id_livraison
			);
			return $this->select($req, $array_params, $methode);
		}

		public function selectProduitCommande($id_commande, $methode=PDO::FETCH_NUM){
			$req = "SELECT nom_produit,prix_unitaire,quantite,prix FROM produit, produit_commande WHERE produit_commande.id_commande=:id_commande AND produit_commande.id_produit=produit.id_produit";
			$array_params = array(
				":id_commande" => $id_commande
			);
			return $this->select($req, $array_params, $methode);
		}

		/* supprimer un produit */
		function deleteProduit($id_produit){
			$req = "DELETE FROM produit WHERE id_produit=:id_produit";
			$array_params = array(
				"id_produit" => $id_produit
			);
			$this->delete($req, $array_params);
		}

		/* ajouter une nouvelle catégorie de produit */
		function addCategorieProduit($nom_type){
			$req = "INSERT INTO type_produit VALUES(:nom);";
			$array_params = array(
				":nom" => $nom_type
			);
			return $this->insert($req, $array_params);
		}

		/*
			ajouter un produit
		*/
		function addProduit($nom, $prix_unitaire, $type_produit, $photo){
			$req = "INSERT INTO produit(nom_produit,prix_unitaire,type_produit,photo) VALUES(:nom,:prix_unitaire,:type_produit,:photo);";
			$array_params = array(
				":nom" => $nom,
				":prix_unitaire" => $prix_unitaire,
				":type_produit" => $type_produit,
				":photo" => $photo
			);
			return $this->insert($req, $array_params);
		}

		/* ajouter une commande */
		function addCommande($id_client, $date_commande, $heure_commande){
			$req = "INSERT INTO commande(id_client, date_commande, heure_commande) VALUES(:id_client, :date_commande, :heure_commande);";
			$array_params = array(
				":id_client" => $id_client,
				":date_commande" => $date_commande,
				":heure_commande" => $heure_commande
			);
			return $this->insert($req, $array_params);
		}

		/*
			ajouter une livraison
		*/
		function addLivraison($id_commande, $date_livraison, $adresse_livraison, $cout_livraison){
			$req = "INSERT INTO livraison(id_commande,date_livraison,adresse_livraison,cout_livraison) VALUES(:id_commande,:date_livraison,:adresse_livraison,:cout_livraison);";
			$array_params = array(
				":id_commande" => $id_commande,
				":date_livraison" => $date_livraison,
				":adresse_livraison" => $adresse_livraison,
				":cout_livraison" => $cout_livraison
			);
			return $this->insert($req, $array_params);
		}

		/* ajouter un client */
		function addClient($nom, $prenom, $tel, $adresse="", $mail=""){
			$req = "INSERT INTO client(nom,prenom,num_tel,adresse,mail) VALUES(:nom,:prenom,:tel,:adresse,:mail);";
			$array_params = array(
				":nom" => $nom,
				":prenom" => $prenom,
				":tel" => $tel,
				":adresse" => $adresse,
				":mail" => $mail
			);
			return $this->insert($req, $array_params);
		}

		/* ajouter un utilisateur */
		function addUser($nom, $prenom, $login, $pwd, $mail, $photo="images/users/admin.jpg"){
			$req = "INSERT INTO utilisateur(nom,prenom,login,password,email,photo) VALUES(:nom,:prenom,:login,:password,:mail,:photo);";
			$array_params = array(
				":nom" => $nom,
				":prenom" => $prenom,
				":login" => $login,
				":password" => $pwd,
				":mail" => $mail,
				":photo" => $photo
			);
			return $this->insert($req, $array_params);
		}

		/* ajouter un produit à une commande */
		function addProduitCommande($id_commande, $id_produit, $quantite, $prix){
			$req = "INSERT INTO produit_commande(id_commande, id_produit, quantite, prix) VALUES(:id_commande,:id_produit,:quantite,:prix);";
			$array_params = array(
				":id_commande" => $id_commande, 
				":id_produit" => $id_produit, 
				":quantite" => $quantite, 
				":prix" => $prix
			);
			return $this->insert($req, $array_params);
		}

		/* modifier un produit */
		function modifyProduit($id_produit, $nom, $prix_unitaire="", $type_produit="", $photo=""){
			if($prix_unitaire != ""){
				if($type_produit != ""){
					if($photo != ""){
						$req = "UPDATE produit SET prix_unitaire=:prix_unitaire,type_produit=:type_produit,photo=:photo  WHERE id_produit=:id_produit";
						$array_params = array(
							":id_produit" => $id_produit,
							":prix_unitaire" => $prix_unitaire,
							":type_produit" => $type_produit,
							":photo" => $photo
						);
						$this->update($req, $array_params);
					}else{
						$req = "UPDATE produit SET prix_unitaire=:prix_unitaire,type_produit=:type_produit WHERE id_produit=:id_produit";
						$array_params = array(
							":id_produit" => $id_produit,
							":prix_unitaire" => $prix_unitaire,
							":type_produit" => $type_produit
						);
						$this->update($req, $array_params);
					}
				}else{
					if($photo != ""){
						$req = "UPDATE produit SET prix_unitaire=:prix_unitaire,photo=:photo  WHERE id_produit=:id_produit";
						$array_params = array(
							":id_produit" => $id_produit,
							":prix_unitaire" => $prix_unitaire,
							":photo" => $photo
						);
						$this->update($req, $array_params);
					}else{
						$req = "UPDATE produit SET prix_unitaire=:prix_unitaire WHERE id_produit=:id_produit";
						$array_params = array(
							":id_produit" => $id_produit,
							":prix_unitaire" => $prix_unitaire
						);
						$this->update($req, $array_params);
					}
				}
			}else{
				if($type_produit != ""){
					if($photo != ""){
						$req = "UPDATE produit SET type_produit=:type_produit,photo=:photo  WHERE id_produit=:id_produit";
						$array_params = array(
							":id_produit" => $id_produit,
							":type_produit" => $type_produit,
							":photo" => $photo
						);
						$this->update($req, $array_params);
					}else{
						$req = "UPDATE produit SET type_produit=:type_produit WHERE id_produit=:id_produit";
						$array_params = array(
							":id_produit" => $id_produit,
							":type_produit" => $type_produit
						);
						$this->update($req, $array_params);
					}
				}else{
					if($photo != ""){
						$req = "UPDATE produit SET photo=:photo  WHERE id_produit=:id_produit";
						$array_params = array(
							":id_produit" => $id_produit,
							":photo" => $photo
						);
						$this->update($req, $array_params);
					}
				}
			}
			
			
		}

		/* modifier une catégorie de produit */
		function modifyCategorieProduit($id_type, $nom_type){
			$req = "UPDATE type_produit SET nom_typeproduit=:nom WHERE id_produit=:id_produit";
			$array_params = array(
				":nom" => $nom_type,
				":id_produit" => $id_type
			);
			$this->insert($req, $array_params);
		}

		function modifyCommandePT($id_commande, $prix_total, $a_livree=-1){
			if($a_livree==-1){
				$req = "UPDATE commande SET montant_commande=:prix_total WHERE id_commande=:id_commande";
				$array_params = array(
					":prix_total" => $prix_total,
					":id_commande" => $id_commande
				);
			}else{
				$req = "UPDATE commande SET a_livree=:a_livree, montant_commande=:prix_total WHERE id_commande=:id_commande";
				$array_params = array(
					":a_livree" => $a_livree,
					":prix_total" => $prix_total,
					":id_commande" => $id_commande
				);
			
			}
			
			$this->insert($req, $array_params);
		}

		function modifyCommandeLivr($id_commande, $a_livree){
			$req = "UPDATE commande SET a_livree=:a_livree WHERE id_commande=:id_commande";
			$array_params = array(
				":a_livree" => $a_livree,
				":id_commande" => $id_commande
			);
			$this->insert($req, $array_params);
		}

		function modifyCommandeEtat($id_commande, $etat){
			$req = "UPDATE commande SET etat=:etat WHERE id_commande=:id_commande";
			$array_params = array(
				":etat" => $etat,
				":id_commande" => $id_commande
			);
			$this->insert($req, $array_params);
		}
		
		/*
			getters et setters
		*/
		function getX(){

		}

		function setX(){

		}

		/*
			fonction magiques
		*/

		/*function __get(){

		}

		function __set(){

		}*/



	}

	/* testes */
	/*if(file_exists("../server/requete.php") && file_exists("../config/base_config.php")){
                                                                 // include_once("../server/requete.php");
                                                                  include_once("../config/base_config.php");

                                                                  $base = new BaseDD();
                                                                  //$res = $base->selectAllProduit(PDO::FETCH_ASSOC);

                                                                 print_r($base->selectLivraison(1, PDO::FETCH_ASSOC));
                                                                 $a= $base->selectLivraison(1, PDO::FETCH_ASSOC)[0];
                                                                 echo $a['cout_livraison'];
                                                              }*/

?>
