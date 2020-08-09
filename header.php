<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Zydus Hospital
    </title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <img src="images/download.png"  width="300" height="180" align="right">
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar  navbar-static-top">
          <a class="navbar-brand"><a href="index.php" style="font-size:50"><i class="fa fa-heartbeat" style="font-size:48px;color:red"></i> 
 Zydus Hospital</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                 <a  href="https://www.google.com/maps/place/Zydus+Hospital/@23.0584906,72.5154469,17z/data=!3m1!4b1!4m5!3m4!1s0x395e9b5e464673c1:0x4aa886904308b889!8m2!3d23.0584906!4d72.5176356" target="_blank"> Address: 100 Feet Road, Sarkhej Bridge, Nr, Sarkhej - Gandhinagar Hwy, Thaltej, Ahmedabad, Gujarat 380054</a> 
			  </li>
			 
			  
              <li class="nav-item">
                <a class=""> Ambulance Number  <i class="fa fa-ambulance" style="font-size:24px"></i>  : 079 7894 1234</a>
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
