<?php include 'sql_connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <form action="service/insert.php"  method="get">
        <label for="username">Name :</label> <input type="text" name="custommer_name"><br>
        <label for="phone">Phone :</label> <input type="text" name="custommer_phone"><br>
        <label for="customer_id">Customer ID :</label> <input type="text" name="custommer_id"><br>
        <label for="sales_man">Salesman</label>
        <select name="salesman_id">
        <?php 
        $sql_salesman ="SELECT * FROM `salesman`";
        if ($conn = mysqli_query($global_link, $sql_salesman)) {
            foreach ($conn as $data) { ?>
                <option value="<?php echo $data['salesmanID'];?>"> <?php echo $data['salesmanName'];?></option>
        <?php       
            }
        } else echo "Cannot connect to database or cannot found table.";
        ?>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
    <a href="list_customer.php">List Bitch</a>
</body>
</html>