<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>supprimer</title>            
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
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.php">CNSS</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    
                            <li><a href="index.php"><span class="xn-text">liste de client payé</span></a> </li> 
                            <li><a href="compt.html"> <span class="xn-text">Enregistrer un nouveau client</span></a> </li> 
                            <li><a href="declaration.html"><span"></span>Enregistrer un nouveau payé</a></li>
                            <li><a href="supprimer.php"><span >Supprimer client</span> </a></li>
                            <li><a href="pdf.html"><span >Imprimer contrat de payé </span> </a></li>
                            <li><a href="modifier_declaration.html"><span >Modifier contrat client </span> </a></li>
                                                         
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            <!-- begin affiche -->

            <!-- PAGE CONTENT -->
            <div class="page-content">
            
                                <form action="affichage/supprime.php" method="POST">               
                                    <?php 
                                        require_once ('affichage/gestion.php');
                                        $et = new affiche();

                                        $res=$et->afficheAssure();
                                        
                                        echo
                                         
                                        "<table border='0' class='table table-striped' class='table table-bordered'  > 
                                        <tr>
                                            <th class='text-center'>Cin</th>
                                            <th class='text-center'>Nom</th>
                                            <th class='text-center'>Prenom</th>
                                            <th class='text-center'>Last Montant</th>
                                            <th class='text-center'>Date Debut contract</th>
                                            <th class='text-center'>Dernier date de paiement</th>
                                            <th class='text-center'>Check</th>
                                        </tr>";
                                        foreach ($res as $row){
                                            echo"<tr>";
                                            echo  "<td class='text-center'>", $row['matA'],"</td>" ;
                                            echo  "<td class='text-center'>", $row['nomA'],"</td>" ;
                                            echo  "<td class='text-center'>", $row['prenA'],"</td>" ;
                                            echo  "<td class='text-center'>", $row['montant'],"</td>" ;
                                            echo  "<td class='text-center'>", $row['ddc'],"</td>" ;
                                            echo  "<td class='text-center'>", $row['date_final'],"</td>" ;
                                            echo  "<td class='text-center'><input type='radio' value=$row[0] name='r'></td>";
                                            echo"</tr>";
                                        }
                                        echo" <td>  </td>
                                         
                                            <td> </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td class='text-center'>
                                            <div class='container-login100-form-btn'>
                                            <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal'>
                                                supprimer
                                            </button></td>";
                                         ?>
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
                                </div>
                            </div>
                        </div>    
               
                    

           
                              
                
                                               
            </div>            
            <!-- END PAGE CONTENT -->
            <!-- title de page -->
        <br><h1 class='text-center'> Supprimer Declaration </h1><br><br>  
        </div>
        <!-- END PAGE CONTAINER -->

       

                          
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
       
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <script type="text/javascript" src="js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






