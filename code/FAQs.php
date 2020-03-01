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

    <!-- <div class="container">
    
    <div class="add-Question">
        <form class="form">
          <input type="text" class="title" placeholder="UR question" /> <br />
          
          <button id="button" onClick= "change()"></button>
        </form>
      </div>
    <!-- <button id ="button" >Click on me</button> 
    <p id="para" >Hello</p>
    </div>

    <script >
      function change(){
        const button = document.getElementById("button");
        const para = document.getElementById("para");

      if(para.style.display = "block"){
        para.style.display = "none";
      }
      else{
        para.style.display = "block";
      } 
      }
    
    </script> -->




<button onclick="myFunction()">Toggle</button>

<div id="mydiv">
<ul>
  <li>Hi</li>
  <li>yes</li>
  <li>no</li>
  <li>wee</li>
</ul>
</div>

<p><b>Note:</b> The element will not take up any space when the display property set to "none".</p>

<script>
function myFunction() {
  const mydiv = document.getElementById("mydiv");
  if (mydiv.style.display === "none") {
    mydiv.style.display = "block";
  } else {
    mydiv.style.display = "none";
  }
}
</script>



















    <!-- <div class="container">
      <div class="Add-question">
        <form action="FAQs.php" method="POST">
        <label for="question"> <strong> Type Here... </strong>  </label><br>
        <textarea id ="question" placeholder="Add Question" name="q"> </textarea>
        <br>
        <input type="submit" name="submit" class="submit">
        </form>
      </div>

      <div class="list">
        <ul>
          <li class="item"><a href="./apply.php"> Apply </a></li>
          <li class="item"><a href="./courses.php"> Programmes </a></li>
          <li class="item"><a href="./Dates.php"> Open days Dates </a></li>
          <li class="item"><a href="./activities.php"> Activities </a></li>
          <li class="item"><a href="./FAQs.php"> FAQs </a></li>
          <li class="item"><a href="./register.php"> register </a></li>

        </ul>
      </div>
      </div>
       -->
  </body>
</html>
