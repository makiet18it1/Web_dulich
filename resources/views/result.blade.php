<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
  </style>
</head>
<body>
    @include('menubar2')
    <div class="container">
        <div class="row" style="margin-top: 30px;">
        <p style="font-size: 30px;font-weight: bold;">Kết quả tìm kiếm : {{$place}}</p>
        </div>
       @if(count($result)==0)
        <div class="row" style="margin:0;padding:auto">
              <h2>Không có kết quả nào !!</h2>
        </div>
       @else
       <div class="row">
        <div class="row1" style="margin-top:2%;" id="content">
          @foreach($result as $values)
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
    </div>
       @endif
    </div>
    @include('footer')
</body>
</html>