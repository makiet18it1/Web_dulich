<!DOCTYPE html>
<html>
<head>
	<title>ĐĂNG NHẬP</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			background-image: url('http://localhost/NKTravel/public/image/bc3.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			color: black;
		}
		.contain
		{
			 max-width: 400px;
         background: rgba(255,255,255,0.40);
         padding: 0;
        letter-spacing: 1px;
         margin: 160px auto;
		}
		input[type=text],input[type=password]
		{
			width: 75%;
			padding: 10px;
			margin: 10px 50px 10px 50px;
           height: 45px;
            border-radius: 3px;
           float: left;
            outline: none;
            background: #ccc;
           border: 1px solid #ccc;
           color: black;
		   

		}
		input[type=submit]{
			width: 75%;
			padding: 10px;
			margin: 10px 50px 10px 50px;
			background: #242472;
			border: none;
			outline: none;
			color: black;
			cursor: pointer;
			border-radius: 3px;
			font-size: 17px;
        }
	</style>
</head>
<body>
<div class="container">
		<div class="contain">
			<form method="POST" action="{{url()->route('login')}}">
			{{ csrf_field() }}
				<div class="row" align="center"><h2><b>ĐĂNG NHẬP</b></h2></div>
				<div class="row"><input type="text" name="user" placeholder="Tên truy cập"></div>
				<div class="row"><input type="password" name="pass" placeholder="Mật khẩu" id="pass"></div>
				<div class="row"><input type="checkbox" name="check" style="margin-left: 50px;" onclick="showpass()"> Hiện mật khẩu</div>
				<?php if(isset($error))
				 echo "<p style= 'color: yellow;margin-left:15px;'>".$error.'</p>';
				?>
				<div class="row"><input type="submit" name="dn" value="Đăng nhập"></div>
			</form>
		</div>
</div>
</body>
<script>
function showpass() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html> 