<!DOCTYPE html>
<html lang="en">
    <head>        
		<!-- META SECTION -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	    <link rel="stylesheet" type="text/css" href="../css/util.css">
	    <link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>
    <form action="../index.php" method="post">
<!--///////////////////////php////////////////////////-->
<?php 
require_once ('gestion.php');
$et = new declaration();
$matA=$_POST['matA'];

$res=$et->rechercheAssure($matA);


if($res->rowCount()==0){
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('Numéro de cin existe');
        window.location.replace(\"http://localhost/cnss/Joli/declaration.html\");
    </SCRIPT>";
    mysql_close();
}

foreach ($res as $row){
    echo"
    
    <div class='container ' >           
    <table border='0' class='table table-striped '  > 
    <tr> 
        <td  class='text-center'><b>Cin  :</b></td>
        <td >$row[matA]</td>
        <input type='hidden' name='matA' value=$row[matA]>
    </tr>
    <tr> 
        <td  class='text-center'><b>Nom  :</b></td>
        <td >$row[nomA]</td>
    </tr>
    <tr> 
        <td class='text-center'><b>Prenom  :</b></td>
        <td >$row[prenA]</td>
    </tr>
    <tr> 
        <td class='text-center'><b>date Naissance  :</b></td>
        <td >$row[4]</td>
    </tr>
    <tr> 
        <td class='text-center'><b>Date Debut Contraint  :</b></td>
        <td >$row[ddc]</td>
    </tr>
    <tr> 
        <td class='text-center'><b>Montant  :</b></td>
        <td >$row[montant]</td>
    </tr>
    <tr> 
    <td class='text-center'><b>Date de Prochain paiement  :</b></td>
    <input type='hidden' name='date' value=$row[date_final]>
    <td >$row[date_final]</td>
    </tr>
    <tr> 
        <td class='text-center'><b>periode de paiement  :</b></td>
        <input type='hidden' name='periode' value=$row[periode]>
        <td >$row[periode] <b>Month</b></td>
    </tr>
    ";
    $date=$row['date_final'];
    $p=$row['periode'];
    $date = strtotime(date("Y-m-d", strtotime($date)) . " -$p month");
    $date = date("Y-m-d",$date);
    echo"
    <tr> 
    <td class='text-center'><b>Date de dernier paiement  :</b></td>
    <input type='hidden' name='date' value=$row[date_final]>
    <td >$date</td>
    </tr>
    
    
    ";
    echo"
        <tr>
            <td class='text-center'></td>
            <td class='text-center'>
            <button type='submit' class='btn btn-success d-print-none' data-toggle='modal' data-target='#exampleModal' onclick='javascript:window.print()'>
                Imprimer
            </button>
        </td>

        </tr>
    
    </div>
    ";
}
/*
$et->ajoutedeclaration($montant,$matA,$matE,$dd,$df);
echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('declaration saved ');
        window.location.replace(\"http://localhost/cnss/Joli/\");
    </SCRIPT>";
    mysql_close();
*/

?>

</form>
</body>
</html>