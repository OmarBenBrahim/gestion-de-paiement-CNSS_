<?php
class login{ 


function __construct(){}

function rechercheAssure($login,$psw){
    require_once ('connexion.php');
    $cnx= new connexion();
    $pdo=$cnx->cnxbase();
    $req="SELECT * from login WHERE login='$login' and psw='$psw' ";
    $res=$pdo->query($req);
    $row_count = $res->rowCount();  
    return $row_count;
}

}
?>