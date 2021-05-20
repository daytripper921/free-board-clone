<!-- DB 연동 -->
<?php
	$db_id="root";
	$db_pw="qkfxm123";
	$db_name="board";
	$db_domain="localhost";
	$db=mysqli_connect($db_domain,$db_id,$db_pw,$db_name);
	
	// ???
	// 페이징, 조회수 처리 등 코드 간소화를 위해 사용할 함수
	//mysqli_query????? 
	//sql문 넣으면 쿼리 실행한 값을 $db에 넣는건가???
	// mysqli::query / mysqli_query랑 똑같은거인듯???
	function mq($sql){
		global $db;
		return $db->query($sql);
	}
?>