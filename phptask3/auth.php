<?php
require "connection.php";

$email = $password = $id="";
if ( $_SERVER["REQUEST_METHOD"]==="POST"){
$email = $_POST["email"];
$password= $_POST["password"];
if (empty($email)){
    echo ("email is required, redirecting...");
    header("refresh:1,url=login.php");
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("INVALID FORMAT, redirecting...");
    header("refresh:2,url=login.php");
}
elseif (empty($password)){
        echo ("password is required,redirecting....");
        header("refresh:2,url=login.php");
}
else{
    $query = "SELECT * FROM logintable WHERE email ='$email'";
    $query_pass = "SELECT * FROM logintable WHERE email ='$email' AND password = '$password'";
    $result = mysqli_query($conn , $query);
    $result_pass= mysqli_query($conn, $query_pass);
    echo "logging in";
    if(mysqli_num_rows($result) == 0){
        $insert_query = "INSERT INTO logintable (email, password) VALUES ('$email','$password')";
        mysqli_query($conn, $insert_query);
        $queryget="SELECT id FROM logintable WHERE email ='$email'";
        $result1 = mysqli_query($conn , $queryget);
        $data = mysqli_fetch_assoc($result1);
        $id = $data['id'];
        session_start();
        $_SESSION["email"]= $email;
        $_SESSION['id']=$id;
        header("refresh:2,url=session.php");
    }
    elseif(mysqli_num_rows($result_pass)>0){
        $data = mysqli_fetch_assoc($result_pass);
        $id = $data['id'];
        session_start();
        $_SESSION["email"]= $email;
        $_SESSION['id']=$id;
        header("refresh:2,url=session.php");
    }
    else{
        echo "password doesnt match,redirecting";
        header("refresh:2,url=login.php");
    }
}
}

?>