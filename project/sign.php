<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        div {
            text-align: center;
            background-color: #ffffff;
            border: 2px solid #0074b2;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
        }
        h1 {
            color: #0074b2;
            font-size: 36px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        input[type="submit"] {
            background-color: #0074b2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            margin: 10px;
        }
        input[type="submit"]:hover {
            background-color: #005181;
        }
    </style>
</head>
<body>
    <div>
        <h1>Sign Up</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="submit" name="who" value="Buyer">
            <input type="submit" name="who" value="Seller">
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $role = $_POST["who"];
        if ($role == "Buyer") {
            header("Location: buylogin.php");
        } elseif ($role == "Seller") {
            header("Location: selllogin.php");
        }
    }
    ?>
</body>
</html>
