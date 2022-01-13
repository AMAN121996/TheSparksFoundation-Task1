

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <title>Transaction History</title>
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

         hr.style1
         {
	border-top: 1px solid #8c8b8b;
}
    </style>
</head>
 
<body>
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

<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        <hr class="style1">
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction_history";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['Id']; ?></td>
            <td class="py-2"><?php echo $rows['Sender']; ?></td>
            <td class="py-2"><?php echo $rows['Receiver']; ?></td>
            <td class="py-2"><?php echo $rows['Amount']; ?> </td>
            <td class="py-2"><?php echo $rows['Date']; ?> </td>
                
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



</body>
</html>