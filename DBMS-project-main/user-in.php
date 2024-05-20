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
header('Location: user-view.php?email=' . $email);
$stmt = "SELECT * FROM users WHERE Email = '$email' AND password = '$password'";
$result = mysqli_query($conn,$stmt);
$num_row = mysqli_num_rows($result);
if ($num_row==1) {
    echo "<script>" . "window.location.href='../DBMS/user-view.php'" . "</script>";
}
else {
    echo "<script>alert('Invalid email or password. Please try again.');</script>";
    echo "<script>" . "window.location.href='../DBMS/user.html'" . "</script>";
}
$conn->close();
?>