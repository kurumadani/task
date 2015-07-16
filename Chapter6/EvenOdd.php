<!-- 6-1 クラスを自作しよう -->
<!-- クラスを使ってみよう -->
<?php
class EvenOdd{
	public function JudgeEvenOdd($num){
		if($num % 2){
			return '奇数です。';
		}else{
			return '偶数です。';
		}
	}
}
?>