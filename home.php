<?php
    session_start();

    try{
           $bdd=new PDO('mysql:host=localhost;dbname=minichat','root','');

         }catch(Exception $e){

           die($e->getmessage());
        }

        // Récupération des 5 derniers messages
       $reponse = $bdd->query('SELECT pseudo, message FROM  chat ORDER BY ID DESC LIMIT 0, 5');

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">

    <title>Minichat</title>
  </head>
  <style media="screen">
  body{
    //background-color: #15202B;
  }
      .navbar-nav img{
        width:100px;
      }
  .messagechat {
      border: 2px solid #dedede;
      background-color: #f1f1f1;
      border-radius: 5px;
      padding: 10px;
      margin: 10px 0;
      }
      .messagechat::after {
           content: "";
           clear: both;
           display: table;
      }
      .messagechat img {
         float: left;
         max-width: 50px;
         width: 100%;
         margin-right: 20px;
        border-radius: 50%;
           }
    .time{
       color: #747474;
       float: right;
       font-size: 13px;
       }


  </style>
  <body>
    <nav class="navbar navbar-inverse bg-primary navbar-toggleable-sm">
      <a href="#" class="navbar-brand"><?php echo $_SESSION['pseudo']; ?></a>
      <div class="navbar-nav">
        <img src="reddit.png" alt="">
      </div><!-- navbar-nav -->
    </nav><!-- nav -->

    <div class="container">
              <br>
                <div class="col-7">
                  <img src="hell.jpg" alt="">
                </div>    <br>
          <form action="home_post.php" method="post">
            <div class="col-7">
              <div class="input-group">
                 <textarea class="form-control type_msg"  name="message" placeholder="Type your message..."></textarea>
                 <button type="submit"class="btn btn-primary" name="button"><i class="fas fa-location-arrow"></i></button>
                </div>
            </div>

          </form>

  <div class="col-7">
    <?php
    while ($donnees = $reponse->fetch())
   {
     ?>
     <div class="messagechat">
            <img src="https://ptetutorials.com/images/user-profile.png" alt="Avatar" style="width:40%;">
            <h5> <?php echo $donnees['pseudo'];?></h5>
            <p> <?php echo $donnees['message']; ?></p>
            <span class="time">11:00</span>
      </div>
      <?php
    }
        $reponse->closeCursor();
       ?>
    </div>
  </div>


  <footer class="footer"><a href="https://boukernineabdellatif.netlify.com"> <span class="spann">by Boukernine abdellatif</span></a>  </footer>
  </body>
</html>
