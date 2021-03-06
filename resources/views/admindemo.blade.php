<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <style>
        * {
  padding: 0;
  margin: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: 'Droid Sans', sans-serif;
  outline: none;
}
::-webkit-scrollbar {
  background: transparent;
  width: 5px;
  height: 5px;
}
::-webkit-scrollbar-thumb {
  background-color: #888;
}
::-webkit-scrollbar-thumb:hover {
  background-color: rgba(0, 0, 0, 0.3);
}
body {background-color: #2a2b3d}
#contents {
  position: relative;
  transition: .3s;
  margin-left: 290px;
  background-color: #2a2b3d;
}
.margin {
  margin-left: 0 !important;
}
/* Start side navigation bar  */

.side-nav {
  float: left;
  height: 100%;
  width: 290px;
  background-color: #252636;
  color: #CCC;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  transform: translateX(0);
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  transition: .3s;
  position: fixed;
  top: 0;
  left: 0;
  overflow: auto;
  z-index: 9999999
}
.side-nav .close-aside {
  position: absolute;
  top: 7px;
  right: 7px;
  cursor: pointer;
  color: #EEE;
}
.side-nav .heading {
  background-color: #252636;
  padding: 15px 15px 15px 30px;
  overflow: hidden;
  border-bottom: 1px solid #2a2b3c
}
.side-nav .heading > img {
  border-radius: 50%;
  float: left;
  width: 28%;
}
.side-nav .info {
  float: left;
  width: 69%;
  margin-left: 3%;
}
.side-nav .heading .info > h3 {margin: 0 0 5px}
.side-nav .heading .info > h3 > a {
  color: #EEE;
  font-weight: 100;
  margin-top: 4px;
  display: block;
  text-decoration: none;
  font-size: 18px;
}
.side-nav .heading .info > h3 > a:hover {
  color: #FFF;
}
.side-nav .heading .info > p {
  color: #BBB;
  font-size: 13px;
}
/* End heading */

