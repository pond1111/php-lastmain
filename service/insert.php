<?php  include '../sql_connect.php'; ?>

<?php
 $customer_name = $_GET['custommer_name'];
 $customer_phone = $_GET['custommer_phone'];
 $customer_id = $_GET['custommer_id'];
 $saiesman_id = $_GET['salesman_id'];
 $sql ="INSERT INTO  `customer` (`CustomerID`, `CustomerName`, `Customerphon`, `Customerempoyee`) VALUES ('', '', '', '')";

 if ($conn = mysqli_query($global_link,$sql)) {
    header("location:../list_customer.php");

 } 
?>