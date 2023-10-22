<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        form {
            background-color: #fff;
            border: 1px solid #ccc;
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        input[type="file"], input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #0074b2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #005181;
        }
    </style>
</head>
<body>
    <form action="add.php" method="post">
        <label for="img">Image:</label>
        <input type="file" name="img" id="img"><br><br>
        <label for="cakedetails">Cake Details:</label>
        <textarea name="cakedetails" id="cakedetails"></textarea><br><br>
        <label for="rate">Rate:</label>
        <input type="text" name="rate" id="rate"><br><br>
        number : <input type="text" name="number">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $img = $_POST['img'];
        $details = $_POST['cakedetails'];
        $rate = $_POST['rate'];
        $num = $_POST['number'];

        $conn = new mysqli("localhost", "root", "", "sanjay");

        if ($conn->connect_error) {
            die("CONNECTION ERROR: " . $conn->connect_error);
        }

        $sql = "INSERT INTO cake (img, details, rate, number) VALUES ('$img','$details','$rate','$num')";
        if ($conn->query($sql) === TRUE) {
            echo "New Record Inserted Successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    ?>
</body>
</html>
