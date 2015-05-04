<?php require_once('Connections/Blood.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_Blood, $Blood);
$query_Recordset1 = "SELECT * FROM login";
$Recordset1 = mysql_query($query_Recordset1, $Blood) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['Login'])) {
  $loginUsername=$_POST['Login'];
  $password=$_POST['Password'];
  $MM_fldUserAuthorization = "userlevel";
  $MM_redirectLoginSuccess = "Reciprofile.php";
  $MM_redirectLoginFailed = "BloodloginR.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_Blood, $Blood);
  	
  $LoginRS__query=sprintf("SELECT Uname, password, userlevel FROM login WHERE Uname=%s AND password=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $Blood) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'userlevel');
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style3 {font-family: "Times New Roman", Times, serif;
	font-size: 36px;
	color: #FF0000;
	background-color: #CCCCCC;
}
.style6 {font-family: "Times New Roman", Times, serif; font-size: 24px; }
.style8 {font-size: 24px;
	color: #000000;
}
.style9 {font-size: 24px}
-->
</style>
</head>

<body>
<form ACTION="<?php echo $loginFormAction; ?>" method="POST" name="login" id="login">
  <div align="center" class="style3">
    <p>Blood Donation</p>
    <table width="438" height="65" border="0" align="center">
      <tr>
        <td width="94" height="36"><div align="center"><span class="style8">Home </span></div></td>
        <td width="108"><div align="center"><a href="Donor1.php" class="style6">Donor</a></div></td>
        <td width="116"><div align="center"><a href="Blogin.php" class="style9">Admin</a></div></td>
        <td width="102"><div align="center"><a href="BloodloginR.php" class="style9">Recipient</a></div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
  <p align="center" class="style6">R Login here</p>
  <table width="481" height="218" border="0" align="center" bgcolor="#CCCCCC">
    <tr>
      <td width="110" height="46"><div align="right"> Login:</div></td>
      <td width="361"><span id="sprytextfield1">
        <label>
          <input type="text" name="Login" id="Login" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td height="47"><div align="right">Password:</div></td>
      <td><span id="sprytextfield2">
        <label>
          <input type="password" name="Password" id="Password" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td height="51"><div align="right"></div>
          </label></td>
      <td><label> &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Submit" id="Reset" value="Login" />
      </label></td>
    </tr>
    <tr>
      <td height="60"><div align="right"></div></td>
      <td>&nbsp;Forgot Password</td>
    </tr>
  </table>
  <p align="center" class="style6">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
