<!DOCTYPE html>
<html>
<head>
    <title>Search Flight - Flight Reservation System</title>
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

        /* Additional Styles for Search Form */
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
        <h1>Search Flight</h1>
        <form action="search-results.html" method="get">
            <label for="from">From:</label>
            <input type="text" id="from" name="from" required>

            <label for="to">To:</label>
            <input type="text" id="to" name="to" required>

            <input type="submit" value="Search Flights">
        </form>
    </div>
</body>
</html>
