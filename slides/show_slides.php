<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>حفظ المحاضرة</title>
<link href="../style/pageStyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Title -->
<?php include '../utils/header.php'; ?>
<!-- main -->
<div class="main">

<div class="login">
    <h2 align="center" class="adress">حفظ المحاضرة</h2>
<br />
    <?php
    include '../utils/db.php';
    include '../utils/slideAPI.php';
    include '../utils/error_handler.php';
    $slides = mp_slide_get();
    mp_db_close();
    $scount = @count($slides);
?>
<table dir="rtl" align="center" border="2" width="70%">
    <tr>
        <td width="70%" align="center">اسم المحاضرة</td>
        <td width="10%" align="center">نوع الملف</td>
        <td width="10%" align="center">عرض</td>
        <td width="10%" align="center">تحميل</td>
    </tr>
    <?php
    for($i = 0 ; $i < $scount ; $i++){
        $slide = $slides[$i];
        $path_desc = pathinfo($slide->path);
    ?>
    <tr>
        <td width="70%" align="center"><?php echo $slide->name?></td>
        <td width="10%" align="center"><?php echo $path_desc['extension']?></td>
        <td width="10%" align="center">عرض</td>
        <td width="10%" align="center">تحميل</td>
    </tr>
    <?php } ?>
</table>
<div style="margin: 0 auto; text-align: center ; width: 60%;" id="reponse">
    <span id="res_stattus"></span>
</div>
</div>

<?php include '../utils/footer.php'; ?>
</div>
</body>
</html>
