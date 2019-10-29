<?php
   session_start();

try{
       $bdd=new PDO('mysql:host=localhost;dbname=minichat','root','');

     }catch(Exception $e){

       die($e->getmessage());
    }

  // Insertion du message à l'aide d'une requête préparée
     $req = $bdd->prepare('INSERT INTO chat (pseudo,message) VALUES(?,?)');
     $req->execute(array($_SESSION['pseudo'],$_POST['message']));

 // Redirection du visiteur vers la page du minichat
     header('Location: home.php');



 ?>
