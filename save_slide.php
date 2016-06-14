<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافة محاضرة جديدة</title>
<link href="style/pageStyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Title -->
<?php include 'header.php';?>
<!-- main -->
<div class="form" style="height: 450px">
<br />
<?php
    include 'utils/db.php';
    include 'utils/slideAPI.php';
    include 'utils/error_handler.php';
    $name = $_POST['name'];
    $uni = "1";
    $coll = "1";
    $dept = "1";
    $sem = "1";
    $sub = "1";
    $desc = $_POST['desc'];
    $file_type = $_FILES['slide_file']['type'];
    $file_name = $_FILES['slide_file']['name'];
    $file_size = $_FILES['slide_file']['size'];
    $path = "../uploads/".$uni."/".$coll."/".$dept."/".$sem."/".$sub."/".$file_name;
    $filter = file_filter($file_type);
    $result = mp_slide_add($name, $sub, $desc, $path);
    if($result){
    $check_uploaded = move_uploaded_file ($_FILES['slide_file'] ['tmp_name'],$path);
    if($check_uploaded) mp_notify_success ("تمت اضافة المحاضرة");
    else mp_notify_fail("مشكلة رفع");
    }
    else{
        mp_notify_fail("مشكلة قاعة بيانات");
    }
       
function file_filter($type){
    echo $type;
    $ext = array(
        "image/jpeg","application/pdf",
        "application/vnd.ms-powerpoint",
        "application/vnd.openxmlformats-officedocument.presentationml.presentation"
        );
    if(!in_array($type, $ext))
    echo "NOT LEGAL TYPE";
    else echo "LEGAL";
}
?>
</div>
<?php include 'footer.php'; ?> 
</body>
</html>