.side-nav .categories > li {
  padding: 17px 40px 17px 30px;
  overflow: hidden;
  border-bottom: 1px solid rgba(255, 255, 255, 0.02);
  cursor: pointer;
}
.side-nav .categories > li > a {
  color: #AAA;
  text-decoration: none;
}
/* Start num: there are three options primary, danger and success like Bootstrap */
.side-nav .categories > li > a > .num {
  line-height: 0;
  border-radius: 3px;
  font-size: 14px;
  color: #FFF;
  padding: 0px 5px
}
.dang {background-color: #f35959}
.prim {background-color: #0275d8}
.succ {background-color: #5cb85c}
/* End num */
.side-nav .categories > li > a:hover {
  color: #FFF
}
.side-nav .categories > li > i {
  font-size: 18px;
  margin-right: 5px
}
.side-nav .categories > li > a:after {
  content: "\f053";
  font-family: fontAwesome;
  font-size: 11px;
  line-height: 1.8;
  float: right;
  color: #AAA;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.side-nav .categories .opend > a:after {
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  transform: rotate(-90deg);
}
/* End categories */
/* Start dropdown menu */
.side-nav .categories .side-nav-dropdown {
  padding-top: 10px;
  padding-left: 30px;
  list-style: none;
  display: none;
}
.side-nav .categories .side-nav-dropdown > li > a {
  color: #AAA;
  text-decoration: none;
  padding: 7px 0;
  display: block;
}
.side-nav .categories p {
  margin-left: 30px;
  color: #535465;
  margin-top: 10px;
}

/* End dropdown menu */

.show-side-nav {
  -webkit-transform: translateX(-290px);
  -moz-transform: translateX(-290px);
  transform: translateX(-290px);
}


/* Start media query */
@media (max-width: 767px) {
  .side-nav .categories > li {
    padding-top: 12px;
    padding-bottom: 12px;
  }
  .side-nav .search {
    padding: 10px 0 10px 30px
  }
}

/* End side navigation bar  */
/* Start welcome */

.welcome {
  color: #CCC;
}
.welcome .content {
  background-color: #313348;
  padding: 15px;
  margin-top: 25px;
}
.welcome h2 {
  font-family: Calibri;
  font-weight: 100;
  margin-top: 0
}
.welcome p {
  color: #999;
}


/* Start statistics */
.statistics {
  margin-top: 25px;
  color: #CCC;
}
.statistics .box {
  background-color: #313348;
  padding: 15px;
  overflow: hidden;
}
.statistics .box > i {
  float: left;
  color: #FFF;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  line-height: 60px;
  font-size: 22px;
}
.statistics .box .info {
  float: left;
  width: auto;
  margin-left: 10px;
}
.statistics .box .info h3 {
  margin: 5px 0 5px;
  display: inline-block;
}
.statistics .box .info p {color:#BBB}

/* End statistics */
/* Start charts */
.charts {
  margin-top: 25px;
  color: #BBB
}
.charts .chart-container {
  background-color: #313348;
  padding: 15px;
}
.charts .chart-container h3 {
  margin: 0 0 10px;
  font-size: 17px;
}


/* Start statis */

.statis {
  color: #EEE;
  margin-top: 15px;
}
.statis .box {
  position: relative;
  padding: 15px;
  overflow: hidden;
  border-radius: 3px;
  margin-bottom: 25px;
}
.statis .box h3:after {
  content: "";
  height: 2px;
  width: 70%;
  margin: auto;
  background-color: rgba(255, 255, 255, 0.12);
  display: block;
  margin-top: 10px;
}
.statis .box i {
  position: absolute;
  height: 70px;
  width: 70px;
  font-size: 22px;
  padding: 15px;
  top: -25px;
  left: -25px;
  background-color: rgba(255, 255, 255, 0.15);
  line-height: 60px;
  text-align: right;
  border-radius: 50%;
}

/*chart*/
.chrt3 {
  padding-bottom: 50px;
}
.chrt3 .chart-container {
  height: 350px;
  padding: 15px;
  margin-top: 25px;
}
.chrt3 .box {
  padding: 15px;
}
.main-color {
  color: #ffc107
}
.warning {background-color: #f0ad4e}
.danger {background-color: #d9534f}
.success {background-color: #5cb85c}
.inf {background-color: #5bc0de}


.navbar-right .dropdown-menu {
  right: auto !important;
  left: 0 !important;
}
.navbar-default {
  background-color: #6f6486 !important;
  border: none !important;
  border-radius: 0 !important;
  margin: 0 !important
}
.navbar-default .navbar-nav>li>a {
  color: #EEE !important;
  line-height: 55px !important;
  padding: 0 10px !important;
}
.navbar-default .navbar-brand {color:#FFF !important}
.navbar-default .navbar-nav>li>a:focus,
.navbar-default .navbar-nav>li>a:hover {color: #EEE !important}

.navbar-default .navbar-nav>.open>a,
.navbar-default .navbar-nav>.open>a:focus,
.navbar-default .navbar-nav>.open>a:hover {background-color: transparent !important; color: #FFF !important}

.navbar-default .navbar-brand {line-height: 55px !important; padding: 0 !important}
.navbar-default .navbar-brand:focus,
.navbar-default .navbar-brand:hover {color: #FFF !important}
.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {margin: 0 !important}
@media (max-width: 767px) {
  .navbar>.container-fluid .navbar-brand {
    margin-left: 15px !important;
  }
  .navbar-default .navbar-nav>li>a {
    padding-left: 0 !important;
  }
  .navbar-nav {
    margin: 0 !important;
  }
  .navbar-default .navbar-collapse,
  .navbar-default .navbar-form {
    border: none !important;
  }

}

.navbar-default .navbar-nav>li>a {
  float: left !important;
}
.navbar-default .navbar-nav>li>a>span:not(.caret) {
  background-color: #e74c3c !important;
  border-radius: 50% !important;
  height: 25px !important;
  width: 25px !important;
  padding: 2px !important;
  font-size: 11px !important;
  position: relative !important;
  top: -10px !important;
  right: 5px !important
}
.dropdown-menu>li>a {
  padding-top: 5px !important;
  padding-right: 5px !important;
}
.navbar-default .navbar-nav>li>a>i {
  font-size: 18px !important;
}




/* Start media query */

@media (max-width: 767px) {
  #contents {
    margin: 0 !important
  }
  .statistics .box {
    margin-bottom: 25px !important;
  }
  .navbar-default .navbar-nav .open .dropdown-menu>li>a {
    color: #CCC !important
  }
  .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
    color: #FFF !important
  }
  .navbar-default .navbar-toggle{
    border:none !important;
    color: #EEE !important;
    font-size: 18px !important;
  }
  .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {background-color: transparent !important}
}
#p{
	width: 7px;
	height: 7px;
	background: #00ff00;
	-moz-border-radius: 25px;
	-webkit-border-radius: 25px;
	--border-radius: 25px;
	border-radius: 25px;
    color:inherit;
    white-space: nowrap;
    float: left;
    margin-top: 6px;
   margin-right: 5px;
}
.image{
    width: 15px;
    height: 15px;
    margin-right: 10px;
            }
    </style>
  </head>
  <body>
    <aside class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        <img src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance" alt="">
        <div class="info">
          <h3><a href="#"> Administrator</a></h3>
          <span style=" white-space: nowrap;"><div id="p"></div> Online</span>
        </div>
      </div>
      <ul class="categories">
      <li><img src="http://localhost/NKTravel/public/image/chart.png" class="image"><a href="{{route('admindemo')}}"> Biểu đồ</a>
        </li>
      <li><img src="http://localhost/NKTravel/public/image/order.png" class="image"><a href="{{route('totaltouradmin')}}"> Quản lí tour</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Tour trong nước</a></li>
            <li><a href="#">Tour nước ngoài</a></li>
          </ul>
        </li>
        <li><img src="http://localhost/NKTravel/public/image/book.png" class="image"><a href="{{route('totalbilladmin')}}"> Đơn hàng</a>
        </li>
        <li><img src="http://localhost/NKTravel/public/image/manager.png" class="image"><a href="{{route('customeradmin')}}"> Khách hàng</a>
        </li>
        <li><img src="http://localhost/NKTravel/public/image/copywriting-24.png" class="image"><a href="{{route('totalarticle')}}"> Bài viết du lịch</a>
        </li>
        <li><img src="http://localhost/NKTravel/public/image/edit-24.png" class="image"><a href="#"> Cài đặt</a>
        </li>
        <li><img src="http://localhost/NKTravel/public/image/plus-3-24.png" class="image"><a href="#"> Ứng dụng</a>
        </li>
    </aside>
    <section id="contents">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="{{route('message')}}"><i class="fa fa-user-o fw"></i> Tin nhắn</a></li>
                  <li><a href="#"><i class="fa fa-envelope-o fw"></i> Thông báo</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                </ul>
              </li>
            <li><a href="{{route('message')}}"><i class="fa fa-comments"></i><span>{{count($contact)}}</span></a></li>
              <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li>
              <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn" style="margin-top: 7px;"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="welcome">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="content">
                <h2>Biểu đồ doanh thu</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class='statis text-center'>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
                  <div class="box bg-primary">
                    <i class="fa fa-eye"></i>
                    <h3>5,154</h3>
                    <p class="lead">Lượt xem</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="box danger">
                    <i class="fa fa-user-o"></i>
                  <h3>{{count($tp)}}</h3>
                    <p class="lead">Người đăng ký</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="box warning">
                    <i class="fa fa-shopping-cart"></i>
                    <h3>{{count($tt)}}</h3>
                    <p class="lead">Tour</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="box success">
                    <i class="fa fa-handshake-o"></i>
                    <h3>{{count($tb)}}</h3>
                    <p class="lead">Số tour đã chạy</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
      <section class="charts">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="chart-container">
                <h3>Chart</h3>
                <canvas id="myChart"></canvas>
              </div>
            </div>
            <div class="col-md-6">
              <div class="chart-container">
                <h3>Chart2</h3>
                <canvas id="myChart2"></canvas>
              </div>
            </div>
          </div>
        </div>
      </section>
     
        <section class="chrt3">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-9">
                <div class="chart-container">
                  <canvas id="chart3" width="100%"></canvas>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box">
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <script src='http://code.jquery.com/jquery-latest.js'></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
      <script src='js/main.js'></script>
      </body>
   <script>
            /*global $, console*/
/*
  By Mostafa Omar
	https://www.facebook.com/MostafaOmarIbrahiem
*/
$(function () {

'use strict';

(function () {

  var aside = $('.side-nav'),

      showAsideBtn = $('.show-side-btn'),

      contents = $('#contents');

  showAsideBtn.on("click", function () {

    $("#" + $(this).data('show')).toggleClass('show-side-nav');

    contents.toggleClass('margin');

  });

  if ($(window).width() <= 767) {

    aside.addClass('show-side-nav');

  }
  $(window).on('resize', function () {

    if ($(window).width() > 767) {

      aside.removeClass('show-side-nav');

    }

  });

  // dropdown menu in the side nav
  var slideNavDropdown = $('.side-nav-dropdown');

  $('.side-nav .categories li').on('click', function () {

    $(this).toggleClass('opend').siblings().removeClass('opend');

    if ($(this).hasClass('opend')) {

      $(this).find('.side-nav-dropdown').slideToggle('fast');

      $(this).siblings().find('.side-nav-dropdown').slideUp('fast');

    } else {

      $(this).find('.side-nav-dropdown').slideUp('fast');

    }

  });

  $('.side-nav .close-aside').on('click', function () {

    $('#' + $(this).data('close')).addClass('show-side-nav');

    contents.removeClass('margin');

  });

}());

// Start chart

var chart = document.getElementById('myChart');
Chart.defaults.global.animation.duration = 2000; // Animation duration
Chart.defaults.global.title.display = false; // Remove title
Chart.defaults.global.title.text = "Chart"; // Title
Chart.defaults.global.title.position = 'bottom'; // Title position
Chart.defaults.global.defaultFontColor = '#999'; // Font color
Chart.defaults.global.defaultFontSize = 10; // Font size for every label

// Chart.defaults.global.tooltips.backgroundColor = '#FFF'; // Tooltips background color
Chart.defaults.global.tooltips.borderColor = 'white'; // Tooltips border color
Chart.defaults.global.legend.labels.padding = 0;
Chart.defaults.scale.ticks.beginAtZero = true;
Chart.defaults.scale.gridLines.zeroLineColor = 'rgba(255, 255, 255, 0.1)';
Chart.defaults.scale.gridLines.color = 'rgba(255, 255, 255, 0.02)';

Chart.defaults.global.legend.display = false;

var myChart = new Chart(chart, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", 'Jul'],
    datasets: [{
      label: "Lost",
      fill: false,
      lineTension: 0,
      data: [45, 25, 40, 20, 45, 20],
      pointBorderColor: "#4bc0c0",
      borderColor: '#4bc0c0',
      borderWidth: 2,
      showLine: true,
    }, {
      label: "Succes",
      fill: false,
      lineTension: 0,
      startAngle: 2,
      data: [20, 40, 20, 45, 25, 60],
      // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
      backgroundColor: "transparent",
      pointBorderColor: "#ff6384",
      borderColor: '#ff6384',
      borderWidth: 2,
      showLine: true,
    }]
  },
});
//  Chart ( 2 )


var Chart2 = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(Chart2, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", 'test', 'test', 'test', 'test'],
    datasets: [{
      label: "My First dataset",
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 79, 116)',
      borderWidth: 2,
      pointBorderColor: false,
      data: [5, 10, 5, 8, 20, 30, 20, 10],
      fill: false,
      lineTension: .4,
    }, {
      label: "Month",
      fill: false,
      lineTension: .4,
      startAngle: 2,
      data: [20, 14, 20, 25, 10, 15, 25, 10],
      // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
      backgroundColor: "transparent",
      pointBorderColor: "#4bc0c0",
      borderColor: '#4bc0c0',
      borderWidth: 2,
      showLine: true,
    }, {
      label: "Month",
      fill: false,
      lineTension: .4,
      startAngle: 2,
      data: [40, 20, 5, 10, 30, 15, 15, 10],
      // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
      backgroundColor: "transparent",
      pointBorderColor: "#ffcd56",
      borderColor: '#ffcd56',
      borderWidth: 2,
      showLine: true,
    }]
  },

  // Configuration options
  options: {
    title: {
      display: false
    }
  }
});


console.log(Chart.defaults.global);

var chart = document.getElementById('chart3');
var myChart = new Chart(chart, {
  type: 'line',
  data: {
    labels: ["One", "Two", "Three", "Four", "Five", 'Six', "Seven", "Eight"],
    datasets: [{
      label: "Lost",
      fill: false,
      lineTension: .5,
      pointBorderColor: "transparent",
      pointColor: "white",
      borderColor: '#d9534f',
      borderWidth: 0,
      showLine: true,
      data: [0, 40, 10, 30, 10, 20, 15, 20],
      pointBackgroundColor: 'transparent',
    },{
      label: "Lost",
      fill: false,
      lineTension: .5,
      pointColor: "white",
      borderColor: '#5cb85c',
      borderWidth: 0,
      showLine: true,
      data: [40, 0, 20, 10, 25, 15, 30, 0],
      pointBackgroundColor: 'transparent',
    },
               {
                 label: "Lost",
                 fill: false,
                 lineTension: .5,
                 pointColor: "white",
                 borderColor: '#f0ad4e',
                 borderWidth: 0,
                 showLine: true,
                 data: [10, 40, 20, 5, 35, 15, 35, 0],
                 pointBackgroundColor: 'transparent',
               },
               {
                 label: "Lost",
                 fill: false,
                 lineTension: .5,
                 pointColor: "white",
                 borderColor: '#337ab7',
                 borderWidth: 0,
                 showLine: true,
                 data: [0, 30, 10, 25, 10, 40, 20, 0],
                 pointBackgroundColor: 'transparent',
               }]
  },
});

});
   </script>
    </html>
