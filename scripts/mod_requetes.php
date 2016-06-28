<?php

	Class BaseDD{
		private $base;
		public $running = False;
		private $baseName;
		private $userName;
		private $password;
		private $hostName;

		public function __construct($hostName, $baseName, $userName, $password){
			$this->baseName = $baseName;
			$this->userName = $userName;
			$this->hostName = $hostName;
			$this->password = $password;
			$this->connect();
		}

		/*
			connexion à la base 
		*/
		private function connect(){

				$req1 = "mysql:host=" . $this->hostName . ";dbname=" . $this->baseName . "";
				$req2 = "SET NAMES UTF8";

				try{
					$this->base = new PDO($req1, $this->userName, $this->password);
					$req = $this->base->prepare($req2);
					$req->execute();
					$this->running = True;

				}catch(Exception $e){
					$this->running = False;
				}
			}
			 
		}

		function deconnect(){
			try{
				$this->close();
				$this->running = False;
			}catch(Exception $e){

			}
			
		}

		private function select($req, $array_params){
			$req = $this->base->prepare($req);
			$req->execute($array_params);
			return $req->fetchall();
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

		/* selectionner un bus */
		public function selectBus($id_bus){
			$req = "SELECT * FROM bus WHERE id_bus=:id_bus";
			$array_params = array(
				"id_bus" => $id_bus
			);
			return $this->select($req, $array_params);
		}

		/* selectionner une ligne */
		public function selectLigne($id_ligne){
			$req = "SELECT * FROM ligne WHERE id_ligne=:id_ligne";
			$array_params = array(
				"id_ligne" => $id_ligne
			);
			return $this->select($req, $array_params);
		}

		function selectArretsLigne($nom_ligne, $sens = "-1"){
			if($sens == "-1" or $sens == ""){
				$req = "SELECT * FROM ligne WHERE id_ligne=:id_ligne";
				$array_params = array(
					"id_ligne" => $id_ligne
				);
			}else{
				$req = "SELECT * FROM ligne WHERE id_ligne=:id_ligne AND sens=:sens";
				$array_params = array(
					":id_ligne" => $id_ligne,
					":sens" => $sens
				);
			}
			
			return $this->select($req, $array_params);
		}

		/* supprimer un bus */
		function deleteBus($id_bus){
			$req = "DELETE FROM bus WHERE id_bus=:id_bus";
			$array_params = array(
				"id_bus" => $id_bus
			);
			$this->delete($req, $array_params);
		}

		/* supprimer une ligne */
		public function deleteLigne($id_ligne){
			$req = "DELETE FROM ligne WHERE id_ligne=:id_ligne";
			$array_params = array(
				"id_ligne" => $id_ligne
			);
			return $this->delete($req, $array_params);
		}

		/*
			jouter un produit
		*/
		function addBus($nom, $prix_unitaire, $type_produit, $photo){
			$req = "INSERT INTO produit VALUES(:nom,:prix_unitaire,:type_produit,:photo);";
			$array_params = array(
				":nom" => $nom,
				":prix_unitaire" => $prix_unitaire,
				":type_produit" => $type_produit,
				":photo" => $photo
			);
			$this->insert($req, $array_params);
		}

		/*
			ajouter une position de bus
		*/
		function addPositionBus($id_bus, $latitude, $longitude, $altitude, $vitesse, $lheure, $ladate){
			$req = "INSERT INTO positionBus VALUES(:id_bus, :latitude, :longitude, :altitude, :vitesse, :lheure, :ladate);";
			$array_params = array(
				":latitude" => $latitude,
				":longitude" => $longitude,
				":altitude" => $altitude,
				":vitesse" => $vitesse,
				":lheure" => $lheure,
				":ladate" => $ladate,
				":id_bus" => $id_bus
			);
			return $this->insert($req, $array_params);
		}


		function addLigne($nom, $prix_unitaire, $type_produit, $photo){
			$req = "INSERT INTO produit VALUES(:nom,:prix_unitaire,:type_produit,:photo);";
			$array_params = array(
				":nom" => $nom,
				":prix_unitaire" => $prix_unitaire,
				":type_produit" => $type_produit,
				":photo" => $photo
			);
			$this->insert($req, $array_params);
		}

		/* modifier le us */
		function modifyBus($matricule, $position="-1", $sens="-1"){

			if($position != -1){
				if($sens != -1){
					$req = "UPDATE FROM bus SET sens=:sens, position_courante=:position WHERE matricule=:matricule";
					$array_params = array(
						":sens" => $sens,
						":position" => $position,
						":matricule" => $matricule
					);
				}else{
					$req = "UPDATE FROM bus SET position_courante=:position WHERE matricule=:matricule";
					$array_params = array(
						":position" => $position,
						":matricule" => $matricule
					)
				}
			}else{
				if($sens != -1){
					$req = "UPDATE FROM bus SET sens=:sens WHERE matricule=:matricule";
					$array_params = array(
						":sens" => $sens,
						":matricule" => $matricule
					);
				}else{

				}
			}
			
			$this->update($req, $array_params);
		}

		function getIdArret($nom_arret){

		}
		
		function getIdLigne($nom_ligne){

		}

		function getIdBus($matricule){

		}
		function getArretParameters($nom_arret, $id_arret){

		}


		function getSMSRecu(){

		}

		function delSMSRecu($id_sms){

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

	/*if(file_exists("base_conf.php")){
		include_once("base_conf.php");
		$base = new BaseDD($hostName=HOSTNAME, $baseName=BASENAME, $userName=USERNAME, $password=PASSWORD);
	}
	*/

?>

