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

    .register-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
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

    .register-btn {
      width: 100%;
      padding: 0.75rem;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 1rem;
      cursor: pointer;
    }

    .register-btn:hover {
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
      .register-container {
        padding: 1.5rem;
      }

      h2 {
        font-size: 1.5rem;
      }

      .input-group input {
        font-size: 0.875rem;
      }

      .register-btn {
        font-size: 0.875rem;
      }
    }
  </style>
</head>

<body>

  <div class="register-container">
    <form action="registration.php" method="POST" enctype="multipart/form-data">
      <h2>Register</h2>
      <div class="input-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="name" placeholder="Enter your full name">
      </div>
      <div class="input-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address">
      </div>
      <div class="input-group">
        <label for="mobile">Mobile Number</label>
        <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number">
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
      </div>
      <button class="register-btn" onclick="validateRegistration()" name="submit">Register</button>
    </form>
    <div id="error-message" class="error-message"></div>
    <p>Already have an account? <a href="login.php" id="registerLink">Login here</a></p>
  </div>

  <script>
    function validateRegistration() {
      const fullname = document.getElementById('fullname').value;
      const email = document.getElementById('email').value;
      const mobile = document.getElementById('mobile').value;
      const password = document.getElementById('password').value;
      const errorMessage = document.getElementById('error-message');

      // Clear previous error messages
      errorMessage.textContent = '';

      // Basic validation for empty fields
      if (fullname === '' || email === '' || mobile === '' || password === '') {
        errorMessage.textContent = 'All fields are required.';
        return;
      }

      // Basic validation for email format
      const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
      if (!emailPattern.test(email)) {
        errorMessage.textContent = 'Please enter a valid email address.';
        return;
      }

      // Basic validation for mobile number format (simple pattern for demonstration)
      const mobilePattern = /^[0-9]{10}$/;
      if (!mobilePattern.test(mobile)) {
        errorMessage.textContent = 'Please enter a valid 10-digit mobile number.';
        return;
      }

      // Password length check
      if (password.length < 6) {
        errorMessage.textContent = 'Password must be at least 6 characters long.';
        return;
      }

      // If validation passes
      errorMessage.textContent = '';
      alert('Registration successful!');
    }
  </script>

</body>

</html>


<?php
include("conn.php");

// Check connection                
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$responseMessage = ""; // Initialize message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Sanitize input before inserting into the database
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $mobile = $conn->real_escape_string($mobile);
    $password = $conn->real_escape_string($password);

    $query = "INSERT INTO users (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";

    if ($conn->query($query) === TRUE) {
      header("Location: ../index.php"); 
      exit();     
    } else {
        $responseMessage = "Error: " . $conn->error;
    }
    $conn->close();
}
?>