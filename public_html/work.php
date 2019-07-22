<html>
<head>
  <title>Smart Mirror</title>
  <meta content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="work.css">
</head>

<body>

<!-- Navigation Bar Container -->
<div id="navbar">
  <a class="link-3" href="index.php">Home</a>
  <a class="link-3" href="about.php">About</a>
  <a class="active" href="work.php">Projects</a>
  <a class="link-3" href="photos.php">Photos</a>
</div>

<!-- Script for Navigation Bar -->
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

<!-- Background image features div container -->
<div class="parallax"></div>

<div style="height:200px;background-color:#b30000;font-size:26px";>
For any inquiries or information about the products please enter your
contact information. Thanks!

<form action="process.php" method="post">
 Enter your name <input name = "name" type="text">
 <input type="submit">
</form>
</div>

<div class="parallax"></div>

  <?php

$people = array("Kyle", "Edwin", "AI");
print_r($people);

foreach ($people as $person){
  echo $person . ' ';
}

$numbers = array(5,3,7);
$sum = 0;

foreach ($numbers as $number){
  $sum = $sum + $number;
}
  echo $sum;


/* Comment
$loggedIn = true;

if ($loggedIn == true) {
  echo "You are logged in \n";
} else {
  echo "Please log in \n";
}

$myVar = "This is my variable \n";
$name = "Kyle";
$number = 5;
$number2 = 3;
$sum = $number + $number2;

echo $myVar;
echo "Hello, " . $name;
*/

   ?>

 </body>
 </html>
