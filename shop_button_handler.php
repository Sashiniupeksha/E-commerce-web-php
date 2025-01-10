<?php
// Include database connection
include 'db_connect.php';

// Check if button was clicked
if(isset($_POST['shopNow'])) {
    // SQL Query to insert activity (for demonstration purposes)
    $sql = "INSERT INTO button_clicks (button_name, click_time) VALUES ('SHOP NOW', NOW())";

    if(mysqli_query($conn, $sql)) {
        echo "Button click recorded successfully!";
        header("Location: shop.php"); // Redirect to the shop page
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
