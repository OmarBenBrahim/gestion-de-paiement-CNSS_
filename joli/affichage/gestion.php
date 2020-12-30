<?php
class Affiche{ 

function __construct(){}
/*test Assure existe ou nom*/ 
function afficheAssure(){
    require_once ('connexion.php');
    $cnx= new connexion();
    $pdo=$cnx->cnxbase();
    $req="SELECT assure.matA,nomA,prenA,montant,date_final,ddc
    from assure ,declaration  where assure.matA=declaration.matA ORDER by 5 ";
    $res=$pdo->query($req);
    return $res;
}

function supprimdeclaration($matA)
    { require_once ('connexion.php');
        $cnx= new connexion();
        $pdo=$cnx->cnxbase();
        $req="delete from assure where matA='$matA' ";
        $pdo->exec($req);
    }
function rechercheEmployeur($psw,$id){
        require_once ('connexion.php');
        $cnx= new connexion();
        $pdo=$cnx->cnxbase();
        $req="SELECT * from login WHERE psw='$psw' and login='$id'  ";
        $res=$pdo->query($req);
        $row_count = $res->rowCount();  
        return $row_count;
    }


}