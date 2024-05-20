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
$AID=$_REQUEST['AD'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$password = $_REQUEST['pass'];
$stmt = "INSERT INTO admin VALUES('$name','$AID','$email','$phone','$password')";
$result = mysqli_query($conn,$stmt);
echo "<script>" . "window.location.href='../DBMS/admin-view.php'" . "</script>";
$conn->close();
?>