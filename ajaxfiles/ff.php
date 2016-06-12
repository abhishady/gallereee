<?php
require_once '../includes/conn.php';
$op="";
if(isset($_GET['pagename']))
{
    $dir = scandir('../uploads/'.$_GET['pagename']);
    unset($dir[0]);
    unset($dir[1]);

    $uid = $_GET['uid'];
    foreach($dir as $image)
    {
       $img ="uploads/".$_GET['pagename']."/".$image;
        $row = explode("-",$image);
        if($row[0]  == $uid)
        {
            echo '<div class="row">
                    <div class="col-lg-12">
                        <img src="'.$img.'"  class="img-responsive hvr-bob" align="center" style="margin: auto;"/>
                    </div>
                </div><hr style="background: #fff;height:2px">';
        }
    }
}
?>