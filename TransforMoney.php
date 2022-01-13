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
    <link rel="stylesheet" type="text/css" href="style4.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,100&display=swap" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css">
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
        h2{
            text-align: center;
            margin-bottom: 2%;
        }
        .btn{
            background-color: black;
      
        }
      
    </style>
    <title>The Sparks Foundation Bank</title>

    <link rel="icon" type="image/png" href="images/logo.jpg">
</head>

<body>

    <header>

        <!--Navbar-->
        <div class="navbar navbar-inverse navbar-default">
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

        <div> 
            <h2> Transfer Money</h2>
        </div>
      
        <div class="container">

            <div class="table-responsive ">
                <table id="userdetails" class="table table-hover table-striped table-condensed table-bordered ">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>NAME</td>
                            <td>EMAIL</td>
                            <td>BALANCE</td>
                            <td>OPERATION</td>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td class="py-2 "><?php echo $row["USER_ID"] ?></td>
                                <td class="py-2"><?php echo $row['NAME'] ?></td>
                                <td class="py-2"><?php echo $row['EMAIL'] ?></td>
                                <td class="py-2"><?php echo $row['BALANCE'] ?></td>
                                <td><a href="Transfer_amt.php?id= <?php echo $row['USER_ID']; ?>"> <button type="button" class="btn">Transact</button></a></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>

                </table>
            </div>
        </div>


        <!-- Footer -->
        <div class="footer">
            <br>
            <p>Copyright © The Sparks Foundation Bank. All Rights Reserved|Contact Us: +91 90000 00000</p>
        </div>
    </header>



</body>

</html>