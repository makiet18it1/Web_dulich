<!DOCTYPE html>
<html>
<head>
<title>Trang chủ</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
  <script src="js/jquery-1.11.1.min.js"></script>
  <style type="text/css">
    #mySidenav a {
  position: absolute;
  left: 0px;
  transition: 0.3s;
  padding: 15px;
  width: 50px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  opacity: 0.7;
}

#about {
  top: 140px;
  background-color: #3B5998;
}

#blog {
  top: 195px;
  background-color: #55ACEE;
}

#projects {
  top: 250px;
  background-color: #dd4b39;
}

#contact {
  top: 305px;
 background: #bb0000;
}
  .row1 > .column1 {
  padding: 0px;

}
/*đây*/
.column1 {
  float: left;
  width: 31%;
  margin-left: 2%;
/*  border: 1px solid;*/
}
.row1:after {
  content: "";
  display: table;
  clear: both;
}
.content {
  background-color: white;
  font-size: 15px;
  background-color: #f4f2f2;
  box-shadow:2px 2px 2px lightgrey; 
  border-radius: 10px;

}
.content input[type=submit]
{
  width: 100%;
  padding: 10px 50px 10px 50px;
  margin-left: 10px;
  background-color: #56aaff;
  color: white;
  outline: none;border: none;
}
.content button{
  width: 100%;
  color: white;
  background-color: #007fff;
  outline: none;
  border: none;
  padding: 10px 20px 10px 20px;
  font-size: 18px;
}
@media screen and (max-width: 900px) {
  .column1 {
    width: 50%;
  }
}
@media screen and (max-width: 600px) {
  .column1{
    width: 100%;
  }
}
.img-hover-zoom {
  overflow: hidden; 
  width: 30%;
   background-color:#000;
  display: inline-block;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  overflow: hidden;
  position: relative;
  text-align: center;
  width: 100%;
}

.img-hover-zoom img {
  transition: transform .5s ease;
}
.img-hover-zoom:hover img {
  transform: scale(1.5);
}
.img-hover-zoom--slowmo img {
  transform-origin: 50% 65%;
  transition: transform 3s, filter 2s ease-in-out;
  filter: brightness(150%);
}

.img-hover-zoom--slowmo:hover img {
  filter: brightness(100%);
  transform: scale(1.5);
}
.row2,
.row2 > .column2 {
  padding: 0px;

}
/*đây2*/
.column2 {
  float: left;
  width: 20%;
  margin-left: 0%;
  margin-top: 3%;
/*  border: 1px solid;*/
}
.row2:after {
  content: "";
  display: table;
  clear: both;
}
.content1 {
  background-color: white;
  font-size: 15px;
  background-color: #f4f2f2;
  box-shadow:2px 2px 2px lightgrey; 
  border-radius: 5px;
   position: relative;

}

@media screen and (max-width: 900px) {
  .column2 {
    width: 50%;
  }
}
@media screen and (max-width: 600px) {
  .column2{
    width: 100%;
  }
}
.image2 {
  display: inline-block;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  overflow: hidden;
  position: relative;
  text-align: center;
  width: 100%;
  height: 350px;
}
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0,0,0,0.3);
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.content1:hover .overlay {
  height: 100%;
  width:100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  bottom: 5%;
  left: 50%;
  -webkit-transform: translate(-40%, -40%);
  -ms-transform: translate(-40%, -40%);
  transform: translate(-40%, -40%);
  text-align: bottom;
}
 .p1{
    overflow: hidden; /* Ẩn số text bị thừa*/
    text-overflow: ellipsis;/*Cắt một đoạn text và thay thế bằng dấu ...*/
    line-height: 25px;
    -webkit-line-clamp: 4; /*Số dòng text hiển thị.*/
    height: 100px;
    font-size: 15px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
 }
 .p2{
  overflow: hidden; /* Ẩn số text bị thừa*/
    text-overflow: ellipsis;/*Cắt một đoạn text và thay thế bằng dấu ...*/
    line-height: 30px;
    -webkit-line-clamp: 2; /*Số dòng text hiển thị.*/
    height: 60px;
    font-size: 15px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
 }
 tr td{
    padding: 7px;
    font-size: 15px;
  }
  </style>
