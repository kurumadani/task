<!-- 6-1 クラスを自作しよう -->
<!-- 関数を別ファイルに移動しよう -->
<?php
function JudgeEvenOdd($num){
	if($num % 2 == 1){
		return "奇数です";
	}else{
		return "偶数です";
	}
}
?>