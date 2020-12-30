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
    <form action="modifer.php" method="post">
<!--///////////////////////php////////////////////////-->
<?php 
require_once ('gestion.php');
$et = new declaration();

$matA=$_POST['matA'];

$res=$et->rechercheAssure($matA);


if($res->rowCount()==0){
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('Numero cin not found');
        window.location.replace(\"http://localhost/cnss/Joli/declaration.html\");
    </SCRIPT>";
    mysql_close();
}

foreach ($res as $row){
    echo"
    <div class='container ' >           
    <table border='0' class='table table-dark'> 
    <tr> 
        <td  class='text-center'><b>Cin  :</b></td>
        <td >$row[matA]</td>  
        <input type='hidden' name='matA' value=$row[matA]>
    </tr>
    <tr> 
        <td  class='text-center'><b>Nom  :</b></td>
        <td ><input type='text' name='nom' value=$row[nomA]></td>
    </tr>
    <tr>
        <td class='text-center'><b>Prenom  :</b></td>
        <td ><input type='text' name='pren' value=$row[prenA]></td>
    </tr>
    <tr> 
        <td class='text-center'><b>date Naissance  :</b></td>
        <td ><input type='date' name='dn' value=$row[4]></td>
    </tr>
    <tr> 
        <td class='text-center'><b>Date Debut Contraint  :</b></td>
        <td >$row[ddc]</td>
        <input type='hidden' name='ddc' value=$row[ddc]>
    </tr>
    <tr> 
        <td class='text-center'><b>Montant :</b></td>
        <td ><input type='numbre' name='montant' value=$row[montant]></td>
    </tr>
    
    <tr> 
        <td class='text-center'><b>periode de paiement par Month :</b></td>
       
        <td><input type='numbre' name='periode' value=$row[periode]> </td>
    </tr>
    

    ";
    echo"
        <tr>
            <td class='text-center'></td>
            <td class='text-center'>
        <button type='submit'  class='btn btn-success' >
            Modifier
        </button>
        </td>

        </tr>
    
    </div>
    ";
}


?>

</form>
</body>
</html>