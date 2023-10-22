<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Flight Reservation System</title>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 10px;
        }

        .admin-panel {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            padding: 20px;
        }

        .main-content {
            flex: 1;
            padding: 20px;
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
    <div class="header">
        <h1>Admin Panel - Flight Reservation System</h1>
    </div>

    <div class="admin-panel">
        <div class="sidebar">
            <a href="#">Dashboard</a>
            <a href="#">Flight Schedule</a>
            <a href="#">Seat Availability</a>
            <a href="#">Fares</a>
            <a href="#">Reservations</a>
            <a href="#">Inventory</a>
            <a href="#">Reports</a>
        </div>

        <div class="main-content">
            <!-- Admin panel content goes here -->
            <h2>Welcome, Administrator</h2>
            <p>This is your admin panel for managing flight reservations. Please select an option from the sidebar to get started.</p>
        </div>
    </div>
</body>
</html>
