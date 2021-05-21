<?php
    $id   = $_POST['id'];
    $pass = $_POST['pass']; 
    
 $con = mysqli_connect("localhost", "root", "qkfxm123", "board");
   $sql = "SELECT * FROM user WHERE id='$id'";

   $result = mysqli_query($con, $sql);

   // 만족하는 id의 수 구하기  => 다르게 바꿀 수 있을 듯. 
   $num_match = mysqli_num_rows($result);

   //만족하는 id가 없을 때
   if(!$num_match) {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             location.href = 'login.php';
           </script>
         ");
    } else { //만족하는 레코드 있음 -> 레코드 가져오고, 비밀번호 값이 같은지 확인
        $row = mysqli_fetch_array($result); //레코드 $row에 담음
        $db_pass = $row['pass'];

        mysqli_close($con);

		    /* 로그인 화면에서 전송된 $pass와 DB의 $db_pass의 해쉬값 비교 */
        // $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); // 입력받은 패스워드를 해쉬값으로 암호화 했었음
        if(!password_verify($pass, $db_pass)){
        	echo("
	              <script>
	                window.alert('비밀번호가 틀립니다!')
	                location.href = 'login.php';
	              </script>
	           ");
	           exit;
        }else { //비밀번호 일치할 때, 
            //세션 생성
            session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            $_SESSION["role"] = $row["role"]; // 추가 코드        
            echo("
              <script>
                location.href = 'index.php';
              </script>
            ");
        }
     }        
?>
