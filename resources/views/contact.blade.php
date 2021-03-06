<!DOCTYPE html>
<html lang="en">
<head>
        <title>Liên hệ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
  <style>
      input[type=text]
      {
          padding:9px 10px 9px 10px;
          border-radius: 7px;
          border:0.2mm solid #999;
          width: 100%;
          outline: none;
      }
      textarea{
          width: 100%;
          border-radius: 7px;
          height: 130px;
          outline: none;
          padding:9px 10px 9px 10px;
      }
      input[type=text]:focus{
          box-shadow:5px 5px 5px lightgrey;
      } 
      textarea:focus{
        box-shadow:5px 5px 5px lightgrey;
      } 
  </style>  
</head>
<body>
    @include('menubar2')
   <div class="container" style="margin-top:40px;">
    <div class="col-xs-12 a-left">
        <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">					
          <li class="home">
          <a itemprop="url" href="{{route('homepage')}}" style="color:black;text-decoration: none"><span itemprop="title">Trang chủ</span></a>						
            <span ><i class="fa fa-angle-double-right"></i></span>
          </li> 
          <li><strong><span>Liên hệ</span></strong></li> 
        </ul>
      </div>
       <div class="col-sm-9">
            <form>
           <h3><b>Liên hệ</b></h3>
           <h5 style="color:#666">Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</h5>
            <div class="row">
                
                    <div class="col-sm-6">
                            <p><b>Họ tên</b></p>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="col-sm-6">
                                <p><b>Email</b></p>
                                <input type="text" name="em" id="em" required>
                        </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <div class="col-sm-12">
                        <p><b>Nội dung</b></p>
                        <textarea name="nd" id="nd" required></textarea>
                        <input type="submit" id="submit" value="Gửi tin nhắn" id="send" class="btn btn-primary" style="padding:10px;font-size: 15px;margin-top:10px;">
                        <div id="kq" style="margin-top: 20px;color:red;"></div>
                </div>
            </div>
            </form>
       </div>
       <div class="col-sm-3">
            <h1><p style="font-family: 'Alex Brush';font-size: 30px;font-weight: bold">NKTravel</p></h1>
            <p style="font-size: 16px;">Đặt tour du lịch!<br>Hơn 3000 tour du lịch ở Việt Nam và Quốc tê</p>
            <p><img src="http://localhost/NKTravel/public/image/tick.png"> Đô thị Đại học Đà Nẵng, Quận Ngũ Hành Sơn, TP Đà Nẵng</p>
            <p><img src="http://localhost/NKTravel/public/image/call-answer.png"> 0338253456</p>
            <p><img src="http://localhost/NKTravel/public/image/email-envelope-outline.png"> pvnam.18it1@sict.udn.vn</p>
           
       </div>
   </div>
   @include('footer')
</body>
<script>
$(document).ready(function()
	{
		 $.ajaxSetup({
             headers:{
             	'X-CSRF-TOKEN':$('[name=csrf_token]').attr('content')
             }
		 });
         $('#submit').click(function()
         {  var trong = ' ';
         	var name = $('#name').val();
            var email=$('#em').val();
            var content=$('#nd').val();
            event.preventDefault()
         $.ajax({
          url:'{{route('xulilienhe')}}',
          type:'post',
          data: {ten: name,email1:email, nd:content},
          success:function(kq){
              $('#kq').text('Cảm ơn bạn. Chúng tôi sẽ trả lời bạn sớm nhất có thể !!!!');
              $('#name').val(trong);
              $('#em').val(trong);
              $('#nd').val(trong);
          }
         })
         .done(function(){
            console.log('done');
         })
         .fail(function(){
            console.log('fail');
         })     
         .always(function(){
             console.log('alway');
         });
    
         });
	});
</script>
</html>