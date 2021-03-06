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
    <title>Giỏ hàng</title>
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
   .image{
     width: 100px;
     height: 80px;
   }
     table tr td{
     text-align: center;
   }
   table tr th{
     text-align: center;
   }
   table{
     border-bottom: 0.3mm solid #ccc;
   }
    </style>
</head>
<body>
    <div class="container-fluid">
        @include('menubar2')
                <div class="col-xs-12 a-left">
                  <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">					
                    <li class="home">
                    <a itemprop="url" href="{{route('homepage')}}" style="color:black;text-decoration: none"><span itemprop="title">Trang chủ</span></a>						
                      <span ><i class="fa fa-angle-double-right"></i></span>
                    </li> 
                    <li><strong><span>Giỏ hàng</span></strong></li> 
                  </ul>
                </div>
    </div>
    <div class="container" style="margin-top: 20px;">
       @if(isset($booked))
         <div class="row">
           <div class="table-responsive">
             <table class="table">
                <tr>
                  <th>STT</th>
                <th>Tên tour</th>
                <th>Ảnh</th>
                <th>Ngày khởi hành<br><span style="font-size: 13px;font-weight: normal">(YY/MM/DD)</span></th>
                <th>Người lớn</th>
                <th>Trẻ em</th>
                <th>Em bé</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                </tr>
                <?php $i=1?>
                @foreach($booked as $value)
                <tr>
                <td>{{$i}}</td>
                <td>{{$value->bill()->first()->NameTour}}</td>
                  <td><img src="{{$value->bill()->first()->Image}}" class="image"></td>
                  <td>{{$value->bill()->first()->Day}}</td>
                  <td>{{$value->Adult}}</td>
                  <td>{{$value->Young}}</td>
                  <td>{{$value->Baby}}</td>
                  <td>{{$value->TotalMoney}} VNĐ</td>
                   <td>{{$value->Status}}</td>
                <td><button class="btn btn-danger" style="font-size: 15px;padding:5px 10px 5px 10px;" id="delete{{$i}}" onclick="DeleteTour(this.id,'{{$value->IDBill}}','{{$value->NameCustomer}}')">HỦY</button></td>
                  <?php $i++ ?>
                 </tr>
                @endforeach    
             </table>
            </div>
         </div>
         <p style="font-family: 'Andika';font-size: 20px;color:#007fff;font-weight: bold;vertical-align: bottom">Cảm ơn đã sử dụng dịch vụ của chúng tôi !!</p>
          @else
           <div class="row"><p style="font-size: 20px;font-weight: bold;">Bạn không có tour nào trong giỏ hàng cả  !!!!</p></div> 
         @endif

        </div>
    @include('footer')
</body>
<script>
    const $dropdown = $(".dropdown");
  const $dropdownToggle = $(".dropdown-toggle");
  const $dropdownMenu = $(".dropdown-menu");
  const showClass = "show";
  
  $(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
      $dropdown.hover(
        function() {
          const $this = $(this);
          $this.addClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "true");
          $this.find($dropdownMenu).addClass(showClass);
        },
        function() {
          const $this = $(this);
          $this.removeClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "false");
          $this.find($dropdownMenu).removeClass(showClass);
        }
      );
    } else {
      $dropdown.off("mouseenter mouseleave");
    }
  });
</script>
<script>
  $.ajaxSetup({
             headers:{
             	'X-CSRF-TOKEN':$('[name=csrf_token]').attr('content')
             }
		 });
  function DeleteTour(id,idbill,name)
  {
    $('#'+id).html('Đã hủy');
    event.preventDefault()
         $.ajax({
          url:'{{route('deletetour')}}',
          type:'post',
          data: {id:idbill,ten:name},
          success:function(kq){
              console.log(kq);
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
  }
</script>
</html>