<?php
require_once '../includes/conn.php';
$op="";
if(isset($_GET['pagename']))
{
    $dir = scandir('../uploads/'.$_GET['pagename']);
    unset($dir[0]);
    unset($dir[1]);
//    print_r($dir);
    $uid = 0;
//    print_r($dir);
    echo "<br>";
    foreach($dir as $image)
    {
        $img = $image;
        $image = explode("-",$image);
        if($image[0] != $uid)
        {
            $uid = $image[0];
            echo '<div class="row">
            <div class="col-lg-6" onclick="callFolder(\''.$_GET['pagename'].'\',\''.$uid.'\')">
                    <img src="uploads/'.$_GET['pagename'].'/'.$img.'"  class="img-responsive hvr-bob optionzimage" align="center"/>
                </div>
                <div class="col-lg-6">
                    <span style="font-family:font-family: Arial, Verdana, Helvetica, sans-serif;font-size: 18px">
                        <div class="row"><span style="color:#a90329;text-transform:capitalize">'.$_GET['pagename'].'</span></div>
                        <div class="row"><span style="color:steelblue">'.$image[1].'</span></div>
                        <div class="row"><span style="color:cornflowerblue">'.$image[2].'</span> </div>
                    </span>
                </div>
            </div><hr style="background: teal;height:2px">';
        }
    }
}
?>