<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Example</title>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body style="background-image: url(BACKGROUND_11zon.jpg);background-size:cover;background-attachment: fixed;">
<link rel="stylesheet" type="text/css" href="style.css">
  <body>
          <h2>Table ProductLines</h2>
          <div>
            <table border="1" align="center">
              <thead>
                <tr class="number">
                  <th>productLine</th>
                  <th>textDescription</th>
                  <th>htmlDescription</th>
                  <th>image</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM productlines";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr class="number">
                    <td><?php echo $data['productLine'];  ?></td>
                    <td><?php echo $data['textDescription'];  ?></td>
                    <td><?php echo $data['htmlDescription'];  ?></td>
                    <td><?php echo $data['image'];  ?></td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
  </body>
          <a href="index.php">klik untuk kembali menampilkan tabel employees</a>
</html>