function newQ() {
  // select items first
  const li = document.createElement("li");
  const question = document.getElementById("question-title").value;
  const text = document.createTextNode(question);
  li.appendChild(text);
  if (question === "") {
    console.log("you must input something");
  } else {
    document.getElementById("myList").appendChild(li); // add the question to the list
  }
  document.getElementById("question-title").value = ""; // set the input field to empty string after submitting

  // console.log(question);
}
// question.addEventListener("keyU");
function myFunction() {
  const mydiv = document.getElementById("mydiv");
  if (mydiv.style.display === "none") {
    mydiv.style.display = "block";
  } else {
    mydiv.style.display = "none";
  }
}
