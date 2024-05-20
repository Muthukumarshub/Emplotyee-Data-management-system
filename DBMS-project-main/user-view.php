<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Account | CodingNepal</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <div class="account-info">
      <h2>Account Information</h2>
      <div class="info-field">
        <label for="user-name">Name:</label> <p style="display: inline;" id="user-name"></p>
      </div> 
      <div class="info-field">
        <label for="user-name">EMP_ID:</label> <p style="display: inline;" id="user-id"></p>
      </div>
      <div class="info-field">
        <label for="user-email">Email:</label>
        <p style="display: inline;" id="user-email"></p>
      </div>
      <div class="info-field">
        <label for="user-gender">Gender:</label>
        <p style="display: inline;" id="user-gender"></p>
      </div>
      <div class="info-field">
        <label for="user-phno">Phone Number:</label>
        <p style="display: inline;" id="user-phno"></p>
      </div>
      <div class="info-field">
        <label for="user-branch">Branch:</label>
        <p style="display: inline;" id="user-branch"></p>
      </div>
      <button onclick="logout()">Logout</button>
    </div>
  </div>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dbms";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $email = $_GET['email'];
  $sql = "SELECT * FROM users where Email='$email'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  if ($result->num_rows > 0) {
    echo "<script>document.getElementById('user-name').innerHTML = '" . $row["name"] . "';</script>";
    echo "<script>document.getElementById('user-id').innerHTML = '" . $row["EMP_ID"] . "';</script>";
    echo "<script>document.getElementById('user-email').innerHTML = '" . $row["Email"] . "';</script>";
    echo "<script>document.getElementById('user-gender').innerHTML = '" . $row["Gender"] . "';</script>";
    echo "<script>document.getElementById('user-phno').innerHTML = '" . $row["phone"] . "';</script>";
    echo "<script>document.getElementById('user-branch').innerHTML = '" . $row["Branch"] . "';</script>";

  } 
  else {
    echo "<tr><td colspan='6'>No employees found</td></tr>";
  }
  $conn->close();
  ?>
   <script>
    function logout() {
      // Handle logout (e.g., clear session, redirect to login page)
      window.location.href = 'index.html';
    }
  </script>
</body>
</html>