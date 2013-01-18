<?php 
	
	include_once('JsonViewer.class.php');
	$viewer=new JsonViewer();
	$path=isset($_POST['url'])?$_POST['url']:"";
	$userid=isset($_POST['userid'])?$_POST['userid']:"";
	$viewer->setModule($path);
	$viewer->setUserId($userid);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JSON VIEWER</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="865" height="415" border="1" cellpadding="0" cellspacing="0" >
  <tr>
    <th height="31" colspan="3" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td width="104" height="41" align="right" >Path: &nbsp;</td>
    <td width="786" colspan="2">
        &nbsp;  <input type="text" name="url" id="url" size="100" value="top/index"/>           </td>
  </tr>
  <tr>
    <td height="40" align="right">User ID:&nbsp;</td>
    <td colspan="2"> 
    &nbsp; <input type="text" name="userid" id="userid" size="100"  value="<?=$userid?>"/>    </td>
  </tr>
  <tr>
    <td height="36" colspan="3"> &nbsp; &nbsp;<input type="submit" name="submitn" id="button" value="Submit" /></td>
    </tr>
  <tr>
    <td colspan="3" align="center" style="border-bottom:none; border-right:none; border-left:none; border-top:none;">      <?php

		if(!empty($path)){
			echo $viewer->createTable();
		}
	
	?>    </td>
    </tr>
</table>
</form>
</body>
</html>
