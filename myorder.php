<?php session_start();
// echo $_SESSION['username'];
$curruser = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link rel="icon" href="/symbol_only-removebg-preview.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .verticalnavbar ul {
            list-style-type: none;
            margin: 0;
            padding-left: 10px;
            padding-right: 10px;
            float: left;
            border-right: solid 2px;
            height: 100%;
            width: 100px;
            align-content: center;
            align-items: center;
            text-align: center;
        }

        .verticalnavbar ul li {}

        .verticalnavbar {
            background-image: url(/white\ bg.png);
            background-size: 120px;
            background-repeat: no-repeat;
            height: 100%;
            width: 122px;
            overflow: auto;
            position: fixed;
            /* background-color:rgb(104, 184, 104); */
            background-color: rgb(130, 196, 205);
            left: 0;
        }

        .logo {
            float: left;
            width: 100px;
            margin-top: 10px;
            margin-bottom: 25px;
            /* border: solid; */
            padding: 0;
            background-color: white;
            width: 100px;
        }
        
        .usericon span:hover{
            cursor: pointer;
            color: white;
        }
        .verticalnavbar ul li span {
            text-decoration: none;
            color: black;
            margin-top: 10px;
        }

        .cartbtn {
            position: absolute;
            /* right: 15px; */
            /* top: 20px; */
            bottom: 50px;
            left: 33%;
            padding: 5px;
            font-size: 1.6em;
            /* border: 1px solid; */
        }

        .cartbtn a {
            text-decoration: none;
            color: black;
            font-weight: 500;
        }

        .cartbtn :hover {
            color: white;
        }

        .logout {
            position: absolute;
            bottom: 10px;
            margin-left: 30%;
        }

        .logout a span:hover {
            color: white;
        }

        .topnavbar {
            position: fixed;
            width: 100%;
            /* background-color: antiquewhite; */
            top: 0;
            height: 90px;
            border-bottom: 2px solid black;
            z-index: -1;
        }

        .topnavbar p {
            text-align: center;
            vertical-align: middle;
            font-size: 1.6em;
            line-height: 90px;
            margin: 0;
            padding: 0;
            margin-left: 95px;
            font-family: 'Alkatra', cursive;

        }

        .innerimg {
            height: 100px;
        }

        .inventorytable {
            /* border: 2px solid; */
            border-collapse: collapse;
            text-align: center;
            width: 88%;
            border-collapse: separate;
            border-spacing: 0 2em;
        }

        tr {
            background-color: rgb(252, 243, 212);
            height: 120px;
            outline: thin solid black;
            display: inline-flexbox;
            /* margin:10px; */
            /* padding:10px; */
        }

        .pid {
            color: rgb(252, 243, 212);
            position: absolute;
        }

        .tdimg {
            background-color: white;
            border-right: 0.5px solid;
            width: 200px;
        }

        .medname {
            /* border: 1px solid ;  */
            font-size: 1.5em;
            /* justify-content: flex-start; */
            /* align-content: top; */
            margin: 0;
            padding: 0;
            float: left;
            margin-top: 20px;
            margin-left: 20px
        }

        .medmaker {
            /* border: 1px solid ; */
            margin: 0;
            padding: 0;
            float: left;
            position: absolute;
            margin-top: 50px;
            margin-left: 20px;
        }

        .medprice {
            position: absolute;
            /* border: 1px solid; */
            font-size: 1.2em;
            margin: 0;
            padding: 0;
            /* float: right;  */
            margin-left: 59%;
            margin-top: 15px;
        }

        .confirm {
            position: absolute;
            margin-top: 87px;
            margin-left: 63%;
        }

        .confirmbtn {
            border: none;
            /* background-color: rgb(252, 243, 212); */
            background: none;
            color: orchid;
            /* padding-left: 10px;
            padding-right: 10px;
            padding-top: 4px;
            padding-bottom: 2px; */
        }

        .confirmbtn:hover {
            cursor: pointer;
            color: blue;
        }

        .price {
            margin-top: -22px;
            margin-right: -95px;
        }

        .medquantity {
            /* border:1px solid; */
            color: rgb(0, 190, 1);
            /* color:green; */
            font-size: 1.1em;
            /* float: right; */
            position: absolute;
            margin-top: 40px;
            margin-left: 59.8%;

        }
        .date{
          position: absolute;
          margin-top: 50px;
          margin-left: 25%;
        }
        .amount{
          position: absolute;
          margin-left: 59%;
          color: rgb(0, 190, 1);
        }
        .amt{
          font-size: 1.3em;
          margin-top: 75px;
        }
        .quantity{
          position: absolute;
          margin-top: 45px;
          margin-left: 59%;
          font-size: 1.2em;
        }
        .plusminus {
            /* border:1px solid; */
            /* right:0; */
            position: absolute;
            /* float:right; */
            margin-top: 85px;
            margin-left: 58%;
        }

        .totalbox {
            /* border: 1px solid; */
            position: fixed;
            width: 90px;
            right: 1.2%;
            /* top: 80%; */
            bottom: -4%;
            background-color: whitesmoke;
            /* color: ; */
            text-align: center;
            padding: 10px;
            padding-bottom: 10%;
        }

        .total {
            font-size: 1.2em;
        }

        .amount {
            margin-top: 10px;
            margin-bottom: -20px;
        }

        .amount input {
            border: none;
            width: 50px;
            background-color: whitesmoke;
            /* text-align: center; */
        }

        .chkoutbtn {
            position: absolute;
            /* border: 2px solid yellow; */
            background-color: black;
            margin-left: -9.5%;
            width: 100%;
            margin-top: 60%;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .checkout {
            display: flex;
            margin-left: 15%;
            border: none;
            align-items: center;
            background-color: black;
            color: white;
        }

        .checkout span {
            font-size: 1.3em;
            /* margin-right: 10px; */
        }

        .checkout:hover {
            color: yellow;
            cursor: pointer;
        }

        /* .rowcontainer{
            margin: 3px solid red;
        } */
    </style>
    <!-- vertical nav bar -->
    <div class="verticalnavbar">
        <ul>
            <li style="border: none;"><img class="logo" src="/logo.png" alt="Doctryy" style=""></li>
            <div class="usericon">

                <li><a href="inventory.php"><span class="material-symbols-outlined">
                            account_circle
                        </span></a><br>
                </li>
            </div>
            <li>
                <div class="username"
                    style="margin:0;padding:0;margin-top:0;font-size:.8em;color:white;font-style:oblique;">
                    <?php
                    echo $_SESSION['username'];
                    $curruser = $_SESSION['username'];
                    ?>
                </div>
            </li>
            <!-- <li>
                <div class="cartbtn">
                    <a href="#"><span class="material-symbols-outlined">
                            shopping_cart
                        </span></a>
                </div>
            </li> -->
            <li class="logout"><a href="index.html"><span class="material-symbols-outlined">
                        logout
                    </span></a></li>
        </ul>
    </div>
    <!-- horizontal nav bar -->
    <div class="topnavbar" style="position:relative;">
        <p>Doctryy (Online Pharmacy)</p>
    </div>
    <!-- main content -->
    <div style="margin-left:50%;">
        <p>My Orders</p>
    </div>
    <div style="margin-left: 121px; margin-top:25px;">
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


$sql = "select p.name,s.company_name,p.price,o.quantity,p.price*o.quantity as amount,DATE_FORMAT(o.order_date,'%a,%e %M %Y, %H:%i:%s') as order_date from customers c, products p, suppliers s, orders o where o.customer_id=c.customer_id and o.product_id=p.product_id and p.supplier_id=s.supplier_id and c.email='$curruser'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  // table started
  echo "<table class='inventorytable'>";
  // headings
  // echo "<tr style='height:20px'>
  // <th>photo</th>
  // <th>Name</th>
  // <th>Maker</th>
  // <th>Price</th>
  // <th></th>
  // </tr>";
  // rows 
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='rowcontainer'><tr><td class='tdimg'>" . "<img class='innerimg' src='https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Medicine_Drugs.svg/2560px-Medicine_Drugs.svg.png' alt='medicine'>" . "</td><td class='medname'>" . $row["name"] . "</td><td class='medmaker' >" . "by&nbsp;" . $row["company_name"] . "</td>
    <td class='medprice'>" . "Price &#8377; &nbsp;" . "<p class='price'>" . $row["price"] . "</p>" . "</td><td class='amount'>" . "<p class='amt'>&#8377; &nbsp;".$row["amount"] . "</p></td><td class='quantity'>" . $row["quantity"] . "&nbsp;nos</td><td class='date'>" . $row["order_date"] . "</td>
    </tr></div>";
  }
  echo "</table>";
} else {
  echo "No records found.";
}
mysqli_close($conn);

?>
</div>
</body>
</html>