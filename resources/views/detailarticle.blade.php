<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <style type="text/css">
  <style>
    .navigation {
  width: 100%;
  border: 0.1mm solid #ccc;

}
.mainmenu, .submenu {
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 14px;
}

.mainmenu a {
  display: block;
  background-color: white;
  text-decoration: none;
  padding: 10px;
  color: #000;
  
}

.mainmenu a:hover {
  background-color: #56aaff;
    color:white;
    text-decoration: none;
}
.mainmenu li:hover .submenu {
  display: block;
  max-height: 200px;
}
.submenu a:hover {
  color:black;
}
.submenu {
  overflow: hidden;
  max-height: 0;
  -webkit-transition: all 0.5s ease-out;
}

.p1{
    overflow: hidden; /* Ẩn số text bị thừa*/
    text-overflow: ellipsis;/*Cắt một đoạn text và thay thế bằng dấu ...*/
    line-height: 23px;
    -webkit-line-clamp: 2; /*Số dòng text hiển thị.*/
    height: 50px;
    font-size: 12px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    text-decoration: none;
 }
 .fa {
  padding: 10px 13px 10px 13px;
  font-size: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
 .fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
  border-radius: 7px;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
  border-radius: 7px;
}

.fa-google {
  background: #dd4b39;
  color: white;
  border-radius: 7px;
}
.avatar{
  vertical-align: middle;
  width: 50px;
  height: 50px;
  margin-right: 20px;
}
#table {
  margin-top: 20px;
  margin-bottom: 20px;
}
  </style>
<body>
    @include('menubar')
    <div class="container">
      <div class="row" style="margin-top: 5%;">
          <div class="col-sm-3">
                <p style="font-size: 17px;font-weight: bold">DANH MỤC</p>
                <hr>
                 <nav class="navigation">
                         <ul class="mainmenu">
                           <li><a href="">Trang chủ</a></li>
                           <li><a href="">Giới thiệu</a></li>
                           <li><a href="">Tour trong nước</a>
                             <ul class="submenu">
                               <li><a href="">Miền Bắc</a></li>
                               <li><a href="">Miền Trung</a></li>
                               <li><a href="">Miền Nam</a></li>
                             </ul>
                           </li>
                           <li><a href="">Tour nước ngoài</a>
                             <ul class="submenu">
                               <li><a href="">Châu Á</a></li>
                               <li><a href="">Châu Âu</a></li>
                               <li><a href="">Châu Mỹ</a></li>
                               <li><a href="">Châu Úc</a></li>
                             </ul>
                           </li>
                           <li><a href="">Dịch vụ tour</a></li>
                           <li><a href="">Cẩm nang du lịch</a></li>
                           <li><a href="">Liên hệ</a></li>
                         </ul>
                       </nav>
                       <h4>BÀI VIẾT KHÁC</h4>
                       <hr>
                       @for($i=0;$i<=3;$i++)
                       <?php
                       $j=rand(1,count($all)-1);
                       ?>
                       <div class="row">
                
                           <div class="col-sm-4">
                               <img src="<?php echo $all[$j]['Image']?>" style="width: 70px;height: 40px;">
                           </div>
                           <div class="col-sm-8">
                                <a href="http://localhost/NKTravel/public/detailarticle/{{$all[$j]['IDArticle']}}" style="color:black"><span class="p1"><?php echo $all[$j]['NameArticle']?></span></a>
                                    {{-- <span style="color:#ccc"><i>{{ $all[$j]['Date']}}</i></span> --}}
                           
                            </div>
                       </div>
                       @endfor
          </div>
          <div class="col-sm-9">
          <p style="font-size: 25px;font-weight: bold">{{$ID[0]['NameArticle']}}</p>
          <p style="color:#ccc;font-size: 15px;">Đăng bởi: <span style="color:#7f7f7f;font-weight: bold">{{$ID[0]['Writer']}}</span> vào lúc {{$ID[0]['Date']}}</p>
          <p><h4>{!!$ID[0]['Content']!!}</h4></p>
          <p><a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a></p>
            <h3>Bình luận</h3>
            <table id="table">
               @foreach ($comment as $value)
               <tr>
                  <td>
                     <div class="col-sm-3"><img src='http://localhost/NKTravel/public/image/avatar.jpg' class='avatar'></div>
                  <div class="col-sm-9"><span style="font-size: 16px;font-weight: bold">{{$value->Who}}</span>
                       <p style='color:#999;font-size:12px;'>{{$value->Date}}</p>
                      <p style="font-size: 15px;">{{$value->Content}}</p>
                     </div>
                  </td>
             </tr>   
               @endforeach        
            </table>
            <form>
              <h3 style="margin-top: 20px;">Viết bình luận của bạn</h3>
                <input type="text" id="name" name="name" style="padding: 8px 0px 8px 10px;border-radius: 7px;outline: none;border: 0.3mm solid #ccc;font-size: 15px;width: 100%" placeholder="Họ tên" required>
                <input type="text" id="email" name="email" style="padding: 8px 0px 8px 10px;border-radius: 7px;outline: none;border: 0.3mm solid #ccc;font-size: 15px;width: 100%;margin-top: 1%" placeholder="Email" required>
                <textarea name="comment" id="comment" rows="5" style="width:100%; padding: 8px 0px 8px 10px;border-radius: 7px;outline: none;font-size: 15px;margin-top: 1%" placeholder="Nội dung" required></textarea>
                <input type="submit" id="submit" value="Gửi bình luận" class="btn btn-primary" style="padding:9px;font-size: 17px;border-radius: 5px;" id="submit">
            </form>
          </div>
      </div>
    </div>
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
            var email=$('#email').val();
            var content=$('#comment').val();
            var currentdate = new Date(); 
            var datetime =currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " at "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();

            event.preventDefault()

         $.ajax({
          url:'{{route('xulicomment')}}',
          type:'post',
          data: {ten: name,email1:email, nd:content,id:<?php echo $ID[0]['IDArticle'] ?>,date:datetime},
          success:function(kq){
              $('#name').val(trong);
              $('#email').val(trong);
              $('#comment').val(trong);
              <?php $mydate=getdate(date("U")) ?>
              $('#table').append("<tr><td><div class='col-sm-3'><img src='http://localhost/NKTravel/public/image/avatar.jpg' class='avatar'></div><div class='col-sm-9'><span style='font-size: 16px;font-weight: bold'>"+name+"</span><p style='color:#999;font-size:12px;'>"+datetime+"</p><p style='font-size: 15px;'>"+content+"</p></div></td></tr>");
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
</body>
</html>