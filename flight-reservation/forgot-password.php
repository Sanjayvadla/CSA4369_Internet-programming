<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password - Flight Reservation System</title>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
        }

        input[type="email"] {
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
    <div class="form-container">
        <h1>Forgot Password</h1>
        <form action="password-reset-success.html" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="submit" value="Reset Password">
        </form>
    </div>
</body>
</html>
