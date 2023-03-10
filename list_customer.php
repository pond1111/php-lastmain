<?php include 'sql_connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="2">
        <thead>
            <tr>
                <th colspan="4">List Customer</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = "SELECT * FROM `customer`";
            $conn = mysqli_query($global_link, $sql);
            foreach ($conn as $data) { ?>
                <tr>
                    <td><?php echo $data["CustomerName"];?></td>
                    <td><?php echo $data["Customerphon"];?></td>
                    <td><?php echo $data["Customerempoyee"];?></td>
                    <td><a href="edit.php?customer_id=<?php echo $data['CustomerID'];?>">edit</a></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    <a href="index.php">Back to HomePage</a>
    
</body>
</html>

