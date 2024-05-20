<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_REQUEST['name'];
$EID=$_REQUEST['EID'];
$G = $_REQUEST['G'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$B = $_REQUEST['B'];
$password = $_REQUEST['pass'];
$stmt = "INSERT INTO users VALUES('$name','$EID','$email','$G','$phone','$B','$password')";
$result = mysqli_query($conn,$stmt);
echo "<script>" . "window.location.href='../DBMS/user.html'" . "</script>";
$conn->close();
?>