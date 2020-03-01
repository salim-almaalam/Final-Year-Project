<!-- php -->

<?php 
include_once("connect.php");
 session_start();
//  $server = 'localhost';
//  $username = 'root';
//  $password = '';
//  $dbname = 'website';
//  $conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['login'])){
    //  echo "true";
    $email = $_POST['email'];
    
    $passw = $_POST['pass'];
    //$hashed = password_verify($passw, $hash);
    
    // check if email already exists
                $check_exsisting = mysqli_query($conn, "SELECT id, admin_password FROM admin WHERE admin_email = '$email'");
                //$check_exsisting2 = mysqli_query($conn, "SELECT admin_password FROM admin WHERE admin_password = '$pass' ");
                $num_rows = mysqli_num_rows($check_exsisting);
                if($num_rows >0){
                    $data = $check_exsisting->fetch_array();
                    if(password_verify($passw,$data['admin_password'])){
                         $_SESSION['email']=$email;
                         //$_SESSION['password']=$data['admin_password'];
                        echo "exsists";
                        header("Location: ./staff.php");
                        exit;
                    }
  
                }else{
                    echo 'no';
                   // header("Location: ./login.php");
                    exit;
                    
                }}

                
// }else{
//     echo 'NO Data Found';
//     //session_destroy();
//     //header("Location: ./login.php");
//     exit;
// }


?>





<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

<!------ Include the above in your HEAD tag -------- -->
<body>
<h1> Departmental portal for computer science </h1>
<div class="wrapper fadeInDown">
    
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2> Log In  </h2>
    <!-- Icon -->
    <div class="fadeIn first">
      <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
    </div>

    <!-- Login Form -->
    <form method="POST" action="login.php" > 
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="email" autocomplete="off">
      <input type="password" id="password" class="fadeIn third" name="pass" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="login" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
    <!-- <title>Login</title>
</head>
<h1 class="title">Departmental portal for computer science</h1>


<body>
<div class="form" >
            <form action="login.php" method="POST" class="register">
                <label for=""> <strong> Email </strong> </label>
                <input type="text" name="email" class="email" id ="em" autocomplete="off" placeholder="Enter Email address"> 
                <br>
                <label for=""> <strong> Password </strong> </label>
                <input type="text" name="password" class="pass" id ="pass" autocomplete="off" placeholder="Enter a strong password">
                <br>
                <input type="submit" name="login" value="Log in"><br>
</div>
      </form> -->
    
     <script src="login.js"></script>
</body>
</html>