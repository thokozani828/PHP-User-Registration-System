<?php
require "connection1.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash ($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO new_users2 (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }   

}

?>

<form method ="POST" action = "task1.php">
    Name : <input text ="text" name = "name" required><br>
    Email : <input type = "email" name ="email" required><br>
    Password : <input type = "password"  name = "pasesword" required><br>
    <button type = "submit"">submit</button>
</form>