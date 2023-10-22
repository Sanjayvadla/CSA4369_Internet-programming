<!DOCTYPE html>
<html>
<head>
  <title>Owner Home - Painting Rating & Reviews</title>
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
    .submit-painting-form {
      max-width: 300px;
      margin: 0 auto;
    }
    .form-group {
      margin-bottom: 10px;
    }
    .form-group label {
      display: block;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group select {
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
    .painting-reviews {
      margin-top: 20px;
      border-top: 1px solid #ccc;
      padding-top: 10px;
    }
    .logout-button {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Owner Home</h1>
  </div>

  <div class="container">
    <!-- Submit Painting Form -->
    <h2>Submit Painting</h2>
    <div class="submit-painting-form">
      <form id="submit-painting-form">
        <div class="form-group">
          <label for="painting-name">Painting Name:</label>
          <input type="text" id="painting-name" required>
        </div>
        <div class="form-group">
          <label for="painting-image">Painting Image:</label>
          <input type="file" id="painting-image" required>
        </div>
        <div class="form-group">
          <label for="package">Choose Package:</label>
          <select id="package" required>
            <option value="basic">Basic Package</option>
            <option value="standard">Standard Package</option>
            <option value="premium">Premium Package</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit">Submit Painting</button>
        </div>
      </form>
    </div>

    <!-- View Painting Reviews -->
    <div class="painting-reviews">
      <h2>Your Painting Reviews</h2>
      <!-- Implement logic to display painting reviews here -->
    </div>

    <!-- Logout Button -->
    <div class="logout-button">
      <button id="logout">Logout</button>
    </div>
  </div>

  <script>
    const logoutButton = document.getElementById('logout');
    logoutButton.addEventListener('click', () => {
      // Redirect to the home page (home.php in this case)
      window.location.href = 'home.php';
    });
  </script>
</body>
</html>
