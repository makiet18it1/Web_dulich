<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cẩm nang du lịch</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
      .navigation {
  width: 100%;
  border: 0.1mm solid #ccc;
}
.mainmenu, .submenu {
  list-style: none;
  padding: 0;
  margin: 0;
 
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
  border-radius: 5px;

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
.image1 {
  background-color:#000;
  display: inline-block;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  overflow: hidden;
  position: relative;
  text-align: center;
  width: 100%;
  transition-duration: 0.2s;
  height: 180px;
}
.p1{
    overflow: hidden; /* Ẩn số text bị thừa*/
    text-overflow: ellipsis;/*Cắt một đoạn text và thay thế bằng dấu ...*/
    line-height: 25px;
    -webkit-line-clamp: 1; /*Số dòng text hiển thị.*/
    height: 25px;
    font-size: 15px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    font-weight: bold;
 }
 .p2{
  overflow: hidden; /* Ẩn số text bị thừa*/
    text-overflow: ellipsis;/*Cắt một đoạn text và thay thế bằng dấu ...*/
    line-height: 28px;
    -webkit-line-clamp: 2; /*Số dòng text hiển thị.*/
    height: 60px;
    font-size: 15px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
 }
.p1:hover{
  color:#005fbf;
}
  </style>
</head>
<body>
   @include('menubar')
<div class="container">
   <div class="row" style="margin-top: 5%">
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
       </div>
       <div class="col-sm-9">
           <p style="font-size: 20px;font-weight: bold">Cẩm nang du lịch</p>
           <div class="row" style="margin-top: 5%">
            <div class="row1">
                 @foreach ($total as $values)
                 <div class="column1">
                  <div class="content">
                    <img src="{{$values->Image}}" class="image1">
                   <div style="padding:5px;">
                    <a href="http://localhost/NKTravel/public/detailarticle/{{$values->IDArticle}}" style="text-decoration: none;color:black"><p class="p1">{{$values->NameArticle}}</p></a>
                    <p class="p2">{{$values->Review}}</p>
                   </div>
                  </div>
               </div>
                 @endforeach      
            </div>
        </div>
        <div class="row" align="center">
          {!!$total->links()!!}
        </div>
       </div>
   </div>
@include('footer')
</div> 
</body>
</html>