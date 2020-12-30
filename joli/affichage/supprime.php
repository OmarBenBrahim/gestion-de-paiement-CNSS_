<?php

require_once ('gestion.php');
$et = new affiche();
$id=$_POST['id'];
$psw=$_POST['psw'];
$num=$et->rechercheEmployeur($psw,$id);
if($num==0 or $_POST['r']==""){
    echo "<SCRIPT type='text/javascript'>
    alert('login incorecte');
    window.location.replace(\"http://localhost/cnss/Joli/supprimer.php\");
    </SCRIPT>";
    mysql_close();
}
else{
    echo 
    $et->supprimdeclaration($_POST['r']) ;

    echo "<SCRIPT type='text/javascript'> //not showing me this
    alert('la declartion supprimer');
    window.location.replace(\"http://localhost/cnss/Joli/\");
    </SCRIPT>";
    mysql_close();

}


?>
