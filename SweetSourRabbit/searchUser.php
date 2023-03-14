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

$colname_Searching = "-1";
if (isset($_GET['Username'])) {
  $colname_Searching = $_GET['Username'];
}
mysql_select_db($database_sweetsourrabbit, $sweetsourrabbit);
$query_Searching = sprintf("SELECT * FROM customers WHERE Username = %s", GetSQLValueString($colname_Searching, "text"));
$Searching = mysql_query($query_Searching, $sweetsourrabbit) or die(mysql_error());
$row_Searching = mysql_fetch_assoc($Searching);
$totalRows_Searching = mysql_num_rows($Searching);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Search User</title>
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
    <div class="left_content">
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Search User</div>
      <div class="feat_prod_box_details">
        <div class="contact_form">
          <form ACTION="SearchingDisplay.php" METHOD="get" name="register" href="#">
            <div class="form_row">
              <label class="contact"><strong>Username:</strong></label>
              <input name="Username" type="text" id="Username" size="24" />
            </div>
            <div class="form_row"></div>
            <div class="form_row">
              <input type="submit" class="register" value="Submit" />
            </div>
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <!--end of left content-->
    <div class="right_content">
      <div class="cart">
        <div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" /></span>My cart</div>
        <div class="home_cart_content"> 0 x items | <span class="red">TOTAL: RM0</span></div>
        <a href="cart.html" class="view_cart">view cart</a></div>
      <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" /></span>About Our Shop</div>
      <div class="about">
        <p> <img src="gamba/1.jpg" alt="" width="162" height="99" class="right" />Sweet Sour Rabbit was established in 2017 and we are proud to say that we are pioneers among online gift shops in Malaysia. We sell various of gift that you can buy for your love one. We would like to thanks customers for selecting us their preferred internet gift delivery vendor. </p>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" /></span>Categories</div>
        <ul class="list">
          <li><a href="products.html">BALLOON</a></li>
          <li><a href="products 2.html">FLOWER BOUQUET</a></li>
          <li><a href="products 3.html">CAKE</a></li>
          <li><a href="products 4.html">EXPLOSION BOX</a></li>
          <li><a href="products 5.html">SCENTED CANDLE</a></li>
          <li></li>
        </ul>
        <ul class="list">
          <li></li>
        </ul>
      </div>
    </div>
    <!--end of right content-->
    <div class="clear"></div>
  </div>
  <!--end of center content-->
  <div class="footer">
    <div class="right_footer"> <a href="index.html">Home</a> <a href="about.html">About us</a> <a href="myaccount.html">My Account</a> <a href="siteMap.html">Site Map</a> <a href="contact.html">Contact us</a></div>
  </div>
</div>
</body>
</html>
<?php
mysql_free_result($Searching);
?>
