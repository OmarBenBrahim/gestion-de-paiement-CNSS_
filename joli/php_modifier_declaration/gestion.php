<?php
class declaration{ 


function __construct(){}
/*test Assure existe ou nom*/ 
function rechercheAssure($matA){
    require_once ('connexion.php');
    $cnx= new connexion();
    $pdo=$cnx->cnxbase();
    $req="SELECT * FROM assure , declaration WHERE assure.matA = declaration.matA and assure.matA='$matA' ";
    $res=$pdo->query($req);
    //$row_count = $res->rowCount();
    //echo    $row_count;
    return $res;
}
/*test Employeur existe ou nom*/ 
function rechercheEmployeur($matE,$psw,$id){
    require_once ('connexion.php');
    $cnx= new connexion();
    $pdo=$cnx->cnxbase();
    $req="SELECT * from login WHERE matE='$matE' and psw='$psw' and login='$id'  ";
    $res=$pdo->query($req);
    return $res;
   $row_count = $res->rowCount();  
    return $row_count;
}
/*insertion declaration*/ 
function ajoutedeclaration($montant,$matA,$matE,$dd,$df)
{
    require_once ('connexion.php');
    $cnx= new connexion();
    $pdo=$cnx->cnxbase();
    $req="INSERT INTO declaration VALUES (null,$montant,'$matA','$matE','$dd','$df')";
    $pdo->exec($req);
}

function modifier($matA,$nom,$pren,$dn,$ddc,$p,$montant){
    require_once ('connexion.php');
    $cnx= new connexion();
    $pdo=$cnx->cnxbase();
    $req="UPDATE assure SET 
    nomA='$nom',prenA='$pren',`date-nais`='$dn',periode=$p,montant=$montant
    where matA='$matA' ;";
    $pdo->exec($req);
}

}