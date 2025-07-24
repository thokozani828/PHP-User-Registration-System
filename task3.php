<?php
/* Creating the functionality to Delete users from the database */

require "connection1.php";

if (isset ($_GET["id"])){
    $id = $_GET["id"];
    
    // Prepare the SQL statement to delete the user
    $stmt = $conn->prepare("DELETE FROM new_users2 WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "User deleted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "No user ID provided.";
}
?>