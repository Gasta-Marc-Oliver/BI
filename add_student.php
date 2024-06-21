<?php
include 'db.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$contact_add = $_POST['contact_add'];

$sql = "INSERT INTO students (fname, lname, gender, age, contact_add) VALUES ('$fname', '$lname', '$gender', '$age', '$contact_add')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: index.php');
?>
