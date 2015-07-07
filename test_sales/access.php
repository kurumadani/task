<?php
$USER = 'root';
$PW = 'yoshi01';
$dnsinfo = "mysql:dbname=salesmanagement;host=localhost;charset=utf8";
try{
	$pdo = new PDO($dnsinfo,$USER,$PW);
	$res = "<p>接続しました。</p>\n";
}catch(PDOException $e){
	$res = $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>始めようphp</title>
<meta charset="utf-8">
</head>
<body>
<h1>PHPでMySQLに接続する</h1>
<?php echo $res; ?>
</body>
</html>