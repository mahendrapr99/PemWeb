<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
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
          <h2>Table Employees</h2>
          <div>
            <table border="1" align="center";>
              <thead>
                <tr class="number">
                  <th>employeeNumber</th>
                  <th>lastName</th>
                  <th>firstName</th>
                  <th>extension</th>
                  <th>email</th>
                  <th>officeCode</th>
                  <th>reportsTo</th>
                  <th>jobTitle</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM employees";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr class="number">
                    <td><?php echo $data['employeeNumber'];  ?></td>
                    <td><?php echo $data['lastName'];  ?></td>
                    <td><?php echo $data['firstName'];  ?></td>
                    <td><?php echo $data['extension'];  ?></td>
                    <td><?php echo $data['email'];  ?></td>
                    <td><?php echo $data['officeCode'];  ?></td>
                    <td><?php echo $data['reportsTo'];  ?></td>
                    <td><?php echo $data['jobTitle'];  ?></td>
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