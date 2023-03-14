<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<SCRIPT  TYPE="text/javascript">
<!--
function calculate()
{
var QUANTITY, QUANTITY2, QUANTITY3, TOTAL, PAYMENT;
QUANTITY=parseFloat(form1.QUANTITY.value);
QUANTITY2=parseFloat(form1.QUANTITY2.value);
QUANTITY3=parseFloat(form1.QUANTITY3.value);

TOTAL = QUANTITY + QUANTITY2 + QUANTITY3;
PAYMENT =((QUANTITY * 10)+(QUANTITY2 * 30) + (QUANTITY3 * 24));

form1.TOTAL.value = TOTAL;
form1.PAYMENT.value = PAYMENT;
}
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="470" border="1">
    <tr>
      <th width="114" scope="col"><img src="balloon 3.jpg" width="114" height="196" /></th>
      <th width="114" scope="col"><img src="balloon 4.jpg" width="114" height="184" /></th>
      <th width="220" scope="col"><img src="cake 1.png" width="180" height="181" /></th>
    </tr>
    <tr>
      <td>BALLOON 1- RM24</td>
      <td>BALLOON  2-RM30</td>
      <td>CAKE-RM10</td>
    </tr>
    <tr>
      <td><label for="QUANTITY3">QUANTITY</label>
      <input type="text" name="QUANTITY3" id="QUANTITY3" /></td>
      <td><label for="QUANTITY3">QUANTITY</label>
      <input type="text" name="QUANTITY2" id="QUANTITY2" /></td>
      <td><p>
        <label for="QUANTITY">QUANTITY</label>
        <input type="text" name="QUANTITY" id="QUANTITY" />
      </p></td>
    </tr>
  </table>
  <p>
    <input type="button" name="CALCULATE" id="CALCULATE" value="CALCULATE" onClick="calculate()"/>
  </p>
  <p>TOTAL ORDER: 
    </label>
    <input type="text" name="TOTAL" id="TOTAL" />
  </p>
  <p>
    <label for="PAYMENT">TOTAL PAYMENT: </label>
    <input type="text" name="PAYMENT" id="PAYMENT" />
  </p>
</form>
</body>
</html>