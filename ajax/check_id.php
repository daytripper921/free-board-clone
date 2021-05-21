<?php
	!empty($_POST['id']) ? $id = $_POST['id'] : $id="";
	$ret['check'] = false;	
	if($id != ""){
		// host, 아이디, 비밀번호, 데이터베이스 이름
 		$con = mysqli_connect("localhost", "root", "qkfxm123", "board");
		$sql = "SELECT id FROM user WHERE id = '{$id}' ";
		$result = mysqli_query($con, $sql);
		$num = mysqli_num_rows($result); //똑같은게 있는지 확인 //fetch_array()로 해도 됨. 1 이상이면 중복된 값 있음
		
		if($num==0){ //중복된 값이 없으면
			$ret['check'] = true;
		}
	}
	echo json_encode($ret); // "ture" / "false" 
?>