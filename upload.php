<?php
//    require_once('../includes/main_functions.php');
    require_once 'includes/conn.php';
    if(!isset($_SESSION['uid'])) {
        echo "<script>alert('You have to login first');window.location='index.php';</script>";
    }else
    {
        if (isset($_FILES['inputimg'] )){
            $folder =strtolower($_POST['selecttypename']);
            $type = $_POST['typename'];
            $desc = $_POST['description'];
            if($folder == "0"){
                echo "<script>alert('You have to select type first');window.location='index.php';</script>";
            }else{
                $i=1;
                foreach($_FILES['inputimg']['error'] as $key => $error)
                {
                    if($error == UPLOAD_ERR_OK)
                    {
                        $fname=$_SESSION['uid']."-{$type}-{$desc}-".$i.".jpg";
                        move_uploaded_file($_FILES['inputimg']['tmp_name'][$key],'uploads/'.$folder."/".$fname);
                        $i++;
                    }
                }
            }
            echo "<script>alert('Your images have been uploaded successfully');window.location='index.php';</script>";
        }
    }
?>