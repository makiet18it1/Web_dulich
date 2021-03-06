<!DOCTYPE html>
<html>
<head>
	<title>Tour nước ngoài</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <style>
   .row1,
.row1 > .column1 {
  padding: 0px;

}
/*đây*/
.column1 {
  float: left;
  width: 31%;
  margin-left: 2%;
  margin-top: 3%;
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
#sl select{
  padding:12px 15px 12px 10px;
  width: 100%;
  border-radius: 0px;
  font-size: 15px;
}
#sl option{
  font-size: 15px;
  color:#7f7f7f;
}
  </style>
</head>
<body>
@include('menubar')
<div class="container">
    <div class="row" style="padding-top:2%;" align='center'>
        <div style="padding:0;margin:auto">
         <span style="font-size: 25px;"> <b style="color: #007fff">Tour nước ngoài</b>
          <br>
         </span>
         <hr width="30%" style="margin-top: 2px;margin-bottom: 5px;background-color: lightblue;height: 3px;">
        </div>
      </div>
      <div class="row"><p style="font-size: 25px;margin-left: 3%;margin-top: 20px;"><b>Tìm kiếm tour</b></p></div>
      <div class="row" id="sl" style="margin-left: 1%;margin-top: 15px;">
             <div class="col-sm-3">
              <select name="continents" id="continents">
                 <option value="0" selected>Danh mục tour</option>
                 <option value="Châu Á">Châu Á</option>
                 <option value="Châu Mỹ">Châu Mỹ</option>
                 <option value="Châu Âu">Châu Âu</option>
                 <option value="Châu Phi">Châu Phi</option>
                 <option value="Châu Đại Dương">Châu Đại Dương</option>
              </select>
            </div>
            <div class="col-sm-3">
              <select name="money" id="money">
                <option value="0" selected>Theo giá</option>
                <option value="1"> Dưới 500.000 VNĐ</option>
                <option value="2"> Từ 500.000 - 2.000.000 VNĐ</option>
                <option value="3"> Từ 2.000.000 - 5.000.000 VNĐ</option>
                <option value="4"> Từ 5.000.000 - 10.000.000 VNĐ</option>
                <option value="5"> Trên 10.000.000 VNĐ</option>
              </select>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
            <hr style="width: 100%;">
      </div>
<div class="row" >
    <div class="row1" style="margin-top:1%;" id="content">
      @foreach($foreign as $values)
    <div class="column1">
       <div class="content">
          <div class="img-hover-zoom img-hover-zoom--slowmo">
            <a href="/NKTravel/public/detailtour/{{$values->IDTour}}">
         <img src="{{$values->Image}}" class="image1">
            </a>
          </div>
         <div style="padding:3px 5px 10px 8px;">
           <p><b><a href="#" style="color: black;text-decoration: none;">{{$values->NameTour}}</a></b></p>
           <p style="font-size: "></p>
           <p><span style="color: #007fff;font-size: 20px;">{{number_format($values->Money)}}đ</span><span style="float: right;"><img src="http://localhost/NKTravel/public/image/icon.png"> <img src="http://localhost/NKTravel/public/image/plane2.png"></span></p>
         <p><img src="http://localhost/NKTravel/public/image/appointment.png" style="width: 5%"> Khởi hành: {{$values->DepartureDay}}</p>
           <p><img src="http://localhost/NKTravel/public/image/calendar.png" style="width: 5%"> Thời gian
           :{{$values->Howlong}}</p>
         </div>
       </div>
    </div>
       @endforeach
       
    </div>
    <div style="margin:auto;padding:0;" align="center">
      {!!$foreign->links()!!}
      </div>
@include ('footer')
</div>
<script>
  $(document).ready(function()
  {
    $.ajaxSetup({
             headers:{
             	'X-CSRF-TOKEN':$('[name=csrf_token]').attr('content')
             }
		 });
    $('#money').on('change',function()
    {
       var money=$('#money').val();
       var continent=$('#continents').val();
       event.preventDefault()
       $.ajax({
          url:'{{route('filter')}}',
          type:'post',
          data: {tien:money,chau:continent},
          success:function(kq){
             $('#content').html(kq)
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
    $('#continents').on('change',function()
    {
       var money=$('#money').val();
       var continent=$('#continents').val();
       event.preventDefault()
       $.ajax({
          url:'{{route('filter')}}',
          type:'post',
          data: {tien:money,chau:continent},
          success:function(kq){
             $('#content').html(kq)
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