<!-- 4-6 PHPでレコードを更新する -->
<?php
$USER='root';
$PW='yoshi01';
$dnsinfo="mysql:dbname=salesmanagement;host=localhost;charset=utf8";
try{
	$pdo=new PDO($dnsinfo,$USER,$PW);
	$sql="SELECT * FROM goods";
	$stmt=$pdo->prepare($sql);
	$stmt->execute(null);
	$res='';
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		$res.="<p>".$row['GoodsID'].','.$row['GoodsName'].','.$row['Price']."</p>\n";
	}
}catch(Exception $e){
	echo $e->getMessage();
}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>始めようphp</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>goodsテーブルのレコードを選択する</h1>
		<?php echo $res; ?>
	</body>
	</html>