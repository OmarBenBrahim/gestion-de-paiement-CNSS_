<?php 
require_once ('gestion.php');
$et = new declaration();
$matA=$_POST['matA'];
$p=$_POST['periode'];
$date=$_POST['date'];

$date = strtotime(date("Y-m-d", strtotime($date)) . " +$p month");
$date = date("Y-m-d",$date);

$res=$et->paiment($matA,$date);


echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('paiement saved ');
        window.location.replace(\"http://localhost/cnss/Joli/index.php\");
</SCRIPT>";
mysql_close();

/*
echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('declaration saved ');
        window.location.replace(\"http://localhost/cnss/Joli/\");
    </SCRIPT>";
    mysql_close();
*/
?>
