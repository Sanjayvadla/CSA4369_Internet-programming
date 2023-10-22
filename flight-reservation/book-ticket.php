<!DOCTYPE html>
<html>
<head>
    <title>Book Ticket - Flight Reservation System</title>
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

        /* Additional Styles for Booking Form */
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
        <h1>Book Ticket</h1>
        <form id="searchForm">
            <label for="from">From:</label>
            <input type="text" id="from" name="from" required>

            <label for "to">To:</label>
            <input type="text" id="to" name="to" required>

            <input type="submit" value="Search Flights">
        </form>

        <div id="flightDetails">
            <!-- Flight details will be displayed here after the search -->
        </div>
    </div>

    <script>
        document.getElementById("searchForm").addEventListener("submit", function (e) {
            e.preventDefault();
            // Perform a search for flights based on 'from' and 'to' values
            // You can use JavaScript to fetch flight details from your backend
            // Display flight details in the 'flightDetails' div
            const from = document.getElementById("from").value;
            const to = document.getElementById("to").value;

            // For this example, we'll display a dummy flight
            const flightDetails = `
                <h2>Flight Details</h2>
                <p>Flight from ${from} to ${to}</p>
                <p>Flight number: FL123</p>
                <p>Departure time: 09:00 AM</p>
                <p>Arrival time: 11:00 AM</p>
                <p>Price: $200</p>
                <!-- Wrap the button in an anchor element with the href attribute -->
                <a href="ticket-payment.php">
                    <button id="bookButton">Book This Flight</button>
                </a>
            `;

            document.getElementById("flightDetails").innerHTML = flightDetails;
        });
    </script>
</body>
</html>
