<!-- 6-2 本格的なクラスを作ろう -->
<!-- データベース担当クラスを作ろう -->
<?php
class DB{
	// MySQLとやり取りをするクラス
	private $USER = 'root';
	Private $PW = 'yoshi01';
	private $dns = "mysql:dbname=salesmanagement;host=localhost;charset=utf8";

	private function Connectdb(){
		// PDOのインスタンスを生成する（接続を担当する）関数
		try{
			$pdo = new PDO($this->dns,$this->USER,$this->PW);
			return $pdo;
		}catch(Exception $e){
			return false;
		}
	}

	public function executeSQL($sql,$array){
		// SQLを実行する関数
		try{
			if(!$pdo = $this->connectdb()){
				return false;
			}
			// $pdo = $this->connectdb();
			// if($pdo == false){
			// 	return false;
			// }

			$stmt = $pdo->prepare($sql);
			$stmt->execute($array);
			return $stmt;
		}catch(Exception $e){
			return false;
		}
	}
}
?>