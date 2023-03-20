<?php 

  include ('conn1.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['productName'])) {
          //query SQL
          $productName_upd = $_GET['productName'];
          $query = "DELETE FROM products WHERE productName = '$productName_upd'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);

          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }

          //redirect ke halaman lain
          header('Location: index1.php?status='.$status);
      }  
  }