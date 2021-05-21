<!-- 세션 관리 -->
<?php
	session_start();

	//세션 값이 존재하면 그 값을 변수에 할당
	//존재하지 않으면 변수에 공백 값 할당

	// 그럼 $_SESSION["userid"]는 어디서 처음 생성됨?
	// 아.... login_ok.php에서 ㅋㅋㅋ 

	if (isset($_SESSION["userid"])) { // $_SESSION["userid"]가 설정되어있으면
		$userid = $_SESSION["userid"];
	}else{
		$userid = ""; 
	}if (isset($_SESSION["username"])){
		$username = $_SESSION["username"];
	}else{
		$username = "";
	}if (isset($_SESSION["role"])){ // 사용자, 관리자 구분 용도
		$role = $_SESSION["role"];
	}else{
		$role = "";
	}
?>