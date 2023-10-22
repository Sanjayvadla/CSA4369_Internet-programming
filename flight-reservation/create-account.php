<!DOCTYPE html>
<html>
<head>
    <title>Create Account - Flight Reservation System</title>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            font-size: 24px;
        }

        /* Additional Styles for Registration Form */
        form {
            margin-top: 20px;
        }

        label {
            font-size: 16px;
            font-weight: bold;
        }

        input[type="text"], input[type="password"], input[type="tel"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2674a6;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Create Account</h1>
        <form id="registrationForm" action="create-account.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="mobile">Mobile Number:</label>
            <input type="tel" id="mobile" name="mobile" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Create Account">
        </form>
    </div>



<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST["username"];
    $password=$_POST["password"];
    $mobilenum=$_POST["mobile"];
    $email=$_POST["email"];


    $conn = new mysqli("localhost","root","","sanjay");

    if($conn->connect_error){
        die("connection error : ".$conn->connect_error);
    }
    $sql="INSERT INTO flightreg (name, mobilenum, email, password) VALUES('$name','$mobilenum', '$email', '$password')";
    if($conn->query($sql) === TRUE) {
        $result="New Record Inserted Successfully";
        echo "<html>";
        echo "<body>";
        echo "<script>";
        echo "window.location.href = 'userpanel.php';";
        echo "</script>";
        echo "</body>";
        echo "</html>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
}

?>

</body>
</html>
