<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Sparks Foundation Bank</title>
  <link rel="icon" type="image/png" href="images/logo.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style4.css">
    <script src="javascript.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,100&display=swap" rel="stylesheet">
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
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


<div  id="Div1" class="banner_image"> 
  
  <div class="container">
    <div id="banner_content">
      <h1 style="color: white;text-align: center; font-size:56px;">Welcome To The Sparks Foundation Bank</h1>
        <p style="color:white;text-align: center;margin-top:10%;font-size:18px; ">For Different Operations</p>
        <button onclick="switchVisible()" class="btn" style="font-size:large; margin-top:0%;">Click Here</button>
    </div>
  </div>
</div> 


<div id="Div2" class="operationdivshow" style="display:none">

            <div class="container">
                <div id="banner_content">
                    <h1 style="color: white;text-align: center; font-size:56px;">What do you want to do</h1>
                    <a href="TransforMoney.php" class="btn text-center w-50" style="font-size:large;text-align: center; ">Transfer Money</a>
                    <a href="UserDetails.php" class="btn text-center w-50" style="font-size:large;text-align: center; ">View Users</a>
                    <a href="TransactionHisory.php" class="btn text-center w-50" style="font-size:large;text-align: center;">Transaction History</a>
                </div>
            </div>
        </div>

<footer>
  <div>
     <p style="color:white;text-align: center">Copyright © The Sparks Foundation Bank. All Rights Reserved|Contact Us: +91 90000 00000</p>
  </div>
</footer>
</body>
</html>
