<!DOCTYPE html>
<html>
<head>
    <title>Ticket Payment - Flight Reservation System</title>
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

        /* Additional Styles for Payment Form */
        form {
            margin-top: 20px;
        }

        label {
            font-size: 16px;
            font-weight: bold;
        }

        input[type="text"] {
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
        <h1>Ticket Payment</h1>
        <form action="payment-confirmation.html" method="post">
            <label for="card-number">Card Number:</label>
            <input type="text" id="card-number" name="card-number" required>

            <label for="expiry">Expiry Date:</label>
            <input type="text" id="expiry" name="expiry" required>

            <input type="submit" value="Make Payment">
        </form>
    </div>
</body>
</html>
