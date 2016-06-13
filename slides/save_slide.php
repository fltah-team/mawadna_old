<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>حفظ المحاضرة</title>
<link href="../style/pageStyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Title -->
<table align="center" width="80%" >
    <tr >
        <td>
            <img width="100%"  src="../images/banner.JPG" style="margin: 5px;border: 2px #990033 solid; border-radius: 10px ;" />            
        </td>
    </tr>
</table>
<!-- main -->
<div class="main">

<div class="login">
    <h2 align="center" class="adress">حفظ المحاضرة</h2>
<br />
<div id="result" style="width: 50% ; margin: 0 auto">
    <?php
    include '../utils/db.php';
    include '../utils/slideAPI.php';
    include '../utils/error_handler.php';
    $dir = "../uploads/";
    $name = $_POST['name'];
    $sub = "1";
    $desc = $_POST['desc'];
    $path = "path";
    $result = mp_slide_add($name, $sub, $desc, $path);
    
    if(!$result)mp_notify_fail ("تعذر اضافة المادة");
    else 
        mp_notify_success ("تمت اضافة المحاضرة");
    
    $file_type = $_FILES['slide_file']['type'];
    $file_name = $_FILES['slide_file']['name'] = "new.JPG";
    $file_size = $_FILES['slide_file']['size'];
    $file_error = $_FILES['slide_file']['error'];
    echo "name : ".$file_name."<br />";
    echo "type : ".$file_type."<br />";
    echo "size : ".$file_size."<br />";
    echo "error : ".$file_error."<br />";
    $check_uploaded = move_uploaded_file ($_FILES['slide_file'] ['tmp_name'],$dir.$file_name);
    
    if($check_uploaded) echo "OK"; else echo "ERR";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["slide_file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["slide_file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>
</div>
<div style="margin: 0 auto; text-align: center ; width: 60%;" id="reponse">
    <span id="res_stattus"></span>
</div>
</div>

<?php include '../utils/footer.php'; ?>
</div>
</body>
</html>
