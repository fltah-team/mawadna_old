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
<h2 align="center" class="adress">حفظ المحاضرة</h2>
<br />
    <?php
    include 'utils/db.php';
    include 'utils/slideAPI.php';
    include 'utils/error_handler.php';
    $slides = mp_slide_get();
    mp_db_close();
    $scount = @count($slides);
?>
<table dir="rtl" align="center" border="0" class="table" width="60%">
    <tr class="table_header">
        <td width="60%" align="center">اسم المحاضرة</td>
        <td width="20%" align="center">نوع الملف</td>
        <td width="10%" align="center">عرض</td>
        <td width="10%" align="center">تحميل</td>
    </tr>
    <?php
    for($i = 0 ; $i < $scount ; $i++){
        $slide = $slides[$i];
        $path_desc = pathinfo($slide->path);
    ?>
    <tr class="table_data">
        <td align="center"><?php echo $slide->name?></td>
        <td align="center"><?php echo $path_desc['extension']?></td>
        <td align="center">عرض</td>
        <td align="center">تحميل</td>
    </tr>
    <?php } ?>
</table>
<?php include 'footer.php'; ?> 
</body>
</html>
