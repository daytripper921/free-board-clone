<?php
	include_once "./db/db_con.php"; 
?>
	<?php
		$bno = $_GET['idx']; // $bno idx값을 받아와 넣음
		/* 받아온 idx값의 행 정보를 가져옴 */
		$sql = mq("SELECT * FROM board WHERE idx='".$bno."'"); 
		$board = $sql->fetch_array();
	?>
		<!-- DB의 비밀번호($bpw)와 모달창의 비밀번호($pwk)를 비교 -->
		 <?php
		 	$bpw = $board['pw']; //글 비밀번호
	
		 	if(isset($_POST['pw_chk'])) //전달받은 비밀번호가 있으면
		 	{
		 		$pwk = $_POST['pw_chk']; //모달에 입력한 비밀번호
				if(password_verify($pwk,$bpw)) 
				{
					$pwk == $bpw; //이게 왜 여기있음??
				?>
					<!-- pwk와 bpw값이 같으면 read.php로 보내고 -->
					<script>
						location.replace("read.php?idx=<?=$board["idx"] ?>");
					</script>
				<?php 
				}else{ ?>
					<!--- 아니면 비밀번호가 틀리다는 메시지를 보여줌 -->
					<script>
						alert('비밀번호가 틀립니다');
					</script>
				<?php 
				} 
			} ?>
