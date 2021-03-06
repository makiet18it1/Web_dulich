<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\tour;
use App\customer;
use App\articlepage;
use App\contact;
use App\comment;
use Session;

class home extends Controller
{
   public function homepage()
   {
        $tour=tour::all();
        $tour1=tour::where('classify','=',1)->orderBy('IDTour','desc')->take(3)->get()->toArray();
        $tour2=tour::where('classify','=',2)->orderBy('IDTour','desc')->take(3)->get()->toArray();
        $article=articlepage::all();
        return view('homepage',['domestic'=>$tour, 'domestic1'=>$tour1,'domestic2'=>$tour2,'article'=>$article]);
   }
    
   public function domestic()
   {
    $tour=tour::where('classify','=',1)->paginate(12);
        return view('domestic',['domestic'=>$tour]);
   }
   public function foreign()
   {
    $tour=tour::where('classify','=',2)->paginate(12);
        return view('foreign',['foreign'=>$tour]);
   }

   public function login(Request $request)
   {
    //    dd(strlen((bcrypt('12345'))));
      $user = $request['user'];
      $pass = $request['pass'];
      if(Auth::attempt(['name'=>$user,'password'=>$pass]))
      {  
         $customer=customer::where('name','=',$user)->get()->toArray();
         Session::put('user_name',$customer);
         return redirect()->route('homepage');
      }
      else if($user=='admin' && $pass=='admin'){
           Session::put('user_name','admin');
       return  redirect()->route('admindemo');}
      else{
          return view('login',['error'=>'Tài khoản hoặc mật khẩu không chính xác']);
      }

   }
   public function logout()
   {
      Session::forget('user_name');
      return redirect()->route('homepage');
   }
   public function register(Request $request)
    {
      $name=$request['name'];
      $email=$request['email'];
      $phone=$request['phone'];
      $add=$request['address'];
      $username=$request['user'];
      $pass=$request['pass'];
      $repass=$request['repass'];
      if($pass != $repass)
      return view('Register',['error'=>'Mật khẩu nhập lại không đúng']);
      else{
         $user=new customer();
         $user->Namecustomer=$name;
         $user->Email=$email;
         $user->Phone=$phone;
         $user->Address=$add;
         $user->name=$username;
         $user->password=bcrypt($pass);
         $user->save();
         return redirect()->route('homepage');
      }
        
   }
   public function admin()
   {
      $tour=tour::all();
      return view('admin',['all'=>$tour]);
   }
   public function addproduct(Request $request)
   {  
          $name=$request['name'];
          $departureday=$request['departureday'];
          $plan=$request['editor1'];
          $time=$request['time'];
          $empty=$request['empty']; 
          $type=$request['type'];
          $price=$request['price'];
          if($request->hasFile('image'))
          {
            $image=$request['image'];
            if($image->getClientOriginalExtension('myfile') =='jpg'|| $image->getClientOriginalExtension('myfile')=='png')
            {
               $imgname="http://localhost/NKTravel/public/image/".$image->getClientOriginalName('myfile');
               $image -> move('image',$imgname);
                $tour=new tour();
               $tour->NameTour=$name;
               $tour->DepartureDay=$departureday;
               $tour->Plan=$plan;
               $tour->Howlong=$time;
               $tour->Empty=$empty;
               $tour->Image=$imgname;
               $tour->Classify=$type;
               $tour->Money=$price;
               $tour->save();
               return view('Addproduct',['error'=>'<p style="color:red">Thêm thành công !!!!!</p>']);
            }
            else{
               return view('Addproduct',['error'=>'<p style="color:red">Đây không phải file ảnh</p>']);
            }
          }
          else{
            return view('Addproduct',['error'=>'<p style="color:red">Chưa có file ảnh nào</p>']);
          }
     
   }
   public function delete($id)
   {
      $tour = tour::where('IDTour','=',$id);
        $tour->delete();
       return redirect()->route('admin');
   }
   public function detail($id)
   {
         $tour=tour::where('IDTour','=',$id)->get()->toArray();
         return view('Detailtour',['tour'=>$tour]);
         
   }
   public function editproduct(Request $request)
   {
          $id=$request['id'];
          $name=$request['name'];
          $departureday=$request['departureday'];
          $plan=$request['editor1'];
          $time=$request['time'];
          $empty=$request['empty']; 
          $type=$request['type'];
          $price=$request['price'];
          if($request->hasFile('image'))
          {
            $image=$request['image'];
            if($image->getClientOriginalExtension('myfile') =='jpg'|| $image->getClientOriginalExtension('myfile')=='png')
            {
               $imgname="http://localhost/NKTravel/public/image/".$image->getClientOriginalName('myfile');
               $image -> move('image',$imgname);
               tour::where('IDTour','=',$id)->update(['NameTour'=>$name,'DepartureDay'=>$departureday,'Plan'=>$plan,'Howlong'=>$time,'Empty'=>$empty,'Image'=>$imgname,'Classify'=>$type,'Money'=>$price]);
            }
            else{
               return view('Detailtour',['error'=>'<p style="color:red">Đây không phải file ảnh</p>']);
            }
          }
          else{
            tour::where('IDTour','=',$id)->update(['NameTour'=>$name,'DepartureDay'=>$departureday,'Plan'=>$plan,'Howlong'=>$time,'Empty'=>$empty,'Classify'=>$type,'Money'=>$price]);
            return redirect()->route('admindemo');
         }

          
   }
   public function detail1($id)
   {  
      $detail=tour::where('IDTour','=',$id)->get();
      $all=tour::all();
      return view('detailview',['tour'=>$detail,'all'=>$all]);
   }
   public function totalarticle()
   {
      $article=articlepage::where('IDArticle','!=','0')->paginate(6);
      return view('totalarticle',['total'=>$article]);
   }
   public function detailarticle($id)
   {  $totel=articlepage::all();
      $article=articlepage::where('IDArticle','=',$id)->get();
      $customer1=Auth::user();
      $comment=comment::where('IDArticle','=',$id)->get();
      return view('detailarticle',['ID'=>$article,'all'=>$totel,'customer'=>$customer1,'comment'=>$comment]);
   }
   public function TotalArticleAdmin()
   {
      $all=articlepage::all();
      return view('TotalArticleAdmin',['all'=>$all]);
   }
   public function xulilienhe(Request $request)
   {
      $newcontact = new contact();
      $newcontact->Name=$request->ten;
      $newcontact->Email=$request->email1;
      $newcontact->Content=$request->nd;
      $newcontact->save();
   }
   public function xulicomment(Request $request){
      $newcomment =new comment();
      $newcomment->IDArticle=$request->id;
      $newcomment->Who=$request->ten;
      $newcomment->Email=$request->email1;
      $newcomment->Content=$request->nd;
      $newcomment->Date=$request->date;
       $newcomment->save();
   }
   public function filterfoiegn(Request $request)
   {  
      $money=$request['tien'];
      $chau=$request['chau'];
      if($chau=='0' && $money=='0')
      {
         $tour=tour::where('Classify','=','2')->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money=='0' && $chau !='0')
      {
         $tour=tour::where('continents','=',$chau)->get();
         for($i=0;$i<=count($tour)-1;$i++)
         { 
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money!='0' && $chau =='0')
      {
      if($money==1)
      {
         $tour=tour::where('Money','<','500000')->where('Classify','=','2')->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==2)
      {
         $tour=tour::whereBetween('Money',['500000','2000000'])->where('Classify','=','2')->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==3)
      {
         $tour=tour::whereBetween('Money',['2000000','5000000'])->where('Classify','=','2')->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==4)
      {
         $tour=tour::whereBetween('Money',['5000000','10000000'])->where('Classify','=','2')->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==5)
      {
         $tour=tour::where('Money','>','10000000')->where('Classify','=','2')->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
   }
   else if($money!='0' && $chau !='0')
   {
      if($money==1)
      {
         $tour=tour::where('Money','<','500000')->where('Classify','=','2')->where('continents','=',$chau)->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==2)
      {
         $tour=tour::whereBetween('Money',['500000','2000000'])->where('Classify','=','2')->where('continents','=',$chau)->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==3)
      {
         $tour=tour::whereBetween('Money',['2000000','5000000'])->where('Classify','=','2')->where('continents','=',$chau)->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==4)
      {
         $tour=tour::whereBetween('Money',['5000000','10000000'])->where('Classify','=','2')->where('continents','=',$chau)->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==5)
      {
         $tour=tour::where('Money','>','10000000')->where('Classify','=','2')->where('continents','=',$chau)->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      
   } 
 }
      public function filterdomestic(Request $request)
      {
         $money=$request['tien'];
         $area=$request['khuvuc'];
         if($money=='0' && $area=='0')
         {
          $tour=tour::where('Classify','=','1')->get();
          for($i=0;$i<=count($tour)-1;$i++)
          {
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
          }
         }
         else if($money=='0' && $area !='0')
         {
            $tour=tour::where('Classify','=','1')->where('Area','=',$area)->get();
          for($i=0;$i<=count($tour)-1;$i++)
          {
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
          }
         } 
         else if($money!='0' && $area=='0')
         {
            if($money==1)
            {
         $tour=tour::where('Money','<','500000')->where('Classify','=','1')->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==2)
      {
         $tour=tour::whereBetween('Money',['500000','2000000'])->where('Classify','=','1')->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==3)
      {
         $tour=tour::whereBetween('Money',['2000000','5000000'])->where('Classify','=','1')->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==4)
      {
         $tour=tour::whereBetween('Money',['5000000','10000000'])->where('Classify','=','1')->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==5)
      {
         $tour=tour::where('Money','>','10000000')->where('Classify','=','1')->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
           }
         }

         else if($money!='0' && $area !='0')
         {
            if($money==1)
            {
         $tour=tour::where('Money','<','500000')->where('Classify','=','1')->where('Area','=',$area)->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==2)
      {
         $tour=tour::whereBetween('Money',['500000','2000000'])->where('Classify','=','1')->where('Area','=',$area)->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==3)
      {
         $tour=tour::whereBetween('Money',['2000000','5000000'])->where('Classify','=','1')->where('Area','=',$area)->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==4)
      {
         $tour=tour::whereBetween('Money',['5000000','10000000'])->where('Classify','=','1')->where('Area','=',$area)->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
      }
      else if($money==5)
      {
         $tour=tour::where('Money','>','10000000')->where('Classify','=','1')->where('Area','=',$area)->get();
         for($i=0;$i<=count($tour)-1;$i++)
         {
            // echo $tour[$i]['NameTour'];
            echo "<div class='column1'>";
            echo "<div class='content'>";
            echo "<div class='img-hover-zoom img-hover-zoom--slowmo'>
            <img src='".$tour[$i]['Image']."' class='image1'>
            </div>";
             echo "<div style='padding:3px 5px 10px 8px;'>
             <p><b><a href='#' style='color: black;text-decoration: none;'>".$tour[$i]['NameTour']."</a></b></p>
             <p style='font-size:'></p>
             <p><span style='color: #007fff;font-size: 20px;'>".number_format($tour[$i]['Money'])."đ</span><span style='float: right;'><img src='http://localhost/NKTravel/public/image/icon.png'> <img src='http://localhost/NKTravel/public/image/plane2.png'></span></p>
             <p><img src='http://localhost/NKTravel/public/image/appointment.png' style='width: 5%'> Khởi hành: Thứ 2 - Thứ 7 hàng tuần</p>
             <p><img src='http://localhost/NKTravel/public/image/calendar.png' style='width: 5%'> Thời gian
             :".$tour[$i]['Howlong']."</p>
           </div>";
           echo "<p><a href='/NKTravel/public/detailtour/".$tour[$i]['IDTour']."'><button type='button'><b>Xem chi tiết</b></button></a></p>";
            echo "</div>";
            echo "</div>";
         }
           }   
         }        
   }
   public function findtour(Request $request)
   {
      $where =$request['type'];
      $place =$request['places'];
      if($where=='1')
      {
         $result=tour::where('Area','=',$place)->get();
      }
      else{
         $result=tour::where('continents','=',$place)->get();
      }
      return view('result',['place'=>$place,'result'=>$result]);
   }
}
