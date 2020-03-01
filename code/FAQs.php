<!-- PHP BELOW -->
<!-- connect to database -->
<?php include "connect.php"; ?>
<?php

// if(isset($_POST['submit'])){
//   // echo "<br> linked successfully";
//   $question = $_POST['q'];
  // echo "<br> $question";

  // $query = "INSERT INTO faq(q_id, inquiry, student_id) VALUES(DEFAULT, '$question')";
  // if (mysqli_query($conn, $query)) {
  //   echo "New record created successfully";
  // } else {
  //   echo "Error: " . $query . "<br>" . mysqli_error($conn);
  // }

// }


?>






<!-- HTML BELOW -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>FAQs</title>
    <link rel="stylesheet" href="../style/FAQs.css">
  </head>
  <body>
  <h1 class="title">Departmental portal for computer science</h1>
    Frequent Asked questions here

   


<div class="container">
<!-- <button onclick="myFunction()">Toggle</button> -->

<div id="mydiv">
<h2>Have you got any question in UR head?</h2>
<input type="text" id="question-title" placeholder="Question title.. ">

<br>
<textarea type="text" id= "question" placeholder="type your question here.."> </textarea> <br>
<span class="Add-Q" onclick="newQ()"> <button> ADD </button>  </span> 


</div>

<div id="list">
<ul id="myList">
  
  </ul>
</div>


</div>



       <script src="./Faqs.js"></script>
  </body>
</html>
