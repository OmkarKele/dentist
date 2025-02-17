<?php
include('config.php');

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $appointment_date = htmlspecialchars($_POST['date']);

    // Prepare SQL Query
    $sql = "INSERT INTO appointments (name, email, number, appointment_date) 
            VALUES ('$name', '$email', '$number', '$appointment_date')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to success page
        header("Location: successful.html");
        exit();
    } else {
        echo "<p class='message'>Error: " . $conn->error . "</p>";
    }
}
?>
