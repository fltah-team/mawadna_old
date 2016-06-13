<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافة محاضرة جديدة</title>
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
    <h2 align="center" class="adress">اضافة محاضرة جديدة</h2>
<br />
<form method="post" action="save_slide.php" enctype="multipart/form-data" >
	<table width="60%" border="0" align="center">
    <tr>
    <td id="noti">&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="right" width="58%"><input class="textFiels" name="name" type="text" placeholder="عنوان المحاضرة" id="name" size="45" maxlength="30" /></td>
    <td align="center" width="42%">عنوان المحاضرة</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
        <tr>
            <td align="right" width="58%"><textarea class="textFiels" style="width: 400px; height: 200px" name="desc" type="text" id="desc" size="100" maxlength="1500" ></textarea></td>
    <td align="center" width="42%">وصف المحاضرة</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right"><input class="textFiels" type="file" name="slide_file" id="slide_file" size="400" /></td>
    <td align="center">ملف المحاضرة </td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    </table>
    <br />
    <h3 align="center" style="color: #990033">رجاءا اختر الجامعة والقسم </h3>
    <br />
    <table width="60%" border="0" align="center">
    <tr>
    <td align="right"><select align="center" class="select" name="sem" id="type">
      <option value="1">القسم</option> 
    </select></td>
    <td align="center">القسم</td>
    <td align="right"><select align="center" class="select" name="sem" id="type">
      <option value="1">الكلية</option> 
    </select></td>
    <td align="center">الكلية</td>
    <td align="right"><select align="center" class="select" name="sem" id="type">
     <option value="1">الجامعة</option> 
    </select></td>
    <td align="center">الجامعة</td>
  </tr>
         <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td align="right">
        <button id="bt" class="add_bt" name="add"  type="submit" onclick="IsEmpty()"    >اضافة <img align="right" src="../images/style images/add_icon.png" style="padding-left:5px" /></button>
    </td>
    <td align="center"></td>
    <td align="right"><select align="center" class="select" name="sem" id="type">
      <option value="1">المادة</option> 
    </select></td>
    <td align="center">المادة</td>
    <td align="right"><select align="center" class="select" name="sem" id="type">
     <option value="1">السمستر الاول</option>
     <option value="1">السمستر الاول</option>
     <option value="1">السمستر الاول</option> 
    </select></td>
    <td align="center">السمستر</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
        
        <tr>
    
  </tr>
    </table>
<div style="margin: 0 auto; text-align: center ; width: 60%;" id="reponse">
    <span id="res_stattus"></span>
</div>
</div>
<script type="text/javascript" >;
	var checker = 0; 
	
	var complete_name = document.getElementById("complete_name");
	var un = document.getElementById("un");
	var type = document.getElementById("type");
	var pass1 = document.getElementById("pass1");
	var pass2 = document.getElementById("pass2");
	
	function IsEmpty(){ 
	// empty
	if(complete_name.value == ""){
	complete_name.style.color = "#ff0000" ;
	complete_name.setAttribute("placeholder","هذا الحقل فارغ");
	checker++;
		}
	if(un.value == ""){
	un.style.color = "#ff0000" ;
	un.setAttribute("placeholder","هذا الحقل فارغ");
	checker++;
		}
	if(pass1.value == ""){
	pass1.style.color = "#ff0000" ;
	pass1.setAttribute("placeholder","هذا الحقل فارغ");
	checker++;
		}
	if(pass2.value == ""){
	pass2.style.color = "#ff0000" ;
	pass2.setAttribute("placeholder","هذا الحقل فارغ");
	checker++;
		}
			 
	if(checker == 0 )check_pass(pass1.value,pass2.value);
	else 
            checker = 0; 

	
}

  </script>
<?php include '../utils/footer.php'; ?>
</div>
</body>
</html>
