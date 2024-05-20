<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_REQUEST['email'];
$password = $_REQUEST['pass'];
$stmt = "SELECT * FROM admin WHERE email = '$email' AND pass = '$password'";
$result = mysqli_query($conn,$stmt);
$num_row = mysqli_num_rows($result);
if ($num_row==1) {
    echo "<script>" . "window.location.href='../DBMS/admin-view.php'" . "</script>";
}
else {
    echo "<script>alert('Invalid email or password. Please try again.');</script>";
    echo "<script>" . "window.location.href='../DBMS/admin.html'" . "</script>";
}
$conn->close();
?>