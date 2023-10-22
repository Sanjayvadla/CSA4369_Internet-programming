<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        div {
            text-align: center;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            color: #0074b2;
            font-size: 36px;
        }
        form {
            display: flex;
            justify-content: center;
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
            margin: 5px;
        }
        input[type="submit"]:hover {
            background-color: #005181;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="submit" name="who" value="Buyer">
            <input type="submit" name="who" value="Seller">
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $role = $_POST["who"];
        if ($role == "Buyer") {
            header("Location: buy.php");
        } elseif ($role == "Seller") {
            header("Location: sell.php");
        }
    }
    ?>
</body>
</html>
