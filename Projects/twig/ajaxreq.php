<?php

$servername = "localhost";
$username = "username";
$password = "password";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);
//
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "username";
    $password = "password";


    $name = htmlspecialchars(trim($_POST["username"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $comment = htmlspecialchars(trim($_POST["comment"]));
    // Check if form fields values are empty

    if(!empty($name) && !empty($comment) && !empty($email)) {
        echo "<p>Hi, <b>$name</b>. Your username been received successfully.<p>";
          echo "<p>Hi, <b>$email</b>. Your email been received successfully.<p>";
        echo "<p>Here's the comment that you've entered: <b>$comment</b></p>";
    } else {
        echo "<p>Please fill all the fields in the form!</p>";
    }
} else {
    echo "<p>Something went wrong. Please try again.</p>";
}
?>
