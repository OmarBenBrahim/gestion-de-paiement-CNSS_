<?php 
require_once ('gestion.php');
$et = new declaration();
$matA=$_POST['matA'];
$nom=$_POST['nom'];
$pren=$_POST['pren'];
$dn=$_POST['dn'];
$ddc=$_POST['ddc'];
$p=$_POST['periode'];
$montant=$_POST['montant'];

$et->modifier($matA,$nom,$pren,$dn,$ddc,$p,$montant);
echo "<SCRIPT type='text/javascript'> 
        alert('La Modification Enregestrer ');
        window.location.replace(\"http://localhost/cnss/Joli/index.php\");
</SCRIPT>";
mysql_close();
?>
