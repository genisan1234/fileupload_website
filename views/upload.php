<?php
include 'database_connect.php';
//ini_set('memory_limit','512M');
//ini_set('post_max_size','512M');
//echo ini_get('memory_limit');
//echo ini_get('memory_limit');
$target_dir="user_uploads/".$_SESSION['username']."/";
$target_file = $target_dir . basename(str_replace(' ','_',$_FILES["fileToUpload"]["name"]));
$uploadOk = 1;
if(isset($_POST["submit"])) {
    $uploadOk = 1;
}
else
{
    $uploadOk = 0;
}
if (file_exists($target_file)) {
    $uploadOk = 0;
}
if($uploadOk == 0) {
    header("Location: /upload_website/users?username=".$_SESSION['username']);
    exit;
} 
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $val=$_SESSION['username'];
        echo $val;
        $res=mysqli_query($conn,"SELECT file from files where username = '$val';");
        $row = mysqli_fetch_array($res, MYSQLI_NUM);
        $nf =$row[0]. $_FILES["fileToUpload"]["name"].',';
        mysqli_query($conn,"UPDATE files SET file = '$nf' where username = '$val';");
        header("Location: /upload_website/users?username=".$val);
    } 
    else {
            header("Location: /upload_website/users?username=".$_SESSION['username']);
            exit;
    }
}
?>
