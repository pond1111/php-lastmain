<?php include '../sql_connect.php'; ?>
<?php 
    $req = $_REQUEST['req'];
    if ($req == "delete") {
        $customer_id = $_REQUEST['customer_id'];
        if(delete_customer($customer_id, $global_link)){
            header("Location: ../list_customers.php");
        } else {
            echo "Error cannot delete customer";
        }
    } else if ($req == "edit") {
        $customer_id = $_REQUEST['customer_id'];
        $customer_name = $_REQUEST['customer_name'];
        $customer_phone = $_REQUEST['customer_phone'];
        $salesman_id = $_REQUEST['salesman_id'];

        if ($response = update_customer($global_link, $customer_id, $customer_name, $customer_phone, $salesman_id) == true) {
            echo "Edit Successfully";
            header("Location: ../list_customers.php");
        } else {
            echo "Update Failed";
        }
        
        
    }

function update_customer($link, $id, $name , $phone , $salesman) {
    $sql = "UPDATE `customer` SET `cname` = '$name', `cphone` = '$phone', `csid` = '$salesman' WHERE `customer`.`cid` = '$id'";
    if ($conn = mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}

function delete_customer($customer_id, $link) {
    $sql = "DELETE FROM customer WHERE `customer`.`cid` = '$customer_id'";
    if ($conn = mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}
?>