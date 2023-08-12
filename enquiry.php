<?php
$servername = "localhost:4306";
$username = "root";
$password = "";
$dbname = "doctryy";

$conn = new mysqli($servername, $username, $password, $dbname);
// check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// get the data from the request
$data = json_decode(file_get_contents("php://input"), true);

// extract the values from the data object
$sid = $data["suppid"];
$email = $data["email"];
$textarea = $data["textarea"];

$sql = "INSERT INTO enquiry(supplier_id, email, textarea) VALUES ('$sid','$email','$textarea');";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>