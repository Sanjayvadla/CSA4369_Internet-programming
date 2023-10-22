<!DOCTYPE html>
<html>
<head>
  <title>Painting Rating & Reviews</title>
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
    .slideshow-container {
      position: relative;
      max-width: 500px;
      margin: auto;
    }
    .mySlides {
      display: none;
      width: 100%;
    }
    .mySlides img {
      width: 100%;
      height: auto;
    }
    .slide-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.6);
      color: white;
      border: none;
      border-radius: 3px;
      padding: 10px 15px;
      cursor: pointer;
    }
    .slide-button.prev {
      left: 0;
    }
    .slide-button.next {
      right: 0;
    }
    .menu {
      text-align: center;
    }
    .menu a {
      display: inline-block;
      margin: 10px;
      text-decoration: none;
      font-size: 18px;
    }
    .menu a:hover {
      color: red;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Painting Rating & Reviews</h1>
    <div class="menu">
      <a href="admin.php">Admin</a>
      <a href="customerlogin.php">Customer</a>
      <a href="ownerlogin.php">Owner</a>
    </div>
  </div>

  <div class="container">


    <div class="slideshow-container">
      <div class="mySlides">
        <img src="painting4.jpg" alt="Painting 1">
      </div>
      <div class="mySlides">
        <img src="painting2.jpg" alt="Painting 2">
      </div>
      <div class="mySlides">
        <img src="painting3.jpg" alt="Painting 3">
      </div>
      <!-- Add more images here -->
      <button class="slide-button prev" onclick="plusSlides(-1)">&#8249;</button>
      <button class="slide-button next" onclick="plusSlides(1)">&#8250;</button>
    </div>

    
  </div>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides((slideIndex += n));
    }

    function showSlides(n) {
      let i;
      const slides = document.getElementsByClassName("mySlides");

      if (n > slides.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = slides.length;
      }

      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }

      slides[slideIndex - 1].style.display = "block";
    }
  </script>
</body>
</html>
