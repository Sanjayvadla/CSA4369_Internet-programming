<!DOCTYPE html>
<html>
<head>
    <title>Seller Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        div {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            font-weight: bold;
        }
        input[type="number"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #0074b2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #005181;
        }
        p {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #0074b2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <p>Enter details</p><br><br>
        <form action="sell.php" method="post">
            <label for="num">Mobile Number:</label>
            <input type="number" name="num" id="num"><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password"><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['num'];
        $pass = $_POST['password'];

        // Create a connection
        $conn = new mysqli("localhost", "root", "", "sanjay");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Function to validate user credentials
        function validateUser($num, $password, $conn) {
            // Query the database to get the user's stored password
            $query = "SELECT password FROM sell WHERE mobilenum = '$num'";
            $result = $conn->query($query);
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $storedPassword = $row['password'];

                // Verify the provided password against the stored password hash
                if ($password === $storedPassword) {
                    return true; // Passwords match, user is valid
                }
            }

            return false; // Invalid username or password
        }

        if (validateUser($num, $pass, $conn)) {
            echo "<html>";
            echo "<body>";
            echo "<p>Click here to redirect to the seller page</p>";
            echo "<a href='sellhome.php'>Home</a>";
            echo "</body>";
            echo "</html>";
        } else {
            echo "Invalid username or password";
        }
        $conn->close();
    }
    ?>
</body>
</html>