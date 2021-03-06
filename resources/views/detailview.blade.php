<!DOCTYPE html>
<html lang="en">
<head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
  <style>
      .mySlides {
  display: none;
   }
   .prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  background-color:rgba(0,0,0,0.39); 
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;

}
.next {
  right: 15px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
.column {
  float: left;
  width: 24%;
  margin-right: 1%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.note{
  width: 100%;
  height: 300px;
  overflow: auto;
  border: 0.1mm dashed #ff7f00;
  padding:10px;
  background-color: #ffaaaa;
}
.row1 > .column1 {
  padding: 0px;

}
/*đây*/
.column1 {
  float: left;
  width: 25%;
  margin-left: 0%;
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
  border-radius: 5px;

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
.image1:hover{
  transform: scale(1.05);
}
  </style>
</head>
<body>
       @include('menubar2')
  <div class="container">
    <div class="col-xs-12 a-left">
      <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">					
        <li class="home">
        <a itemprop="url" href="{{route('homepage')}}" style="color:black;text-decoration: none"><span itemprop="title">Trang chủ</span></a>						
          <span ><i class="fa fa-angle-double-right"></i></span>
        </li> 
      <li><strong><span>{{$tour[0]['NameTour']}}</span></strong></li> 
      </ul>
    </div>
      <div class="row" style="margin-top: 20px;">
          <div class="col-sm-6">
                      <div class="mySlides">
                            <img src="{{ $tour[0]->detailimage()->first()->Img1}}" style="width:100%">
                          </div>
                        
                          <div class="mySlides">
                            <img src="{{ $tour[0]->detailimage()->first()->Img2}}" style="width:100%">
                          </div>
                          <div class="mySlides">
                            <img src="{{ $tour[0]->detailimage()->first()->Img3}}" style="width:100%">
                          </div>
                            
                          <div class="mySlides">
                            <img src="{{ $tour[0]->detailimage()->first()->Img4}}" style="width:100%">
                          </div>
                        
                            
                          <a class="prev" style="text-decoration: none;color: white" onclick="plusSlides(-1)">❮</a>
                          <a class="next" style="text-decoration: none;color: white" onclick="plusSlides(1)">❯</a>
                           <p></p>
                        
                          <div class="row">
                            <div class="column">
                              <img class="demo cursor" src="{{ $tour[0]->detailimage()->first()->Img1}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="{{ $tour[0]->detailimage()->first()->Img2}}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="{{ $tour[0]->detailimage()->first()->Img3}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="{{ $tour[0]->detailimage()->first()->Img4}}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                            </div>
                          </div>
                      
          </div>
          <div class="col-sm-6">
          <span style="font-weight: bold;font-size: 23px;">{{$tour[0]['NameTour']}}</span>
          <p></p>
          <hr>
          <p><img src="http://localhost/NKTravel/public/image/icon.png"> Di chuyển bằng ôtô</p>
          <p><img src="http://localhost/NKTravel/public/image/plane2.png"> Di chuyển bằng máy bay</p>
          <p><img src="http://localhost/NKTravel/public/image/appointment.png" style="width: 5%"> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
          <p><img src="http://localhost/NKTravel/public/image/calendar.png" style="width: 5%"> Thời gian: <?php echo $tour[0]['Howlong']?></p>
          <p>- Khám phá Bờ Tây nước Mỹ chứa đựng vô vàn thú vị với mức giá siêu tiết kiệm.</p>
          <p>- Trải nghiệm 2 đêm khách sạn 5 sao Bellagio nổi tiếng Las Vegas.</p>
          <p>- Hòa mình vào không khí trường quay hoành tráng tại Universal Studios, trung tâm kinh đô điện ảnh Hollywood</p>
          <p>- Ghé thăm khu Little Saigon - nơi sinh sống của cộng đồng người Việt.</p> 
          <div class="col-sm-6">
            <input type="submit" value="ĐẶT TOUR" class="btn btn-primary" style="padding:10px 20px 10px 50px;font-size: 15px;font-weight: bold;background-image: url('http://localhost/NKTravel/public/Image/paper-plane-32.png');background-repeat: no-repeat;background-position: 2px;">  
          </div>
          <div class="col-sm-6">
            <input type="submit" value="GỌI LẠI SAU" class="btn btn-warning" style="padding:10px 20px 10px 50px;font-size: 15px;font-weight: bold;background-image: url('http://localhost/NKTravel/public/Image/phone-68-32.png');background-repeat: no-repeat;background-position: 2px;">  
          </div>
        </div>
      </div>
       <div class="row" style="margin-top: 20px;">
           <div class="col-sm-7">
           <form action="{{url()->route('bill')}}" method="POST">
              {{ csrf_field() }}
              @csrf
               <div class="row">
                        <table class="table">
                            <thead>
                            <tr>
                            <th style="width: 20%">Loại khách</th>
                            <th style="width: 20%">Số lượng</th>
                            <th style="width: 30%;text-align: center">Đơn giá</th>
                            <th style="width: 30%;text-align: right">Tổng giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Người lớn</td>
                            <td><input type="number" id="amount1" name="amount1" value="1" style="padding:7px 0px 7px 20px;max-width: 60px" min="1"></td>
                        <td><input type="text"  id="adult" value=" {{$tour[0]->money()->first()->Adult}}" readonly style="text-align: center;border: none;outline: none"></td>
                            <td><input type="text" id="sum1" value="{{$tour[0]->money()->first()->Adult}}" style="outline: none;border: none;text-align: right" readonly></td>
                        </tr>
                        <tr>
                                <td>Trẻ em</td>
                                <td><input type="number" id="amount2" name="amount2" value="0" style="padding:7px 0px 7px 20px;max-width: 60px" min="0"></td>
                                <td><input type="text"  id="child" value="{{$tour[0]->money()->first()->Child}}" readonly style="text-align: center;border: none;outline: none"></td>
                                <td><input type="text" id="sum2" value="0" style="outline: none;border: none;text-align: right" readonly></td>
                            </tr>
                            <tr>
                                    <td>Em bé</td>
                                    <td><input type="number" id="amount3" name="amount3" value="0" style="padding:7px 0px 7px 20px;max-width: 60px" min="0"></td>
                                    <td><input type="text"  id="baby" value=" {{$tour[0]->money()->first()->Baby}}" readonly style="text-align: center;border: none;outline: none"></td>
                                    <td><input type="text" id="sum3" value="0" style="outline: none;border: none;text-align: right" readonly></td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="text-align: right"><input type="number"  id="count" value="{{$tour[0]->money()->first()->Adult}}" readonly style="outline: none;border:none;font-size: 17px;text-align: right">VNĐ</td>
                                </tr>
                            </tbody>
                        </table>
                      <input type="text" name="id" value="{{$tour[0]['IDTour']}}" style="display:none">
                       
           </div>
           <div class="row">
               <div class="col-sm-6">
                    <span style="font-size: 16px;font-weight: bold">Ngày khởi hành:</span> <input type="date" name="date" value="{!! $tour[0]['DepartureDay'] !!}" readonly> 
               </div>
               <div class="col-sm-6" align="right">
                <input type="submit" value="ĐẶT TOUR" class="btn btn-primary" style="padding:10px 20px 10px 50px;font-size: 15px;font-weight: bold;background-image: url('http://localhost/NKTravel/public/Image/paper-plane-32.png');background-repeat: no-repeat;background-position: 2px;">  
               </div>
           </div>
        </div>
      
        <div class="col-sm-5">
          <div class="note">
              <p><b>Chính sách Tour</b></p>
              <p>* Vé trẻ em:</p>
              <p>- Từ 2 tuổi trở lên bằng giá người lớn nếu ở với Bố hoặc Mẹ (2 người/ phòng)</p>
              <p>- Từ 2 tuổi trở lên, bằng giá người lớn nếu ở chung cabin với Bố, Mẹ (3 - 4 người/ phòng), lưu ý kiểm tra lại với du thuyền (nếu có phòng trống).</p>
              <p>* Giá tour bao gồm:</p>
              <p>- Vé máy bay khứ hồi Tp.HCM - Singapore - Tp.HCM, thuế hai đầu sân bay, phí an ninh sân bay theo đoàn.</p>
              <p>- Hải trình 6 ngày 5 đêm trên du thuyền 5 sao Voyager of  the Seas từ Singapore đi  Penang (Malaysia) đến Phuket  (Thailand) và trở lại Singapore . Hai khách/ một phòng (loại phòng Inside State Room/không có cửa sổ).- 01 đêm khách sạn 3 sao tại Singapore tiêu chuẩn 2 người/phòng - 2 giường đơn.</p>
              <p>- Xe đón tiễn và tham quan tại Singapore, tham quan Penang theo chương trình. Không bao gồm tham quan tại Phuket.</p>
              <p>- Phục vụ các bữa ăn, thức uống & giải trí tiêu chuẩn trên du thuyền.</p>
              <p>- Quà tặng của NKTravel (nón, ba lô, tag hành lý) & VAT.</p>
        </div>
        </div>
       </div>
       <div class="row" style="margin-top: 30px;">
           <div class="col-sm-9">
             <span style="font-weight: bold;font-size: 16px;">LỊCH TRÌNH TOUR</span><hr>
             {!! $tour[0]['Plan'] !!}
           </div>
           <div class="col-sm-3"></div>
       </div>
       <div class="row" align="center" style="padding-top:7%; ">
        <div style="padding:0;margin:auto">
        <span style="font-size: 30px;">Tour<b style="color: #007fff;font-size: 30px;"> liên quan</b>
        </span>
        <hr width="30%" style="margin-top: 2px;margin-bottom: 5px;">
        </div>
      </div>
       <div class="row">
          <div class="row1">
         @for($i=0;$i<=2;$i++)
            <div class="column1">
                <div class="content">
                  
                    <div class="img-hover-zoom img-hover-zoom--slowmo">
                      <a href="/NKTravel/public/detailtour/{{$all[rand(1,count($all)-1)]['IDTour']}}">
                  <img src="<?php echo $all[rand(1,count($all)-1)]['Image']?>" class="image1">
                </a>
                    </div>
                  <div style="padding:3px 5px 10px 8px;">
                    <p><b><a href="#" style="color: black;text-decoration: none;"><?php echo $all[rand(1,count($all)-1)]['NameTour']?></a></b></p>
                    <p style="font-size: "></p>
                    <p><span style="color: #007fff;font-size: 20px;">{{number_format($all[rand(1,count($all)-1)]['Money'])}}đ</span><span style="float: right;"><img src="http://localhost/NKTravel/public/image/icon.png"> <img src="http://localhost/NKTravel/public/image/plane2.png"></span></p>
                    <p><img src="http://localhost/NKTravel/public/image/appointment.png" style="width: 5%"> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
                    <p><img src="http://localhost/NKTravel/public/image/calendar.png" style="width: 5%"> Thời gian
                    : <?php echo $all[rand(1,count($all)-1)]['Howlong']?></p>
                  </div>
                </div>
             </div>
         @endfor
          </div>
       </div>
      </form>
  </div>
  @include('footer')
  <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>
        <script>
          function formatNumber (num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}
          $(document).ready(function () {
            $('#amount1').change(function()
               {
                var tien=Number($('#adult').val());
                var so =Number($('#amount1').val());
                var sum=tien*so;
                 $('#sum1').val(sum);
                 var tong=Number($('#sum2').val())+Number($('#sum3').val())+sum;
                 $('#count').val(tong);
               });
               $('#amount2').change(function()
               {
                var tien=Number($('#child').val());
                var so =Number($('#amount2').val());
                var sum=tien*so;
                 $('#sum2').val(sum);
                 var tong1=Number($('#sum1').val())+Number($('#sum3').val())+sum;
                 $('#count').val(tong1);
               });
               $('#amount3').change(function()
               {
                var tien=Number($('#baby').val());
                var so =Number($('#amount3').val());
                var sum=tien*so;
                 $('#sum3').val(sum);
                 var tong=Number($('#sum1').val())+Number($('#sum2').val())+sum;
                 $('#count').val(tong);
               });
              
          });
        </script>
</body>
</html>