<?php
session_start();
include("../includes/db.php");

// Function to handle loan applications
function applyForLoan($name, $phone, $email, $address, $state, $district, $pan, $account_no, $amount, $year)
{
  global $con;
  $query = "INSERT INTO loan_applications (applicant_name, applicant_phone, applicant_email, address, state, district, pan_no, account_no, loan_amount, year) 
              VALUES ('$name', '$phone', '$email', '$address', '$state', '$district', '$pan', '$account_no', '$amount', '$year')";
  $result = mysqli_query($con, $query);
  if ($result) {
    echo "<script>alert('Loan application submitted successfully!');</script>";
  } else {
    echo "<script>alert('Failed to submit loan application. Please try again later.');</script>";
  }
}

// Handle form submission for loan application
if (isset($_POST['apply_loan'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $state = $_POST['state'];
  $district = $_POST['district'];
  $pan = $_POST['pan'];
  $account_no = $_POST['account_no'];
  $amount = $_POST['amount'];
  $year = $_POST['year'];

  // Validate form fields
  if (!empty($name) && !empty($phone) && !empty($email) && !empty($address) && !empty($state) && !empty($district) && !empty($pan) && !empty($account_no) && !empty($amount) && !empty($year)) {
    applyForLoan($name, $phone, $email, $address, $state, $district, $pan, $account_no, $amount, $year);
  } else {
    echo "<script>alert('Please fill in all the fields.');</script>";
  }
}
?>

<!DOCT <html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Loan Section</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
    <script src="../portal_files/jquery.min.js.download"></script>
    <script src="../portal_files/popper.min.js.download"></script>
    <script src="../portal_files/bootstrap.min.js.download"></script>
    <style>
      /* all */

      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");

      * {
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        font-size: 20px;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      :root {

        --main-grey: #ccc;
        --sub-grey: #d9d9d9;
      }

      body {
        display: flex;

        justify-content: center;
        /*center vertically */
        align-items: center;
        /* center horizontally */

        padding: 10px;
      }

      /* container and form */
      .container {
        max-width: 700px;
        width: 100%;
        background: #fff;
        padding: 25px 30px;
        border-radius: 5px;
      }

      .container .title {
        font-size: 25px;
        font-weight: 500;
        position: relative;
      }

      .container .title::before {
        content: "";
        position: absolute;
        height: 3.5px;
        width: 30px;
        background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
        left: 0;
        bottom: 0;
      }

      .container form .user__details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
      }

      /* inside the form user details */
      form .user__details .input__box {
        width: calc(100% / 2 - 20px);
        margin-bottom: 15px;
      }

      .user__details .input__box .details {
        font-weight: 500;
        margin-bottom: 5px;
        display: block;
      }

      .user__details .input__box input {
        height: 45px;
        width: 100%;
        outline: none;
        border-radius: 5px;
        border: 1px solid var(--main-grey);
        padding-left: 15px;
        font-size: 16px;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
      }

      .user__details .input__box input:focus,
      .user__details .input__box input:valid {
        border-color: var(--main-purple);
      }

      /* inside the form gender details */

      form .gender__details .gender__title {
        font-size: 20px;
        font-weight: 500;
      }

      form .gender__details .category {
        display: flex;
        width: 80%;
        margin: 15px 0;
        justify-content: space-between;
      }

      .gender__details .category label {
        display: flex;
        align-items: center;
      }

      input {
        width: 100%;
      }

      .gender__details .category .dot {
        height: 18px;
        width: 18px;
        background: var(--sub-grey);
        border-radius: 50%;
        margin: 10px;
        border: 5px solid transparent;
        transition: all 0.3s ease;
      }

      #dot-1:checked~.category .one,
      #dot-2:checked~.category .two,
      #dot-3:checked~.category .three {
        border-color: var(--sub-grey);
        background: var(--main-purple);
      }

      form input[type="radio"] {
        display: none;
      }

      /* submit button */
      form .button {
        height: 45px;
        margin: 45px 0;
      }

      #button2 {
        width: 100%;
        outline: none;
        color: #fff;
        border: none;
        /* font-size: 18px; */
        font-weight: 500;
        border-radius: 5px;
        background: orangered;
        transition: all 0.3s ease;
        padding: 6px 0px;
      }

      #button2:hover {
        background-color: black;
      }

      form .button input {
        height: 100%;
        width: 100%;
        outline: none;
        color: #fff;
        border: none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 5px;
        background: orangered;
        transition: all 0.3s ease;
      }

      form .button input:hover {
        background: black;
      }

      @media only screen and (max-width: 584px) {
        .container {
          max-width: 100%;
        }

        form .user__details .input__box {
          margin-bottom: 15px;
          width: 100%;
        }

        form .gender__details .category {
          width: 100%;
        }

        .container form .user__details {
          max-height: 300px;
          overflow-y: scroll;
        }

        .user__details::-webkit-scrollbar {
          width: 0;
        }
      }
    </style>
  </head>

  <body style="background-color: #ffff84;">

    <div class="container">
      <div class="title" align="center" style="margin-bottom:30px;font-size:40px;font-weight:600;">
        Calculate Your Interest
      </div>
      <div id="container">
        <label for="principal">Principal Amount:</label><br>
        <input type="number" id="principal"><br><br>

        <label for="years">Number of Years:</label><br>
        <input type="number" id="years"><br><br>

        <button id="button2" onclick="calculateCompoundInterest()">Calculate Interest</button><br><br>

        <div id="result"></div>
        <h1 style="font-size:28px;margin-top:50px;">Check Interst</h1>
        <p>Please Check Your Interest Before Applying A Agriculture Loan.</p>
      </div>
      <div class="title" align="center" style="margin-top:50px;margin-bottom:30px;font-size:40px;font-weight:600;">
        Apply For A Agriculture Loan
      </div>
      <form method="post" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" required><br><br>

        <label for="state">State:</label><br>
        <input type="text" id="state" name="state" required><br><br>

        <label for="district">District:</label><br>
        <input type="text" id="district" name="district" required><br><br>

        <label for="pan">PAN Number:</label><br>
        <input type="text" id="pan" name="pan" required><br><br>

        <label for="account_no">Account Number:</label><br>
        <input type="text" id="account_no" name="account_no" required><br><br>

        <label for="amount">Loan Amount:</label><br>
        <input type="number" id="amount" name="amount" required><br><br>

        <label for="year">Year:</label><br>
        <input type="number" id="year" name="year" required><br><br>

        <h1 style="font-size:28px;">Terms And Conditions</h1>
        <p>We provide loans to farmers for their agricultural needs with a <b>3%</b> annual interest rate. The interest is calculated and payable at the end of the loan term, which is typically at the end of the last year of the loan period.</p>
        <div class="button">
          <input type="submit" name="apply_loan" value="Apply for Loan">
        </div>
      </form>
    </div>
  </body>
  <script>
    function calculateCompoundInterest() {
      var principal = parseFloat(document.getElementById('principal').value);
      var years = parseInt(document.getElementById('years').value);
      var rate = 0.03; // 3% fixed rate
      var finalValue = principal * Math.pow((1 + rate), years);
      finalValue = finalValue.toFixed(2); // Round to 2 decimal places
      document.getElementById('result').innerHTML = "Final Value after " + years + " Years ₹ " + finalValue;
    }
  </script>

  </html>