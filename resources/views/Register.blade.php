<!DOCTYPE html>
<html>
<head>
	<title></title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
		body {
  background: #222;
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://unsplash.it/1200/800/?random');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  background-fill-mode: rgba(0,0,0,0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.container {
  background: white;
  padding: 30px 35px;
  border: 5px solid #26a69a;
  width: 550px;
  height: auto;
  box-sizing: border-box;
  position: relative;

}
.col.s6 > .btn {
   width: 100%;
}
.gender-male,.gender-female {
  display: inline-block;
}
.gender-female {
  margin-left: 35px;
}
radio:required {
  border-color: red;
}
.container {
  animation: showUp 0.5s cubic-bezier(0.18, 1.3, 1, 1) forwards;
}

@keyframes showUp {
  0% {
    transform: scale(0);
  }
  100% {
    transoform: scale(1);
  }
}
.row {margin-bottom: 10px;}

.ngl {
  position: absolute;
  top: -20px;
  right: -20px;
}
input[type=text],input[type=password]
{
	padding: 5px;
	border-radius: 5px;
	outline: none;
	background-color: #cccccc;
	border: none;
	margin-left: 10px;
	color: black;
	width: 100%;

}
input[type=submit]
{
	padding: 10px;
	border-radius: 5px;
	outline: none;
	background-color: #0967c4;
	border: none;
	margin-left: 10px;
	color: black;
	width: 100%;
	margin-top: 15px

}
 table{
 	margin: 0;
 	padding: auto;
 }
 tr th{
 	padding: 7px;
 }

	</style>
</head>
<body>
<div class="container">
<div class="row">
    <form action="{{url()->route('register1')}}" method="post">
    {{ csrf_field() }}
          <div class="row" style="font-size: 35px;" align="center"><b>Đăng ký</b></div>
          <div class="row" style="margin-left:2%;color: gray;font-size: 18px; ">
          	<table>
          		<tr>
          			<th>Tên đầy đủ</th>
          			<th><input type="text" name="name" required></th>
          		</tr>
          		<tr>
          			<th>Email</th>
          			<th><input type="text" name="email" required></th>
          		</tr>
          		<tr>
          			<th>Số điện thoại</th>
          			<th><input type="text" name="phone" required></th>
          		</tr>
          		<tr>
          			<th>Địa chỉ</th>
          			<th><input type="text" name="address" required></th>
          		</tr>
          		<tr>
          			<th>Tên truy cập</th>
          			<th><input type="text" name="user" required></th>
          		</tr>
          		<tr>
          			<th>Mật khẩu</th>
          			<th><input type="password" name="pass" required></th>
          		</tr>
          		<tr>
          			<th>Nhập lại mật khẩu</th>
          			<th><input type="password" name="repass" required></th>
          		</tr>
                  <?php if(isset($error))
                  echo "<p style= 'color: red;margin-left:2%;'><b>".$error.'</b></p>';
                    if(isset($text))
                    echo $text;
                  ?>
          		<tr>
          			<th colspan="2"><input type="submit" name="register" value="Đăng ký"></th>
          		</tr>
          	</table>
          </div>
        </form>
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
  $('select').material_select();
});
</script>
</body>
</html>