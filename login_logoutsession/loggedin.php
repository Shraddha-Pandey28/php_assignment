
<?php $email = $password = "";
if ( $_SERVER["REQUEST_METHOD"]==="POST"){
  $email = $_POST["email"];
  if (empty($email)){
      echo ("email is required, redirecting...");
      header("refresh:1,url=index.php");
  }
  elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      echo ("INVALID FORMAT, redirecting...");
      header("refresh:2,url=index.php");
  }
  else{
      $password= $_POST["password"];
      if(empty($password)){
          echo ("password is required,redirecting....");
          header("refresh:2,url=index.php");
      }
      else{
          session_start();
          $_SESSION["email"]= $email;
          header("refresh:2,url=logout.php");
      }     
  }
}?>