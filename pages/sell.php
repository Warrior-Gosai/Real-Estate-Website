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
        /* ===== Google Font Import - Poppins ===== */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');



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

        .container {
            position: relative;
            width: 100%;
            border-radius: 6px;
            padding: 30px;
            margin: 0 15px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .container header {
            position: relative;
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        .container header::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            height: 3px;
            width: 27px;
            border-radius: 8px;
            background-color: #4070f4;
        }

        .container form {
            position: relative;
            margin-top: 16px;
            min-height: 490px;
            background-color: #fff;
            overflow: hidden;
        }

        .container form .form {
            position: absolute;
            background-color: #fff;
            transition: 0.3s ease;
        }

        form.secActive .form.first {
            opacity: 0;
            pointer-events: none;
            transform: translateX(-100%);
        }

        .container form .title {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            font-weight: 500;
            margin: 6px 0;
            color: #333;
        }

        .container form .fields {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        .input-field label {
            font-size: 12px;
            font-weight: 500;
            color: #2e2e2e;
        }

        .input-field input,
        select {
            outline: none;
            font-size: 14px;
            font-weight: 400;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 0 15px;
            height: 42px;
            margin: 8px 0;
        }

        .input-field input :focus,
        .input-field select:focus {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
        }

        .input-field select,
        .input-field input[type="date"] {
            color: #707070;
        }

        .input-field input[type="date"]:valid {
            color: #333;
        }

        .container form button,
        .backBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 45px;
            max-width: 200px;
            width: 100%;
            border: none;
            outline: none;
            color: #fff;
            border-radius: 5px;
            margin: 25px 0;
            background-color: #4070f4;
            transition: all 0.3s linear;
            cursor: pointer;
        }

        .container form .btnText {
            font-size: 14px;
            font-weight: 400;
        }

        form button:hover {
            background-color: #265df2;
        }

        form button i,
        form .backBtn i {
            margin: 0 6px;
        }

        form .backBtn i {
            transform: rotate(180deg);
        }

        form .buttons {
            display: flex;
            align-items: center;
        }

        form .buttons button,
        .backBtn {
            margin-right: 14px;
        }

        @media (max-width: 750px) {
            .container form {
                overflow-y: scroll;
            }

            .container form::-webkit-scrollbar {
                display: none;
            }

            form .fields .input-field {
                width: calc(100% / 2 - 15px);
            }
        }

        @media (max-width: 550px) {
            form .fields .input-field {
                width: 100%;
            }
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
        <header>Sell Property</header>

        <form action="sell.php" method="POST" enctype="multipart/form-data">
        <div class="form first">
            <div class="details personal">
                <span class="title">Personal Details</span>
                <div class="fields">
                    <div class="input-field">
                        <label>Full Name</label>
                        <input type="text" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="input-field">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="input-field">
                        <label>Mobile Number</label>
                        <input type="number" name="mobile" placeholder="Enter mobile number" required>
                    </div>
                </div>
            </div>

            <div class="details ID">
                <span class="title">Property Details</span>
                <div class="fields">
                    <div class="input-field">
                        <label>Property Type</label>
                        <select name="property_type" required>
                            <option disabled selected>Select type</option>
                            <option>Home</option>
                            <option>Apartment</option>
                            <option>Lands</option>
                            <option>Others</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="Enter property address" required>
                    </div>

                    <div class="input-field">
                        <label>Property Size</label>
                        <input type="text" name="property_size" placeholder="Enter area of property" required>
                    </div>

                    <div class="input-field">
                        <label>Asking Price</label>
                        <input type="text" name="asking_price" placeholder="Enter selling price" required>
                    </div>

                    <div class="input-field">
                        <label>Built Year</label>
                        <input type="date" name="built_year" required>
                    </div>

                    <div class="input-field">
                        <label>No of Bedrooms</label>
                        <input type="number" name="bedrooms" placeholder="Enter total bedrooms" required>
                    </div>

                    <div class="input-field">
                        <label>Picture of Property</label>
                        <input type="file" name="property_image" required>
                    </div>
                </div>

                <div>
                    <input class="backBtn" type="submit" value="Submit" name="submit">
                </div>
            </div>
        </div>
    </form>
    </div>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    include("conn.php");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Capture form input data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $property_type = $_POST['property_type'];
    $address = $_POST['address'];
    $property_size = $_POST['property_size'];
    $asking_price = $_POST['asking_price'];
    $built_year = $_POST['built_year'];
    $bedrooms = $_POST['bedrooms'];

    // File upload handling
    $target_dir = "uploads/";  // Folder where images will be stored
    $target_file = $target_dir . basename($_FILES["property_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the file is a valid image
    if(isset($_FILES["property_image"])) {
        $check = getimagesize($_FILES["property_image"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
            echo "File is not an image.";
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (5MB max)
    if ($_FILES["property_image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "<div class='error-message'> Sorry, only JPG, JPEG, PNG & GIF files are allowed. </div>";
        $uploadOk = 0;
    }

    // Check if uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["property_image"]["tmp_name"], $target_file)) {
            echo "<div class='success-message'> The file " . htmlspecialchars(basename($_FILES["property_image"]["name"])) . " has been uploaded. </div>";
        } else {
            echo "<div class='error-message'> Sorry, there was an error uploading your file. </div>";
        }
    }

    // SQL to insert data into the database
    $sql = "INSERT INTO properties (name, email, mobile, property_type, address, property_size, asking_price, built_year, bedrooms, property_image) 
            VALUES ('$name', '$email', '$mobile', '$property_type', '$address', '$property_size', '$asking_price', '$built_year', '$bedrooms', '$target_file')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}

?>