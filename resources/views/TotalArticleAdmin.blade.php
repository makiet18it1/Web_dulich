<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý bài viết</title>
    <style>
        table{
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="container-fluide">
        <div class="col-sm-2">
                @include('MenuleftAdmin')
        </div>
        <div class="col-sm-10" style="background-color: #e5e5e5;padding:30px 30px 30px 40px;">
                <button type="button" id="sidebarCollapse" class="btn btn-basic">
                        <i class="fas fa-align-justify"></i></button>
            <p><span style="font-size: 30px;"><b>Quản lý bài viết</span>
            <span style="float: right;font-size:16px;"><b>Xin chào Admin / <a href="http://localhost/NKTravel/public/login" style="font-size: 16px;float:right">Đăng xuất</a></b></span></p>
            <div style="padding:30px 30px 30px 40px;background-color:white;boder-radius:5px;">
            <div class="row">
                <input type="text" name="search" id="search" placeholder="Nhập thông tin tìm kiếm..." style="background-image: url(http://localhost/Store/Image/search2.png); background-repeat: no-repeat;background-position: 3px;background-size: 20px;padding:5px 50px 5px 25px; border: 1px solid #ccc;font-size:15px;">
                </div>   
                <div class="row">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Tên bài viết</th>
                            <th>Ảnh</th>
                            <th>Giới thiệu</th>
                            <th>Người viết</th>
                            <th>Chỉnh sửa</th>
                            <th>Xóa</th>
                        </thead>
                        <tbody id="body">
                            @foreach ($all as $values)
                                <tr>
                                  <td>{{$values->IDArticle}}</td>
                                  <td>{{$values->NameArticle}}</td>
                                  <td><img src="{{$values->Image}}" style="width: 70px;height: 50px;"></td>
                                  <td>{{$values->Review}}</td>
                                  <td>{{$values->Writer}}</td>
                                  <td><a href="#"><img src='http://localhost/studentmanager/Image/edit.png'></a></td>
                                  <td><a href="#"><img src='http://localhost/studentmanager/Image/recycle.png' ></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <p align="center"><a href="#" align="center"><input type="button" value="Thêm bài viết" class="btn btn-primary" style="padding:10px;font-size:13px;"></a></p>
            </div>  
        
        </div>
    </div>
</body>
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
</html>