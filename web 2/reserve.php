<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}

  $firstname = $_REQUEST["firstname"];
  $lastname = $_REQUEST["lastname"];
  $mail = $_REQUEST["mail"];
  $guests = $_REQUEST["guests"];
  $indate = $_REQUEST["indate"];
  $outdate = $_REQUEST["outdate"];

$sql = "INSERT INTO reserve (firstname, lastname, mail, guests, indate, outdate)
VALUES ('$firstname','$lastname','$mail','$guests','$indate','$outdate')";

if (mysqli_query($conn, $sql)) {
    echo "<h1 style='color:green;text-align:center;''>Your request has been recorded</h1>";
    header("refresh:1;/reserve.html");
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
mysqli_close($conn);

 ?>
