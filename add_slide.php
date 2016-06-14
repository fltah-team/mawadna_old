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
<div class="form">
<br />
<form method="post" action="save_slide.php" enctype="multipart/form-data" >
	<table width="60%" border="0" align="center">
    <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="center" width="58%"><input class="text_box" name="name" type="text" placeholder="عنوان المحاضرة" id="name" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" width="58%"><textarea class="text_box" style="height: 200px" placeholder="وصف المحاضرة" name="desc" type="text" id="desc" size="100" ></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="center"><input class="text_box" type="file" name="slide_file"  id="slide_file" size="400" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="center">
        <button id="bt" class="add_bt" name="add"  type="submit" onclick="IsEmpty()"    >اضافة <img align="right" src="images/style images/add_icon.png" style="padding-left:5px" /></button>
    </td>
  </tr>
 <tr>
    <td>&nbsp;</td>
  </tr>
  </table>
    
</form>
</div>
<?php include 'footer.php'; ?> 
</body>
</html>
