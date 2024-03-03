<?php
include("../Functions/functions.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
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

    .add {
        width: 40%;
    }

    @media only screen and (min-device-width:320px) and (max-device-width:480px) {


        .right {
            display: none;
            background-color: #ff5500;

        }


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

        .table thead {
            display: none;
            background-color: #292b2c;
            color: goldenrod;
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
            /* background-color: #292b2c;
        color: goldenrod; */
        }

        .add {
            width: auto;
        }

        .emptycart {
            /* margin-left: 20%;
            width:80%;  */
            float: none;
            text-align: center;

        }

        .continueshopping {
            /* margin-top:20%;
            margin-left: 20%;  */
            float: none;
            text-align: center;
            margin-top: -20%;

        }

        .grandtotal {
            /* margin-right: 20%; */
            float: none;
            margin-top: 40%;
        }
    }
</style>

<body>





<body style="background-color: #FFFF84;">

    <nav class="navbar navbar-expand-xl" style="margin-bottom:100px;">

        <div class=" flex-row-reverse left " >

            <div class="p-2" style="margin-top:250px;">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
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
            <div class="list-group moblists">

                <?php
                if (isset($_SESSION['phonenumber'])) {
                    echo "<a href='BuyerProfile.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                    echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Transactions</a>";
                    echo "<a href='../Includes/logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                } else {
                    echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Login</a>";
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


    <div class="container">

        <?php
        if (isset($_SESSION['phonenumber'])) {
            $temp = totalItems();
            echo   "<div class='text-left'>
                        <h3>Total Items $temp</h3>
                        <hr>";
        }
        ?>

        <table class="table">
            <thead>
                <th>S.No</th>
                <th>Item Name</th>
                <th>Unit Price </th>
                <th style="width:25%;">Quantity</th>
                <th>Subtotal</th>
                <th>Delete</th>
            </thead>

            <?php
            $total = 0;
            global $con;
            if (isset($_SESSION['phonenumber'])) {
                $sess_phone_number = $_SESSION['phonenumber'];
                $sel_price = "select * from cart where phonenumber = '$sess_phone_number'";
                $run_price = mysqli_query($con, $sel_price);

                $qtycart = array();
                $i = 0;
                while ($p_price = mysqli_fetch_array($run_price)) {
                    $product_id = $p_price['product_id'];
                    $_SESSION['qtycart'][$i] = $p_price['qty'];

                    $pro_price = "select * from products where product_id='$product_id'";
                    $run_pro_price = mysqli_query($con, $pro_price);
                    while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                        $product_title = $pp_price['product_title'];
                        $product_price = $pp_price['product_price'];
                        $subtotal = $_SESSION['qtycart'][$i] * $product_price;

            ?>



                        <!-- <td class="tdy" data-label="quantity"><a style="color:black;margin-right:12px;" href="MinusQty.php?id=<?php echo $product_id; ?>"><label class="add ladd"><i style="padding: 4px;" class=" icon left  fas fa-minus">
                                    </label></a></i>
                                <input type="number" oninput="this.value = Math.abs(this.value)" min="1" value='<?php echo $_SESSION['qtycart'][$i]; ?>' name="qty" style="width:40px; "><a style="color:black;margin-left:4px;" href="AddQty.php?id=<?php echo $product_id; ?>"><label class="add radd">
                                        <i style="padding: 4px;" class="icon right  fas fa-plus"></label></a></i></td>
                            </td> -->


                        <tbody>
                            <tr>
                                <td data-label="S.No" style="font-size:20px;"><?php echo $i + 1; ?></td>
                                <td data-label="Item Name " style="font-size:20px;"><?php echo $product_title; ?></td>
                                <td data-label="Unit Price" style="font-size:20px;"><?php echo $product_price; ?></td>

                                <td data-label="Quantity" style="">
                                    <div class="d-flex justify-content-center " style="width:90%;padding-left:10%;">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <a href="AddQty.php?id=<?php echo $product_id; ?>">
                                                    <button class="btn btn-outline-secondary" style=" background-color:black;" type="button" id="button-addon1">
                                                        <b style="color:goldenrod"><i class="fas fa-plus"></i></b>
                                                    </button>
                                                </a>
                                            </div>
                                            <input type="number" class="form-control" oninput="this.value = Math.abs(this.value)" min="1" value='<?php echo $_SESSION['qtycart'][$i]; ?>' name="qty" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <a href="MinusQty.php?id=<?php echo $product_id; ?>">
                                                    <button class="btn btn-outline-secondary" style=" background-color:Black;" type="button" id="button-addon2">
                                                        <b style="color:goldenrod"><i class="fas fa-minus"></i></b>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>


                                <?php $subtotal = $_SESSION['qtycart'][$i] * $product_price; ?>
                                <?php
                                $subquery = "update cart set subtotal = $subtotal where product_id = $product_id";
                                $run = mysqli_query($con, $subquery);
                                ?>

                                <td data-label="Subtotal" style="font-size:20px;"><?php echo $subtotal; ?></td>
                                <?php $total = $total + $subtotal ?>
                                <td data-label="Delete" style="font-size:20px;"><a href="DeleteProductCart.php?id=<?php echo $product_id; ?>" id="Deletionlink" style="color:black">Remove</a></td>
                            </tr>
                <?php
                    }
                    $i++;
                }
            } else {
                echo "<h1 align = center>Please Login First!</h1><br><br><hr>";
            } ?>

                        </tbody>
        </table>

    </div>

    </div>


    <div class="container">
        <div class="float-none float-sm-none float-md-none float-lg-left float-xl-left  emptycart">
            <a href="emptyCart.php">
                <button type="button" class="btn btn-sm  border border-dark " style='font-size:22px;color:#daa522;background-color:black'>Empty Cart</button>
            </a>
        </div>
        <!-- <div class="grandtotal  float-none float-sm-none float-md-none float-lg-right float-xl-right"></div><br> -->
        <br>
        <div class=" float-none float-sm-none float-md-none float-lg-right float-xl-rightcheckout mr-0 pt-4" style="border-radius:5%; ">

            <h2 style='font-size:25px'><b>Total ₹<?php echo $total; ?> </b></h2>




            <?php
            if (isset($_SESSION['phonenumber'])) {
                $sel_price = "select * from cart where phonenumber = '$sess_phone_number'";
                $run_price = mysqli_query($con, $sel_price);
                $count = mysqli_num_rows($run_price);
                if ($count > 0) {
                    echo "<a href='Checkout.php'>
                                <button type='button' class='btn btn-sm border border-dark d-flex mx-auto' style='font-size:22px;color:#daa522;background-color:black'>
                                    Checkout
                                </button>
                            </a>";
                } else {

                    echo "<a href='Includes/alert.php'>
                                <button type='button' class='btn btn-sm border border-dark d-flex mx-auto' style='font-size:22px;color:#daa522;background-color:black'>
                                    Checkout
                                </button>
                            </a>";
                }
            } else {

                echo "<a href='../auth/BuyerLogin.php'>
                                <button type='button' class='btn btn-sm border border-dark d-flex mx-auto' style='font-size:22px;color:#daa522;background-color:black'>
                                    Checkout
                                </button>
                            </a>";
            }

            ?>

        </div>


















        <?php $_SESSION['grandtotal'] = $total; ?>
        <br>
        <br>
        <div class=" float-none float-sm-none float-md-none float-lg-left float-xl-left continueshopping mt-2">
            <a href="bhome.php"><button type="button" class="btn btn-sm  border border-dark " style='font-size:22px;color:#daa522;background-color:black'>Continue Shopping<button></a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    
</body>

</html>