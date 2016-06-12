<html>
<head>
    <title>Gallereee</title>
    <link rel="stylesheet" type="text/css" href="assets/css/adminstyle.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/hover.css"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../assets/jquery/jquery.js"></script>

</head>
<body style="background: teal">
<div class="container-fluid" style="background:teal;">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
    <form action="../ajaxFiles/loginUser.php" method="post">
        <div class="row" style="margin-top:50px;font-family: Arial, Verdana, Helvetica, sans-serif;font-size: 30px;;text-align: center">
            login
        </div>
        <div class="row">
            <input type="text" placeholder="Enter email" name="email" class="form-control hvr-wobble-skew" style="margin-top:20px;"/>
        </div>
        <div class="row">
            <input type="password" placeholder="Enter Password" name="pass" class="form-control hvr-wobble-skew" style="margin-top:20px;"/>
        </div>
        <div class="row">
            <input type="submit" value="Login" name="login" class="form-control hvr-wobble-skew" style="margin-top:20px;"/>
        </div>
        </form>
    </div>
    <div class="col-lg-4"></div>
</div>
</body>
</html>