<?php 

  $mahasiswa = [
    [
      "nama" => "Darryl",
      "nrp" => "223040138",
      "email" => "darrylazzuri@gmail.com",
      "jurusan" => "Teknik Informatika",
    ],

    [
      "nama" => "Dono",
      "nrp" => "223040137",
      "email" => "Donooooo@gmail.com",
      "jurusan" => "Teknik Informatika",
    ],

    [
      "nama" => "Dara",
      "nrp" => "223040148",
      "email" => "daraazzuri@gmail.com",
      "jurusan" => "Teknik Informatika",
    ],

    [
      "nama" => "Danang",
      "nrp" => "223040158",
      "email" => "danangs@gmail.com",
      "jurusan" => "Teknik Informatika",
    ],

    [
      "nama" => "Dimas",
      "nrp" => "223040132",
      "email" => "Dimasanggara@gmail.com",
      "jurusan" => "Teknik Informatika",
    ],

    [
      "nama" => "Dinos",
      "nrp" => "223040133",
      "email" => "dinosbinos@gmail.com",
      "jurusan" => "Teknik Informatika",
    ],

    [
      "nama" => "Viraun",
      "nrp" => "173040145",
      "email" => "firaunnn@gmail.com",
      "jurusan" => "Hukum Islam",
    ],

    [
      "nama" => "Amri",
      "nrp" => "223040169",
      "email" => "Bossman@gmail.com",
      "jurusan" => "Teknik Informatika",
    ],

    [
      "nama" => "Maesaroh",
      "nrp" => "223040176",
      "email" => "maeee@gmail.com",
      "jurusan" => "Teknik Informatika",
    ],

    [
      "nama" => "Dudung",
      "nrp" => "223040170",
      "email" => "dudungar@gmail.com",
      "jurusan" => "Teknik Mesin",
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  
  <h1>Daftar Mahasiswa</h1>

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NRP : <?= $mhs["nrp"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>

  <?php endforeach; ?>

</body>
</html>