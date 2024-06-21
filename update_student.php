<?php
include 'db.php';

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$contact_add = $_POST['contact_add'];

$sql = "UPDATE students SET fname='$fname', lname='$lname', gender='$gender', age='$age', contact_add='$contact_add' WHERE stud_ID=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: index.php');
?>
