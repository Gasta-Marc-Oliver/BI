<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE stud_ID = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="update_student.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['stud_ID']; ?>">
        <input type="text" name="fname" value="<?php echo $row['fname']; ?>" required>
        <input type="text" name="lname" value="<?php echo $row['lname']; ?>" required>
        <input type="text" name="gender" value="<?php echo $row['gender']; ?>" required>
        <input type="number" name="age" value="<?php echo $row['age']; ?>" required>
        <input type="text" name="contact_add" value="<?php echo $row['contact_add']; ?>" required>
        <button type="submit">Update Student</button>
    </form>
</body>
</html>
