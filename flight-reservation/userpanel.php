<!DOCTYPE html>
<html>
<head>
    <title>User Home - Flight Reservation System</title>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            padding: 20px;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 10px;
        }

        h1 {
            font-size: 24px;
        }

        /* Additional Styles for Sidebar Links */
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 10px 0;
        }

        .sidebar a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>User Dashboard</h2>
        <a href="book-ticket.php" target="contentFrame">Book Ticket</a>
        <a href="my-ticket.php" target="contentFrame">My Ticket</a>
        <a href="cancel-ticket.php" target="contentFrame">Cancel Ticket</a>
    </div>

    <div class="content">
        <div class="header">
            <h1>Welcome to Flight Reservation System</h1>
        </div>
        <iframe name="contentFrame" frameborder="0" width="100%" height="300%" src="search-flight.html"></iframe>
    </div>
</body>
</html>
