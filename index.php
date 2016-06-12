
<html>
<head>
    <title>Gallereee</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/hover.css"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/slider/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="assets/slider/css/style3.css" />
    <script type="text/javascript" src="assets/slider/js/modernizr.custom.86080.js"></script>

    <style type="text/css">
        ul.cb-slideshow li h3{
            font-size:70px;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="assets/jquery/jquery.js"></script>
    <script type="text/javascript" src="assets/jquery/ajax.js"></script>
    <script>
        $(document).ready(function() {
            $("#sg").click(function () {

                window.open('https://plus.google.com/u/0/103087920537489654220/posts?hl=en');
            });
            $("#sf").click(function () {

                window.open('https://www.facebook.com/Gallereee-164526227229974/timeline');
            });
            $("#st").click(function () {

                window.open('https://twitter.com/GallereeeDotCom');
            });
            $("#sin").click(function () {

                window.open('https://www.linkedin.com/profile/view?id=AAIAABtilL0Bs4JoEBcK80GZ8E9LbvVes6ZxwUc&trk=nav_responsive_tab_profile');
            });
        });
        $("document").ready(function(){
            $("#aboutmenu").click(function(){
                $("body").css("transition",'2s linear')
                $("body").scrollTop("1800") + " px";
            });
            $("#gallerymenu").click(function(){
                $("body").css("transition",'2s linear')
                $("body").scrollTop("5800") + " px";
            });
            $("#uploadmenu").click(function(){
                $("body").css("transition",'2s linear')
                $("body").scrollTop("11800") + " px";
            });
            $("#contactmenu").click(function(){
                $("body").css("transition",'2s linear')
                $("body").scrollTop("15800") + " px";
            });
            $("#back_btn1").click(function(){
                $("body").css("transition",'2s linear')
                $("body").scrollTop("0") + " px";
            });
            $("#back_btn2").click(function(){
                $("body").css("transition",'2s linear')
                $("body").scrollTop("1800") + " px";
            });
            $("#back_btn3").click(function(){
                $("body").css("transition",'2s linear')
                $("body").scrollTop("5800") + " px";
            });
            $("#back_btn4").click(function(){
                $("body").css("transition",'2s linear')
                $("body").scrollTop("11800") + " px";
            });
            $("#back_btn5").click(function(){
                $("body").css("transition",'2s linear')
                $("body").scrollTop("15800") + " px";
            });
            $(".mallsimage").click(function(){
                $(".imagesoptionwrapper").css("width","100%");
            });
            $(".companiesimage").click(function(){
                $(".imagesoptionwrapper").css("width","100%");
            });
            $(".shopsimage").click(function(){
                $(".imagesoptionwrapper").css("width","100%");
            });
            $(".collegesimage").click(function(){
                $(".imagesoptionwrapper").css("width","100%");
            });
            $(".placesimage").click(function(){
                $(".imagesoptionwrapper").css("width","100%");
            });
            $(".productsimage").click(function(){
                $(".imagesoptionwrapper").css("width","100%");
            });
            $(".hotelsimage").click(function(){
                $(".imagesoptionwrapper").css("width","100%");
            });
            $(".otherimage").click(function(){
                $(".imagesoptionwrapper").css("width","100%");
            });
            $(".imageoptionback").click(function(){
                $(".imagesoptionwrapper").css("width","0%");
            });
            $(".optionzimage").click(function(){
                $(".imagesoptionzwrapper").css("width","100%");
            });
            $(".imageoptionzback").click(function(){
                $(".imagesoptionzwrapper").css("width","0%");
            });
            $(".signuplink").click(function(){
                $(".signupwrapper").css("height","100%");
            });
            $(".signupback").click(function(){
                $(".signupwrapper").css("height","0%");
            });
            $(".loginlink").click(function(){
                $(".loginwrapper").css("height","100%");
            });
            $(".loginback").click(function(){
                $(".loginwrapper").css("height","0%");
            });
        });
        $("document").ready(function(){
            $(".socialmenuwrapper").mouseenter(function(){
                $(".socialicons2").addClass("animated lightSpeedIn");
            });
            $(".socialmenuwrapper").mouseleave(function(){
                $(".socialicons2").removeClass("animated lightSpeedIn");
            });
        });
        $("document").ready(function(){
            $("#signlog").click(function(){
                $(".signupwrapper").css("height","100%");
            });
            $("#loginbtn").click(function(){
                $(".loginwrapper").css("height","100%");
            });
            $("#logoutbtn").click(function(){
                alert("you are successfully logout");
            });
        });
    </script>
    <script>
        window.onscroll = function parallax(){
            var firstpage = document.getElementById('firstpage');
            firstpage.style.top =-(window.pageYOffset / 2)+'px';
            var back_image1 = document.getElementById('back_image1');
            back_image1.style.top =-(window.pageYOffset / 6)+'px';
            var back_image2 = document.getElementById('back_image2');
            back_image2.style.top =-(window.pageYOffset / 6)+'px';
            var back_image3 = document.getElementById('back_image3');
            back_image3.style.top =-(window.pageYOffset / 6)+'px';
            var back_image4 = document.getElementById('back_image4');
            back_image4.style.top =-(window.pageYOffset / 6)+'px';
            var back_image5 = document.getElementById('back_image5');
            back_image5.style.top =-(window.pageYOffset / 6)+'px';
            var back_image6 = document.getElementById('back_image6');
            back_image6.style.top =-(window.pageYOffset / 6)+'px';
            var back_image7 = document.getElementById('back_image7');
            back_image7.style.top =-(window.pageYOffset / 6)+'px';
            var back_image8 = document.getElementById('back_image8');
            back_image8.style.top =-(window.pageYOffset / 6)+'px';
            var back_image9 = document.getElementById('back_image9');
            back_image9.style.top =-(window.pageYOffset / 6)+'px';
            var back_image10 = document.getElementById('back_image10');
            back_image10.style.top =-(window.pageYOffset / 6)+'px';
            var back_image11 = document.getElementById('back_image11');
            back_image11.style.top =-(window.pageYOffset / 6)+'px';
            var back_image12 = document.getElementById('back_image12');
            back_image12.style.top =-(window.pageYOffset / 6)+'px';
            var c1 = document.getElementById('c1');
            c1.style.left =-(window.pageYOffset / 2)+'px';
            var c2 = document.getElementById('c2');
            c2.style.left =-(window.pageYOffset / 1)+'px';
            var c3 = document.getElementById('c3');
            c3.style.left =-(window.pageYOffset / 1.5)+'px';
            var c4 = document.getElementById('c4');
            c4.style.left =(window.pageYOffset / 3)+'px';
            var c5 = document.getElementById('c5');
            c5.style.left =(window.pageYOffset / 1)+'px';
            var c6 = document.getElementById('c6');
            c6.style.left =(window.pageYOffset / 3)+'px';
            var aboutmenu = document.getElementById('aboutmenu');
            aboutmenu.style.left =-(window.pageYOffset / 2)+'px';
            var gallerymenu = document.getElementById('gallerymenu');
            gallerymenu.style.left =-(window.pageYOffset/2)+'px';
            var contactmenu = document.getElementById('contactmenu');
            contactmenu.style.left =(window.pageYOffset/2)+'px';
            var uploadmenu = document.getElementById('uploadmenu');
            uploadmenu.style.left =(window.pageYOffset/2)+'px';
            var secondpage = document.getElementById('secondpage');
            secondpage.style.top =-(window.pageYOffset / 2)+'px';
            var thirdpage = document.getElementById('thirdpage');
            thirdpage.style.top =-(window.pageYOffset / 2)+'px';
            var fourthpage = document.getElementById('fourthpage');
            fourthpage.style.top =-(window.pageYOffset / 2)+'px';
            var fifthpage = document.getElementById('fifthpage');
            fifthpage.style.top =-(window.pageYOffset / 2)+'px';

        }
    </script>
    <script>

        function signup(){
            var signfn = document.getElementById("signfn").value;
            var signln = document.getElementById("signln").value;
            var signemail = document.getElementById("signemail").value;
            var signcn = document.getElementById("signcn");
            var signpass = document.getElementById("signpass").value;
            var signconpass = document.getElementById('signconpass').value;
            var mob = /^[1-9]{1}[0-9]{9}$/;
            var eml2 = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if (signfn==""||signln == "" || signemail == ""||signcn==""||signpass == ""||signconpass == ""||signpass!=signconpass||!(signcn.value.length == 10)||eml2.test(signemail) == false){
                if (signfn == "") {
                    document.getElementById("signfn").style.borderColor = "#ff0000";
                    signfn.value = "";
                    signfn.focus();
                    return false;
                }
                else {
                    document.getElementById("signfn").style.borderColor = "#ccc";
                }
                if (signln == "") {
                    document.getElementById("signln").style.borderColor = "#ff0000";
                    signln.value = "";
                    signln.focus();
                    return false;
                }
                else {
                    document.getElementById("signln").style.borderColor = "#ccc";
                }
                if (eml2.test(signemail) == false)
                {
                    alert('Invalid Email Address');
                    document.getElementById("signemail").style.borderColor="#ff0000";
                    signemail.value = "";
                    $("#signemail").focus();
                    return false;
                }
                else{
                    document.getElementById("signemail").style.borderColor="#ccc";
                }
                if (!(signcn.value.length == 10) || signcn.value=="") {
                    alert("The phone number is the wrong length. \nPlease enter 10 digit mobile no.");
                    document.getElementById("signcn").style.borderColor="#ff0000";
                    signcn.value = "";
                    signcn.focus();
                    return false;
                }
                else{
                    document.getElementById("signcn").style.borderColor="#ccc";
                }
                if (signpass == "") {
                    document.getElementById("signpass").style.borderColor = "#ff0000";
                    signpass.value = "";
                    signpass.focus();
                    return false;
                }
                else {
                    document.getElementById("signpass").style.borderColor = "#ccc";
                }
                if (signconpass == "") {
                    document.getElementById("signconpass").style.borderColor = "#ff0000";
                    signconpass.value = "";
                    signconpass.focus();
                    return false;
                }
                if(signpass!=signconpass){
                    alert("password doesn't match")
                    document.getElementById("signconpass").style.borderColor = "#ff0000";
                signconpass.value = "";
                signconpass.focus();
                return false;
                }
                else {
                    document.getElementById("signconpass").style.borderColor = "#ccc";
                }
            }
            else{
                document.getElementById("signlog").innerText = "Log In";
               // document.getElementById("signlog"). = "loginbtn";
                registerUser();
            }
        }

    </script>
</head>
<body>
<div class="socialmenuwrapper">
    <div class="socialicons socialarrowwrapper">
        <img class="img-responsive socialarrow" src="assets/images/arrow.png"/>
    </div>
    <div class="socialicons socialicons2" style="animation-delay:.2s;">
        <a href="https://plus.google.com/u/0/103087920537489654220/posts?hl=en"><img class="img-responsive" src="assets/images/g.png"/></a>
    </div>
    <div class="socialicons socialicons2" style="animation-delay:.4s;">
        <a href="https://www.linkedin.com/profile/view?id=AAIAABtilL0Bs4JoEBcK80GZ8E9LbvVes6ZxwUc&trk=nav_responsive_tab_profile"><img class="img-responsive" src="assets/images/in.png"/></a>
    </div>
    <div class="socialicons socialicons2" style="animation-delay:.6s;">
        <a href="https://www.facebook.com/Gallereee-164526227229974/timeline"><img class="img-responsive" src="assets/images/f.png"/></a>
    </div>
    <div class="socialicons socialicons2" style="animation-delay:.8s;">
        <a href="https://twitter.com/GallereeeDotCom"><img class="img-responsive" src="assets/images/t.png"/></a>
    </div>
</div>
<div class="signuplogout hvr-sink" class="signlog" id="signlog" onclick="signup()">Sign Up</div>
<div class="imagesoptionwrapper" style="width:0px;height:100%;overflow:hidden;position:fixed;float:left;z-index: 2000;background-color:rgba(999,999,999,.8);transition:.4s ease-in-out;">
    <div class="container-fluid">
        <div class="container">
            <div class="row" style="text-align: left"><span class="imageoptionback" style="font-family:font-family: Arial, Verdana, Helvetica, sans-serif;font-size: 30px;color:teal;"> Back </span></div>
            <div class="row">
                <span style="font-family:font-family: Arial, Verdana, Helvetica, sans-serif;font-size: 20px;color:teal;">
                    Type Name
                </span><hr style="background: teal;height: 10px">
            </div>
            <div class="row">
                <div class="container" style="height:80%;overflow:scroll" id="fillme">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="signupwrapper container-fluid" id="signupwrapper">
    <div class="container">
        <div class="row"><span class="signupback" style="font-family:font-family: Arial, Verdana, Helvetica, sans-serif;font-size: 30px;color:#fff;">Back</span></div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">

                    <div class="row">
                        <input type="text" id="signfn" placeholder="First Name..." style="width:300px;margin: 20% auto auto auto;" class="form-control"/>
                    </div>
                    <div class="row">
                        <input type="text" id="signln" placeholder="Last Name..." style="margin-top: 20px;width:300px;margin: 20px auto auto auto;" class="form-control"/>
                    </div>
                    <div class="row">
                        <input type="email" id="signemail" placeholder="Email Address..." style="margin-top: 20px;width:300px;margin: 20px auto auto auto;" class="form-control"/>
                    </div>
                    <div class="row">
                        <input type="number" id="signcn" placeholder="Contact Number..." style="margin-top: 20px;width:300px;margin: 20px auto auto auto;" class="form-control"/>
                    </div>
                    <div class="row">
                        <input type="password" id="signpass" placeholder="Enter Password" style="margin-top: 20px;width:300px;margin: 20px auto auto auto;" class="form-control"/>
                    </div>
                    <div class="row">
                        <input type="password" id="signconpass" placeholder="Confirm Password" style="margin-top: 20px;width:300px;margin: 20px auto auto auto;" class="form-control"/>
                    </div>
                    <div class="row">
                        <input type="button" value="Signup" style="margin-top: 20px;width:300px;margin: 20px auto auto auto;" class="form-control" onclick="signup()"/>
                    </div>

            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</div>
<div class="loginwrapper container-fluid" id="loginwrapper">
    <div class="container">
        <div class="row"><span class="loginback" style="font-family:font-family: Arial, Verdana, Helvetica, sans-serif;font-size: 30px;color:#fff;">Back</span></div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">

                    <div class="row">
                        <input type="email" id="loginemail" placeholder="Email ID..." style="width:300px;margin: 20% auto auto auto;" class="form-control"/>
                    </div>
                    <div class="row">
                        <input type="password" id="loginpass" placeholder="Enter Password" style="margin-top: 20px;width:300px;margin: 20px auto auto auto;" class="form-control"/>
                    </div>
                    <div class="row">
                        <input type="submit" value="Log In" style="margin-top: 20px;width:300px;margin: 20px auto auto auto;" class="form-control" onclick="checkLogin()"/>
                    </div>

            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</div>
<div class="imagesoptionzwrapper" style="width:0px;height:100%;overflow:hidden;position:fixed;color:#fff;float:right;z-index: 2500;background-color:rgba(0,0,0,1);transition:.4s ease-in-out;">
    <div class="container-fluid">
        <div class="container">
            <div class="row" style="text-align: left"><span class="imageoptionzback" style="font-family:font-family: Arial, Verdana, Helvetica, sans-serif;font-size: 30px;color:#fff;"> Back </span></div>
            <div class="row">
                <span style="font-family:font-family: Arial, Verdana, Helvetica, sans-serif;font-size: 20px;color:#fff;">
                    Type Name
                </span><hr style="background: #fff;height: 10px">
            </div>
            <div class="row">
                <div class="container" style="height:80%;overflow:scroll;" id="aho">


                </div>
            </div>
        </div>
    </div>
</div>
<div style="position:fixed;width:100%;height:100%;z-index:2">
    <ul class="cb-slideshow">
        <li><span></span><div><h3>Welcome to GALLEREEE</h3></div></li>
        <li><span></span><div><h3>Welcome to GALLEREEE</h3></div></li>
        <li><span></span><div><h3>Welcome to GALLEREEE</h3></div></li>
        <li><span></span><div><h3>Welcome to GALLEREEE</h3></div></li>
        <li><span></span><div><h3>Welcome to GALLEREEE</h3></div></li>
        <li><span></span><div><h3>Welcome to GALLEREEE</h3></div></li>
    </ul>
</div>
<div class="back_wrapper">
    <div class="logo_wrapper hvr-buzz-out" id="logo_wrapper">
        <img src="assets/images/logo3.png" width="100%" height="100%"/>
    </div>
    <div class="back_image1" id="back_image1">
        <img src="assets/images/backimage3.jpg" width="100%"/>
    </div>
    <div class="back_image2" id="back_image2">
        <img src="assets/images/backimage3.jpg" width="100%"/>
    </div>
    <div class="back_image3" id="back_image3">
        <img src="assets/images/backimage3.jpg" width="100%"/>
    </div>
    <div class="back_image4" id="back_image4">
        <img src="assets/images/backimage3.jpg" width="100%"/>
    </div>
    <div class="back_image5" id="back_image5">
        <img src="assets/images/backimage3.jpg" width="100%"/>
    </div>
    <div class="back_image6" id="back_image6">
        <img src="assets/images/backimage3.jpg" width="100%"/>
    </div>
    <div class="back_image7" id="back_image7">
        <img src="assets/images/backimage3.jpg" width="100%"/>
    </div>
    <div class="back_image8" id="back_image8">
        <img src="assets/images/backimage3.jpg" width="100%"/>
    </div>
    <div class="back_image9" id="back_image9">
        <img src="assets/images/backimage3.jpg" width="100%"/>
    </div>
    <div class="back_image10" id="back_image10">
        <img src="assets/images/backimage3.jpg" width="100%"/>
    </div>
    <div class="back_image11" id="back_image11">
        <img src="assets/images/backimage3.jpg" width="100%"/>
    </div>
    <div class="back_image12" id="back_image12">
        <img src="assets/images/backimage3.jpg" width="100%"/>
    </div>
</div>
<div class="back_btnn hvr-pulse" id="back_btn1">1</div>
<div class="back_btnn hvr-pulse" id="back_btn2" style="margin-left: 15%;">2</div>
<div class="back_btnn hvr-pulse" id="back_btn3" style="margin-left: 25%;">3</div>
<div class="back_btnn hvr-pulse" id="back_btn4" style="margin-left: 35%;">4</div>
<div class="back_btnn hvr-pulse" id="back_btn5" style="margin-left: 45%;">5</div>
<div class="firstpage container-fluid" id="firstpage">

    <img class="c1 animated bounceInRight" id="c1" src="assets/images/c1 copy.png" width="100%" height="100%"/>
    <img class="c2 animated bounceInRight" id="c2" src="assets/images/c2 copy.png" width="100%" height="100%"/>
    <img class="c3 animated bounceInLeft" id="c3" src="assets/images/c3 copy.png" width="100%" height="100%"/>
    <img class="c4 animated bounceInLeft" id="c4" src="assets/images/c4 copy.png" width="100%" height="100%"/>
    <img class="c5 animated bounceInRight" id="c5" src="assets/images/c5 copy.png" width="100%" height="100%"/>
    <img class="c6 animated bounceInLeft" id="c6" src="assets/images/c6 copy.png" width="100%" height="100%"/>
    <div class="aboutmenu menuicon animated bounceInUp" id="aboutmenu">About</div>
    <div class="gallerymenu menuicon animated bounceInUp" id="gallerymenu">Gallery</div>
    <div class="contactmenu menuicon animated bounceInUp" id="uploadmenu">Upload</div>
    <div class="uploadmenu menuicon animated bounceInUp" id="contactmenu">Contact</div>
</div>
<div class="secondpage container-fluid" id="secondpage">
    <div class="row" style="margin: 20px;">
        <div class="col-lg-5" style="font-family:Arial, Verdana, Helvetica, sans-serif;font-size: 18px;text-align: justify">

                The name Gallereee is derived from the word “gallery” as it contains photos and all the photos are generally stored in gallery application. This website is dynamic in nature as it contains information that changes, depending on the viewer, the time of the day, the time zone, the viewers native language, and other factors. It contain client-side scripting or server-side scripting to generate the changing content, or combination of both. <br>
 
Its basically make people interact in new and different events and can attend that one event or come to know about various event by watching photographs on website. In this for improving and enhancing the site, we have also  make a contact us section, where one can give their opinions for better output.<br>
 
This website is divided into five modules Sign up, About gallereee, Gallery(contains list of uploaded images), Login and Upload image and Contact us. This website is mainly designed in parallax technology. Parallax is used to bring the user experience to the interactive level of online viewing. With parallax, developers can make their web presence more appealing to their site’ visitors through engaging visuals and functionality , parallax scrolling has taken hold as the new frontier of user experience.<br>
 
This website will allow people to share pictures of the happenings around them.  Some people are not aware of whatever is going on in their city and other cities as well. This website will help them to know about the events, what’s new upcoming product, also user can advertise whatever he want to advertise. They will also come to know about the unknown places in different cities. People don’t have to explore then newspapers and the news channels to learn about different events. On this website, users can share about the social events, school events, college events, and also advertise products, shops, malls, etc and also add their discriptions.

        </div>
        <div class="col-lg-7" style="text-align: center">
            <img src="assets/images/aboutus.jpg" class="img-responsive hvr-bob" style="margin: auto"/>
        </div>
    </div>
</div>
<div class="thirdpage container-fluid" id="thirdpage">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-3" style="padding: 50px;">
                    <div class="row"  onclick="getdata('mall')" style="text-align: center"><img src="assets/images/mall.ico" width="200px" height="200px" class="hvr-bob optionzz mallsimage" align="center"/></div>
                    <div class="row" style="font-size:20px;font-family: Arial, Verdana, Helvetica, sans-serif;text-align: center">Malls</div>
                </div>
                <div class="col-lg-3" style="padding: 50px;">
                    <div class="row"  onclick="getdata('company')"  style="text-align: center"><img src="assets/images/company.png" width="200px" height="200px" class="hvr-bob optionzz companiesimage" align="center"/></div>
                    <div class="row" style="font-size:20px;font-family: Arial, Verdana, Helvetica, sans-serif;text-align: center">Companies</div>                </div>
                <div class="col-lg-3" style="padding: 50px;">
                    <div class="row"  onclick="getdata('shop')"  style="text-align: center"><img src="assets/images/shop.png" width="200px" height="200px" class="hvr-bob optionzz shopsimage" align="center"/></div>
                    <div class="row" style="font-size:20px;font-family: Arial, Verdana, Helvetica, sans-serif;text-align: center">Shops</div>                </div>
                <div class="col-lg-3" style="padding: 50px;">
                    <div class="row"  onclick="getdata('product')"  style="text-align: center"><img src="assets/images/product.png" width="200px" height="200px" class="hvr-bob optionzz productsimage" align="center"/></div>
                    <div class="row" style="font-size:20px;font-family: Arial, Verdana, Helvetica, sans-serif;text-align: center">Products</div>                </div>
            </div>
            <div class="row">
                <div class="col-lg-3" style="padding: 50px;">
                    <div class="row"  onclick="getdata('college')"  style="text-align: center"><img src="assets/images/School.png" width="200px" height="200px" class="hvr-bob optionzz collegesimage" align="center"/></div>
                    <div class="row" style="font-size:20px;font-family: Arial, Verdana, Helvetica, sans-serif;text-align: center">Colleges</div>                </div>
                <div class="col-lg-3" style="padding: 50px;">
                    <div class="row"  onclick="getdata('place')"  style="text-align: center"><img src="assets/images/place.png" width="200px" height="200px" class="hvr-bob optionzz placesimage" align="center"/></div>
                    <div class="row" style="font-size:20px;font-family: Arial, Verdana, Helvetica, sans-serif;text-align: center">Places</div>                </div>
                <div class="col-lg-3" style="padding: 50px;">
                    <div class="row"   onclick="getdata('hotels')" style="text-align: center"><img src="assets/images/hotel.png" width="200px" height="200px" class="hvr-bob optionzz hotelsimage" align="center"/></div>
                    <div class="row" style="font-size:20px;font-family: Arial, Verdana, Helvetica, sans-serif;text-align: center">Hotels</div>                </div>
                <div class="col-lg-3" style="padding: 50px;">
                    <div class="row"  onclick="getdata('other')"  style="text-align: center"><img src="assets/images/other.png" width="200px" height="200px" class="hvr-bob optionzz otherimage" align="center"/></div>
                    <div class="row" style="font-size:20px;font-family: Arial, Verdana, Helvetica, sans-serif;text-align: center">Other</div>                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fourthpage" id="fourthpage">
    <div class="row">
        <div class="col-lg-6">
            <div class="row" style="margin-top:70px;">
                <img src="assets/images/before.jpg"  class="img-responsive" style="margin: auto"/>
            </div>
        </div>
        <div class="col-lg-6">
            <form action="upload.php" method="post" id="uploadform" enctype="multipart/form-data">
            <div class="row" style="margin: 20px;">
                <div class="row">
                    <div class="col-lg-5" Style="margin-top:10px;margin-bottom:10px">
                        <select style="background: none;color: #a1a1a1;" name="selecttypename" id="selecttype" class="form-control formzoom">
                            <option value="0">Select type...</option>
                            <option value="Mall">Mall</option>
                            <option value="College">College</option>
                            <option value="Place">Place</option>
                            <option value="Shop">Shop</option>
                            <option value="Company">Company</option>
                            <option value="Product">Product</option>
                            <option value="Hotels">Hotels</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-lg-5" Style="margin-top:10px;margin-bottom:10px">
                        <input type="text" placeholder="Type name..." style="background: none;color: #fff;" name="typename" class="form-control formzoom"/>
                    </div>
                </div>
<!--                -->

                <div class="row">
                    <div class="col-lg-10" Style="margin-top:10px;margin-bottom:10px">
                        <input type="text" placeholder="Description..." style="background: none;color: #fff;" name="description" class="form-control formzoom"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5" Style="margin-top:10px;margin-bottom:10px">
                        <input type="file" style="background: none;color: #fff;" id="inputimg1" name="inputimg[]" class="form-control formzoom"/>
                    </div>
                    <div class="col-lg-5" Style="margin-top:10px;margin-bottom:10px">
                        <input type="file" style="background: none;color: #fff;" id="inputimg2" name="inputimg[]" class="form-control formzoom"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5" Style="margin-top:10px;margin-bottom:10px">
                        <input type="file" style="background: none;color: #fff;" id="inputimg3" name="inputimg[]" class="form-control formzoom"/>
                    </div>
                    <div class="col-lg-5" Style="margin-top:10px;margin-bottom:10px">
                        <input type="file" style="background: none;color: #fff;" id="inputimg4" name="inputimg[]" class="form-control formzoom"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5" Style="margin-top:10px;margin-bottom:10px">
                        <input type="file" style="background: none;color: #fff;" id="inputimg5" name="inputimg[]" class="form-control formzoom"/>
                    </div>
                    <div class="col-lg-5" Style="margin-top:10px;margin-bottom:10px">
                        <input type="file" style="background: none;color: #fff;" id="inputimg6" name="inputimg[]" class="form-control formzoom"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5" Style="margin-top:10px;margin-bottom:10px">
                        <input type="file" style="background: none;color: #fff;" id="inputimg7" name="inputimg[]" class="form-control formzoom"/>
                    </div>
                    <div class="col-lg-5" Style="margin-top:10px;margin-bottom:10px">
                        <input type="file" style="background: none;color: #fff;" id="inputimg8" name="inputimg[]" class="form-control formzoom"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10" Style="margin-top:10px;margin-bottom:10px">
                        <input type="submit" style="background: #fff;color: teal;" class="form-control" value="Submit" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5" Style="margin-top:10px;margin-bottom:10px;font-family:Arial, Verdana, Helvetica, sans-serif;font-size: 18px;color:#fff;font-size:20px;">
                        <span class="loginlink hvr-underline-from-right" id="logg">Log In</span>
                    </div>
                    <div class="col-lg-5" Style="margin-top:10px;margin-bottom:10px;font-family:Arial, Verdana, Helvetica, sans-serif;font-size: 18px;color:#fff;font-size:20px;">
                        <span class="signuplink hvr-underline-from-right">Sign Up Here</span>
                    </div>
                </div>
            </div>
                </form>
        </div>
    </div>
</div>
<div class="fifthpage container-fluid" id="fifthpage">
    <div class="row">
        <div class="col-lg-4">
            <div class="row" Style="margin-top:10px;margin-bottom:10px">
                <div class="col-lg-4"></div>
                <div class="col-lg-4" style="text-align: center;font-family: arial;color: #fff;font-size: 22px;">Contact Us<br><hr style="color:#fff;"></div>
                <div class="col-lg-4"></div>
            </div>
            <div class="row"  Style="margin-top:10px;margin-bottom:10px">
                <div class="col-lg-12" Style="margin-top:10px;margin-bottom:10px">
                    <input type="text" placeholder="First name..." style="background: none;color: #fff;" class="form-control"/>
                </div>
            </div>
            <div class="row"  Style="margin-top:10px;margin-bottom:10px">
                <div class="col-lg-12" Style="margin-top:10px;margin-bottom:10px">
                    <input type="text" placeholder="Last name..." style="background: none;color: #fff;" class="form-control"/>
                </div>
            </div>
            <div class="row"  Style="margin-top:10px;margin-bottom:10px">
                <div class="col-lg-12" Style="margin-top:10px;margin-bottom:10px">
                    <input type="number" placeholder="Contact number..." style="background: none;color: #fff;" class="form-control"/>
                </div>
            </div>
            <div class="row"  Style="margin-top:10px;margin-bottom:10px">
                <div class="col-lg-12" Style="margin-top:10px;margin-bottom:10px">
                    <input type="email" placeholder="Email address..." style="background: none;color: #fff;" class="form-control"/>
                </div>
            </div>
            <div class="row"  Style="margin-top:10px;margin-bottom:10px">
                <div class="col-lg-12" Style="margin-top:10px;margin-bottom:10px">
                    <input type="text" placeholder="Message..." style="background: none;color: #fff;" class="form-control"/>
                </div>
            </div>
            <div class="row"  Style="margin-top:10px;margin-bottom:10px">
                <div class="col-lg-12" Style="margin-top:10px;margin-bottom:10px">
                    <input type="submit" value="Send message" style="background: #fff;color: teal;" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row"  Style="margin-top:10px;margin-bottom:10px">
                <div class="col-lg-6"  Style="margin-top:10px;margin-bottom:10px;">
                    <img src="assets/images/contactus.png" class="img-responsive" align="center"/>
                </div>
                <div class="col-lg-6"  Style="margin-top:10px;margin-bottom:10px">
                    <div class="row" Style="margin-top:10px;margin-bottom:10px">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8" style="text-align: center;font-family: arial;color: #fff;font-size: 18px;">Reach US<br><hr style="color:#fff;"></div>
                        <div class="col-lg-2"></div>
                    </div>
                    <div class="row" Style="margin-top:10px;margin-bottom:10px">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8" style="text-align: center;font-family: arial;color: #fff;font-size: 14px;">Email : <br>nitish.ranag@gmail.com <br>shikha.vans.sharma@gmail.com</div>
                        <div class="col-lg-2"></div>
                    </div>
                    <div class="row" Style="margin-top:10px;margin-bottom:10px">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8" style="text-align: center;font-family: arial;color: #fff;font-size: 14px;">Mobile No. : <br>+91-8437037071 <br>+91-7508504302</div>
                        <div class="col-lg-2"></div>
                    </div><br>
                    <div class="row" Style="margin-top:10px;margin-bottom:10px">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8" style="text-align: center;font-family: arial;color: #fff;font-size: 18px;">Follow Us On<br><hr style="color:#fff;"></div>
                        <div class="col-lg-2"></div>
                    </div>
                    <div class="row" Style="margin-top:10px;margin-bottom:10px">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4" style="text-align: center;font-family: arial;color: #fff;font-size: 14px;">
                            <div class="socialmain" style="width:100px;height:100px;border-radius: 4px;border:#fff 2px solid;margin-top:10px;margin-right: 10px;margin-left: auto;margin-right:auto;">
                                <div class="social_wrapper" id="sf">f</div>
                            </div>
                        </div>
                        <div class="col-lg-4" style="text-align: center;font-family: arial;color: #fff;font-size: 14px;">
                            <div class="socialmain" style="width:100px;height:100px;border-radius: 4px;border:#fff 2px solid;margin-top:10px;margin-right: 10px;margin-left: auto;margin-right:auto;">
                                <div class="social_wrapper" id="sg">g</div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    <div class="row" Style="margin-top:10px;margin-bottom:10px">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4" style="text-align: center;font-family: arial;color: #fff;font-size: 14px;">
                            <div class="socialmain" style="width:100px;height:100px;border-radius: 4px;border:#fff 2px solid;margin-top:10px;margin-right: 10px;margin-left: auto;margin-right:auto;">
                                <div class="social_wrapper" id="st">t</div>
                            </div>
                        </div>
                        <div class="col-lg-4" style="text-align: center;font-family: arial;color: #fff;font-size: 14px;">
                            <div class="socialmain" style="width:100px;height:100px;border-radius: 4px;border:#fff 2px solid;margin-top:10px;margin-right: 10px;margin-left: auto;margin-right:auto;">
                                <div class="social_wrapper" id="sin">in</div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>