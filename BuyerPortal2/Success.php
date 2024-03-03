  <?php
     include("../Functions/functions.php");
     ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Success Product Added</title>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
       <a href="https://icons8.com/icon/83325/roman-soldier"></a>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
  </head>
  <style>
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


       /* .mybtn {
            border-color: #292b2c;
            border-style: solid;
            border-width: 3px;
            border-radius: 6px; 
        }*/
        .mybtn:hover{
            font-size: 20px;
            font-weight:650;
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
            padding: 10px 10px;
            border: 1px solid #ddd;
            text-align: center;
            font-size: 16px;
       }

       .table th {
            background-color: #292b2c;
            color: goldenrod;
       }

       .table tbody tr:nth-child(even) {
            background-color: #f5f5f5;
       }

       .goback {
            /* text-align:none; */
            width: 20%;
            /* margin-left:10%; */
            margin-right: -7%;
            margin-left: 0%
       }

       .placeorder {
            /* text-align:none; */
            width: 20%;
            margin-right: -3.5%;
       }

       .hey {
            width: 50%;
       }

       @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .table thead {
                 display: none;
            }

            .hey {
                 width: 100%;
            }

            .table,
            .table tbody,
            .table tr,
            .table td {
                 display: block;
                 width: 100%;
            }

            .table tr {
                 margin-bottom: 15px;
            }

            .table td {
                 text-align: right;
                 padding-left: 50%;
                 text-align: right;
                 position: relative;
            }

            .table td::before {
                 content: attr(data-label);
                 position: absolute;
                 left: 0;
                 width: 50%;
                 padding-left: 15px;
                 font-size: 15px;
                 font-weight: bold;
                 text-align: left;
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

            /* .pic{
        height:auto;
    } */

            /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */
            .goback {
                 text-align: center;
                 width: 50%;
                 margin-left: 25%;

                 /* margin-left:10%; */
                 margin-right: 0%;
            }

            .placeorder {
                 width: auto;
                 margin-bottom: -10%;
                 margin-top: 10%;
                 margin-left: 22%;
            }

            .payment {
                 width: 90%;
                 margin-left: 20%;

            }

            .text {
                 text-align: center;
            }
       }

       .form-actions {
            margin: 0;
            background-color: transparent;
            text-align: center;
       }
  </style>

  <body style="background-color: #ffff84;">




  <nav class="navbar navbar-expand-xl ">

<div class=" flex-row-reverse left ">

    <div class="p-2">
        <div class="icon2">
            <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:#ffff84 ;margin-top:2px;">&#61562;</i></a>
            <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
        </div>
    </div>
    <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px;'></i></div>
    <a class="float-left" href="bhome.php">
        <img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
    </a>
</div>
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;margin-right:-9%;font-size:28px;"></i></span>
</button>
<a class="float-left" href="bhome.php">
    <img src="logo_farm.png" class="float-left mr-2 moblogo" alt="Logo" style="height:110px; width:200px;">
</a>
<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <div class="input-group mb-1 ml-auto mr-auto searchbox"> <!-- Add ml-auto mr-auto to center horizontally -->
        
        <form action="SearchResult.php" method="get" enctype="multipart/form-data">
            <input type="text" class="form-control" id="inlineFormInputGroup" name="search" placeholder="Search for fruits, vegetables, or crops" style="width:500px;">
        </form>
        <br>
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:#f0ab2a;"></i></div>
        </div>
    </div>


    <?php
    getUsername();
    ?>
    <div class="list-group moblists" style="color:#ffff84">

        <?php
        if (isset($_SESSION['phonenumber'])) {
            echo "<a href='BuyerProfile.php' class='list-group-item list-group-item-action' style='background-color:#ffff84c;text-align:center;color:goldenrod'>Profile</a>";
            echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#ffff84;text-align:center;color:goldenrod'>Transactions</a>";
            
            echo "<a href='farmer.php' class='list-group-item list-group-item-action' style='background-color:#ffff84;text-align:center;color:goldenrod'>Farmers</a>";
            echo "<a href='../Includes/logout.php' class='list-group-item list-group-item-action ' style='background-color:#ffff84;text-align:center;color:goldenrod'>Logout</a>";
        } else {
            echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#ffff84;text-align:center;color:goldenrod'>Login</a>";
        }
        ?>

    </div>
</div>




<div class=" flex-row-reverse right ">
    <div class="p-2 cart">
        <div class="icon2">
            <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:#ffff84">&#61562;</i></a>
            <span id="icon" style="color:#ffff84"> <?php echo totalItems(); ?> </span>
        </div>
    </div>
    <div class="dropdown p-2 settings ">
    <button class="btn dropdown-toggle" style="color:#ffff84;" type="button" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ffff84;display:inline;">
        <p style="color:#ffff84;display:inline;">Settings</p>
    </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php
            if (isset($_SESSION['phonenumber'])) {
                echo "<a href='BuyerProfile2.php' class='dropdown-item  ' style='padding-right:-20px;'>Profile</a>";
                echo "<a href='Transaction.php' class='dropdown-item ' style='padding-right:-20px;'>Transactions</a>";
                echo "<a href='../Includes/logout.php' class='dropdown-item ' style='padding-right:-20px;'>Logout</a>";
            } else {
                echo "<a href='../auth/BuyerLogin.php' class='dropdown-item ' style='padding-right:-20px;'>Login</a>";
            }
            ?>
        </div>
    </div>


    <div class="text-success  login">Login</div>
</div>

</nav>



       <br>
       <div class="card" style="width:60%;margin:auto">
            <h4 class="card-header text-success text-center font-weight-bold" style="background-color:black">Success</h4>
            <div class="card-body">
                 <h4 class="card-title text-success text-center font-weight-bold">Product Successfully Added</h4>
                 <h5 class="card-text text-center">Thankyou For Shopping With Us</h5>
                 <br>
                 <div class="form-actions">
                      <a href="bhome.php" class="btn btn-success btn-lg " style="background-color: orangered;">Go To Home</a>
                 </div>
            </div>
       </div>

       <br><br><br>






       <br>
       <br>
  </body>

  </html>