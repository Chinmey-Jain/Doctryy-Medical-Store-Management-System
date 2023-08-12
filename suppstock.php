<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="icon" href="/symbol_only-removebg-preview.png" />
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
    <!-- css style sheet -->
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

        .verticalnavbar ul li span {
            text-decoration: none;
            color: black;
            margin-top: 10px;
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
            width: 60%;
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
            margin-top: 40px;
            margin-left: 20px
        }

        .medprice {
            /* position: relative; */
            /* border: 1px solid; */
            font-size: 1.2em;
            margin: 0;
            padding: 0;
            float: right;
            /* right: 0; */
            margin-right: 45%;
            margin-top: 45px;
        }

        .price {
            margin-top: -22px;
            margin-right: -60px;
        }

        .medquantity {
            /* border:1px solid; */
            color: rgb(0, 190, 1);
            /* color:green; */
            font-size: 1.1em;
            float: right;
            /* position: absolute; */
            margin-top: -20px;
            margin-left: 40%;
            margin-right: 10px;

        }

        .enquiry {
            position: fixed;
            border: 1px solid;
            border-radius: 12px;
            right: 2%;
            top: 30%;
            padding: 10px;
            text-align: center;
            font-size: 1em;
            width: 30%;
            background-color: rgba(11, 15, 13, 0.582);
            backdrop-filter: blur(16px) saturate(180%);
            color: whitesmoke;
        }

        h4 {
            align-items: center;
            font-size: 1.5em;
            border-bottom: 1px solid;
            width: 60%;
            margin-left: 20%;
            margin-bottom: 15px;
            padding-bottom: 5px;
        }

        .enquiry input {
            width: 80%;
            margin: 10px 0;
            border-radius: 5px;
            padding: 15px 18px;
            box-sizing: border-box;
            border-color: rgba(11, 15, 13, 0.582);
        }

        .enquiry textarea {
            width: 80%;
            margin: 10px 0;
            border-radius: 5px;
            border-color: rgba(11, 15, 13, 0.582);
            padding: 15px 18px;
            box-sizing: border-box;
        }

        .enquiry button {
            background-color: #030804;
            color: white;
            padding: 14px 20px;
            border-radius: 5px;
            border: none;
            margin: 7px 0;
            width: 40%;
            font-size: 18px;
        }

        .enquiry button:hover {
            opacity: 0.6;
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

                <li><span class="material-symbols-outlined">
                        account_circle
                    </span><br>
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
        <p>Inventory</p>
    </div>
    </div>
    <div style="margin-left: 121px; margin-top:25px;">
        <!-- enquiry form -->
        <form class="enquiry" name="enquiry" method="post">
            <h4>Enquiry</h4><br>
            <div class="enquiryform">
                <label for="Email">Your Email</label><br>
                <input type="text" id="email" name="email" readonly><br><br>
                <label for="Enquiry">Type in your query</label><br>
                <textarea id="enquiry" name="enquiry" rows="5" cols="30"></textarea><br><br>
                <button type="submit" id="submitbtn" class="submitbtn" onclick="senddata()">Submit</button>
            </div>
        </form>
        <?php
        // establish a connection to the MySQL database
        $servername = "localhost:4306";
        $username = "root";
        $password = "";
        $dbname = "doctryy";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // check if the connection is successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // select all data from the "users" table
        $suppid = "SELECT supplier_id from suppliers where email='$curruser'";
        $getsid = mysqli_query($conn, $suppid);
        $sid = mysqli_fetch_column($getsid);
        $sql2 = "SELECT * from products where supplier_id='$sid'";
        $result2 = mysqli_query($conn, $sql2);
        // check if there are any rows returned
        if (mysqli_num_rows($result2) > 0) {
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
            while ($row = mysqli_fetch_assoc($result2)) {
                echo "<div class='rowcontainer'><tr><td class='tdimg'>" . "<img class='innerimg' src='https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Medicine_Drugs.svg/2560px-Medicine_Drugs.svg.png' alt='medicine'>" . "</td><td class='medname'>" . $row["name"] . "</td>
                <td class='medprice'>" . "&#8377; &nbsp;" . "<p class='price'>" . $row["price"] . "</p>" . "</td><td class='medquantity'>In Stock - " . $row["quantity"] . "</td><td class='pid'>" . $row["product_id"] . "</td>
                </tr></div>";
            }
            echo "</table>";
        } else {
            echo "No records found.";
        }
        // close the database connection
        mysqli_close($conn);
        ?>

    </div>
</body>
<script>
    var emailsupp = "<?php echo "$curruser"; ?>";
    var idsupp = "<?php echo "$sid"; ?>";
    document.getElementById('email').value = emailsupp;
    function senddata() {
        let textarea = document.getElementById('enquiry').value;
        console.log(textarea);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText); // log the server's response to the console
            }
        };
        var data = {
            suppid: idsupp,
            email: emailsupp,
            textarea: textarea
        };
        var params = JSON.stringify(data);
        var url = "enquiry.php";
        xhttp.open("POST", url, true);
        xhttp.setRequestHeader("Content-type", "application/json;charset=UTF-8");
        xhttp.send(params);
        alert("Enquiry posted")
        window.location.href = 'inventory.php';
    }
</script>

</html>