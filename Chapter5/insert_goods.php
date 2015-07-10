<!-- 5-1　動的にレコードを追加しよう① -->
<!-- フォーム要素を配置したhtmlを書いてみる -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>売上管理システム</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h1>商品マスタの登録</h1>
<form action="" method="post">
<label>GoodsID<input type='text' name='GoodsID' size='20' required></label>
<label>GoodsName<input type='text' name='GoodsName' size='40' required></label>
<label>Price<input type='text' name='Price' size='20' required></label>
<input type='submit' name='insert' value=' 登録 '>
</form>
</body>
</html>