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
$quantity = $data["quantity"];
$price = $data["price"];
$pid = $data["pid"];
$cid = $data["cid"]; 

// do something with the values
// for example:
// echo "The values you sent are: ";
// echo $value1 . ", " . $value2 . ", " . $value3 . ", " . $value4;

$sql = "INSERT INTO orders (product_id, quantity, customer_id) VALUES ('$pid','$quantity','$cid');
UPDATE products SET quantity = quantity -'$quantity' WHERE product_id='$pid';";

$result = mysqli_multi_query($conn, $sql);

mysqli_close($conn);
?>