<?php
// Connect to the database
require "connection1.php";

// Fetch all registered users
$result = $conn->query("SELECT * FROM new_users2");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            padding: 20px;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 20px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .action-buttons a {
            text-decoration: none;
            padding: 6px 12px;
            margin: 0 4px;
            border-radius: 5px;
            color: white;
            font-size: 14px;
        }

        .delete-btn {
            background-color: #e74c3c;
        }

        .update-btn {
            background-color: #3498db;
        }

        .edit-btn {
            background-color: #f39c12;
        }
    </style>
</head>
<body>

    <h2 style="text-align:center;">Registered Users</h2>

    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['username']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td class="action-buttons">
                    <a class="delete-btn" href="task3.php?id=<?php echo $row['id']; ?>">Delete</a>
                    <a class="update-btn" href="task4.php?id=<?php echo $row['id']; ?>">Update</a>
                    <a class="edit-btn" href="task5.php?id=<?php echo $row['id']; ?>">Edit</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
