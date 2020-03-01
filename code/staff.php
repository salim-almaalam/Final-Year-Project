<?php
include "connect.php";
session_start();

if(!$_SESSION['email']){
    echo 'Log in Please';
    header('Location: login.php');}
// }else{






//include_once "login.php";
// $admin_password = '22222';
// $hash = password_hash($admin_password, PASSWORD_DEFAULT);
//  $query = "INSERT INTO admin (id, admin_name, admin_email, admin_password, admin_contact_num)
//  VALUES (2, 'A', 'A@hotmail.com', '$hash', '123456789')";

// if (mysqli_query($conn, $query)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $query . "<br>" . mysqli_error($conn);
// }


// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Staff Page</title>
    <link rel="stylesheet" href="../style/staff.css">
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Staff Dashboard</h1>
            <h1> <a href="logout.php"> Log out</a> </h1>
        </div>
        <ul class="list">
                <li> <a href="#" >Users</a> </li>
                <!-- <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li> -->
            </ul>
        <div class="table">
            <?php
            
            if($_SESSION['email']){
            $sql = "SELECT id, student_name, student_email,student_contact_num FROM student";
            $result = $conn->query($sql);
            
            if($result->num_rows >0){
                echo "<table class='table' > <tr> <th>ID</th> <th>NAME</th>  <th>EMAIL</th>  <th>Contact Number</th> </tr>";
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>" . $row['id'] . "</td> <td>" . $row['student_name'] . "</td> <td>" . $row['student_email']  . "</td> <td>" . $row['student_contact_num']."</td> </tr>";
                } echo "</table>";
            }
            else {
                echo "0 results";
            }
            
            
            // Log out
            
            if(isset($_POST['logout'])){
                session_destroy();
                header("login.php");
            }
            }?>
            
        
        </div>
    </div>
</body>
</html>