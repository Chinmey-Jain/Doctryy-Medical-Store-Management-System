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
    <script>
        function total() {
            var arr = document.getElementsByClassName('numbox');
            var arr2 = document.getElementsByClassName('price');
            var sum = 0;
            var temp = 0;
            for (var i = 0; i < arr.length; i++) {
                temp = (arr[i].value) * (arr2[i].innerHTML);
                sum = sum + temp;
            }
            console.log(sum);
            document.getElementById('total').value = sum;
        }
    </script>
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
            margin-right: -60px;
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

                <li><a href="myorder.php"><span class="material-symbols-outlined">
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
        <p>Inventory</p>
    </div>
    <div class="totalbox">
        <p class="total">Total</p>
        <p class="amount">&#8377;&nbsp;<input type="text" maxlength="10" name="total" id="total" readonly></p>
        <div class="chkoutbtn">

            <button class="checkout" id="checkout" onclick="senddata()">
                <p>checkout&nbsp;</p><span class="material-symbols-outlined">
                    arrow_forward
                </span>
            </button>

        </div>
    </div>
    <div style="margin-left: 121px; margin-top:25px;">


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
        $custid = "SELECT customer_id from customers where email='$curruser'";
        $sql = "SELECT * FROM products where quantity>0";
        $sql2 = "SELECT p.product_id,p.name,p.price,s.company_name from  products p,suppliers s where s.supplier_id=p.supplier_id and p.quantity>0";
        $getcid = mysqli_query($conn, $custid);
        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql2);
        $cid = mysqli_fetch_column($getcid);
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
                echo "<div class='rowcontainer'><tr><td class='tdimg'>" . "<img class='innerimg' src='https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Medicine_Drugs.svg/2560px-Medicine_Drugs.svg.png' alt='medicine'>" . "</td><td class='medname'>" . $row["name"] . "</td><td class='medmaker' >" . "by&nbsp;" . $row["company_name"] . "</td>
                <td class='plusminus'>" .
                    "<div style=' display: flex;align-items: center;float:right;margin-right:15px'>
                <span id='minus' class='material-symbols-outlined' style='cursor:pointer;'>remove</span>
                <input class='numbox' id='numbox' type='number' value='0' onblur='total()' style='width:50px;border:none;text-align:center;padding:0;margin:0;';
                text-align: center;'>
                <span id='plus' class='material-symbols-outlined' style='cursor:pointer;'>add</span>"
                    . "</td>
                <td class='medprice'>" . "&#8377; &nbsp;" . "<p class='price'>" . $row["price"] . "</p>" . "</td><td class='medquantity'>" . "<p>strip of 10<p>" . "</td><td class='pid'>" . $row["product_id"] . "</td>
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
<!-- javascript -->
<script>
    document.getElementById('total').value = 0;
    const minusBtns = document.querySelectorAll('#minus');
    const plusBtns = document.querySelectorAll('#plus');
    const quantities = document.querySelectorAll('#numbox');
    // submitdata();
    for (let i = 0; i < minusBtns.length; i++) {
        minusBtns[i].addEventListener('click', () => {
            if (quantities[i].value >= 1) {
                quantities[i].value--;
            }
        });
    }
    for (let i = 0; i < plusBtns.length; i++) {
        plusBtns[i].addEventListener('click', () => {
            quantities[i].value++;
        });
    }
    function total() {
        var arr = document.getElementsByClassName('numbox');
        var arr2 = document.getElementsByClassName('price');
        var sum = 0;
        var temp = 0;
        for (var i = 0; i < arr.length; i++) {
            temp = (arr[i].value) * (arr2[i].innerHTML);
            sum = sum + temp;
        }
        console.log(sum);
        document.getElementById('total').value = sum;
    };

    function senddata() {
        var xhttp = new XMLHttpRequest(); 

        // set up a callback function to handle the server's response
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText); // log the server's response to the console
            }
        };

        // define the URL of the PHP file
        var arr = document.getElementsByClassName('numbox');
        var arr2 = document.getElementsByClassName('price');
        var arr3 = document.getElementsByClassName('pid');
        var newqty = 0;
        var pid_temp = 0;
        // var i = 0;
        var len = arr.length;
        const cid = "<?php echo $cid; ?>";
        for (let i = 0; i < arr.length; i++) {
            if (Number(arr[i].value) > 0) {
                var data = {
                    quantity: arr[i].value,
                    price: arr2[i].innerHTML,
                    pid: arr3[i].innerHTML,
                    cid: cid
                };
                var params = JSON.stringify(data);
                var url = "inventoryupdate.php";
                xhttp.open("POST", url, true);
                xhttp.setRequestHeader("Content-type", "application/json;charset=UTF-8");
                xhttp.send(params);
                // console.log('waiting');
                // xhttp.onreadystatechange = function () {
                //         if (xhttp.status === 200) { // OK status code
                //             if (xhttp.responseText === "OK") {
                //                 console.log("Program completed successfully");
                //                 i++;
                //                 senddata();
                //             } else {
                //                 console.log("An error occurred");
                //             }
                //         }
                //         else {
                //             console.log("An error occurred");
                //         }
                // return 0;

            } else {
                console.log(i);
            };
        }
        alert("Order placed successfully!!")
        window.location.href = 'inventory.php';
    };
</script>

</html>