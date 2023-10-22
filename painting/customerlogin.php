<!DOCTYPE html>
<html>
<head>
  <title>Customer Login - Painting Rating & Reviews</title>
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
    .login-form {
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
    .links {
      text-align: center;
    }
    .links a {
      margin: 5px;
      text-decoration: none;
      color: #007BFF;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Customer Login</h1>
  </div>

  <div class="container">
    <div class="login-form">
      <form id="customer-login-form">
        <div class="form-group">
          <label for="customer-email">Email:</label>
          <input type="email" id="customer-email" required>
        </div>
        <div class="form-group">
          <label for="customer-password">Password:</label>
          <input type="password" id="customer-password" required>
        </div>
        <div class="form-group">
          <button type="submit">Login</button>
        </div>
      </form>
    </div>
    <div class="links">
      <a href="customer_signup.html">Create Account</a>
      <a href="forgot_password.html">Forgot Password</a>
    </div>
  </div>
</body>
</html>
