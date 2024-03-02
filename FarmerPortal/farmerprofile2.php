<?php
include("../Includes/db.php");
include("../Functions/functions.php");
$sessphonenumber = $_SESSION['phonenumber'];
$sql = "select * from farmerregistration where farmer_phone = '$sessphonenumber' ";
$run_query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run_query)) {
    $name = $row['farmer_name'];
    $phone = $row['farmer_phone'];
    $address = $row['farmer_address'];
    $pan = $row['farmer_pan'];
    $bank = $row['farmer_bank'];
    $state = $row['farmer_state'];
    $district = $row['farmer_district'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
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
     #staticEmail{
        text-align:center;
         border-style:solid;
        border-color:black;
        background-color:#fff;
        width:30%;
        font-size:20px;
        color:black; 
    } 
    .text {
        background-color: black;
        color: gold;
        font-size:18px;
    }
    input{
        text-align:center;
        /* border-style:solid;
        border-color:black; */
        background-color:#fff;
        width:50%;
        color:red;
    }
    .text {
        min-width: 180px !important;
        display: inline-block !important
    }

    .inp {
        width: 10%;
    }

    .s {
        width: 50%;
        margin-left: 25%;
        margin-right: 25%;
        margin-top:0%;
        margin-bottom:4%;
    
    }
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
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-transform: capitalize;
  transition: all 0.2s ease-out;
  text-decoration: none;
}
    body {
        margin: 0;
        padding: 0px;
        font-family: sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table td,
    .table th {
        padding: 8px 8px;
        border: 0.5px solid black;
        text-align: center;
        font-size: 16px;
        background-color: white;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid black;
    }

    .table th {
        background-color: black;
        color: goldenrod;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f5f5f5;
    }

    .myfooter {
        background-color: #292b2c;

        color: goldenrod;
        margin-top: 15px;
    }

    .aligncenter {
        text-align: center;
    }

    a {
        color: goldenrod;
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


    .mybtn {
        border-color: green;
        border-style: solid;
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
            width: 100%;
            padding-left: 270px;
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
    
<div class="container" >
    <br>
    <div class="text-center"><h2><b>Your Profile</h2></b></div>
        <div class="form">
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-user mr-2"></i>Full name</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $name?>">
            </div>
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-phone-alt mr-2"></i>Phone No.</span>
                </div>
                <input type="phonenumber" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" <?php echo $phone ?>">
            </div>
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-home mr-2"></i>Address</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $address ?>">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-globe-americas mr-2"></i>State</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" <?php echo $state ?>">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-globe-americas mr-2"></i>District</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" <?php echo $district ?>">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-pencil-alt mr-2"></i>Pan No.</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="  <?php echo $pan ?>">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-university mr-2"></i>Account No.</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $bank ?> ">
            </div> 
           
            <!-- <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="far fa-envelope mr-2"></i>Email id </span>
                </div>
                <input type="email" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" ">
            </div>  -->
        </div>
        
    </div>
</body>
</html>