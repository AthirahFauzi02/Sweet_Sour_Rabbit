<?php require_once('Connections/sweetsourrabbit.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

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
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset1 = 3;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_sweetsourrabbit, $sweetsourrabbit);
$query_Recordset1 = "SELECT * FROM customers";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $sweetsourrabbit) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View Data</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="#"><img src="gamba/Sweet Sour Rabbit (1).jpg" alt="" width="151" height="71" border="0" /></a></div>
    <div id="menu">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About us</a></li>
        <li></li>
        <li><a href="category.html">Product Category</a></li>
        <li><a href="specials.html">Promotion</a></li>
        <li><a href="myaccount.php">My Account</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>
  <div class="center_content">
    
    <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Update Customer Data</div>
      <p>&nbsp;</p>
    <p>&nbsp;</p>
      <table width="200" border="1" align="center">
        <tr>
          <th scope="col">USERNAME</th>
          <th scope="col">PASSWORD</th>
          <th scope="col">NAME</th>
          <th scope="col">EMAIL</th>
          <th scope="col">ADDRESS1</th>
          <th scope="col">ADDRESS2</th>
          <th scope="col">POSTCODE</th>
          <th scope="col">STATE</th>
          <th scope="col">TELEPHONE NO</th>
          <th scope="col">GENDER</th>
          <th scope="col">USERTYPE</th>
        </tr>
        <?php do { ?>
          <tr>
            <td><?php echo $row_Recordset1['Username']; ?></td>
            <td><?php echo $row_Recordset1['Password']; ?></td>
            <td><?php echo $row_Recordset1['Name']; ?></td>
            <td><?php echo $row_Recordset1['Email']; ?></td>
            <td><?php echo $row_Recordset1['Address1']; ?></td>
            <td><?php echo $row_Recordset1['Address2']; ?></td>
            <td><?php echo $row_Recordset1['Postcode']; ?></td>
            <td><?php echo $row_Recordset1['State']; ?></td>
            <td><?php echo $row_Recordset1['TelephoneNo']; ?></td>
            <td><?php echo $row_Recordset1['Gender']; ?></td>
            <td><?php echo $row_Recordset1['Usertype']; ?></td>
          </tr>
          <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
      </table>
    <p>&nbsp;<a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">First</a> <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">Next</a></p>
    <div class="footer">
      <div class="right_footer"> <a href="index.html">Home</a> <a href="about.html">About us</a> <a href="myaccount.html">My Account</a> <a href="siteMap.html">Site Map</a> <a href="contact.html">Contact us</a></div>
    </div>
    <p>&nbsp;</p>
      <div class="clear"></div>
  </div>
    <!--end of left content--><!--end of right content-->
    <div class="clear"></div>
  </div>
  <!--end of center content-->
</div>
	</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
