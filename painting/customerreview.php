<!DOCTYPE html>
<html>
<head>
  <title>Customer Review - Painting Rating and Reviews</title>
  <style>
    /* Add your CSS styles here */
  </style>
</head>
<body>
  <h1>Submit a Review</h1>
  <form id="review-form">
    <div class="form-group">
      <label for="rating">Rating (1-5):</label>
      <input type="number" id="rating" min="1" max="5" required>
    </div>
    <div class="form-group">
      <label for="review">Your Review:</label>
      <textarea id="review" required></textarea>
    </div>
    <div class="form-group">
      <button type="submit">Submit Review</button>
    </div>
  </form>
</body>
</html>
