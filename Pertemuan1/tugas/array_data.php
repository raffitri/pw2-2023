<?php
  $m_fruits = [
    ["ID" => "1","Nama" => "Pisang", "Warna" => "Kuning", "Stok" => 20, "Harga" => 15000, "Deskripsi" => "Pisang dengan rasa manis"],
    ["ID" => "2","Nama" => "Melon", "Warna" => "Hijau", "Stok" => 15, "Harga" => 28000, "Deskripsi" => "Buah berwarna hijau yang segar"],
    ["ID" => "3","Nama" => "Berry", "Warna" => "Merah", "Stok" => 10, "Harga" => 12000, "Deskripsi" => "Buah kecil dengan biji yang bisa dimakan"],
    ["ID" => "4","Nama" => "Kakao", "Warna" => "Coklat", "Stok" => 13, "Harga" => 30000, "Deskripsi" => "Buah kecil dengan rasa coklat yang manis"],
    ["ID" => "5","Nama" => "Jeruk", "Warna" => "Orange", "Stok" => 25, "Harga" => 15000, "Deskripsi" => "Buah dengan rasa manis asam segar"]

  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($m_fruits as $fruit) {
          echo '<tr>';
          echo '<td>'.$fruit["ID"].'</td>';
          echo '<td>'.$fruit["Nama"].'</td>';
          echo '<td>'.$fruit["Warna"].'</td>';
          echo '<td>'.$fruit["Stok"].'</td>';
          echo '<td>'.$fruit["Harga"].'</td>';
          echo '<td>'.$fruit["Deskripsi"].'</td>';
          echo '<tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>