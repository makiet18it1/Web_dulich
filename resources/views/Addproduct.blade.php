<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <title>Thêm tour</title>
    <style>
    		body {
  background: #b2b2b2;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  background-fill-mode: rgba(0,0,0,0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 120vh;
}
.container {
  background: white;
  padding: 30px 35px 30px 35px;
  width: 800px;
  height: auto;
  box-sizing: border-box;
  position: relative;

}
th, td {
  padding: 8px;
  vertical-align: top;
  font-size: 16px;
}
 table input[type=text]
{
	padding: 5px 10px 5px 5px;
}
    </style>
</head>
<body>
<div class="container">
<div class="row" align="center"><h3><b>THÊM TOUR</b></h3></div>
   <div class="row">
      <form method="post" action="{{url()->route('addproduct1')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
         <table>
            <tr>
                <th>Tên</th>
                <td>
                    <input type="text" name="name" size="50" required>
                </td>
            </tr>
            <tr>
                <th>Ngày khởi hành</th>
                <td>
                    <input type="date" name="departureday" size="50" required>
                </td>
            </tr>
            <tr>
                <th>Kế hoạch</th>
                <td>
                    <textarea name="editor1" required></textarea>
                </td>
            </tr>
            <tr>
                <th>Thời gian</th>
                <td>
                    <input type="text" name="time" size="50" required>
                </td>
            </tr>
            <tr>
                <th>Chỗ còn trống</th>
                <td>
                    <input type="text" name="empty" size="50" required>
                </td>
            </tr>
            <tr>
                <th>Ảnh</th>
                <td>
                    <input type="file" name="image" size="50" required>
                </td>
            </tr>
            <tr>
                <th>Giá</th>
                <td>
                    <input type="text" name="price" size="50" required>
                </td>
            </tr>
            <tr>
                <th>Loại</th>
                <td>
                    <select name="type">
                        <option>Loại</option>
                        <option value="1">1 (Trong nước)</option>
                        <option value="2">2 (Nước ngoài)</option>
                    </select>
                </td>
            </tr>
            <tr>
               <td colspan="2" align="center">
               <button type="submit" class="btn btn-primary">Thêm</button>
               </td>
            </tr>
             <?php
             if(isset($error))
               echo $error;
             ?>
         </table>
      </form>
   </div>
</div>
<script>
        CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>