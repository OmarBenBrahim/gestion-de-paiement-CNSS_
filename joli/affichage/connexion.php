<?php 
 class connexion
{ 
    public function cnxbase()
    {
        $db=new pdo ('mysql:host=localhost;dbname=cnss','root','');
       
        return $db;
        
    }
}
?>