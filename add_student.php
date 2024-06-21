<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $contact_add = $_POST['contact_add'];

    $stmt = $conn->prepare("INSERT INTO students (fname, lname, gender, age, contact_add) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssds", $fname, $lname, $gender, $age, $contact_add);

    if ($stmt->execute()) {
        echo "New student added successfully";
        header('Location: index.php'); // Redirect to the index page after successful insertion
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
