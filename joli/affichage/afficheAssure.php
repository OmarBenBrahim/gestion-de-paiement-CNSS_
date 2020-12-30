<?php 

require_once ('gestion.php');
$et = new affiche();

$res=$et->afficheAssure();
echo "<table border='1'> 
<tr>
    <th>Matricule</th>
    <th>nom</th>
    <th>prenom</th>
    <th>Last Montant</th>
    <th>Date Debut</th>
    <th>Date Fin</th>
</tr>";
foreach ($res as $row){
    echo"<tr>";
    echo  "<th>", $row['matricule'],"</th>" ;
    echo  "<th>", $row['prenA'],"</th>" ;
    echo  "<th>", $row['nomA'],"</th>" ;
    echo  "<th>", $row['montant'],"</th>" ;
    echo  "<th>", $row['date_debut'],"</th>" ;
    echo  "<th>", $row['date_debut'],"</th>" ;

}


?>