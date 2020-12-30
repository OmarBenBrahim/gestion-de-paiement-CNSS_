<?php 
require_once ('gestion.php');
$et = new assure();
$matA=$_POST['matA'];
$date=$_POST['ddc']; 
$p=$_POST['p']; 
$id=$_POST['id'];
$psw=$_POST['psw'];
//update date 
echo 'first date', $date;
   
   $date = strtotime(date("Y-m-d", strtotime($date)) . " +$p month");
   $date = date("Y-m-d",$date);
    echo 'laste date', $date;
$matE=$et->rechercheEmployeur($id,$psw);

$numA=$et->rechercheAssure($matA);

if($numA==0 or $matE==""){
    echo "<SCRIPT type='text/javascript'> //not showing me this
    alert('problem insertion');
    window.location.replace(\"http://localhost/cnss/Joli/\");
    </SCRIPT>";
    mysql_close();
}
else{
$et->ajoutedeclaration($matA,$matE,$date);
echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('Paiement Enregestrer ');
        window.location.replace(\"http://localhost/cnss/Joli/\");
    </SCRIPT>";
    mysql_close();
}
