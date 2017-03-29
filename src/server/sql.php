<?
function sql_connect()
{
	try
	{
		$bdd = new PDO('mysql:host=localhost;port=3306;dbname=ventdesthes;charset=utf8','login','password');
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}	
	return $bdd;
}
 

function sql_TheDuMois($base,&$Id, &$Nom,&$Description,&$PVente,&$Image)
{
	$req=$base->query('CALL WebTheDuMois();');
	$data=$req->fetch();
	$Id=$data['NumArticle'];
	$Nom=$data['Nom'];
	$Description=$data['Description'];
	$Image=$data['WebImage'];
	$req->closeCursor();
}

function sql_AccessoireDuMois($base,&$Id, &$Nom,&$Description,&$PVente,&$Image)
{
	$req=$base->query('CALL WebAccessoireDuMois();');
	$data=$req->fetch();
	$Id=$data['NumArticle'];
	$Nom=$data['Nom'];
	$Description=$data['Description'];
	$Image=$data['WebImage'];
	$req->closeCursor();
}

function sql_Product($base,$Id,&$Nom,&$Description,&$PVente,&$Image,&$DureeInfusion,&$TemperatureInfusion,&$GradeThe,&$TypeConso,&$Famille,&$TypeDominant,&$PaysOrigine, &$RegionOrigine)
{
	$req=$base->query('CALL WebProduct('.$Id.');');
	$data=$req->fetch();
	$Nom=$data['Nom'];
	$Description=$data['Description'];
	$Image=$data['WebImage'];
	$DureeInfusion=$data['DureeInfusion'];
	$TemperatureInfusion=$data['TemperatureInfusion'];
	$GradeThe=$data['GradeThe'];
	$TypeConso=$data['TypeConso'];
	$Famille=$data['Famille'];
	$TypeDominant=$data['TypeDominant'];
	$PaysOrigine=$data['PaysOrigine'];
	$RegionOrigine=$data['RegionOrigine'];
	$req->closeCursor();
}

function sql_AssociatedProduts($base,$Id,&$data)
{
	$req=$base->query('CALL WebAssociatedProducts('.$Id.');');
	$data=$req->fetchAll();
	$req->closeCursor();
}
?>