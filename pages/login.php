<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../styles.css" />
  <title>Buy Sell Property Online</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 1rem;
      color: #333;
    }

    .input-group {
      margin-bottom: 1.5rem;
    }

    .input-group label {
      display: block;
      margin-bottom: 0.5rem;
      color: #333;
    }

    .input-group input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
      color: #333;
    }

    .input-group input:focus {
      border-color: #007bff;
      outline: none;
    }

    .login-btn {
      width: 100%;
      padding: 0.75rem;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 1rem;
      cursor: pointer;
    }

    .login-btn:hover {
      background-color: #0056b3;
    }

    .error-message {
      color: red;
      font-size: 0.875rem;
      margin-top: 0.5rem;
      text-align: center;
    }

    /* Media Query for Responsive Design */
    @media (max-width: 480px) {
      .login-container {
        padding: 1.5rem;
      }

      h2 {
        font-size: 1.5rem;
      }

      .input-group input {
        font-size: 0.875rem;
      }

      .login-btn {
        font-size: 0.875rem;
      }
    }
  </style>
</head>

<body>

  <div class="login-container">
  <form action="login.php" method="POST" enctype="multipart/form-data">
    <h2>Login</h2>
    <div class="input-group">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Enter your email address">
    </div>
    <div class="input-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password">
    </div>
    <button class="login-btn" onclick="validateLogin()" name="submit">Login</button>
    <!-- <input type="submit" name="submit" value="Login" class="login-btn"> -->
    </form>
        
    <div id="error-message" class="error-message"></div>
    <p>Don't have an account? <a href="registration.php" id="registerLink">Register here</a></p>
  </div>
  

  <script>
    function validateLogin() {
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const errorMessage = document.getElementById('error-message');

      if (email === '' || password === '') {
        errorMessage.textContent = 'Both fields are required.';
        return;
      }
      // else if (email === 'email' && password === 'password') {   // Handle this Code For sucessful login
      //   errorMessage.textContent = '';
      //   alert('Login successful!');
      // }
      // else {
      //   errorMessage.textContent = 'Invalid email or password.';
      // }
    }
  </script>

</body>

</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  include("conn.php");

  // Check connection                
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT email, password FROM users WHERE email = '$email'and password='$password'";
  $result = $conn->query($query);
    if ($result->num_rows > 0) {
      header("Location: ../index.php"); 
      exit();  
    } else {
      echo "Error";
    }
  $conn->close();
}

?>