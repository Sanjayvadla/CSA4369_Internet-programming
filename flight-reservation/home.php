<!DOCTYPE html>
<html>
<head>
    <title>Flight Reservation System</title>
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

        .links {
            background-color: #3498db;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 20px; /* Added padding to create space between links */
        }

        .links a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .container {
            max-width: 420px;
            margin: 0;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .flight-section {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            font-size: 24px;
        }

        /* Additional Styles */
        form {
            margin-top: 20px;
        }

        label {
            font-size: 16px;
            font-weight: bold;
        }

        .search-bar {
            display: flex;
            justify-content: space-between;
        }

        .search-bar input[type="text"] {
            flex: 1;
            padding: 10px;
            margin: 10px 5px;
        }

        .search-bar input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .search-bar input[type="submit"]:hover {
            background-color: #2674a6;
        }

        /* Continuous scrolling images */
        .image-container {
            max-width: 400px; /* Set the maximum width for the images */
            margin: 0 auto;
        }

        .scrolling-images img {
            width: 100%; /* Make the images the same size as the search box */
            margin: 0 10px; /* Adjust the spacing between images */
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Flight Reservation System</h1>
    </div>

    <div class="links">
        <a href="adminlogin.php">Admin Login</a>
        <a href="userlogin.php">User Login</a>
        <a href="aboutus.php">About Us</a>
        <a href="contactus.php">Contact Us</a>
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    </div>

    

    <div class="image-container">
        <div class="scrolling-images">
            <img src="cake1.jpg" alt="Cake 1">
            <img src="cake2.jpg" alt="Cake 2">
            <img src="cake3.jpg" alt="Cake 3">
        </div>
    </div>
</body>
</html>
