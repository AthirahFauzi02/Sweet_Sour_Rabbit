<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Checkout</title>

</head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<SCRIPT  TYPE="text/javascript">
<!--
function calculate()
{
var qty1, qty2, qty3, tototal, topayment;
qty1=parseFloat(myform.qty1.value);
qty2=parseFloat(myform.qty2.value);
qty3=parseFloat(myform.qty3.value);

tototal = qty1 + qty2 + qty3;
topayment =((qty1 * 50)+(qty2 * 45) + (qty3 * 55));

myform.total.value = tototal;
myform.payment.value = topayment;
}
</script>
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
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Checkout</div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><strong>BILLING DETAILS</strong></p>
      <p>Enter your full name as it is on the credit card:</p>
      <form id="form1" name="form1" method="post" action="">
        <input name="name" type="text" id="name" size="50" />
      </form>
      <p>&nbsp;</p>
      <p>Address:</p>
      <form id="form2" name="form1" method="post" action="">
        <input name="name2" type="text" id="name2" size="50" />
      </form>
      <p>&nbsp;</p>
      <p>City:</p>
      <form id="form3" name="form1" method="post" action="">
        <input name="name3" type="text" id="name3" size="50" />
      </form>
      <p>&nbsp;</p>
      <p>Country:</p>
      <form id="form4" name="form1" method="post" action="">
        <input name="name4" type="text" id="name4" size="50" />
      </form>
      <p>&nbsp;</p>
      <p>Email:</p>
      <form id="form5" name="form1" method="post" action="">
        <input name="name5" type="text" id="name5" size="50" />
      </form>
      <p>&nbsp;</p>
      <p>Phone No:</p>
      <form id="form6" name="form1" method="post" action="">
        <input name="name6" type="text" id="name6" size="50" />
      </form>
      <p>&nbsp;</p>
      <p><strong>TOTAL PAYMENT: RM150</strong></p>
      <form id="form7" name="form7" method="post" action="">
        <input type="checkbox" name="G" id="G" />
        <label for="G"></label>
        I have accepted the terms and condition.
      </form>
      <p><strong></strong></p>
      <p><strong>PLEASE SELECT YOUR PAYMENT METHOD:</strong></p>
      <form id="form8" name="form8" method="post" action="">
        <p>
          <input type="radio" name="radio" id="H" value="H" />
          <label for="H"></label>
        <img src="gamba/E.png" width="71" height="26" />    	or  <img src="gamba/F.png" width="60" height="40" /></p>
        <p>&nbsp;</p>
        <p>
          <input type="radio" name="radio" id="s" value="s" />
          <label for="s"></label>
        <img src="gamba/A.png" width="104" height="44" /></p>
        <p>
          <input type="radio" name="radio" id="a" value="a" />
          <label for="a"></label>
        <img src="gamba/B.png" width="108" height="56" />        </p>
      </form>
      <p><a href="congrats pay.html" class="more"><img src="images/order_now.gif" alt="" border="0" /></a></p>
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
