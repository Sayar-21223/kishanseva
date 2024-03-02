<?php
// Step 1: Connect to your database (Assuming you have already established a database connection)

// Your database credentials
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

// Step 2: Retrieve the total transactions for the last three months
// Assuming you have a table named 'orders' with a 'total' column and a 'application_date' column

// Calculate the date three months ago
$threeMonthsAgo = date('Y-m-d', strtotime('-3 months'));

// Query to retrieve total transactions for the last three months
$sql = "SELECT SUM(total) AS total_transactions FROM orders WHERE transaction_date >= '$threeMonthsAgo'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Step 3: Calculate the average of the total transactions for the last three months
    $row = $result->fetch_assoc();
    $total_transactions = $row['total_transactions'];
    $average = $total_transactions / 3;

    // Step 4: Check if the average is greater than 5000
    if ($average > 5000) {
        // Display the button
        echo "Your Average Of Last Three Months Are ₹$average <br>";
        echo "Your Are Eligable To Apply For A Loan<br>";
        echo '<button>Generate Button</button>';
    } else {
        // Do not display the button
        echo 'Average is not greater than 5000.';
    }
} else {
    echo "Your Average Of Last Three Months Are ₹$average <br>";
    echo "Your Are Not Eligable To Apply For A Loan<br>";
}

// Close the database connection
$conn->close();
?>
