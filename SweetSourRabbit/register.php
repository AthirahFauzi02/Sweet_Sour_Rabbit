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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "register")) {
  $insertSQL = sprintf("INSERT INTO customers (Username, Password, Name, Email, Address1, Address2, Postcode, `State`, TelephoneNo, Gender, Usertype) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Username'], "text"),
                       GetSQLValueString($_POST['Password'], "text"),
                       GetSQLValueString($_POST['Name'], "text"),
                       GetSQLValueString($_POST['Email'], "text"),
                       GetSQLValueString($_POST['Address1'], "text"),
                       GetSQLValueString($_POST['Address2'], "text"),
                       GetSQLValueString($_POST['Postcode'], "int"),
                       GetSQLValueString($_POST['State'], "text"),
                       GetSQLValueString($_POST['TelephoneNo'], "text"),
                       GetSQLValueString($_POST['Gender'], "text"),
                       GetSQLValueString($_POST['hiddenField'], "text"));

  mysql_select_db($database_sweetsourrabbit, $sweetsourrabbit);
  $Result1 = mysql_query($insertSQL, $sweetsourrabbit) or die(mysql_error());

  $insertGoTo = "index.html";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Register</title>
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
        <li class="selected"><a href="register.php">Register</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>
  <div class="center_content">
    <div class="left_content">
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Register</div>
      <div class="feat_prod_box_details">
        <p>Registering for an account with Sweet Sour Rabbit.</p>
        <p>Please ensure your details are complete and accurate. This will be used as your default billing / sender information when shopping with Sweet Sour Rabbit.</p>
        <div class="contact_form">
          <form action="<?php echo $editFormAction; ?>" method="POST" name="register" href="#">
            <div class="form_row">
              <div class="contact_form">
                <div class="form_subtitle">create new account</div>
                <div class="form_row">
                  <label class="contact"><strong>Username:</strong></label>
                  <input name="Username" type="text" id="Username" size="24" />
                </div>
                <div class="form_row">
                  <label class="contact"><strong>Password:</strong></label>
                  <input type="password" name="Password" id="Password" size="25" />
                  <input name="hiddenField" type="hidden" id="hiddenField" value="User" />
                </div>
                <div class="form_row">
                  <label class="contact"><strong>Name:</strong></label>
                  <input type="text" name="Name" id="Name" size="24" />
                </div>
                <div class="form_row">
                  <label class="contact"><strong>Email:</strong></label>
                  <input type="text" name="Email" id="Email" size="24" />
                </div>
                <div class="form_row">
                  <label class="contact"><strong>Address 1:</strong></label>
                  <textarea name="Address1" id="Address1"></textarea>
                </div>
                <div class="form_row">
                  <label class="contact"><strong>Address 2:</strong></label>
                  <textarea name="Address2" id="Address2"></textarea>
                </div>
                <div class="form_row">
                  <label class="contact"><strong>Postcode:</strong></label>
                  <input type="text" name="Postcode" id="Postcode" size="24" />
                </div>
                <div class="form_row">
                  <label class="contact"><strong>State:</strong></label>
                  <select name="State" id="State">
                    <option value="Selangor">Selangor</option>
                    <option value="Pahang">Pahang</option>
                    <option value="Penang">Penang</option>
                    <option value="Melaka">Melaka</option>
                    <option value="Johor">Johor</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Perak">Perak</option>
                    <option value="Terengganu">Terengganu</option>
                    <option value="Kelantan">Kelantan</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                    <option value="Sabah">Sabah</option>
                    <option value="Sarawak">Sarawak</option>
                  </select>
                </div>
                <div class="form_row">
                  <label class="contact"><strong>Telephone No:</strong></label>
                  <input type="text" name="TelephoneNo" id="TelephoneNo" size="24" />
                </div>
                <div class="form_row">
                  <p>
                    <label class="contact"><strong>Gender:</strong></label>
                    <input type="radio" name="Gender" value="Male" id="Gender_0" />
                    Male
                    <label>
                      <input type="radio" name="Gender" value="Female" id="Gender_1" />
                      Female</label>
                  </p>
                  <div class="form_row"></div>
                </div>
                <div class="form_row">
                  <div class="terms"></div>
                </div>
                <div class="form_row">
                  <input type="submit" name="Submit" id="Submit" value="Submit" />
                </div>
                <input type="hidden" name="MM_insert" value="register" />
              </div>
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
