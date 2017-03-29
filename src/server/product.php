<?
    function product($base,$Id,&$Nom,&$Description,&$PVente,&$Image,&$DureeInfusion,&$TemperatureInfusion,&$GradeThe,&$TypeConso,&$Famille,&$TypeDominant,&$PaysOrigine, &$RegionOrigine)
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

    
    function associatedProduts($base,$Id,&$data)
    {
        $req=$base->query('CALL WebAssociatedProducts('.$Id.');');
        $data=$req->fetchAll();
        $req->closeCursor();
    }

    // TODO : Concatenate and return as JSON

?>