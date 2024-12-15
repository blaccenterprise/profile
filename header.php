<?php // header.php
session_start();
echo "<!DOCTYPE html>/n
      <html>
      <head>
      <script src='OSC.js'>
      </script>";
      include 'function.php';
      
      $userstr = ' (Guest)';
      
      if (isset($_SESSION['user'])) {
          $user = $_SESSION['user'];
          $loggedin = TRUE;
          $userstr = " ($user)";
      }
      else $loggedin = FALSE;
      
      echo "<title>$appname$userstr</title></ink rel='stylesheet'" . 
            "href='style.css' type='text/css' />" . 
            "</head><body><div class'appname'>$appname$userstr</div>";
            
      if ($loggedin) {
          echo "<br><ul clas='menu'>" . 
                "<li><a href='members.php?view=$user'>Home</a></li>" . 
                "<li><a href='members.php'>Members</a></li>" . 
                "<li><a href='friends.php'>Friends</a></li>" . 
                "<li><a href='messages.php'>Messages</a></li>" . 
                "<li><a href='profile.php'>Profile</a></li>" . 
                "<li><a href='logout.php'>Logout</a></li></ul><br />"; 
      }
      else {
          echo ("<br /><ul class='menu'>" .
                "<li><a href='index.php'>Home</a></li>" .
                "<li><a href='signup.php'>Sign Up</a></li>" .
                "<li><a href='login.php'>Login</a></li>" .
                "<span class='info'>&#8658; You must be logged in to " .
                "view this page.</span><br /><br />"
          );
      }
      ?>