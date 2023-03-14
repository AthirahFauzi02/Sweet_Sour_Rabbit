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

$colname_Recordset1 = "-1";
if (isset($_GET['Username'])) {
  $colname_Recordset1 = $_GET['Username'];
}
mysql_select_db($database_sweetsourrabbit, $sweetsourrabbit);
$query_Recordset1 = sprintf("SELECT * FROM customers WHERE Username = %s", GetSQLValueString($colname_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $sweetsourrabbit) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Display data</title>
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
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Display Data</div>
      <div class="feat_prod_box_details">
        <div class="contact_form">
          <form method="POST" name="register" href="#">
            <div class="form_row">
              <label class="contact"><strong>Username:</strong></label>
              <input name="Username" type="text" id="Username" value="<?php echo $row_Recordset1['Username']; ?>" size="24" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Usertype:</strong></label>
              <input name="Usertype" type="text" id="Usertype" value="<?php echo $row_Recordset1['Usertype']; ?>" size="24" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Password:</strong></label>
              <input name="Password" type="password" id="Password" value="<?php echo $row_Recordset1['Password']; ?>" size="25" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Name:</strong></label>
			<input name="Name" type="text" id="Name" value="<?php echo $row_Recordset1['Name']; ?>" size="24" />            </div>
            <div class="form_row">
              <label class="contact"><strong>Email:</strong></label>
    		<input name="Email" type="text" id="Email" value="<?php echo $row_Recordset1['Email']; ?>" size="24" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Address 1:</strong></label>
    <textarea name="Address1" id="Address1"><?php echo $row_Recordset1['Address1']; ?></textarea>
            </div>
            <div class="form_row">
              <label class="contact"><strong>Address 2:</strong></label>
    <textarea name="Address2" id="Address2"><?php echo $row_Recordset1['Address2']; ?></textarea>
            </div>
            <div class="form_row">
              <label class="contact"><strong>Postcode:</strong></label>
    <input name="Postcode" type="text" id="Postcode" value="<?php echo $row_Recordset1['Postcode']; ?>" size="24" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>State:</strong></label>
<select name="State" id="State" title="<?php echo $row_Recordset1['State']; ?>">
  <option value="Selangor" <?php if (!(strcmp("Selangor", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Selangor</option>
  <option value="Pahang" <?php if (!(strcmp("Pahang", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Pahang</option>
  <option value="Penang" <?php if (!(strcmp("Penang", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Penang</option>
  <option value="Melaka" <?php if (!(strcmp("Melaka", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Melaka</option>
  <option value="Johor" <?php if (!(strcmp("Johor", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Johor</option>
  <option value="Kedah" <?php if (!(strcmp("Kedah", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Kedah</option>
  <option value="Perak" <?php if (!(strcmp("Perak", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Perak</option>
  <option value="Terengganu" <?php if (!(strcmp("Terengganu", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Terengganu</option>
  <option value="Kelantan" <?php if (!(strcmp("Kelantan", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Kelantan</option>
  <option value="Negeri Sembilan" <?php if (!(strcmp("Negeri Sembilan", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Negeri Sembilan</option>
  <option value="Perlis" <?php if (!(strcmp("Perlis", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Perlis</option>
  <option value="Kuala Lumpur" <?php if (!(strcmp("Kuala Lumpur", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Kuala Lumpur</option>
  <option value="Sabah" <?php if (!(strcmp("Sabah", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Sabah</option>
  <option value="Sarawak" <?php if (!(strcmp("Sarawak", $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>>Sarawak</option>
  <?php
do {  
?>
  <option value="<?php echo $row_Recordset1['State']?>"<?php if (!(strcmp($row_Recordset1['State'], $row_Recordset1['State']))) {echo "selected=\"selected\"";} ?>><?php echo $row_Recordset1['State']?></option>
  <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
  $rows = mysql_num_rows($Recordset1);
  if($rows > 0) {
      mysql_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
  }
?>
</select>            </div>
          
            <div class="form_row">
              <label class="contact"><strong>Telephone No:</strong></label>
    <input name="TelephoneNo" type="text" id="TelephoneNo" value="<?php echo $row_Recordset1['TelephoneNo']; ?>" size="24" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Gender:</strong></label>
<input <?php if (!(strcmp($row_Recordset1['Gender'],"Male"))) {echo "checked=\"checked\"";} ?> type="radio" name="Gender" value="Male" id="Gender_0" />
      Male</label>
      <label>
        <input <?php if (!(strcmp($row_Recordset1['Gender'],"Female"))) {echo "checked=\"checked\"";} ?> type="radio" name="Gender" value="Female" id="Gender_1" />
      Female</label>            </div>
            <div class="form_row"></div>
            <div class="form_row"></div>
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
mysql_free_result($Recordset1);
?>
