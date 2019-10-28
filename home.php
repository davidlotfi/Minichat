<?php
    session_start();
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
      <a href="#" class="navbar-brand">Mini Chat</a>
      <div class="navbar-nav">
        <img src="reddit.png" alt="">
      </div><!-- navbar-nav -->
    </nav><!-- nav -->

    <div class="container">
              <br>
          <form action="home_post.php" method="post">
                <div class="input-group">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>

                    <textarea class="form-control type_msg"  name="message" placeholder="Type your message..."></textarea>

									<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
	               </div>
          </form>

     <div class="messagechat">
            <img src="https://ptetutorials.com/images/user-profile.png" alt="Avatar" style="width:40%;">
            <h5> <?php echo $_SESSION['pseudo'];?></h5>
            <p>Hello. How are you today?</p>
            <span class="time">11:00</span>
      </div>



    </div>
  </body>
</html>
