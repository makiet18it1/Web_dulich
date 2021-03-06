<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alice' rel='stylesheet'>
    <style>
          *{
            font-size: 15px;
        }
         .navbar .nav-item:not(:last-child) {
  margin-right: 35px;
}

.dropdown-toggle::after {
   transition: transform 0.15s linear; 
}

.show.dropdown .dropdown-toggle::after {
  transform: translateY(3px);
}

.dropdown-menu {
  margin-top: 0;
}
.dropdown-menu a{
  border-bottom:  0.01mm solid #ccc;
  padding:9px 12px 9px 12px !important;
}
.navbar{
      margin-bottom: 0 !important;
       border: 0;
        font-size: 16px !important;
        color: black  !important; 
        width: 100%;
        padding-bottom: 0px !important;
        padding-top: 0px !important;
     }
     .navbar li a
     {
         font-size: 16px;
         color: #838383 !important;
     }
   .navbar li a, .navbar .navbar-brand { 
    padding-left: 30px;

  }
 .navbar .navbar-brand{
     padding-left: 120px;
     margin-right:60px;
     color:black !important;
  }
  .dropdown-menu  a:hover {
    background-color: #56aaff !important;
    font-weight: bold;
  } 
  .dropdown-menu li a{
    background-color: white !important;
    color: black !important;
   }
   .nav-item a:hover{
     background-color: inherit !important;
   }
   @media screen and (max-width :768px)
  {
       #row1{
        display: none;
       }
       .navbar .navbar-brand{
     padding-left: 0px;
     margin-right:0px;
  }
  #mySidenav{
    display: none;
  }
  select ,input[type=submit]{
     width: 100%;
     padding: 10px;
     margin: 3px !important;
  }
  }
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
  position: fixed;
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
 /*Đây là phần chính*/
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
.image1 {
  background-color:#000;
  display: inline-block;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  overflow: hidden;
  position: relative;
  text-align: center;
  width: 100%;
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" id="row1" style="background-color:#6bb2f9;padding:10px 40px 10px 90px;font-size:15px;">
            <div class="col-sm-6">
              <span style="margin-right:10px;"><img src="http://localhost/NKTravel/public/image/phone1.png" style="width:12px;"> <span style="color:white">0338253456</span></span>
              <span><img src="http://localhost/NKTravel/public/image/email1.png"> <span style="color:white">pvnam.18it1@sict.udn.vn</span></span>
          </div>
          <div class="col-sm-6" style="color:#e5e5e5;">
              @if(Session::get('user_name')!=null)
                 <?php
                 $user=Session::get('user_name');
                //  echo $user[0]['Name Customer'];
                 ?>
                 <span style="float:right"><span style="margin-right:10px;"><a href="{{route('cart')}}" style="color:white;text-decoration: none;"><img src="http://localhost/NKTravel/public/image/manager.png" style="width:16px;"> {{$user[0]['NameCustomer']}}</a></span>
                 <span><a href="{{url()->route('logout')}}" style="color:white;text-decoration: none;"><img src="http://localhost/NKTravel/public/image/login.png"> Đăng xuất</a></span></span>
              @else
              <span style="float:right"><span style="margin-right:10px;"><a href="{{route('login')}}" style="color:#white;text-decoration: none;"><img src="http://localhost/NKTravel/public/image/login.png"> Đăng nhập</a></span>
              <span><a href="{{route('register')}}" style="color:white;text-decoration: none;"><img src="http://localhost/NKTravel/public/image/adduser.png"> Đăng ký</a></span></span>
              @endif   
            </div>
          </div>
        <div class="row">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background-color:rgba(0,0,0,0) !important;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#" style="margin-bottom: 20px !important;">
                   <p style="font-family: 'Rock Salt';font-size: 30px;font-weight: bold">NKTravel</p>
                    </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" >
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav navbar">
                      <li class="nav-item">
                      <a class="nav-link" href="{{route('homepage')}}" style="color:white">Trang chủ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('aboutus')}}"  style="color:white">Giới thiệu</a>
                      </li>
              
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color:white">Tour trong nước</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                          <a class="dropdown-item" href="{{route('domestic')}}">Du lịch miền Bắc</a>
                          <a class="dropdown-item" href="{{route('domestic')}}">Du lịch Sapa</a>
                          <a class="dropdown-item" href="{{route('domestic')}}">Du lịch Hà Giang</a>
                          <a class="dropdown-item" href="{{route('domestic')}}">Du lịch Hạ Long</a>
                          <a class="dropdown-item" href="{{route('domestic')}}">Du lịch Mộc Châu</a>
                          <a class="dropdown-item" href="{{route('domestic')}}">Du lịch Miền Trung</a>
                          <a class="dropdown-item" href="{{route('domestic')}}">Du lịch Nha Trang</a>
                          <a class="dropdown-item" href="{{route('domestic')}}">Du lịch Đà Nẵng</a>
                          <a class="dropdown-item" href="{{route('domestic')}}">Du lịch Miền Nam</a>
                          <a class="dropdown-item" href="{{route('domestic')}}">Du lịch Miền Tây</a>
                          <a class="dropdown-item" href="{{route('domestic')}}">Du lịch Phú Quốc</a>
                          <a class="dropdown-item" href="{{route('domestic')}}">Du lịch Côn Đảo</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color:white">Tour nước ngoài</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch châu Á</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Thái Lan</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Trung Quốc</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Hàn Quốc</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Nhật Bản</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Singapore</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Châu Âu</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Anh</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Pháp</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Mỹ</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Canada</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Châu Úc</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Châu Phi</a>
                          <a class="dropdown-item" href="{{route('foreign')}}">Du lịch Châu Đại Dương</a>
                        </div>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="{{route('totalarticle1')}}"  style="color:white">Cẩm nang du lịch</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}"  style="color:white">Liên hệ</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>
</body>
</html>