
<?php
  $server = 'localhost';
  $username = 'root';
  $p = '';
  $dbname = 'website';
  $conn = mysqli_connect($server, $username, $p, $dbname);
  
  
  // $result = $conn->query($query);
$name = ""; // name
$email = ""; // email
$email_2 = ""; // confirmed enmail
$password = ""; // password
$password2 = ""; // confirned password
$contact_number = "";
$nationality = ""; // nationality date
$error_array = array(); // holds error messages

if(isset($_POST['register'])){
// validation
  if(!empty($_POST['name'])){
    $name = trim(htmlspecialchars($_POST['name']));
  } else if(!empty($_POST['name']) && strlen($name) <8){
echo "name should be longer than 8";
  }
  else{
    echo "should contain input ";
  }
    if(!empty($_POST['email'])){
    $email = trim(htmlspecialchars($_POST['email']));
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo"Invalid format and please re-enter valid email"; 
   }
  }
  if(!empty($_POST['password'])){
    $password = trim(htmlspecialchars($_POST['password']));
  }else{
    echo "should contain input ";
  }
    // $password = $_POST['password'];
    if(!empty($_POST['dob'])){
      $dob = trim(htmlspecialchars($_POST['dob']));
    }else{
      echo "should contain input ";
    }
    // $dob = $_POST['dob'];
    $nationality = trim(htmlspecialchars($_POST['$nationality']));
    // $nationality = $_POST['nationality'];
    $disability = trim(htmlspecialchars($_POST['disability']));
    //  $disability = $_POST['disability'];
    $contact_number = trim(htmlspecialchars($_POST['num']));
    //  $contact_number =  $_POST['num'];

    

     $query = "INSERT INTO student(id, student_name, student_email, student_password, student_dob ,student_contact_num, student_nationality, disability)VALUES(DEFAULT,'$name','$email','$password', '$dob', '$contact_number', '$nationality', '$disability')";
     if (mysqli_query($conn, $query)) {
          echo "New record created successfully";
          $name = ""; // name
          $email = ""; // email
          $email_2 = ""; // confirmed enmail
          $password = ""; // password
          $password2 = ""; // confirned password
          $contact_number = "";
          $nationality = ""; // nationality date
          $error_array = array(); // holds error messages
          header("Location: register.php");
        } else {
          echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
//     //name
//     $name = strip_tags($_POST['name']);
//     $name = str_replace(' ' , '' , $name);
//     $name = ucfirst(strtolower($name));
//     //email
//     $email = strip_tags($_POST['email']);
//     $email = str_replace(' ' , '' , $email);
//     $email = ucfirst(strtolower($email));
//     // $_SESSION['Email'] = $email; // stores email into a session variable. 

//     $email_2 = strip_tags($_POST['email2']);
//     $email_2 = str_replace(' ' , '' , $email_2);
//     $email_2 = ucfirst(strtolower($email_2));
//     // $_SESSION['email2'] = $email_2; // stores email2 into a session variable. 

// //password
//     $password = strip_tags($_POST['password']);
//     $password2 = strip_tags($_POST['password2']);
//      $email = strip_tags($_POST['email']);
    // if email does match
    // if($email == $email_2){
    //     // check if the email is in the right form:
    //         if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    //             $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    //             // check if email already exists
    //             $check_exsisting = mysqli_query($con, "SELECT student_email FROM student WHERE student_email = '$email' ");
    //             $num_rows = mysqli_num_rows($check_exsisting);
    //             if($num_rows >0){
    //                 array_push($error_array,"Email in use! <br>");
    //             }
    //         }else{
    //             array_push($error_array," invalid email <br>");
    //         }
    //     }
    //     // elae
        
    // else{
    //     array_push($error_array, "email doesnt match <br>");
    // }

    // if(strlen($name)>25 || strlen($name)<2){
    //     array_push($error_array,"first name should be between 2 and 25 chars <br>");
    // }

    // if($password != $password2){
    //     array_push($error_array,"password incorrect <br>");
    // }

    // else{
    //     if(preg_match('/[^A-Za-z0-9]/' ,$password)){
    //         array_push($error_array,"your password can only contain english letters and numbers <br>");
    //     }
    // }

    // if(strlen($password)>30 || strlen($password)<5){
    //     array_push($error_array,"password should be between 5 and 30 chars <br>");
    // }
    // $nationality = $_POST['nationality'];
    // $disability = $_POST['nationality'];
    // $nationality = $_POST['nationality'];

  
    
}


// header("location: home.php");
// exit;




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="../style/reg.css">
</head>
<h1 class="title">Departmental portal for computer science</h1>
<h1 class="register">Register</h1>

<body>
<div class="form">
            <form action="register.php" method="POST" class="register">
            

                <input type="text" name="name" class="name" autocomplete="off" placeholder="Enter Full name"> 
                <br>
                <input type="text" name="email" class="email" autocomplete="off" placeholder="Enter Email address"> 
                <br>
                <input type="text" name="email2" class="email" autocomplete="off" placeholder="Confirm Email address"> 
                <br>
                <input type="text" name="password" class="pass" autocomplete="off" placeholder="Enter a strong password">
                <br>
                <input type="text" name="password2" class="pass" autocomplete="off" placeholder="Confirm a strong password">
                <br>
                <input type="text" name="num" class="contact" autocomplete="off" placeholder="Enter contact number">
                <br>
                <input type="date" name="dob" class="dob" autocomplete="off" placeholder="Choose date of birth">
                <br>
                <input type="text" name="nationality" class="nationality" autocomplete="off" placeholder="Enter nationality">
                <br>
                <input type="text" id="Yes" name="disability" placeholder="No">
                <br>
                <input type="submit" name="register" value="Register">
            </div>
      </form>
      
</body>
</html>