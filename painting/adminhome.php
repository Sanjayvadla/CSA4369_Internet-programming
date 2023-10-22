<!DOCTYPE html>
<html>
<head>
  <title>Admin Home - Painting Rating & Reviews</title>
  <style>
    /* Add your CSS styles here */
    body {
      font-family: Arial, sans-serif;
    }
    .header {
      background-color: #007BFF;
      color: #fff;
      padding: 10px;
      text-align: center;
    }
    .container {
      margin: 20px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }
    .reviews {
      margin-top: 20px;
      border-top: 1px solid #ccc;
      padding-top: 10px;
    }
    .update-painting {
      margin-top: 20px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #007BFF;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .form-group button:hover {
      background-color: #0056b3;
    }
    .transaction {
      margin-top: 20px;
    }
    .logout-button {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Admin Home</h1>
  </div>

  <div class="container">
    <!-- Loading and Collecting Reviews -->
    <div class="reviews">
      <h2>Reviews</h2>
      <!-- Implement logic to display and collect reviews here -->
    </div>

    <!-- Updating the Webpage with New Paintings -->
    <div class="update-painting">
      <h2>Update Painting</h2>
      <div class="form-group">
        <label for="painting-name">Painting Name:</label>
        <input type="text" id="painting-name" required>
      </div>
      <div class="form-group">
        <label for="painting-image">Painting Image:</label>
        <input type="file" id="painting-image" required>
      </div>
      <div class="form-group">
        <button type="submit">Update Painting</button>
      </div>
    </div>

    <!-- Collecting Money Based on Package Duration -->
    <div class="transaction">
      <h2>Transaction</h2>
      <!-- Implement logic to collect money and specify the mode of transaction here -->
    </div>

    <!-- Logout Button -->
    <div class="logout-button">
      <button id="logout">Logout</button>
    </div>
  </div>

  <script>
     const logoutButton = document.getElementById('logout');
    const largerImageContainer = document.getElementById('larger-image-container');
    const enlargedImage = document.getElementById('enlarged-image');

    logoutButton.addEventListener('click', () => {
      // Redirect to the home page
      window.location.href = 'home.php';
    });

    function showLargerImage(imageUrl) {
      enlargedImage.src = imageUrl;
      largerImageContainer.style.display = 'block';
    }

    function hideLargerImage() {
      largerImageContainer.style.display = 'none';
    }
  </script>
</body>
</html>