</head>
<body>
@include('menubar')
<div class="container">
  <div class="row" style="padding: 30px 0px 30px 0px;">
  <div class="col-sm-4">
       <div class="col-sm-2" style="font-size: 50px;color: #7f7f7f"><b>01</b></div>
       <div class="col-sm-10">
         <span style="font-size: 25px;">Bán tour số 1 Việt Nam</span><br>
         <span style="font-size: 15px;color: #999">Ứng dụng công nghệ mới nhất</span>
       </div>
  </div>
  <div class="col-sm-4">
    <div class="col-sm-2" style="font-size: 50px;color: #7f7f7f"><b>02</b></div>
       <div class="col-sm-10">
         <span style="font-size: 25px;">Thanh toán linh hoạt</span><br>
         <span style="font-size: 15px;color: #999">Liên kết với các tổ chức tài chính</span>
       </div>
  </div>
  <div class="col-sm-4">
    <div class="col-sm-2" style="font-size: 50px;color: #7f7f7f"><b>03</b></div>
       <div class="col-sm-10">
         <span style="font-size: 25px;">Giá tour luôn tốt nhất</span><br>
         <span style="font-size: 15px;color: #999">Chúng tôi luôn có giá tốt nhất cho bạn</span>
       </div>
  </div>
</div>
<div class="row" style="padding:7% 5% 5% 5%; ">
     <div class="col-sm-7">
       <p align="center" style="font-size: 30px;font-family: 'Anton';">Hãy chọn NKTravel</p>
       <p align="center" style="font-size: 19px;">1.000 lý do tại sao bạn nên chọn đến với chúng tôi NKTravel, có 1 thế giới tuyệt đẹp quanh ta hãy đến với chúng tôi.</p>
       <p align="center" style="font-size: 15px;color: #999">Với hơn 16 năm kinh nghiệm tổ chức và triển khai các tour du lịch trong và ngoài nước, chúng tôi cam kết đem lại cho khách hàng những hành trình tuyệt vời và ấn tượng nhất thông qua những dịch vụ chuyên nghiệp mà chúng tôi thực hiện như:</p>
       <table class="table-reponsive" style="margin-top: 5%">
         <tr>
           <td> <img src="http://localhost/NKTravel/public/image/plane.png"> Chuyến bay đẳng cấp</td>
           <td><img src="http://localhost/NKTravel/public/image/car.png"> Hành trình hấp dẫn</td>
           <td><img src="http://localhost/NKTravel/public/image/time.png"> Quản lý chặt chẽ</td>
         </tr>
         <tr>
           <td><img src="http://localhost/NKTravel/public/image/address.png"> Khách sạn tiện nghi</td>
           <td><img src="http://localhost/NKTravel/public/image/check.png"> Chất lượng đỉnh cao</td>
           <td><img src="http://localhost/NKTravel/public/image/earth.png"> Hơn 100 tours quốc tế</td>
         </tr>
       </table>
     </div>
     <div class="col-sm-5">
       <img src="http://localhost/NKTravel/public/image/image1.png" style="width: 100%;height: auto;">
     </div>
</div>
<div class="row" style="padding-top:2%;" align='center'>
  <div style="padding:0;margin:auto">
   <span style="font-size: 25px;">Tour <b style="color: #007fff">mới nhất</b>
    <br>
   </span>
   <hr width="30%" style="margin-top: 2px;margin-bottom: 5px;">
   <p style="font-size: 17px;">Hệ thống đặt Tour hàng đầu Việt Nam. Hơn 300 tour du lịch ở Việt Nam và Quốc tế</p>
  </div>
</div>
<div class="row">
    <div class="row1" style="margin-top:2%;">
       @for($i=0;$i<6;$i++)
         
    <div class="column1">
       <div class="content">
          <div class="img-hover-zoom img-hover-zoom--slowmo">
            <a href="/NKTravel/public/detailtour/{{$domestic[$i]['IDTour']}}">
         <img src="<?php echo $domestic[$i]['Image']?>" class="image1">
            </a>
          </div>
         <div style="padding:3px 5px 10px 8px;">
           <p><b><a href="#" style="color: black;text-decoration: none;"><?php echo $domestic[$i]['NameTour']?></a></b></p>
           <p style="font-size: "></p>
           <p><span style="color: #007fff;font-size: 20px;">{{number_format($domestic[$i]['Money'])}}đ</span><span style="float: right;"><img src="http://localhost/NKTravel/public/image/icon.png"> <img src="http://localhost/NKTravel/public/image/plane2.png"></span></p>
         <p><img src="http://localhost/NKTravel/public/image/appointment.png" style="width: 5%"> Khởi hành: {{$domestic[$i]['DepartureDay']}}</p>
           <p><img src="http://localhost/NKTravel/public/image/calendar.png" style="width: 5%"> Thời gian
           : <?php echo $domestic[$i]['Howlong']?></p>
         </div>
       </div>
    </div>
       @endfor
    </div>
