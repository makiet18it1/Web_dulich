<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <style type="text/css">
       table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid;
  margin-top: 20px;
}

td {
  text-align: middle;
  padding: 5px;
  border: 1px solid;
  font-size:13px;
}
th{
  text-align: middle;
  padding: 5px;
  border: 1px solid;
  font-size:15px;
} 
  </style>
</head>
<body>
<div class='container-fluide'>
 <div class='col-sm-2'>
   @include('MenuleftAdmin');
 </div>
 <div class='col-sm-10' style="background-color: #e5e5e5;padding:30px 30px 30px 40px;">
 <button type="button" id="sidebarCollapse" class="btn btn-basic">
<i class="fas fa-align-justify"></i></button>
<p><span style="font-size: 30px;"><b>Quản lý tour</span>
 <span style="float: right;font-size:16px;"><b>Xin chào Admin / <a href="http://localhost/NKTravel/public/login" style="font-size: 16px;float:right">Đăng xuất</a></b></span></p>
 <div style="padding:30px 30px 30px 40px;background-color:white;boder-radius:5px;">
<div class="row">
<input type="text" name="search" id="search" placeholder="Nhập thông tin tìm kiếm..." style="background-image: url(http://localhost/Store/Image/search2.png); background-repeat: no-repeat;background-position: 3px;background-size: 20px;padding:5px 50px 5px 25px; border: 1px solid #ccc;font-size:15px;">
</div>
<div class="row">
  <table class="table">
    <thead>
     <tr>
        <th>ID Tour</th>
        <th>Tên tour</th>
        <th>Ngày khởi hành</th>
        <th>Thời gian</th>
        <th>Chỗ còn trống</th>
        <th>Giá</th>
        <th>Sửa</th>
        <th>Xóa</th>
     </tr>
    </thead>
    <tbody id="body">
      @foreach($all as $values)
         <tr>
             <td>{{$values->IDTour}}</td>
             <td>{{$values->NameTour}}</td>
             <td>{{$values->DepartureDay}}</td>
             <td>{{$values->Howlong}}</td>
             <td>{{$values->Empty}}</td>
             <td>{{number_format($values->Money,0)}} VNĐ</td>
             <td style='text-align: center';><a href="/NKTravel/public/detailtouradmin/{{$values->IDTour}}"><img src='http://localhost/studentmanager/Image/edit.png'></a></td>
            <td><a href="/NKTravel/public/deleteproduct/{{$values->IDTour}}"><img src='http://localhost/studentmanager/Image/recycle.png' ></a></td>
         </tr>
      @endforeach
    </tbody>
  </table>

</div>
<p align="center"><a href="{{route('addproduct')}}" align="center"><input type="button" value="Thêm tour" class="btn btn-primary" style="padding:10px;font-size:13px;"></a></p>
</div>
</div>
<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#body tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>