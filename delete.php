<?php 
    include "db/koneksi_delete.php";
 

$id = $_GET['id'];
mysql_query("DELETE FROM admin_payment_give WHERE id='$id'")or die(mysql_error());
 
header("location:read_payment.php");

?>