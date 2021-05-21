<?php
	// 로그인할 떄, 세션값
	include_once "./config.php";

	// $_SESSION["userid"]를 처음에 어떻게 어디서 지정???
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once "./fragments/head.php";?>
	
	</head>
	<body>
		<!-- 표준 네비게이션 바 (화면 상단에 위치, 화면에 의존하여 확대 및 축소) -->
		<nav class="navbar navbar-default">
			<?php include_once "./fragments/header.php";?>
		</nav>
		<div class="container"> 
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<div class="jumbotron" style="padding-top: 20px;">

					<form name="loginSbmt" id="loginSbmt" method="post" action="login_ok.php">
						<h3 style="text-align: center">로그인 화면</h3>
						<div class="col-lg-4"></div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="아이디" name="id" maxlength="15">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="비밀번호" name="pass" maxlength="20">
						</div>
						
						<a href="#"><span class="btn btn-primary form-control" onclick="check_input()">로그인</span></a> 
						<!-- check_input.js -->
					</form>
					
				</div>
			</div>
		</div>
		<script src="./js/login.js"></script>
	</body>
</html>