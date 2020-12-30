<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>liste declaration</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->     
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
       
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">                               
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar d-print-none">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation" >
                    <li class="xn-logo">
                        <a href="index.php">CNSS</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    
                            <li ><a href="index.php"> <span class="font-weight-normal">liste de client payé</span></a> </li> 
                            <li><a href="compt.html"> <span class="xn-text">Enregistrer un nouveau client</span></a> </li> 
                            <li><a href="declaration.html"><span>Enregistrer un nouveau payé</span></a></li>
                            <li><a href="supprimer.php"><span >Supprimer client</span> </a></li>
                            <li><a href="pdf.html"><span >Imprimer contrat de payé </span> </a></li>
                            <li><a href="modifier_declaration.html"><span >Modifier contrat client </span> </a></li>
                                                         
                        </ul>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            <!-- begin affiche -->

            <!-- PAGE CONTENT -->
            <div class="page-content">
                <form action="" method="POST" class="login100-form validate-form">    
                                    <?php 
                                        require_once ('affichage/gestion.php');
                                        $et = new affiche();

                                        $res=$et->afficheAssure();
                                        
                                        echo
                                        
                                        "
                                        <table border='0' class='table table-striped' class='table table-bordered'  > 
                                        <theader> 
                                            <th class='text-center'>Cin</th>
                                            <th class='text-center'>nom</th>
                                            <th class='text-center'>prenom</th>
                                            <th class='text-center'>Montant</th>
                                            <th class='text-center'>Date Debut Contraint</th>
                                            <th class='text-center'>Date de prochain paiement</th>
                                        </theader>
                                        <tfoot> 
                                            <th class='text-center'></th>
                                            <th class='text-center'></th>
                                            <th class='text-center'></th>
                                            <th class='text-center'></th>
                                            <th class='text-center'></th>
                                            <th class='text-center'>
                                            <button class='btn btn-success d-print-none' data-toggle='modal' data-target='#exampleModal' onclick='javascript:window.print()'>
                                            Imprimer</button>   
                                            </th>
                                        </tfoot>";
                                        
                                        foreach ($res as $row){
                                            echo"<tr>";
                                            echo  "<td class='text-center'>", $row['matA'],"</td>";
                                            echo  "<td class='text-center'>", $row['nomA'],"</td>" ;
                                            echo  "<td class='text-center'>", $row['prenA'],"</td>" ;
                                            echo  "<td class='text-center'>", $row['montant'],"</td>" ;
                                            echo  "<td class='text-center'>", $row['ddc'],"</td>" ;
                                            echo  "<td class='text-center'>", $row['date_final'],"</td>
                                            </tr>" ;
            
                                            
                                            
                                        }       
                                         ?>
                                       
                                 </form>
            </div>
        </div>
                        </div>    
                </ul>                                 
            </div>      
              
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
       <!-- title de page -->         
		<form class="login100-form validate-form  ">
	        <span class="login100-form-title p-b-30 p-t-20">Liste  Paiement</span>
        <form>
        <!-- end title de page -->                    
                                             
       

                          
        
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






