<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url("https://www.codingnepalweb.com/demos/create-glassmorphism-login-form-html-css/hero-bg.jpg"), #000;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 3px solid #140101;
            padding: 8px;
            text-align: left;
            color: aliceblue;
        }
    </style>
</head>
<body>

<h1>EMPLOYEE DETAILS</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Employee ID</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Branch</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dbms";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Fetch data from database
        $sql = "SELECT name,EMP_ID,Email,Gender,phone,Branch,password FROM users";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["EMP_ID"]."</td>";
                echo "<td>".$row["Email"]."</td>";
                echo "<td>".$row["Gender"]."</td>";
                echo "<td>".$row["phone"]."</td>";
                echo "<td>".$row["Branch"]."</td>";
                echo "<td>".$row["password"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No employees found</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>

</body>
</html>