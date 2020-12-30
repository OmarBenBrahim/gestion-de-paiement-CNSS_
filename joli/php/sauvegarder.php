<?php 

require_once ('gestion.php');
$et = new assure();
$mat=$_POST['mat'];
$nom=$_POST['nom'];
$pren=$_POST['pren'];
$date=$_POST['date']; 
$sexe=$_POST['sexe'];
$ddc=$_POST['ddc'];
$periode=$_POST['periode'];
$montant=$_POST['montant'];

$num=$et->rechercheAssure($mat);

if($num>0){
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('matricule existe');
        window.location.replace(\"http://localhost/cnss/Joli/compt.html\");
    </SCRIPT>";
    mysql_close();
}
else{
$et->ajouteAssure($mat,$nom,$pren,$date,$sexe,$ddc,$periode,$montant);

echo "<h1>$mat</h1>";
}
//---------------------html---------------------
?>


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
        <title>declaration</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
                <!--begin body-->
                <form method="POST" action="newdeclaration.php">
                <?php 
                    
                    echo
                                         
                    "<table border='0' class='table table-striped' class='table table-bordered'  > 
                    <tr>
                        
                        <th class='text-center'>nom</th>
                        <th class='text-center'>prenom</th>
                        <th class='text-center'>Date Naissance</th>
                        <th class='text-center'>Montant</th>
                        <th class='text-center'>Date Debut Contraint</th>
                        <th class='text-center'>Periode</th>
                        
                    </tr>";
                    echo"
                        <tr>
                        <td class='text-center'>$nom</td>
                        <td class='text-center'>$pren</td>
                        <td class='text-center'>$date</td>
                        <td class='text-center'>$montant</td>
                        <td class='text-center'>$ddc</td>
                        <td class='text-center'>$periode</td>
                        <input type='hidden' name='matA' value='$mat'>
                        <input type='hidden' name='ddc' value='$ddc'>
                        <input type='hidden' name='p' value='$periode'>
                        

                        </tr>
                        <tr>
                        <td class='text-center'></td>
                        <td class='text-center'></td>
                        <td class='text-center'></td>
                        <td class='text-center'></td>
                        <td class='text-center'></td>
                        <td class='text-center'>
                        <button type='button'  class='btn btn-success' data-toggle='modal' data-target='#exampleModal'>
                            Paiement
                        </button>
                        </td>

                        </tr>
                    ";
                   ?>                        
                                       
    
                                   
               
                
                    
            
                    <div id="dropDownSelect1"></div>
                    <!-- begin model -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title" id="exampleModalLabel">Login</h4>

                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                   
                                    <div class="col-xs-4">
                                      <label for="ex2">I'dentifiant</label>
                                      <input class="form-control" id="ex2" type="text" name="id">
                                    </div>
                                    <div class="col-xs-4">
                                      <label for="ex3">Mot passe</label>
                                      <input class="form-control" id="ex3" type="text" name="psw">
                                    </div>
                                  </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <input type="submit" class="btn btn-primary" value='Save changes' >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end model -->
                </form>
			    <!--End body-->
                              
                
                                               
          

                     
        
    
        <!-- START TEMPLATE -->
        
</body>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>