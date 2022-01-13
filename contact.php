
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
        .container
        {
            margin-top: 3%;;
        }
        h2{
            text-align: center;
            margin-top: 3%;
        }
        .and{
            color: #fff; 
            background-color: black;
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
           <div> 
            <h2> Contact Us</h2>
        </div>
        <hr class="style1">
   <div class="container">
<!-- Default form contact -->
<form class="text-center border border-light p-5" action="#!">



    <!-- Name -->
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
<br><br>
    <!-- Email -->
    <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

    <br><br>
    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
    </div>

    <!-- Copy -->
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
    </div>
<br>
<br>
    <!-- Send button -->
    <button class="and btn-block btn-lg" type="submit">Send</button>

</form>
</div>
<!-- Default form contact -->
    <!--footer-->

    <div class="footer">
        <br>
        <p>Copyright © The Sparks Foundation Bank. All Rights Reserved|Contact Us: +91 90000 00000</p>
    </div>




</body>

</html>