<?php
class assure{ 
public  $cin;
public $code;

function __construct(){}

function rechercheAssure($mat){
    require_once ('connexion.php');
    $cnx= new connexion();
    $pdo=$cnx->cnxbase();
    $req="SELECT * from assure WHERE matA='$mat' ";
    $res=$pdo->query($req);
    $row_count = $res->rowCount();  
    return $row_count;
}

function rechercheEmployeur($id,$psw){
    require_once ('connexion.php');
    $cnx= new connexion();
    $pdo=$cnx->cnxbase();
    $req="SELECT * from login WHERE login='$id' and psw='$psw' ";
    $res=$pdo->query($req);
    if($res->rowCount()>0){
    foreach($res as $row){
       $r=$row['matE'];
    return $r;
    }
}
    else{
       return "";
    }
}

function ajouteAssure($mat,$nom,$pren,$date,$sexe,$ddc,$periode,$montant)
{
    require_once ('connexion.php');
    $cnx= new connexion();
    $pdo=$cnx->cnxbase();
    $req="INSERT INTO assure VALUES (null,'$mat','$nom','$pren','$date','$sexe','$ddc',$periode,$montant)";
    $pdo->exec($req);
}

function ajoutedeclaration($matA,$matE,$d)
{
    require_once ('connexion.php');
    $cnx= new connexion();
    $pdo=$cnx->cnxbase();
    $req="INSERT INTO declaration VALUES (null,'$matA','$matE','$d')";
    $pdo->exec($req);
}
}