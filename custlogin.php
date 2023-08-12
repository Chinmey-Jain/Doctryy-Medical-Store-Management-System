<?php
// Connect to the database
$conn = mysqli_connect('localhost:4306', 'root', '', 'doctryy');

// Check if the connection was successful
if (!$conn) {
    die('Could not connect to the database: ' . mysqli_connect_error());
}

// Get the input data from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare the SQL query
$query = "SELECT * FROM customers WHERE email='$username' AND pssword='$password'";

// Execute the query and get the result
$result = mysqli_query($conn, $query);

// Check if there is a match in the database
if (mysqli_num_rows($result) > 0) {
  // Login successful
  session_start();
  $_SESSION['username'] = $username;
  echo "<script>window.location.href='inventory.php';</script>";
  exit();
} else {
  // Login failed
  echo "<script>alert('Incorrect Details');</script>";
  echo "<script>window.location.href='custlogin.html';</script>";
  exit();
}

// Close the database connection
mysqli_close($conn);
?>
