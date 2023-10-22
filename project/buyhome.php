<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        button {
            background-color: #0074b2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        button a {
            color: #fff;
            text-decoration: none;
        }
        button:hover {
            background-color: #005181;
        }
        .cake-card {
            background-color: #fff;
            border: 1px solid #ccc;
            margin: 20px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .cake-image {
            max-width: 400px;
            display: block;
            margin: 0 auto;
        }
        .cake-details {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "sanjay");

    if ($conn->connect_error) {
        die("Connection error: " . $conn->connect_error);
    }

    $sql = 'SELECT * FROM cake';

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='cake-card' width='100px'>";
                echo "<img class='cake-image' src='" . $row["img"] . "' alt='Cake Image'>";
                echo "<div class='cake-details'>";
                echo "<p>" . $row["details"] . "</p>";
                echo "<p>Rate: $" . $row["rate"] . "</p>";
                echo "<p> number: " . $row["number"]."</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No results found.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html> 