<?php
 
session_start();
 function conn(){

    try {
        $conn =new PDO("mysql:host=localhost;dbname=our_restau","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        
        echo "no connect";
    }
    return $conn;
 }

 function to_connect($login,$mdp){

    $req=conn()->prepare('SELECT * FROM utilisateurs WHERE login=? and mdp=?');
    $req->execute(array($login,$mdp));

    $nbr=$req->rowCount();
    
    if ($nbr == 1) {
        
       $aff=$req->fetch();

       $_SESSION["id_login"]=$aff["id"];
       header('location:admin.php' .$_POST[$_SESSION["id_login"]]);

    }else{
       
        header('location:conn_admin.php?conn&error=Compte introuvable');
    }

 }



 

?>