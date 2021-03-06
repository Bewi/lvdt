<?php
	class dumb {};

	function sql_connect()
	{
		try
		{
			$configs = include('config.php');

			$bdd = new PDO('mysql:host=' . $configs['host'] . ';port=' . $configs['port'] . ';dbname=' . $configs['dbname'] . ';charset=utf8',$configs['username'], $configs['password']);
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}	
		return $bdd;
	}
 
	function sql_Product($base,$Id)
	{
    	$result = new dumb;
		
		$req=$base->query('CALL WebProduct('.$Id.');');
		$data=$req->fetch();

		if (empty($data)) {
			return NULL;
		}

		$result->id = $Id;
		$result->nom=$data['Nom'];
		$result->description=$data['Description'];
		$result->image=$data['WebImage'];
		$result->tarpce=$data['tarpce'];
		$result->tar50=$data['tar50'];
		$result->tar100=$data['tar100'];
		$result->dureeInfusion=$data['DureeInfusion'];
		$result->temperatureInfusion=$data['TemperatureInfusion'];
		$result->gradeThe=$data['GradeThe'];
		$result->typeConso=$data['TypeConso'];
		$result->famille=$data['Famille'];
		$result->typeDominant=$data['TypeDominant'];
		$result->paysOrigine=$data['PaysOrigine'];
		$result->regionOrigine=$data['RegionOrigine'];
		$req->closeCursor();

		return $result;
	}

	function sql_AssociatedProduts($base,$Id)
	{
		$req=$base->query('CALL WebAssociatedProducts('.$Id.');');
		$data=$req->fetchAll();
		
		$result = array();
		foreach ($data as $product) {
			$result[] = array(
				"id" => intval($product['NumArticle']),
				"nom" => $product['Nom'],
				"image" => $product['WebImage']
			);
		}

		$req->closeCursor();

		return $result;
	}

	function sql_Products($base, $search, $offset, $size) {
		$req=$base->query('Call WebRechercheArticle("'.$search.'",'.$size.','.$offset.');');

		$data=$req->fetchAll();

	
		$result = array();

		foreach ($data as $product) {
			$result[] = array(
				"total" => intVal($product['NbItemTotal']),
				"id" => intval($product['NumArticle']),
				"nom" => $product['Nom'],
				"description" => $product['Description'],
				"image" => $product['WebImage'],
				"tarpce" => $product["tarpce"],
				"tar50" => $product["tar50"],
				"tar100" => $product["tar100"]
			);
		}
		
		$req->closeCursor();

		return $result;
	}

	function sql_Account($base, $login, $passwordHash, $guid) {
		$req=$base->query('Call webnewconnexion("'.$login.'","'.$passwordHash.'", "'.$guid.'");');

		$data=$req->fetch();

    	$result = new dumb;
		
		$result->numClient = $data['NumClient'];
		$result->numErreur = $data['NumErreur'];
		$result->civilite = $data['Civilite'];
		$result->nom = $data['Nom'];
		$result->prenom = $data['Prenom'];
		$result->niveauDeFidelite = $data['NiveauFidelite'];
		$result->pourcentageDeReduction = $data['PourcReduction'];
		$result->dateDeDerniereConnexion = $data['DateHeureLastConnexion'];

		$req->closeCursor();

		return $result;
	}

	function sql_History($base, $customerNumber, $guid, $take, $page) {

		$req = $base->query('Call WebEnteteHistoAchat('.$customerNumber.',"'.$guid.'",'.$take.','.$page.');');

		$data=$req->fetchAll();

		$result = array();

		foreach ($data as $sale) {
			$result[] = array(
				"error" => intVal($sale['NumErreur']),
				"totalItems" => intval($sale['NbItemTotal']),
				"saleId" => intval($sale['IdVente']),
				"saleDate" => $sale['DateHeureVente'],
				"total" => $sale['TotalTtc'],
			);
		}

		$req->closeCursor();

		return $result;
	}

	function sql_SaleDetail($base, $customerNumber, $guid, $saleId, $take, $page) {
		$req = $base->query('Call WebDetailHistoAchat('.$customerNumber.',"'.$guid.'",'.$saleId.','.$take.','.$page.');');

		$data = $req->fetchAll();

		$result = array();

		foreach ($data as $saleDetail) {
			$result[] = array(
				"error" => $saleDetail['NumErreur'],
				"totalItems" => $saleDetail['NbItemTotal'],
				"saleId" => $saleDetail['IdVente'],
				"detailId" => $saleDetail['IdDetail'],
				"position" => $saleDetail['NumLigne'],
				"amount" => $saleDetail['Qte'],
				"packing" => $saleDetail['Colisage'],
				"label" => $saleDetail['Article'],
				"total" => $saleDetail['TotalTtc']
			);
		}

		$req->closeCursor();

		return $result;
	}

	function sql_RequestPasswordChange($base, $requestId, $email) {
		$req = $base->query('Call WebLostPasswordRequest("'.$requestId.'","'.$email.'");');
		
		$data = $req->fetch();

		$result = new dumb;

		$result->success = $data['NumErreur'] == 1 ? false : true;

		return $result;
	}

	function sql_changePassword($base, $requestId, $email, $newPassword) {
		$passwordHash = sha1($newPassword);
		$req = $base->query('Call WebLostPasswordChange("'.$requestId.'","'.$email.'","'.$passwordHash.'");');

		$result = new dumb;

		if ($req === FALSE) {
			$result-> success = false;
		} else {
			$data = $req->fetch();
			$result-> success = $data['NumErreur'] == 1 ? false : true;
		}

		return $result;
	}
?>