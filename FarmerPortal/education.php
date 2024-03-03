<?php
     include("../Functions/functions.php");
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Farmer Homepage</title>
      <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
      <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

      <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
      <script src="../portal_files/jquery.min.js.download"></script>
      <script src="../portal_files/popper.min.js.download"></script>
      <script src="../portal_files/bootstrap.min.js.download"></script>
      <script src="https://kit.fontawesome.com/125372cbb9.js" crossorigin="anonymous"></script>
      <style>
           @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");

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
                font-size: 20px;
           }


           .header {


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

           h3 {
                width: 100%;
                text-align: center;
                border-bottom: 1px solid #000;
                line-height: 0.1em;
                margin: 10px 0 20px;
           }

           h3 span {
                background: #fff;
                padding: 0 10px;
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

           .instagram {
                margin-top: 10px;
                float: left;
                margin-left: 420px;
           }

           .instaid {
                height: 10px;
                width: 100%;

           }

           .text {
                float: left;
                margin-left: 735px;
                margin-top: -50px;
           }

           .gmailid {
                float: right;
                margin-right: 80px;
                margin-top: -60px;
           }

           .copy {
                float: left;
                margin-top: -65px;
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


           h1 {
                font-family: 'Times New Roman', Times, serif;
                color: white;

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

           h2 {
                color: white;
                margin-top: 3em;
                text-align: center;

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


           h1 {
                font-family: 'Times New Roman', Times, serif;
                color: white;

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

           h2 {
                color: white;
                margin-top: 3em;
                text-align: center;

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
                color: black;
                text-decoration: none;
                margin: 20px;
                font-size: 25px;
                padding-top: 10px;
                position: relative;
           }

           /* #navbar:hover {
padding: 20px;
color: orangered;
text-decoration: underline;
margin: 20px;
font-size: 30px;
font-weight: bolder;
padding-top: 10px;
} */

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

           .pictus {
                margin-top: 200px;
                /* background-color: red; */
           }

           .pictus>img {
                height: 100px;

                width: 150px;
           }

           .imag1 {
                margin-top: 20px;
                margin-left: 180px;
           }

           .imag2 {
                margin-top: 20px;

                margin-left: 340px;

           }

           .imag3 {
                margin-top: 20px;

                margin-left: 350px;

           }

           .imag1_under {
                max-width: 250px;
                width: 100%;
                min-height: 100px;
                margin-left: 100px;
                text-align: center;
                font-size: 20px;

           }

           .imag2_under {
                max-width: 250px;
                width: 100%;
                min-height: 100px;
                margin-left: 290px;
                margin-top: 20px;
                text-align: center;
                font-size: 20px;
           }

           .imag3_under {
                max-width: 250px;
                width: 100%;
                font-size: 20px;

                min-height: 100px;
                margin-left: 290px;
                text-align: center;
           }

           .image {
                max-width: 200px;
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
           .heading {
  text-align: center;
  padding-bottom: 2rem;
  text-shadow: var(--text-shadow);
  text-transform: uppercase;
  color: var(--black);
  font-size: 2rem;
  letter-spacing: 0.4rem;
}
svg{
     width:260px;
     margin-right:80px;
}
 .box-container {
     padding: 2rem 9%;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
	gap: 2rem;
	margin-bottom: 75px;
  }
 .box-container .box {
     background-color:#f9b84d;
	border-radius: 2rem;
	padding: 1rem;
     height:340px;
  }
   .box-container .box i {
	color: var(--green);
	font-size: 2rem;
  }
   .box-container .box h2 {
	color: var(--black);
	font-size:1.5rem;
	margin-left: -320px;
     margin-top: 5px;
     font-weight:650;
  }


  .btn1 {
  display: inline-block;
  margin-top: 1rem;
  padding: 0.25rem 0.75rem; /* Decreased padding */
  border: var(--border);
  border-radius: 0.5rem; /* Decreased border radius */
  box-shadow: var(--box-shadow);
  color: var(--green);
  cursor: pointer;
  font-size: 0.9rem; /* Decreased font size */
}

.btn1 span {
  padding: 0.7rem 1rem;
  border-radius: 0.5rem;
  background: var(--green);
  color: #fff;
  margin-left: 0.5rem;
}
.btn1:hover {
  background: var(--green);
  color: #fff;
  text-decoration:none;
}
.btn1:hover span {
  color: var(--green);
  background: #fff;
  margin-left: 1rem;
}

      </style>
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
            <a class="float-left" href="#">
                    <img src="../images/website/logo.svg" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
            </a>
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
                            echo "<a href='C:\xampp\htdocs\kishanseva\FarmerPortal\Orders.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Orders</a>";
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
            <div class="dropdown p-2 settings ">
            <button class="btn  dropdown-toggle text-success" style="margin-top: -8px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Settings
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php
                            if (isset($_SESSION['phonenumber'])) {
                                echo "<a href='FarmerProfile2.php' class='dropdown-item' style='padding-right:-20px;'>Profile</a>";
                                echo "<a href='Transactions.php' class='dropdown-item' style='padding-right:-20px;'>Transaction</a>";
                                echo "<a href='logout.php' class='dropdown-item' style='padding-right:-20px;'>Logout</a>";
                            } else {
                                echo "<a href='../auth/FarmerLogin.php'> <div class='dropdown-item' style='padding-right:-20px;'>Login</div></a>";
                            }
                            ?>
                    </div>
            </div>
            <div class="p-2 cart">
            <div class='loginz'>
            <a style="color:#ffff84;text-decoration:none;" href='farmerHomepage.php'>Home</a>
            </div>
            </div>
        </div>
    </nav>
    <h2 style="margin:auto;color:black;">Agricultural Videos</h2>
 </head>

<body style="background-color: #ffff84;">
    
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "impulse101";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Array to store video URLs
$videoUrls = array();

// Retrieve products and their titles from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Extract product title and keywords
        $product_type = $row["product_type"];
        $product_keywords = $row["product_keywords"];

        // Use YouTube API to fetch relevant agricultural videos based on keywords
        $youtube_api_key = "AIzaSyBry8MxR-o0rRCszK_EzsYCQ8Zfs_-8x2o";
        $search_query = urlencode($product_type . ' agriculture' . ' educational' . ' farming' ); // Include 'agriculture' in the search query
        $youtube_url = "https://www.googleapis.com/youtube/v3/search?key=".$youtube_api_key."&q=".$search_query."&maxResults=8";
        $youtube_response = file_get_contents($youtube_url);

        // Check if the response is successful
        if ($youtube_response) {
            $youtube_data = json_decode($youtube_response, true);

            // Parse the YouTube data to extract video details
            if (isset($youtube_data['items'])) {
                // Loop through each item in the items array
                foreach ($youtube_data['items'] as $item) {
                    // Extract the videoId
                    $videoId = $item['id']['videoId'];
                    
                    // Construct the YouTube video URL
                    $videoUrl = 'https://www.youtube.com/embed/' . $videoId;
                    
                    // Store the video URL in the array
                    $videoUrls[] = $videoUrl;
                }
            }
        }
    }

    // Shuffle the array of video URLs
    shuffle($videoUrls);

    // Display the shuffled videos
    foreach ($videoUrls as $videoUrl) {
        // Display the embedded YouTube video
        echo "<div style='max-width: 560px; margin-bottom: 30px;margin:auto;margin-top: 30px'>";
        echo "<iframe width='560' height='315' src='$videoUrl' frameborder='0' allowfullscreen></iframe>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

    
</body>
</html>