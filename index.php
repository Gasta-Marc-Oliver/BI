<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CRUD Operations</h1>
    
    <h2>Add New Student</h2>
    <form action="add_student.php" method="POST">
        <input type="text" name="fname" placeholder="First Name" required>
        <input type="text" name="lname" placeholder="Last Name" required>
        <input type="text" name="gender" placeholder="Gender" required>
        <input type="number" name="age" placeholder="Age" required>
        <input type="text" name="contact_add" placeholder="Contact Address" required>
        <button type="submit">Add Student</button>
    </form>

    <h2>Students List</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Contact Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM students");
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['stud_ID']}</td>
                        <td>{$row['fname']}</td>
                        <td>{$row['lname']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['contact_add']}</td>
                        <td>
                            <a href='edit_student.php?id={$row['stud_ID']}'>Edit</a>
                            <a href='delete_student.php?id={$row['stud_ID']}'>Delete</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
