<!DOCTYPE html>
<html>
<head>
	<title>Encrypt/Decrypt</title>
</head>
<body>
	<table>
		<th>
			Encode
		</th>
		<th>
			Md5/Encrypt/Shal
		</th>
		<tr>
			<td>	
				<form action="" method="POST">
					<input type="text" name="entxt" >
					<input type="submit" name="ensub" value="Encrypt">
				</form>
				<form action="" method="POST">
					<input type="text" name="detxt" >
					<input type="submit" name="desub" value="Decrypt">
				</form>
			</td>
			<td>	
				<form action="" method="POST">
					<input type="text" name="md5txt" >
					<input type="submit" name="md5sub" value="MD5">
				</form>
				<form action="" method="POST">
					<input type="text" name="sha1txt" >
					<input type="submit" name="sha1sub" value="SHA1">
				</form>
				<form action="" method="POST">
					<input type="text" name="crypttxt" >
					<input type="submit" name="cryptsub" value="CRYPT">
				</form>
				<form action="" method="POST">
					<input type="text" name="mixtxt" >
					<input type="submit" name="mixsub" value="MIX">
				</form>
			</td>
		</tr>


		<?php
date_default_timezone_set("Asia/Colombo");
$xtime =date("h:i:sa");
echo $xtime;
$xusername ="kaviya123456";
$xid =15;
$xemail="frankastine43@gmail.com";
$xxxx=$xtime.$xusername.$xid.$xemail;

$xmd5= md5($xxxx);
$xshal= Sha1($xmd5);
$xcrypt= crypt($xshal,"st");

if (isset($_POST['ensub'])) {

$str= $_POST["entxt"];;
$encode= base64_encode($str);
$decode= base64_decode($encode);
echo '
	<tr>
		<td>before Encrypt : <b>'.$str.'</b></td>
	</tr>
	<tr>
		<td>Encryption: <b>'.$encode.'</b></td>
	</tr>
	<tr>
		<td>Decryption : <b>'.$decode.'</b></td>
	</tr>
';
}
else
{

}

if (isset($_POST['desub'])) {

$str= $_POST["detxt"];;
$decode= base64_decode($str);
$encode= base64_encode($decode);
echo '
	<tr>
		<td>before Encrypt : <b>'.$str.'</b></td>
	</tr>
	<tr>
		<td>Encryption: <b>'.$decode.'</b></td>
	</tr>
	<tr>
		<td>Decryption : <b>'.$encode.'</b></td>
	</tr>
';
}
else
{

}

if (isset($_POST['md5sub'])) {

$str= $_POST["md5txt"];;
$encode= md5($str);
echo '
	<tr>
		<td>before md5 Encrypt : <b>'.$str.'</b></td>
	</tr>
	<tr>
		<td>md5 Encryption: <b>'.$encode.'</b></td>
	</tr>
';
}
else
{

}

if (isset($_POST['sha1sub'])) {

$str= $_POST["sha1txt"];;
$encode= sha1($str);
echo '
	<tr>
		<td>before SHA1 Encrypt : <b>'.$str.'</b></td>
	</tr>
	<tr>
		<td>SHA1 Encryption: <b>'.$encode.'</b></td>
	</tr>
';
}
else
{

}

if (isset($_POST['cryptsub'])) {

$strrr= $_POST["crypttxt"];;
$encode= crypt($strrr,"st");
echo '
	<tr>
		<td>before CRYPT Encrypt : <b>'.$strrr.'</b></td>
	</tr>
	<tr>
		<td>CRYPT Encryption: <b>'.$encode.'</b></td>
	</tr>
';
}
else
{

}

if (isset($_POST['mixsub'])) {

$str= $_POST["mixtxt"];;
$md5= md5($str);
$shal= Sha1($md5);
$crypt= crypt($shal,"st");
echo '
	<tr>
		<td>before MIX Encrypt : <b>'.$str.'</b></td>
	</tr>
	<tr>
		<td>MIX Encryption: <b>'.$crypt.'</b></td>
	</tr>
';
}
else
{

}
?>


	</table>


</body>
</html>
