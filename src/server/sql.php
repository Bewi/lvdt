<?php

	class dumb {};

	function sql_connect()
	{
		try
		{
			$bdd = new PDO('mysql:host=5.135.191.223;port=59340;dbname=webtest;charset=utf8','webtest','web@test!1704');
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}	
		return $bdd;
	}
 
	function sql_Product($base,$Id)
	{
    	$result = new class extends dumb {};
		
		$req=$base->query('CALL WebProduct('.$Id.');');
		$data=$req->fetch();
		$result->id = $Id;
		$result->nom=$data['Nom'];
		$result->description=$data['Description'];
		$result->image=$data['WebImage'];
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
?>