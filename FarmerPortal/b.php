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

// Retrieve products and their titles from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Extract product title and keywords
        $product_type = $row["product_type"];
        $product_keywords = $row["product_keywords"];

        // Display product information
        echo "<h2>Product Type: " . $product_type . "</h2>";

        // Use YouTube API to fetch relevant agricultural videos based on keywords
        $youtube_api_key = "AIzaSyDDwrm-ZsS04JTvqHtAirq2Wk03hS-mwEs";
        $search_query = urlencode($product_type . ' agriculture' . ' educational' . ' farming'); // Include 'agriculture' in the search query
        $youtube_url = "https://www.googleapis.com/youtube/v3/search?key=".$youtube_api_key."&q=".$search_query."&maxResults=10";
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
                    
                    // Display the embedded YouTube video
                    echo "<div style='max-width: 450px; margin-bottom: 20px;'>";
                    echo "<iframe width='560' height='315' src='$videoUrl' frameborder='0' allowfullscreen></iframe>";
                    echo "</div>";
                }
            } else {
                // Handle if no video is found
                echo "No relevant YouTube videos found for this product.<br>";
            }
        } else {
            // Handle API request failure
            echo "Failed to fetch YouTube videos for this product.<br>";
        }

        echo "<hr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
