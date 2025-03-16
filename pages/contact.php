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
    $message = $_POST['message'];

    // Sanitize input before inserting into the database
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $message = $conn->real_escape_string($message);

    $query = "INSERT INTO contactus (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($query) === TRUE) {
        $responseMessage = "Thank you for contacting us. We will get back to you soon!";    
    } else {
        $responseMessage = "Error: " . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../styles.css" />
    <style>
        .container {
            width: 75%;
            margin: 0 auto;
            padding-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #007BFF;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }

        #button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        #button:hover {
            background-color: #0056b3;
        }

        .success-message {
            color: green;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        .error-message {
            color: red;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <nav>
        <div class="nav__header">
            <div class="nav__logo">
                <a href="#">Hosale.</a>
            </div>
            <div class="nav__menu__btn" id="menu-btn">
                <i class="ri-menu-3-line"></i>
            </div>
        </div>
        <ul class="nav__links" id="nav-links">
            <li><a href="../index.php">HOME</a></li>
            <li><a href="./buy.html">BUY</a></li>
            <li><a href="./sell.php">SELL</a></li>
            <li><a href="./contact.php">CONTACT</a></li>
            <li><a href="./login.php">LOGIN</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Contact Us</h1>
        <div class="form-container">
            <form id="contactForm" method="POST" action="">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <input id="button" type="submit" name="submit" value="Submit"/>
            </form>
            
            <?php
            // Display success or error message after form submission
            if (!empty($responseMessage)) {
                // Check if the message is a success or error
                if (strpos($responseMessage, 'Thank you') !== false) {
                    echo "<div class='success-message'>$responseMessage</div>";
                } else {
                    echo "<div class='error-message'>$responseMessage</div>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>