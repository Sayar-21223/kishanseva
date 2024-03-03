<?php
include("../Functions/functions.php");

// Check if the user is logged in and get their phone number from the session or any other source

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Loan Information</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .loan-info {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .loan-info p {
            margin: 0 0 10px;
        }

        .loan-info p:last-child {
            margin-bottom: 0;
        }
        
:root {
     --green: #282525;
     --black: #444;
     --light-color: #777;
     --text-shadow: #444;
     --box-shadow: 0.5rem 0.5rem 0 rgba(22, 160, 133, 0.2);
     --border: 0.2rem solid var(--green);
}


* {
     margin: 0;
     box-sizing: border-box;
     font-family: "Poppins", sans-serif;
     font-size: 17px;
}
          * {
               margin: 0;
               box-sizing: border-box;
          }


          .header {
               position: sticky;
               z-index: 100;
               top: 0rem;
               height: 69px;
               width: 100%;
               background-color: #00b300;
          }

          .select_element {
               width: 20px;
               background-color: transparent;
               border: none;
               text: none;
          }


          #logo {
               height: 66px;
               width: 100px;
               text-align: left;
               float: left;
          }

          .search_input {
               float: left;
               margin-left: 50px;
               margin-top: 20px;

          }

          .proicon {
               float: right;
               margin-right: 10px;
               margin-top: 20px;
          }

          .dropdown {
               float: right;
               margin-right: 35px;
               margin-top: 20px;

          }

          .options {
               color: yellow;
               margin-left: 20px;
               /* width: 25px; */
               margin-right: 50px;
               display: inline;
          }

          .icon2 {
               float: right;
               margin-right: 10px;
               margin-top: 20px;

          }

          .loginz {
               float: right;
               margin-right: 20px;
               margin-top: 20px;
          }

          .headerdown {
               margin-left: 15%;
               height: 50px;
               width: 80%;
          }

          .makeitgreen {
               color: #00b300;
          }

          .sel1 {
               color: green;
               float: left;
               margin-top: 3px;
          }

          .sel2 {
               border-color: green;
               color: green;
               float: left;
               margin-left: 600px;
               margin-top: 3px;
          }

          .sel3 {
               font-size: 20px;
               margin-top: 3px;
               float: right;
               margin-right: 5px;
          }



          #input1 {
               width: 220px;
               border: none;
          }


          #input1:active {
               background-color: tomato;
          }


          .wrapper {
               display: grid;
               grid-template-columns: 20% 20% 20% 20%;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               margin-left: 30px;
          }

          .inputwrapper {
               float: left;
               border-style: double;
               text-align: center;
               margin-left: 80px;
               width: 280px;
               margin-bottom: 20px;
               clear: auto;
          }


          .inputwrapper:last-child {
               margin-right: 30px;
          }

          .addtocart {
               background-color: #FFD700;
          }

          .numberinput {
               width: 35px;
          }

          .content_item {
               text-align: center;
               justify-content: center;
          }

          .etc {
               margin-left: -40px;
               min-width: 90px;
               font-size: 20px;
          }

          .crop_items {
               color: green;
          }

          .footer {
               height: 70px;
               width: 100%;
               clear: both;
          }

          .payment {
               float: left;
               margin-left: 520px;
               font-size: 20px;
               margin-top: 25px;
          }

          .cash {
               float: left;
               margin-top: 0px;
               margin-left: 20px;
               margin-right: 20px;
          }

          .paytm {
               float: left;
          }

          .morefooter {
               height: 100px;
               width: 100%;
               background-color: white;

          }

          .call {
               float: left;
               font-size: 20px;
               margin-left: 150px;
               margin-top: 25px;
          }

          .gmail {
               margin-top: 10px;
               float: right;
               margin-right: 150px;

          }


          .text {
               float: left;
               margin-left: 735px;
               margin-top: -50px;
          }

          body {
               margin: 0;
               padding: 0;
               font-family: sans-serif;
               background-size: cover;
               background-position: center;
               box-sizing: border-box;
          }

          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }

          .lost {
               /* <font-fam></font-fam>; */
               color: black;
               text-align: center;
               height: 8%;
               margin-top: 150px;
               border-radius: 30px;
               font-size: 30px;
               /* margin-top: 5em; */
               background-color: olive;
               margin-top: 120px;
               margin: auto;
          }

          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }


          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-top: 2%;
               text-align: center;
               border-radius: 25px;
          }


          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }


          .lost {
               font-family: Verdana, Geneva, Tahoma, sans-serif;
               color: black;
               text-align: center;
               margin-top: 220px;
               margin: auto;
          }


          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }

          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-right: 12%;
               background-color: #00b300;
               text-align: center;
               /* border-radius: 25px; */
               width: 9%;
               height: 8%;
               margin-top: -5%;
               padding: 5px;

          }

          .items {
               width: 100%;
               margin: auto;
               height: auto;
          }

          .productbox {
               float: left;
               margin: 15px;
               margin-left: 30px;
               padding: 15px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 10px;
          }

          .productbox:hover {
               float: left;
               margin: 25px;
               margin-left: 30px;
               padding: 20px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 5px;
               font-weight: bolder;
               height: 325px;
               width: 240px;

          }

          .slideshow {
               margin-top: 10px;
               margin-left: 100px;
               margin-bottom: 20px;
               float: left;
               border-style: solid;
          }

          #navbar {

               padding: 20px;
               color: green;
               text-decoration: none;
               margin: 20px;
               font-size: 25px;
               padding-top: 10px;
          }

          #navbar:hover {
               padding: 20px;
               color: green;
               text-decoration: underline;
               margin: 15px;
               font-size: 25px;
               font-weight: bolder;
               padding-top: 10px;
          }

          #navbar i {
               padding-right: 1%;
          }

          .time {
               background-color: red;
               /* margin-left: 20px; */
          }

          .whats {
               text-align: center;
               margin-left: 30%;
          }

          .f1 {
               float: left;
               background-color: #fff;
               border: 1px solid red;
               height: 200px;
               border-radius: 50%;
               width: 200px;
               padding-top: 20px;
               border-style: solid;
               background-image: url("../Images/Website/f2.jpg");
               background-size: 200px 200px;
               background-repeat: no-repeat;
               border-color: #000;
               /* opacity: 5%; */
          }

          .t1 {
               padding-top: 70px;
               text-align: center;
               justify-items: center;
               color: black;
               font-weight: bold;
          }

          .t5 {
               margin-top: -13px;
          }

          .t4 {
               margin-top: -13px;

          }

          .whatsnew {
               /* background-image: url("../Images/Website/back.jpeg"); */

               background-color: red;

          }

          .f2 {
               margin-left: 130px;
               margin-right: 150px;
          }

          .f3 {
               margin-right: 150px;

          }

          .f4 {
               margin-right: 150px;
          }



          .aligncenter {
               text-align: center;
          }

          .myfooter {
               background-color: #292b2c;
               color: goldenrod;
               margin-top: 15px;
          }

          a {
               color: goldenrod;
          }

          .navbar-inverse {
               background: #00cc00;
               color: black;
          }

          .navbar-inverse .navbar-brand,
          .navbar-inverse a {
               color: black;
          }

          .navbar-inverse .navbar-nav>li>a {
               color: clack;
          }

          .caros {
               margin-top: 30px;

          }

          hr {
               border: 0;
               height: 0.5px;
               clear: both;
               display: block;
               width: 99%;
               background-color: black;
               margin-left: 0.5em;
          }

          img {
               max-width: 100%;
               display: inline-block;
          }

          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }

          nav {
               background-color: #292b2c;
          }

          .navbar-custom {
               background-color: #292b2c;
          }

          /* change the brand and text color */
          .navbar-custom .navbar-brand,
          .navbar-custom .navbar-text {
               background-color: #292b2c;
          }

          .navbar-custom .navbar-nav .nav-link {
               background-color: #292b2c;
          }

          .navbar-custom .nav-item.active .nav-link,
          .navbar-custom .nav-item:hover .nav-link {
               background-color: #292b2c;
          }

          .firstimage {
               height: 500px;
               width: 100%;
          }

          .mybtn {
               border-color: green;
               border-style: solid;
          }

          .card {
               width: 100%;
               height: 100%;
               margin: 10px;
          }

          .right {
               display: flex;
          }

          .left {
               display: none;
          }

          .cart {
               /* margin-left:10px; */
               margin-right: -9px;
          }

          .profile {
               margin-right: 2px;

          }

          .login {
               margin-right: -2px;
               margin-top: 12px;
               display: none;
          }

          .searchbox {
               width: 60%;
          }

          .lists {
               display: inline-block;
          }

          .moblists {
               display: none;
          }

          .logins {
               text-align: center;
               margin-right: -30%;
               margin-left: 35%;
          }

          .blackgoldie {
               background-color: #292b2c;

          }
          .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        button {
            background-color: black;
            color: orangered;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        

    </style>
</head>
<body style="background-color: #ffff84;">
<nav class="navbar navbar-expand-xl ">
        <!-- <a href="#" class="navbar-brand">Academind</a> -->
        <div class=" flex-row-reverse left ">

            <div class="p-2">
                    <!-- <div class="icon2">
                <a href="CartPage.php"> <i class="fa" style=" color:green ;font-size:20px;margin-top:-20px;margin-bottom:20px;">&#61562;</i></a> -->
                    <!-- <span id="icon" style="color:green"> 5 </span>
            </div>  -->
            </div>
            <!-- <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;'></i></div> -->
            
        </div>
        <button class="navbar-toggler" data-toggle="collapse" style="margin-left:-20px;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;font-size:20px; "></i></span>
        </button>
        <a class="float-left" href="/A/index.html">
            <img src="logo_farm.png" class="float-left mr-2 moblogo" alt="Logo" style="height:110px; width: 200px">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">



            <div class="proicon">

                    <?php
                        if (!isset($_SESSION['phonenumber'])) {
                            echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '></div></a>";
                        }
                        ?>
            </div>

            <div class="list-group moblists">

                    <?php
                        if (isset($_SESSION['phonenumber'])) {

                            echo "<a href='FarmerProfile.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                            echo "<a href='Orders.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Orders</a>";
                            echo "<a href='logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                        } else {
                            echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '>Login</div></a>";
                        }
                        ?>
                    <div class='loginz' style="text-align:center;">
                        <?php getFarmerUsername(); ?>
                    </div>
            </div>
        </div>




        <div class=" flex-row-reverse right ">
            <div class="p-2 cart">
                    <div class='loginz'>
                        <?php getFarmerUsername(); ?>
                    </div>
            </div>
            
            <div class="p-2 cart">
            <div class='loginz'>
            <a style="color:#ffff84;text-decoration:none;" href='farmerHomepage.php'>Home</a>
            </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php
        // Step 1: Start the session to access session variables
// session_start();

// Step 2: Check if the user is logged in and get their phone number from the session
if(isset($_SESSION['phonenumber'])) {
    // Get the logged-in farmer's phone number
    $logged_in_phonenumber = $_SESSION['phonenumber'];

    // Step 3: Connect to your database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "impulse101"; // Your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 4: Calculate the date three months ago
    $threeMonthsAgo = date('Y-m-d', strtotime('-3 months'));

    // Step 5: Query to retrieve total transactions for the last three months for the logged-in farmer
    $sql = "SELECT SUM(total) AS total_transactions FROM orders WHERE transaction_date >= '$threeMonthsAgo' AND phonenumber = '$logged_in_phonenumber'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Step 6: Calculate the average of the total transactions for the last three months
        $row = $result->fetch_assoc();
        $total_transactions = $row['total_transactions'];
        $average = floor($total_transactions / 3);

        // Step 7: Check if the average is greater than 5000
        if ($average > 5000) {
            // Display the button
            echo "<h2>Your Average Of Last Three Months Is ₹$average</h2>";
            echo "<p>You Are Eligible To Apply For A Loan</p>";
            echo '<a href="loan.php"><button style="background-color:black;color:#f6b94f;">Apply Now</button></a>';
        } else {
            // Do not display the button
            echo "<h2>Your Average Of Last Three Months Is ₹$average</h2>";
            echo "<p>You Are Not Eligible To Apply For A Loan</p>";
        }
    } else {
        echo "<h2>No data found</h2>";
    }

    // Step 8: Close the database connection
    $conn->close();
} else {
    // If the user is not logged in, redirect them to the login page or display a message
    echo "Please log in to view this page.";
}

        ?>
    </div>
<div class="but" style="margin-left: 700px;">
    <button><a href="/kishanseva/FarmerPortal/farmerHomepage.php">Go Back</button>
</div>
</body>
</html>