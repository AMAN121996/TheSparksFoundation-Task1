
   <?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from userdetails where USER_ID=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from userdetails where USER_ID=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['BALANCE']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['BALANCE'] - $amount;
                $sql = "UPDATE userdetails set BALANCE=$newbalance where USER_ID=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['BALANCE'] + $amount;
                $sql = "UPDATE userdetails set BALANCE=$newbalance where USER_ID=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['NAME'];
                $receiver = $sql2['NAME'];
                $sql = "INSERT INTO transaction_history(`Sender`, `Receiver`, `Amount`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='TransactionHisory.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <title>Transfer Money</title>
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
  
      .btn{
          background-color: black;
      }
      hr.style1{
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

<div class="container mt-3">
        <h2 class="text-center pt-4">Transaction</h2>
        <hr class="style1">
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  userdetails where USER_ID=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['USER_ID'] ?></td>
                    <td class="py-2"><?php echo $rows['NAME'] ?></td>
                    <td class="py-2"><?php echo $rows['EMAIL'] ?></td>
                    <td class="py-2"><?php echo $rows['BALANCE'] ?></td>
                </tr>
            </table>
        </div>
        <br>
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM userdetails where USER_ID!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['USER_ID'];?>" >
                
                    <?php echo $rows['NAME'] ;?> (Balance: 
                    <?php echo $rows['BALANCE'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>   
        
                <div>
            <button class="btn mt-3" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>
<div class="footer">
    <br>
  <p>Copyright © The Sparks Foundation Bank. All Rights Reserved|Contact Us: +91 90000 00000</p>
</div>

</body>
</html>