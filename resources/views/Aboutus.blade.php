<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    <title>Về chúng tôi</title>
</head>
<body>
    @include('menubar2')
    <div class="container" style="margin-top:20px;">
        <div class="col-xs-12" >
            <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">					
              <li class="home">
              <a itemprop="url" href="{{route('homepage')}}" style="color:black;text-decoration: none"><span itemprop="title">Trang chủ</span></a>						
                <span ><i class="fa fa-angle-double-right"></i></span>
              </li> 
              <li><strong><span>Giới thiệu</span></strong></li> 
            </ul>
          </div>
        <p><h1 style="font-family: 'Anton';margin-top:30px;">Giới thiệu</h1></p>
        <p style="font-size: 15px;"><i><b>Kính gửi quý khách hàng !</b></i></p>
        <p style="font-size: 15px;">Trước hết NKTravel  xin gửi lời chào trân trọng và lời cảm ơn tới quý khách hàng gần xa đã ghé thăm Website, sử dụng dịch vụ du lịch của chúng tôi trong suốt thời gian qua.</p>
        <p style="font-size: 15px;">Để có được thành công, uy tín và chỗ đứng trên thị trường như hiện nay là nhờ sự cố gắng không ngừng nghỉ của toàn thể CBNV Trung Tâm, chúng tôi đã đồng sức đồng lòng để xây dựng các sản phẩm tour du lịch phù hợp với khách hàng, thiết lập mối quan hệ chặt chẽ với các nhà cung cấp như khách sạn, vé máy bay, … để mang đến cho quý khách những dịch vụ tốt nhất với giá rẻ nhất.</p>
        <p style="font-size: 15px;">Với chúng tôi, <b>DU LỊCH</b> không chỉ là để nghỉ ngơi thư giãn mà còn là dịp để kết nối các mối quan hệ với nhau, tăng cường sự đoàn kết của đồng nghiệp, gia đình gắn bó, bạn bè thấu hiểu.</p>
        <p style="font-size: 15px;">Công ty bạn đang kinh doanh rất tốt, nhưng bạn muốn xây dựng một tổ chức có văn hóa riêng đoàn kết, gắn bó. Hãy gọi cho chúng tôi ngay để được tư vấn.</p>
        <p style="font-size: 15px;">Bạn đang trong guồng quay của công việc, cuộc sống, không có nhiều thời gian chăm sóc cho gia đình, bạn muốn bù đăp cho những người thân yêu bằng 1 kỳ nghỉ ngắn, một buổi đi chơi xa, đừng ngần ngại, hãy gọi cho chúng tôi.</p>
        <p style="font-size: 15px;">Với nhiều năm kinh nghiệm và đội ngũ  nhân viên năng động, nhiệt tình NKTravel sẽ luôn là một người bạn đồng hàng đáng tin cậy cho quý khách.</p>
    </div>
    @include('footer')
</body>
</html>