</div>
<div class="row" style="padding-top:7%; " align='center'>
  <div style="padding:0;margin:auto">
   <span style="font-size: 25px;">Tour <b style="color: #007fff">trong nước</b>
   </span>
   <hr width="30%" style="margin-top: 2px;margin-bottom: 5px;">
   <p style="font-size: 17px;">Tour du lịch trong nước tại NKTravel. Hành hương đầu xuân - Tận hưởng bản sắc Việt</p>
  </div>
</div>
<div class="row">
  <div class="row1" style="margin-top:2%;">
  @for($i=0;$i<=2;$i++)
    <div class="column1">
       <div class="content">
          <div class="img-hover-zoom img-hover-zoom--slowmo">
            <a href="/NKTravel/public/detailtour/{{$domestic1[$i]['IDTour']}}">
         <img src="<?php echo $domestic1[$i]['Image']?>" class="image1">
            </a>
          </div>
         <div style="padding:3px 5px 10px 8px;">
           <p><b><a href="#" style="color: black;text-decoration: none;"><?php echo $domestic1[$i]['NameTour']?></a></b></p>
           <p style="font-size: "></p>
           <p><span style="color: #007fff;font-size: 20px;">{{number_format($domestic1[$i]['Money'])}}đ</span><span style="float: right;"><img src="http://localhost/NKTravel/public/image/icon.png"> <img src="http://localhost/NKTravel/public/image/plane2.png"></span></p>
         <p><img src="http://localhost/NKTravel/public/image/appointment.png" style="width: 5%"> Khởi hành: {{$domestic1[$i]['DepartureDay']}}</p>
           <p><img src="http://localhost/NKTravel/public/image/calendar.png" style="width: 5%"> Thời gian
           : <?php echo $domestic1[$i]['Howlong']?></p>
         </div>
       </div>
    </div>
       @endfor
</div>
</div>
<div class="row" align="center" style="padding-top:7%; ">
  <div style="padding:0;margin:auto">
   <span style="font-size: 25px;">Tour <b style="color: #007fff">nước ngoài</b>
   </span>
   <hr width="30%" style="margin-top: 2px;margin-bottom: 5px;">
   <p style="font-size: 17px;">Tour du lịch nước ngoài tại NKTravel. Du lịch 5 châu - Trải nghiệm sắc xuân thế giới</p>
  </div>
</div>
<div class="row">
  <div class="row1">
  @for($i=0;$i<=2;$i++)
    <div class="column1">
       <div class="content">
          <div class="img-hover-zoom img-hover-zoom--slowmo">
            <a href="/NKTravel/public/detailtour/{{$domestic2[$i]['IDTour']}}">
         <img src="<?php echo $domestic2[$i]['Image']?>" class="image1">
            </a>
          </div>
         <div style="padding:3px 5px 10px 8px;">
           <p><b><a href="#" style="color: black;text-decoration: none;"><?php echo $domestic2[$i]['NameTour']?></a></b></p>
           <p style="font-size: "></p>
           <p><span style="color: #007fff;font-size: 20px;">{{number_format($domestic2[$i]['Money'])}}đ</span><span style="float: right;"><img src="http://localhost/NKTravel/public/image/icon.png"> <img src="http://localhost/NKTravel/public/image/plane2.png"></span></p>
           <p><img src="http://localhost/NKTravel/public/image/appointment.png" style="width: 5%"> Khởi hành: {{$domestic2[$i]['DepartureDay']}}</p>
           <p><img src="http://localhost/NKTravel/public/image/calendar.png" style="width: 5%"> Thời gian
           : <?php echo $domestic2[$i]['Howlong']?></p>
         </div>
       </div>
    </div>
       @endfor
</div>
</div>
<div class="row" align="center" style="padding-top:7%; ">
  <div style="padding:0;margin:auto">
  <span style="font-size: 30px;">Cẩm nang <b style="color: #007fff">du lịch</b>
  </span>
  <hr width="30%" style="margin-top: 2px;margin-bottom: 5px;">
  <p style="font-size: 17px;">Cẩm nang thông tin về du lịch, văn hóa, ẩm thực, các sự kiện và lễ hội tại các điểm đến Việt nam, Đông Nam Á và Thế Giới.</p>
  </div>
