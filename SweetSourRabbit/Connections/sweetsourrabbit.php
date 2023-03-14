<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sweetsourrabbit = "localhost";
$database_sweetsourrabbit = "sweetsourrabbit";
$username_sweetsourrabbit = "root";
$password_sweetsourrabbit = "";
$sweetsourrabbit = mysql_pconnect($hostname_sweetsourrabbit, $username_sweetsourrabbit, $password_sweetsourrabbit) or trigger_error(mysql_error(),E_USER_ERROR); 
?>