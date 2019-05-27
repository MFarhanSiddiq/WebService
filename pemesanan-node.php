<?php
$curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, 'localhost:3000/users/');
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

    $jsonData = json_decode(curl_exec($curlSession),true);
$x=0;
echo "<table border='1'><tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Kota</th><th>Provinsi</th><th>Order List</th><th>Status</th></tr>";
while(@$jsonData['values'][$x]){
	if ($jsonData['values'][$x]['Status']==1){
		$status = "Selesai";
	}
	else {$status = "Proses";}
	echo "<tr>
	<td>".$jsonData['values'][$x]['ID']."</td>
	<td>".$jsonData['values'][$x]['Name']."</td>
	<td>".$jsonData['values'][$x]['Alamat']."</td>
	<td>".$jsonData['values'][$x]['Kota']."</td>
	<td>".$jsonData['values'][$x]['Provinsi']."</td>
	<td>".$jsonData['values'][$x]['Order_list']."</td>
	<td>".$status."</td>
	</tr>";
	
	$x++;
}
echo "</table>";
?>