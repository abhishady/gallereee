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
    <script>
        $("document").ready(function(){
            $(".malls").click(function(){
                $(".tablewrapper").load("malls.php");
            });
            $(".hotels").click(function(){
                $(".tablewrapper").load("Hotels.php");
            });
            $(".shops").click(function(){
                $(".tablewrapper").load("Shops.php");
            });
            $(".places").click(function(){
                $(".tablewrapper").load("Places.php");
            });
            $(".products").click(function(){
                $(".tablewrapper").load("Products.php");
            });
            $(".companies").click(function(){
                $(".tablewrapper").load("Companies.php");
            });
            $(".colleges").click(function(){
                $(".tablewrapper").load("colleges.php");
            });
            $(".others").click(function(){
                $(".tablewrapper").load("Others.php");
            });
        });
    </script>
</head>
<body>
<div class="container-fluid" style="background:teal;overflow:scroll">
    <div class="row">
        <div class="col-lg-1">
            <img src="../assets/images/logo3.png" class="img-responsive" width="100px" height="100px"/>
        </div>
        <div class="col-lg-5 hvr-wobble-skew" style="font-family: Arial, Verdana, Helvetica, sans-serif;font-size: 30px;color: #f1f1f1;padding-top:20px;">Welcome Admin Saab</div>
        <div class="col-lg-2"></div>
        <div class="col-lg-2"></div>
        <div class="col-lg-2" style="padding-top:20px;">
            <input type="button" value="Logout" class="form-control hvr-wobble-skew"/>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
                <div class="row">
                    <div class="adminmenu malls hvr-buzz">Malls</div>
                </div>
                <div class="row">
                    <div class="adminmenu places hvr-buzz">Places</div>
                </div>
                <div class="row">
                    <div class="adminmenu products hvr-buzz">Products</div>
                </div>
                <div class="row">
                    <div class="adminmenu companies hvr-buzz">Companies</div>
                </div>
                <div class="row">
                    <div class="adminmenu shops hvr-buzz">Shops</div>
                </div>
                <div class="row">
                    <div class="adminmenu colleges hvr-buzz">Colleges</div>
                </div>
                <div class="row">
                    <div class="adminmenu hotels hvr-buzz">Hotels</div>
                </div>
                <div class="row">
                    <div class="adminmenu others hvr-buzz">Others</div>
                </div>
        </div>
        <div class="col-lg-10">
            <div class="container tablewrapper">
                <?php include 'malls.php';?>
            </div>
        </div>
    </div>
</div>
</body>
</html>