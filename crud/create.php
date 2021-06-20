<?php
$servername = "bmlx3df4ma7r1yh4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "aglf3ti6qluckw2n";
$password = "i9cni1mpbh5sj6f3";
$dbname    = "gax8bwmolpkjt36e";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO carros (id, marca, modelo, ano) 
  VALUES (' ', 'Chevrolet', 'Chevrolet SPIN','2019 ')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "carro cadastrado";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
