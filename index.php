<?php

if (isset($_POST['commit'])) {
  if ($_POST['password']==$_POST['confpassword']) {
       session_start();
       $_SESSION['pseudo'] = $_POST['pseudo'];
        header('location:home.php');
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/github.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign up</title>
  </head>
   <style media="screen">
     .mrt{
       margin-top:100px;
     }
     .auth-form-body{
      background-color: #fff;
      border: 1px solid #d8dee2;
      font-size: 14px;
      padding: 20px;
      margin-top: 16px!important;
      border-radius: 5px;
      border-top: 1px solid #d8dee2;
      display: block;
    }


   </style>
  <body>

     <form class="" action="index.php" method="post">
         <div class="auth-form  pxx-3 mrt">
           <div class="auth-form-body">
                <label for="login_field">Choisir un nom d'utilisateur</label>
                <input class="form-control input-block" type="text" name="pseudo" value="" required>
                <label for="password"> Créez un mot de passe </label>
                <input class="form-control input-block" type="password" name="password" value="" required>
                <label for="password"> Confirmez votre mot de passe</label>
                <input class="form-control input-block" type="password" name="confpassword" value="" required>
                <input type="submit" name="commit" value="Terminé" class="btn btn-primary btn-block">
           </div>
         </div>
      </form>



     <footer class="footer"> <a href="https://boukernineabdellatif.netlify.com"> <span class="spann">by Boukernine abdellatif</span></a></footer>
  </body>
</html>
