function runajax()
{
    var objajax=null;
    try{
        objajax=new XMLHttpRequest();
    }
    catch(e1)
    {
        try{
            objajax=new ActiveXObject("Msxml12.XMLHTTP");
        }
        catch(e2)
        {
            try
            {
                objajax=new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e3)
            {
                alert ("Your browser does not support ajax");
            }
        }
    }
    return objajax;
}


function getdata(pagename)
{
//    document.getElementById("fillme").innerHTML="";
    var obj=runajax();
    obj.onreadystatechange=function()
    {
        if(obj.status==200 && obj.readyState==4)
        {
            if(obj.responseText!="")
            {
                document.getElementById("fillme").innerHTML=obj.responseText;
            }
        }
    }
    obj.open("Get","ajaxfiles/fp.php?pagename="+pagename,true);
    obj.send(null);
}
function callFolder(folder,uid)
{
    $(".imagesoptionzwrapper").css("width","100%");
    var obj=runajax();
    obj.onreadystatechange=function()
    {
        if(obj.status==200 && obj.readyState==4)
        {
            if(obj.responseText!="")
            {
//                alert(obj.responseText);
                document.getElementById("aho").innerHTML=obj.responseText;
            }
        }
    }
    obj.open("Get","ajaxfiles/ff.php?pagename="+folder+"&uid="+uid,true);
    obj.send(null);
}
function checkLogin()
{
    email=document.getElementById("loginemail").value;
    password=document.getElementById("loginpass").value;
    var obj=runajax();
    obj.onreadystatechange=function()
    {
        if(obj.status==200 && obj.readyState==4)
        {
            if(obj.responseText!="")
            {
                if(obj.responseText == 1)
                {
                    document.getElementById("loginwrapper").style.display="none";
                    document.getElementById("logg").innerHTML="Logout";
                }else if(obj.responseText == 0)
                {
                    alert("Wrong Email/Password");
                }
            }
        }

    }
    obj.open("Get","ajaxfiles/loginUser.php?email="+email+"&password="+password,true);
    obj.send(null);
}
function registerUser()
{
    fname=document.getElementById("signfn").value;
    lname=document.getElementById("signln").value;
    email=document.getElementById("signemail").value;
    contact=document.getElementById("signcn").value;
    password=document.getElementById("signpass").value;
    var obj=runajax();
    obj.onreadystatechange=function()
    {
        if(obj.status==200 && obj.readyState==4)
        {
            if(obj.responseText!="")
            {
                if(obj.responseText == 1)
                {
                    alert("You have successfully signed up");
                    document.getElementById("signupwrapper").style.display="none";
                }else if(obj.responseText == 0)
                {
                    alert("Error while inserting user ");
                }
            }
        }

    }
    obj.open("Get","ajaxfiles/signup.php?email="+email+"&password="+password+"&fname="+fname+"&contact="+contact+"&lname="+lname,true);
    obj.send(null);
}