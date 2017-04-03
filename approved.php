<?php 
    include "db/koneksi_delete.php";
 

$id = $_GET['id'];
mysql_query("UPDATE admin_payment_give SET status='succeed' WHERE id='$id'")or die(mysql_error());

 
header("location:read_payment.php");

?>