<?php 
  $x = 38;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <p>Aku adalah angka <span><?php echo $x; ?></span></p>
  <p>Jika aku dikali 5, maka aku sekarang menjadi <span><?php echo $x * 5; ?></span></p>
  <p>Jika aku dibagi 2, maka aku sekarang menjadi <span><?php echo $x / 2; ?></span></p>
  <p>Jika aku ditambah 75, maka aku sekarang menjadi <span><?php echo $x + 75; ?></span></p>
  <p>Jika aku dikurang 20, maka aku sekarang menjadi <span><?php echo $x - 20; ?></span></p>
  
  <style>
    span {
      font-weight : bold;
    }
  </style>
</body>
</html>
