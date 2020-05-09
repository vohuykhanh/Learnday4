<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
$time_now=getdate();
$show_time=$time_now['hours'].' giờ '.$time_now['minutes'].' phút';
$show_date=$time_now['mday'].'/'.$time_now['mon'];

echo "Chào bạn, bây giờ là ".$show_time;
echo " ngày".$show_date.'<br>';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script >
		var user ,password;
		function showHint(str) {
		  	user=document.getElementById("user").value;
			password=document.getElementById("password").value;
			alert("Bạn đã đăng ký thành công");
			if(user== '' && password=='')
			{
				return;
			}
			else{
				xhttp = new XMLHttpRequest();
				xhttp.open("GET", "http://www.huykhanh.hocweb.cf/Learnday4/userRegister.php?user="+user+"&password="+password, true);
  				xhttp.send(); 
			}
			
            
        }
		
	</script>
</head>
<body>
	<section>
		<div class="login">
			<form action="">
			<h2>LOGIN LEARNDAY4</h2>
			<label>Username:</label>
			<input type="text" id="user" value=""><br><br>
			<label>Password:</label>
			<input type="text" id="password" value=""><br><br>
			<button class="btn-registration " onclick="showHint()" type="button"  value="Đăng ký">
				Đăng ký
			</button> 
			<a href="userView.php">Danh sách đăng ký</a>
			<h2 id="result"></h2>
			</form>
		</div>
	</section>
</body>
</html>

