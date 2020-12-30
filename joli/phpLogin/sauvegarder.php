<?php 
require_once ('gestion.php');
$et = new login();
$login=$_POST['login'];
$psw=$_POST['psw'];
$num=$et->rechercheAssure($login,$psw);

if($num>0){
    //header('location:index.php');
    header("location:http://localhost/cnss/Joli/");
}
else{
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('login or psw incorrect ');
        window.location.replace(\"http://localhost/cnss/Joli/login.html\");
    </SCRIPT>";
    mysql_close();
    //header('location:../login.html');
}
?>