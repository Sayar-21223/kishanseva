<?php
include("../Functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Government Subsidies</title>
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
               color: #000000;
               margin-top: 10px;
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

          .box-container {
               padding: 2rem 9%;
               display: grid;
               grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
               gap: 2rem;
               margin-bottom: 115px;
          }

          .box-container .box {
               background: #fff;
               border-radius: 2rem;
               padding: 1rem;
          }

          .box-container .box i {
               color: var(--green);
               font-size: 2rem;
          }

          .box-container .box h2 {
               color: var(--black);
               font-size: 1.5rem;
               margin-left: -320px;
               margin-top: 5px;
          }


          .btn1 {
               display: inline-block;
               margin-top: 1rem;
               padding: 0.25rem 0.75rem;
               /* Decreased padding */
               border: var(--border);
               border-radius: 0.5rem;
               /* Decreased border radius */
               box-shadow: var(--box-shadow);
               color: var(--green);
               cursor: pointer;
               font-size: 0.9rem;
               /* Decreased font size */
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
          }

          .btn1:hover span {
               color: var(--green);
               background: #fff;
               margin-left: 1rem;
          }




          /* For medium devices (e.g. tablets) */
          /* @media (min-width: 420px) {
    img {
    max-width: 48%;
    }
} */
          /* For large devices (e.g. desktops) */
          @media (min-width: 760px) {
               .resizing {
                    height: 500px;
               }
          }

          @media only screen and (min-device-width:320px) and (max-device-width:480px) {
               .image {
                    max-width: 48%;
               }

               .firstimage {
                    height: auto;
                    width: 90%;
               }

               .card {
                    width: 80%;
                    margin-left: 10%;
                    margin-right: 10%;

               }

               .col {
                    margin-top: 20px;
               }

               .right {
                    display: none;
                    background-color: #ff5500;
               }

               /* 
.settings{
margin-left:79%;
} */
               .left {
                    display: flex;
               }

               .moblogo {
                    display: none;
               }

               .logins {
                    text-align: center;
                    margin-right: 35%;
                    padding: 15px;
               }

               .searchbox {
                    width: 95%;
                    margin-right: 5%;
                    margin-left: 0%;
               }

               .moblists {
                    display: inline-block;
                    text-align: center;
                    width: 100%;
               }
          }

          .container {
               max-width: 800px;
               margin: 0 auto;
               padding: 20px;
          }

          /* Styling for the heading */
          h1 {
               font-size: 24px;
               margin-bottom: 20px;
          }

          /* Styling for the filter section */
          .filter {
               margin-bottom: 20px;
          }

          /* Styling for labels */
          label {
               font-weight: bold;
               margin-right: 10px;
          }

          /* Styling for select dropdowns */
          select {
               padding: 8px;
               font-size: 16px;
               border: 1px solid #ccc;
               border-radius: 5px;
          }

          /* Styling for subsidy list */
          .subsidy-list {
               /* Add your styles for the subsidy list here */
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
          <a class="float-left" href="/kishanseva/index.html">
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
               <div class="dropdown p-2 settings ">
                    <button class="btn  dropdown-toggle text-success" style="margin-top: -8px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Settings
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <?php
                         if (isset($_SESSION['phonenumber'])) {
                              echo "<a href='FarmerProfile2.php' class='dropdown-item' style='padding-right:-20px;'>Profile</a>";
                              echo "<a href='Transactions.php' class='dropdown-item' style='padding-right:-20px;'>Orders</a>";
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
     <h1 style="color: #000;margin-left:500px; font-size:50px;font-family:Poppins">Government Subsidies</h1>
     <form action="" method="post">
          <div class="container">
               <div class="row   p-2">
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                         <div class="text-center">
                              <h4 class="font-weight-bold
                              " style="color: #000000; margin-left:-157px">Select your region</h4>
                         </div>
                    </div>
                    <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 States">

                         <select class="p-2 shadow-lg" id="states" name="stateInput" onchange="state()" tabindex="1" style="border-radius: 6px; border:2px solid black; margin-left:120px">
                              <option value="0">Select State</option>
                              <option value="ANDAMAN & NICOBAR ISLANDS">ANDAMAN & NICOBAR ISLANDS</option>
                              <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                              <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                              <option value="ASSAM">ASSAM</option>
                              <option value="BIHAR">BIHAR</option>
                              <option value="CHANDIGARH">CHANDIGARH</option>
                              <option value="CHHATTISGARH">CHHATTISGARH</option>
                              <option value="DADRA AND NAGAR HAVELI">DADRA AND NAGAR HAVELI</option>
                              <option value="DAMAN AND DIU">DAMAN AND DIU</option>
                              <option value="DELHI">DELHI</option>
                              <option value="GOA">GOA</option>
                              <option value="GUJARAT">GUJARAT</option>
                              <option value="HARYANA">HARYANA</option>
                              <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                              <option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
                              <option value="JHARKHAND">JHARKAND</option>
                              <option value="KARNATAKA">KARNATAKA</option>
                              <option value="KERALA">KERALA</option>
                              <option value="LAKSHADWEEP">LAKSHADWEEP</option>
                              <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                              <option value="MAHARASHTRA">MAHARASHTRA</option>
                              <option value="MANIPUR">MANIPUR</option>
                              <option value="MEGHALAYA">MEGHALAYA</option>
                              <option value="MIZORAM">MIZORAM</option>
                              <option value="NAGALAND">NAGALAND</option>
                              <option value="ODISHA">ODISHA</option>
                              <option value="PUDUCHERRY">PUDUCHERRY</option>
                              <option value="PUNJAB">PUNJAB</option>
                              <option value="RAJASTHAN">RAJASTHAN</option>
                              <option value="SIKKIM">SIKKIM</option>
                              <option value="TAMIL NADU">TAMIL NADU</option>
                              <option value="TELANGANA">TELANGANA</option>
                              <option value="TRIPURA">TRIPURA</option>
                              <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                              <option value="UTTARAKHAND">UTTARAKHAND</option>
                              <option value="UTTARANCHAL">UTTARANCHAL</option>
                              <option value="WEST BENGAL">WEST BENGAL</option>

                         </select>
                    </div>
                    
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12 go">
                         <button class='btn btn-border-secondary mx-5 ' name='go' type='submit' style='color:black ;font-weight:50px; background-color: black;color:#FFD700'>Filter</button>
                    </div>
               </div>

          </div>
          </div>
     </form>
     <?php
     if (isset($_POST['go'])) {
          $stateInput = $_POST['stateInput'];
          
          echo "<br>";
          // Display subsidies for the selected state
          echo "<div class='container'>";
          echo "<h2>Subsidies for $stateInput</h2>";
          echo "<ul>";
          // Add subsidies for each state here
          switch ($stateInput) {
              case 'UTTAR PRADESH':
                  echo "<li>Mukhyamantri Saur Krishi Pump Yojana</li>";
                  echo "<li>State-sponsored scheme promoting the use of biofertilizers by providing subsidies and incentives to farmers.</li>";
                  break;
              case 'TAMIL NADU':
                  echo "<li>Amma Biofertilizer Scheme</li>";
                  echo "<li>Direct benefit transfer scheme providing financial assistance to small and marginal farmers, landless agricultural households, and vulnerable agricultural workers.</li>";
                  break;
              case 'WEST BENGAL':
                  echo "<li> Krishak Bandhu” (Assured Income) scheme: </li> ";
                  echo "<li> (a) An assured sum of ₹10,000/- per acre per year will be given to the farmers who have 1 acre or more cultivable land.";
                  echo "<li> (b) An assured sum of ₹4,000/- per acre per year will be given to the farmers who have less than 1 acre of cultivable land.";
              case 'GUJARAT':
                  echo "<li>Mukhyamantri Kisan Sahay Yojana</li>";
                  echo "<li>State-sponsored crop insurance scheme providing financial protection to farmers against crop loss due to natural calamities, pests, and diseases.</li>";
                  break;
              case 'ODISHA':
                  echo "<li>KALIA Scheme</li>";
                  echo "<li>Aims to promote investment in agriculture by providing various incentives and subsidies to farmers and agribusinesses.</li>";
                  break;
              case 'ANDAMAN & NICOBAR ISLANDS':
                  echo"<li>Planting material:- The government provides a 20% cost subsidy on all seeds and planting materials imported from mainland. The government also provides 50% of the cost in two installments for planting material and INM/IPM in Andaman and Nicobar Islands.</li>";
                  break;
              case 'ANDHRA PRADESH':
                  echo"<li>Hybrid crops seed like Maize, Jowar, Bajra, are supplied to the farmers on 50% subsidy limited to Rs 10000/-per qtl whichever is less and crops like Castor and Sunflower seed are supplied to the farmers on 50% subsidy limited to Rs 8000/- whichever is less per qtl.</li>";
                  break;
              case 'ARUNACHAL PRADESH':
                  echo"<li>Atma Nirbhar Krishi Yojana (ANKY) is an ambitious scheme launched by the Chief Minister of Arunachal Pradesh with the aim of promoting self-reliance in the agriculture sector. Under this scheme, farmers are provided with financial assistance and support for various agricultural activities.</li>";
                  break;
              case 'ASSAM':
                    echo"<li>MukhyaMantri Krishi Sa Sajuli Yojana (MMKSSY):- 
                    This scheme provides financial assistance of Rs 5,000 to small and marginal farmers to purchase farm tools. The scheme also encourages farmers to use scientific farm tools.</li>";
                    break;
               case 'BIHAR':
                    echo"<li>The scheme covers 108 types of agricultural equipment, ranging from trowels, spades, sickles to pump sets, ploughs, harvesters and more. The amount of subsidy varies from 40 percent to 80 percent depending on the category and type of equipment.</li>";
                    break;
               case 'CHANDIGARH':
                    echo"<li>Certified wheat seeds
                    In 2023–2024, farmers can receive a 50% subsidy on certified wheat seeds, up to ₹1,000 per quintal. The subsidy is available for a maximum of five acres per farmer. Priority is given to small-scale farmers (2.5–5 acres), marginal farmers (up to 2.5 acres), and scheduled caste farmers. The following certified wheat seeds are eligible for the subsidy:
                    Unnat PBW 343,
                    Unnat PBW 550,
                    PBW 1 Zinc,
                    PBW 725,
                    PBW 677,
                    HD 3086,
                    WH 1105,
                    PBW 1 Chapati,
                    PBW 766,
                    DBW 303</li>";
                    break;
               case 'CHHATTISGARH':
                    echo"<li>Kisan Samriddhi Yojana scheme provide grant to farmers on tube well mining and pump installation. The main objective of the scheme is to increase the productivity and crop intensity by making proper use of available ground water through tube wells and providing irrigation facilities to the crops.</li>";
                    break;
               case 'DADRA AND NAGAR HAVELI':
                    echo"<li>Distribution of fertilizer Subsidy of 40% on the cost of fertilizer is given to the SC/ST and marginal farmers in kind. The scheme is executed by District Panchayat. 2. Distribution of improved seeds 50% of the cost is given in kind to SC/ST and small and marginal farmers.</li>";
                    break;
               case 'DELHI':
                    echo"<li>Pradhan Mantri Krishi Sinchayee Yojana (PMKSY) has the vision of assured irrigation access; “Har Khet Ko Pani” and improving on farm water use efficiency; “More Crop Per Drop” in a focused manner with an “Integrated Value Chain” approach encompassing source creation, distribution, management, field application and extension activities.</li>";
                    break;
               case 'DAMAN AND DIU':
                    echo"<li>Daman & Diu Krishi Vikas Yojana to ensure better agricultural plan of the U.T. Achieve the goal of reducing
                    the yield gaps in important crops, through focused interventions, maximize returns to
                    the farmers in Agriculture and allied sectors, bring about quantifiable changes in the
                    production and productivity of various components of Agriculture sector by addressing
                    them in a holistic manner.</li>";
                    break;
               case 'GOA':
                    echo"<li>Vermicompost units and biogas are also subsidized. Paramparigat Krishi Vikas Yojana is being implemented in the State. Minimum assured price for Coconut – ₹ 10/-, Paddy – ₹ 20/- per Kg and ₹ 3000/- per tonne for Sugarcane is being provided by the Goa State Government.</li>";
                    break;
               case 'HARYANA':
                    echo"<li>Farmers will receive a subsidy of 40 to 50% on the purchase of agricultural equipment through the Haryana Krishi Yantra Anudan Yojana. Farmers will be encouraged to purchase modern agricultural machinery under this scheme.</li>";
                    break;
               case 'HIMACHAL PRADESH':
                    echo"<li>The subsidy component is available @ 20% with a maximum of Rs. 80,000/- per hectare for Non Scheduled Castes / other farmers and for S.C/S.T farmers it is 1,00,000/- per hectare (25%).
                    </li>";
                    break;
               case 'JAMMU AND KASHMIR':
                    echo"<li>Under the PMFME Scheme, support is given to the Individual Micro Food Processing Enterprises through credit-linked capital subsidy @ 35 % of the eligible project cost with a maximum ceiling of Rs. 10.0 lakh per unit.</li>";
                    break;
               case 'JHARKAND':
                    echo"<li>1.30 lakh every year. Government has started Meethi Kranti Yojana (Sweet Revolution Scheme) after the success of the blue revolution. Scheme is applicable to all 27 districts of the state to quadruple the farmer`s income by 2022. Jharkhand farmers will now get farm loan on zero percent interest rate.</li>";
                    break;
               case 'KARNATAKA':
                    echo"<li>The Government grants a subsidy up to 90 per cent for the Scheduled Castes and Scheduled Tribes and 80 per cent for other farmers.</li>";
                    break;
               case 'MADHYA PRADESH':
                    echo"<li>Farmers of Madhya Pradesh can do farming with new technology by getting subsidies under this scheme. Under this scheme, 30% to 50% grant money will be provided by the government to the farmers of MP. In this scheme, subsidies ranging from Rs 40,000 to Rs 60,000 will be given to the farmers.</li>";
                    break;
               case 'KERALA':
                    echo"<li>Ksheerasree offers assistance for hybrid napiier cultivation and dairy farmers. The scheme includes subsidies of 10,001–25,000 rupees for category C dairy farmers, 5,001–10,000 rupees for category B dairy farmers, and 25,001–50,000 rupees for category D dairy farmers.</li>";
                    break;
               case 'LAKSHADWEEP':
                    echo"<li>50,000/ ha 40% of cost in general areas and in the case of NE and Himalayan States, TSP areas, Andaman & Nicobar and Lakshadweep Islands, assistance will be @ 50% of cost.</li>";
                    break;
               case 'MAHARASHTRA':
                    echo"<li>Under the honorarium scheme, the state government will provide an additional amount of Rs 6000 along with Rs 6,000 per farmer per year from the central government. In this way, an amount of Rs 12,000 will be deposited in the farmer's account every year.</li>";
                    break;
               case 'MEGHALAYA':
                    echo"<li>Agriculture Schemes - Department of Agriculture, Government of Meghalaya. Distribution and sale of Agriculture Machineries such as Power Tillers, etc to farmers at subsidized rate. Subsidy on Power tillers, Reapers, Harvesters etc. 50% subsidy sale.</li>";
                    break;
               case 'MIZORAM':
                    echo"<li>The Sub-Mission on Agricultural Mechanization (SMAM) scheme provides subsidies for farmers in Mizoram:
                         Tractors and implements: 95% subsidy up to Rs. 9.50 lakh;
                         Paddy reapers: 100% subsidy up to Rs. 1.25 lakh;
                         Power tillers: 50% subsidy up to Rs. 85,000;
                         Mini power tillers: 50% subsidy up to Rs. 65,000;
                         Brushcutters: 50% subsidy up to Rs. 30,000;
                         Knapsack sprayers: 50% subsidy up to Rs. 750;
                         Rotavators: Rs. 50,400.
                         </li>";
                    break;
               case 'NAGALAND':
                    echo"<li>The 2021-21 MIDH program offers an integrated package with drip irrigation for Rs. 3.00 lakh/ha. It also offers up to Rs. 1.20 lakh/ha for expenditure on planting material, drip irrigation, and material cost for INM/IPM.</li>";
                    break;
               case 'PUDUCHERRY':
                    echo"<li>The Puducherry government offers several subsidies for farmers, including:
                         Paddy cultivation: ₹12,500 per hectare for paddy growers and ₹15,000 per hectare for SC farmers
                         Millets production: ₹5,000 per acre;
                         Pulses production: ₹2,000 per acre;
                         Sugarcane production: ₹10,000 per acre;
                         Cotton production: ₹10,000 per acre;
                         Production incentives: ₹8,000 per acre for two paddy growing seasons to promote traditional varieties of paddy. 
                         </li>";
                    break;
               case 'PUNJAB':
                    echo"<li>In the 2023-24 budget, the government has allocated Rs 9,331 crore for power subsidies to farmers and the agriculture sector.</li>";
                    break;
               case 'UTTARAKHAND':
                    echo"<li>Assistance @ Rs. 1.35 to 5.00 lakhs per grainage based on production capacity in different zones shall be extended with a sharing pattern of 50:50 to be shared by CSB & State.</li>";
                    break;
               case 'SIKKIM':
                    echo"<li>Mukhya Mantri Matsya Utpadan Yojana (MMMUY)
                    A 60% subsidy for trout and carp fish seeds</li>";
                    break;
               case '':
                    echo"<li></li>";
                    break;
              default:
                  echo "<li>No subsidies available for this state.</li>";
                  break;
          }
          echo "</ul>";
          echo "</div>";
      }
      ?>
  </body>
  
  </html>