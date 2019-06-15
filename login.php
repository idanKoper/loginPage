<?php 
  if(isset($_POST['login']))
  {
    session_start();
    if (isset($_POST['username']) && isset($_POST['password']))
      {
        if (isset($_POST['remember']) && ($_COOKIE['username'] == null) && ($_COOKIE['password'] == null))
        {
          setcookie("username",$_POST['username'],time()+3600, '/');
          setcookie("password",$_POST['password'],time()+3600, '/');
          header('location: https://www.aac.ac.il/');
        }
        if (!isset($_POST['remember']))
        {
          setcookie("username",'', time() - 86400, '/');
          setcookie("password",'', time() - 86400, '/');

          header('location: https://www.aac.ac.il/');
        }
        if (($_POST['username'] == $_COOKIE['username']) && ($_POST['password'] == $_COOKIE['password'])) 
        {
          header('location: welcome.html');
        }
        if (isset($_POST['remember']) && (($_POST['username'] != $_COOKIE['username']) || ($_POST['password'] != $_COOKIE['password']))) 
        {
          setcookie("username",$_POST['username'],time()+3600, '/');
          setcookie("password",$_POST['password'],time()+3600, '/');
          header('location:  https://www.aac.ac.il/');
        }


      }
    }
            
?>  