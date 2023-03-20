<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn1.php'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>TABEL DUMMY</title>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>
<body style="background-image: url(BACKGROUND_11zon.jpg);background-size:cover;background-attachment: fixed;">
<div class="wrap">
<link rel="stylesheet" type="text/css" href="style.css">
  <body>
          <h2>Table Customer</h2>
          <div>
            <table border="1" align="center";>
              <thead>
                <tr class="number">
                  <th>productCode</th>
                  <th>productName</th>
                  <th>productLine</th>
                  <th>productScale</th>
                  <th>productVendor</th>
                  <th>productDescription</th>
                  <th>quantityInStock</th>
                  <th>buyPrice</th>
                  <th>MSRP</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM products";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr class="number">
                    <td><?php echo $data['productCode'];  ?></td>
                    <td><?php echo $data['productName'];  ?></td>
                    <td><?php echo $data['productLine'];  ?></td>
                    <td><?php echo $data['productScale'];  ?></td>
                    <td><?php echo $data['productVendor'];  ?></td>
                    <td><?php echo $data['productDescription'];  ?></td>
                    <td><?php echo $data['quantityInStock'];  ?></td>
                    <td><?php echo $data['MSRP'];  ?></td>
                    <td>
                      <a href="<?php echo "update2.php?productName=".$data['productName']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "delete2.php?productName=".$data['productName']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
          <a href="index1.php">klik untuk menampilkan tabel productLines</a>
      
  </body>
</html>