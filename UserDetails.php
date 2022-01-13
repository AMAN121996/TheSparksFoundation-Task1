<?php
$connect = mysqli_connect("localhost", "root", "", "sparksbank");
$query = "SELECT * FROM userdetails";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="css/table.css">
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">


    <title>The Sparks Foundation Bank</title>
    <link rel="icon" type="image/png" href="images/logo.jpg">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }
        hr.style1{
	border-top: 1px solid #8c8b8b;
}
    </style>
</head>

<body>


    <!--Navbar-->
    <div class="navbar navbar-inverse navbar-fixed-top navbar-default">
        <nav>
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index1.php">The Sparks Foundation Bank</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index1.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <br /><br />
    <br>
    <br>
    <div class="container">
        <h2 class="text-center pt-4">User Details</h2>
        <hr class="style1">
       <br>
        <div class="table-responsive">
            <table id="userdetails" class="table table-striped table-condensed table-bordered">
                <thead>
                    <tr>
                        <td>NAME</td>
                        <td>EMAIL</td>
                        <td>BALANCE</td>
                    </tr>
                </thead>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '  
                               <tr>  
                                    <td>' . $row["NAME"] . '</td>  
                                    <td>' . $row["EMAIL"] . '</td>  
                                    <td>' . $row["BALANCE"] . '</td>  
                                   
                               </tr>  
                               ';
                }
                ?>
            </table>
        </div>
    </div>


    <!--footer-->

    <div class="footer">
        <br>
        <p>Copyright © The Sparks Foundation Bank. All Rights Reserved|Contact Us: +91 90000 00000</p>
    </div>




</body>

</html>