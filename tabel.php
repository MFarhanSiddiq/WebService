<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<center>
<table  border='1' Width='800'>  
<tr>
    <th> Penyakit </th>
    <th> Deskripsi </th>
    <th> Tips </th>
    <th> Action </th>
    
</tr>
<center>

<?php
 require 'vendor/autoload.php';
 $collection = (new MongoDB\Client())->tekdev->tekdev;
$cursor = $collection->find();
foreach ($cursor as $data1) {
    $data[]=$data1;
    }
    
    $a=0;
while (@$data[$a]){
    echo "    
        <tr>
        <td>".$data[$a]['penyakit']."</td>
        <td>".$data[$a]['deskripsi']."</td>
        <td>".$data[$a]['tips']."</td>
        <td><a href='edit-penyakit.php?penyakit=".$data[$a]['penyakit']."'>Edit</a>    <a href='delete-penyakit.php?penyakit=".$data[$a]['penyakit']."'>Delete</a></td>
        ";
        $a++;
        
}


?>

</table>
</body>
</html>