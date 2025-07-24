<?php
require "connection1.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch user data
    $result = $conn->query("SELECT * FROM new_users2 WHERE id = $id");

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
    } else {
        echo "User not found!";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $updated_username = $_POST['username'];
    $updated_email = $_POST['email'];

    $sql = "UPDATE new_users2 SET username = ?, email = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $updated_username, $updated_email, $id);

    if ($stmt->execute()) {
        echo "User updated successfully!";
    } else {
        echo "Error updating user: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f5f5f5;
            padding: 40px;
        }

        form {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 12px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Update User Details</h2>

<form method="POST" action="">
    <label>Username:</label>
    <input type="text" name="username" value="<?php echo htmlspecialchars($user['username'] ?? ''); ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($user['email'] ?? ''); ?>" required>

    <button type="submit">Update</button>
</form>

</body>
</html>
