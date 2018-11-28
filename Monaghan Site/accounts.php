<?php
require('database.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="images/monaghanPNG.png">  
    <title>My Account</title>

    <style>

body 
{
    padding-top: 54px;
}

@media (min-width: 992px) 
{
    body {
        padding-top: 56px;
    }
}

header.masthead 
{
    background: url('http://www.northernsound.ie/wp-content/uploads/sites/20/Monaghan-town.jpg') no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

header.masthead > .overlay 
{
    padding: 5rem 0;
    text-align: center;
    background: rgba(0, 0, 0, 0.6);
}

@media (min-width: 992px) 
{
    header.masthead > .overlay {
        padding: 10rem 0;
    }
}

#directions
{
    float:left;
    width:100%;
    margin:0px;
}

button
{	
        left:600px;

}

#centerText
{
    padding: 5%;
    padding-left: 20%;
    padding-right: 20%;
    text-align:center;
}
 #contentbox
{
    background-color: #f4f4f4;
    margin-left: 20%;
    margin-right: 20%;
    margin-top: 1%; 
}

form
{
    padding: 50px;
    
    width:400px;
    margin-left: 100px;
}
    </style>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


</head>
  <body>

 
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html"><h1>Monaghan Has It</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li>
              <a class="nav-link" href="index.html">About
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="landmarks.html">Landmarks</a>
            </li>
            <li>
              <a class="nav-link" href="rossmore.html">Rossmore Forest Park</a>
            </li>
            <li>
              <a class="nav-link" href="history.html">History</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="overlay">
        <div class="container">
            <h1 class="display-1 text-white">Add <br>Account</h1>
        </div>

        
        &nbsp;
        
        
          
      </div>
    </header>
    

    <div id ='contentbox'>
     
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9qFT3lP1nwCvoX7WQd9cYtJRG_2rvC6w "></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <br><br>
    <div class="container">   

        
        
        <h1>Add Member</h1>
        <form action="add_member.php" method="post">

            <label>Email:</label><br>
            <input type="input" name="email">
            <br>

            <label>Username:</label><br>
            <input type="input" name="username">
            <br>

            <label>Password:</label><br>
                <input type="input" name="password">
            <br>
            
            <label>&nbsp;</label><br>
            <input type="submit" value="Add Member">
            <br>
        </form>
        <p><a href="display_members.php">View Member List</a></p>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>



<div id="centerText">
    <a href="https://www.facebook.com/pages/The-Monaghan-Mouth/131529503596715">
<img border="0" alt="Facebook" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/social-facebook-icon.png" width="75" height="75">
</a>
        <a href="https://twitter.com/MonaghanCoCo">
<img border="0" alt="Facebook" src="http://communicasound.com/wp-content/uploads/2017/02/Twitter-Logo-PNG-1.png" width="75" height="75">
</a>
        <a href="https://www.tumblr.com/search/county%20monaghan">
<img border="0" alt="Facebook" src="https://assets.tumblr.com/images/logo_page/blue-t.png" width="75" height="75">
</a>
</div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">&copy; <?php echo date("Y");?> Monaghan Has It</p>
      </div>
      <!-- /.container -->
    </footer>
    </div>
    </div>
  </body>

</html>