</div>
<div class="row">
   <div class="col-sm-6">
   <p><img src="{{$article[0]['Image']}}" style="width:100%;height:auto"></p>
   <a href="http://localhost/NKTravel/public/detailarticle/{{$article[0]['IDArticle']}}" style="color:black"><p style="font-weight:bold;font-size:18px;">{{$article[0]['NameArticle']}}</p></a>
   <p class="p1">{{$article[0]['Review']}}</p>
   </div>
   <div class="col-sm-6">
     <div class="row">
       <div class="col-sm-4">
        <p><img src="{{$article[4]['Image']}}" style="height:130px;width:180px"></p>
       </div>
       <div class="col-sm-8">
        <a href="http://localhost/NKTravel/public/detailarticle/{{$article[4]['IDArticle']}}" style="color:black"><p style="font-weight:bold;font-size:16px;color:#666">{{$article[4]['NameArticle']}}</p></a>
        <p class="p2">{{$article[4]['Review']}}</p>
        <p style="color: #b2b2b2">Đăng ngày: {{$article[4]['Date']}}</p>
       </div>
     </div>
     <div class="row">
      <div class="col-sm-4" ">
       <p><img src="{{$article[3]['Image']}}" style="height:130px;width:180px"></p>
      </div>
      <div class="col-sm-8">
        <a href="http://localhost/NKTravel/public/detailarticle/{{$article[3]['IDArticle']}}" style="color:black"><p style="font-weight:bold;font-size:16px;color:#666">{{$article[3]['NameArticle']}}</p></a>
       <p class="p2">{{$article[3]['Review']}}</p>
       <p style="color: #b2b2b2">Đăng ngày: {{$article[3]['Date']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4" ">
       <p><img src="{{$article[2]['Image']}}" style="height:130px;width:180px"></p>
      </div>
      <div class="col-sm-8">
        <a href="http://localhost/NKTravel/public/detailarticle/{{$article[2]['IDArticle']}}" style="color:black"><p style="font-weight:bold;font-size:16px;color:#666">{{$article[2]['NameArticle']}}</p></a>
       <p class="p2">{{$article[2]['Review']}}</p>
       <p style="color: #b2b2b2">Đăng ngày: {{$article[2]['Date']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4" ">
       <p><img src="{{$article[1]['Image']}}" style="height:130px;width:180px"></p>
      </div>
      <div class="col-sm-8">
        <a href="http://localhost/NKTravel/public/detailarticle/{{$article[1]['IDArticle']}}" style="color:black"><p style="font-weight:bold;font-size:16px;color:#666">{{$article[1]['NameArticle']}}</p></a>
       <p class="p2">{{$article[1]['Review']}}</p>
       <p style="color: #b2b2b2">Đăng ngày: {{$article[1]['Date']}}</p>
      </div>
    </div>
   </div>
</div> 
<div class="row" align="center" style="padding-top:7%; ">
  <div style="padding:0;margin:auto">
  <span style="font-size: 30px;">Điểm đến <b style="color: #007fff">ưa thích</b>
  </span>
  <hr width="30%" style="margin-top: 2px;margin-bottom: 5px;">
  <p style="font-size: 17px;">Những điểm du lịch hot nhất dịp Tết ở Việt Nam. Tham khảo những địa điểm du lịch đặc sắc nhất từ Bắc tới Nam cùng với chúng tôi </p>
  </div>
</div><div class="row">
<div class="row2">
       		      <div class="column2">
<div class="content1">
   <img src="http://localhost/NKTravel/public/image/danang.jpg" class="image2">
   <div class="overlay">
    <a href="#"><div class="text">Đà Nẵng</div></a>
  </div>
</div>
           </div>
	      <div class="column2">
<div class="content1">
   <img src="http://localhost/NKTravel/public/image/asian2.jpg" class="image2">
   <div class="overlay">
    <a href="#"><div class="text">Châu Á</div></a>
  </div>
</div>
           </div>
                 <div class="column2">
<div class="content1">
   <img src="http://localhost/NKTravel/public/image/europe.jpg" class="image2">
   <div class="overlay">
    <a href="#"><div class="text">Châu Âu</div></a>
  </div>
</div>
           </div>

                 <div class="column2">
<div class="content1">
  <img src="http://localhost/NKTravel/public/image/americas.jpg" class="image2">
   <div class="overlay">
     <a href="#"><div class="text">Châu Mỹ</div></a>
  </div>
</div>
           </div>

                 <div class="column2">
<div class="content1">
   <img src="http://localhost/NKTravel/public/image/afica.jpg" class="image2">
   <div class="overlay">
    <a href="#"><div class="text">Châu Phi</div></a>
  </div>
</div>
           </div>	
      </div>
</div>

</div>
@include('footer')
</body>
</html>