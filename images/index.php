<?php
// Replace 'your_username' and 'your_password' with your actual MySQL username and password.
$conn = mysqli_connect('localhost', 'root', 'nage@123', 'contact_db') or die('Connection failed: ' . mysqli_connect_error());

if(isset($_POST['submit'])){

   // Sanitize input data to prevent SQL injection
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $date = mysqli_real_escape_string($conn, $_POST['date']);

   // Insert data into the database
   $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, date) VALUES ('$name', '$email', '$number', '$date')") or die('Query failed: ' . mysqli_error($conn));

   // Check insertion result and set message
   if($insert){
      $message[] = 'Appointment made successfully!';
   }else{
      $message[] = 'Appointment failed.';
   }
}
?>
