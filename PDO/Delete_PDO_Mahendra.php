<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete_PDO_Mahendra</title>
</head>
<body>
    <?php
        include ('Conn_PDO_Mahendra.php');
        if ($_SERVER["REQUEST_METHOD"]==="POST") {
                $customerNumber = $_POST["customerNumber"];

                $pdo_conn = new connDB();
                $conn = $pdo_conn->dbConn();

                $conn->prepare("DELETE FROM customers WHERE customerNumber =?")->execute([$customerNumber]);
                echo "delete success"."<br />";
            } 
    ?>
        <a href="Read_PDO_Mahendra.php">
            <input type="button" value="Back to table" />
        </a>
</body>
</html>