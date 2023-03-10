<?php 
    include 'sql_connect.php';
    $customer_id = $_GET['customer_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer Profile</title>
</head>
<body>
    <?php 
        $sql = "SELECT * FROM `customer` WHERE `CustomerID` = '$customer_id'";
        $conn = mysqli_query($global_link, $sql);
        foreach ($conn as $data){ ?>
        <form action="service/edit_service.php" method="get">
            <label>ID : </label> <input type="text" name="customer_id" value="<?php echo $data['CustomerID'];?>" readonly><br>
            <label>Name : </label> <input type="text" name="customer_name" value="<?php echo $data['CustomerName'];?>"><br>
            <label>Phone : </label> <input type="text" name="custommer_phone" value="<?php echo $data['Customerphon'];?>"><br>
            <input type="text" name="req" value="edit" hidden>
            <label>Salesman : </label> 
            <select name="salesman_id">
        <?php 
        $sql_salesman ="SELECT * FROM `salesman`";
        if ($conn = mysqli_query($global_link, $sql_salesman)) {
            foreach ($conn as $salesman) { ?>
                <option value="<?php echo $salesman['salesmanID'];?>"> <?php echo $salesman['salesmanName'];?></option>
        <?php       
            }
        } else echo "Cannot connect to database or cannot found table.";
        ?>
        </select>
        <button type="submit">"submit change"</button>
            </from>
            <form action="service/edit_service.php" method="post">
            <input type="text" name="req" value="delete" hidden readonly>
            <input type="text" name="customer_id" value="<?php echo $data['CustomerID'];?>" hidden readonly>
            <button type="submit">Delete</button>
        </form>
            <?php
        }
    ?>
</body>
</html>