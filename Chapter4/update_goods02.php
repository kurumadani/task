<!-- 4-6 PHPでレコードを更新する -->
<!-- 更新処理の跡で該当レコードを表示してみよう -->
<?php
$USER='root';
$PW='yoshi01';
$dnsinfo="mysql:dbname=salesmanagement;host=localhost;charset=utf8";
try{
	$pdo=new PDO($dnsinfo,$USER,$PW);
	$sql="UPDATE good SET Price=? WHERE GoodsID=?";
	$stmt = $pdo->prepare($sql);
	$res=$stmt->execute(array(1080,'1999'));
	$sql="SELECT * FROM goods WHERE GoodsID=?";
	$stmt= $pdo->prepare($sql);
	$stmt->execute(array('1999'));
	$res="<table>\n";
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		$res .= "<tr><td>".$row['GoodsID']."</td><td>".$row['GoodsName']
				."</td><td>".$row['Price']."</td></tr>\n";
	}
	$res .= "</table>\n";
}catch(PDOException $e){
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
<h1>goodsテーブルのレコードを更新する</h1>
<?php echo $res; ?>
</body>
</html>