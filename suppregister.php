<?php
$servername = "localhost:4306";
$username = "root";
$password = "";
$dbname = "doctryy";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$compname = $_POST['companyName'];
$name = $_POST['name'];
$email = $_POST['email1'];
$phone = $_POST['tel1'];
$address = $_POST['address'];
$pssword = $_POST['Pssword1'];


// Insert the data into the database
$sql = "INSERT INTO suppliers (company_name,person_to_contact,phone_number,email,address,pssword) VALUES ('$compname','$name', '$phone', '$email', '$address','$pssword')";
if ($conn->query($sql) === true) {
  echo "<script>window.location.href='supplogin.html';</script>";
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
