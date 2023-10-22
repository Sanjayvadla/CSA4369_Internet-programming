<!DOCTYPE html>
<html>
<head>
    <title>Seller Login</title>
    <style>
        body {
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            color: #0074b2;
            font-size: 36px;
            margin-top: 20px;
        }
        .container {
            text-align: center;
            background-color: #ffffff;
            border: 2px solid #0074b2;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            font-weight: bold;
            color: #0074b2;
        }
        input[type="text"],
        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
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
    </style>
</head>
<body>
    <h1>Seller Login Details</h1>
    <div class="container">
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name"><br>
            <label for="phnum">Phone Number:</label>
            <input type="number" name="phnum" id="phnum"><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password"><br>
            <label for="street">Street Address:</label>
            <input type="text" id="street" name="street" required><br>
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required><br>
            <label for="state">State:</label>
            <input type="text" id="state" name="state" required><br>
            <label for="zip">ZIP Code:</label>
            <input type="text" id="zip" name="zip" required><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $num = $_POST["phnum"];
        $password = $_POST["password"];
        $street = $_POST["street"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];

        $conn = new mysqli("localhost", "root", "", "sanjay");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO sell (name, mobilenum, password, street, city, state, zipcode)
        VALUES ('$name', '$num', '$password', '$street', '$city', '$state', '$zip')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New Record Inserted Successfully";
            header("Location: home.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>
