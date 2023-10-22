<!DOCTYPE html>
<html>
<head>
  <title>Customer Home - Painting Rating & Reviews</title>
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
    .image-list {
      display: flex;
      flex-wrap: wrap;
    }
    .image-item {
      margin: 10px;
      width: 200px;
      cursor: pointer;
    }
    .image-item:hover {
      transform: scale(1.2);
    }
    .image {
      width: 100%;
      height: auto;
    }
    .review-form {
      margin-top: 20px;
      border-top: 1px solid #ccc;
      padding-top: 10px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
    }
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group button {
      margin-top: 10px;
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
    .logout-button {
      text-align: center;
    }
    .larger-image {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      text-align: center;
      z-index: 1;
    }
    .larger-image img {
      max-width: 90%;
      max-height: 80%;
      margin-top: 5%;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Customer Home</h1>
  </div>

  <div class="container">
    <div class="logout-button">
      <button id="logout">Logout</button>
    </div>
    
    <div class="image-list">
      <div class="image-item" onclick="showLargerImage('painting2.jpg')">
        <img class="image" src="painting2.jpg" alt="Image 1">
        <div class="review-form">
          <form id="review-form-1">
            <div class="form-group">
              <label for="review-1">Add a Review:</label>
              <textarea id="review-1"></textarea>
            </div>
            <div class="form-group">
              <button type="submit">Submit Review</button>
            </div>
          </form>
        </div>
      </div>
      <!-- Add more images and review forms as needed -->
    </div>
    <div class="image-list">
      <div class="image-item" onclick="showLargerImage('painting3.jpg')">
        <img class="image" src="painting3.jpg" alt="Image 1">
        <div class="review-form">
          <form id="review-form-1">
            <div class="form-group">
              <label for="review-1">Add a Review:</label>
              <textarea id="review-1"></textarea>
            </div>
            <div class="form-group">
              <button type="submit">Submit Review</button>
            </div>
          </form>
        </div>
      </div>
      <!-- Add more images and review forms as needed -->
    </div>
  </div>

  <div class="larger-image" id="larger-image-container">
    <img id="enlarged-image" src="" alt="Enlarged Image">
    <button id="close-image" onclick="hideLargerImage()">Close</button>
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
