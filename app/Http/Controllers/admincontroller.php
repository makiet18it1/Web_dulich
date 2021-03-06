<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\tour;
use App\customer;
use App\articlepage;
use App\comment;
use App\detailimage;
use App\bill;
use App\detailbill;
use App\money;
use App\contact;
use Carbon\Carbon;

class admincontroller extends Controller
{
    public function admin()
    { 
      $totalpp=customer::all();
      $totaltour=tour::all();
      $totalbill=bill::all();
      $contact=contact::all();
       
      return view('admindemo',['tp'=>$totalpp,'tt'=>$totaltour,'tb'=>$totalbill,'contact'=>$contact]);
    }
     public function totaltour()
     {
        $tour=tour::all();
        $totalpp=customer::all();
      $totaltour=tour::all();
      $totalbill=bill::all();
      $contact=contact::all();
       return view('totaltouradmin',['tour'=>$tour,'tp'=>$totalpp,'tt'=>$totaltour,'tb'=>$totalbill,'contact'=>$contact]);
     }
     public function delete($id)
     {
        $tour = tour::where('IDTour','=',$id);
          $tour->delete();
         return redirect()->route('admindemo');
     }
     public function addtouradmin(Request $request)
     {
      $name=$request['name'];
      $departureday=$request['departureday'];
      $plan=$request['editor1'];
      $time=$request['time'];
      $empty=$request['empty']; 
      $type=$request['where'];
      $price=$request['price'];
      if($request->hasFile('file'))
      {
        $image=$request['file'];
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
           $tour->Money=$price;
           if($type=='Trong nước')
           {
             $tour->Classify=1;
             $tour->Area=$request['place'];
           }
           else{
            $tour->Classify=2;
            $tour->continents=$request['place'];
           }
           $tour->save();
           return redirect()->route('totaltouradmin');
        }
        else{
          return view('adtour',['error'=>'Đây không phải file ảnh']);
        }
      }
      else{
        return view('addtour',['error'=>'Không có file ảnh']);
      }
     }
     public function deletetouradmin($id)
     {
        $tour = tour::where('IDTour','=',$id);
          $tour->delete();
         return redirect()->route('totaltouradmin');
     }
     public function customer()
     {
       $customer=customer::all();
       $contact=contact::all();
       return view('customeradmin',['customer'=>$customer,'contact'=>$contact]);
     }
     public function totalarticle()
     {  
       $totalarticle=articlepage::all();
       $contact=contact::all();
       return view('totalarticaladmin',['article'=>$totalarticle,'contact'=>$contact]);
     }
     public function detailarticle($id)
     {  
       $comments=comment::where('IDArticle',$id)->get();
       $detail=articlepage::where('IDArticle','=',$id)->get();
       $contact=contact::all();
       return view('detailarticleadmin',['detail'=>$detail,'comment'=>$comments,'contact'=>$contact]);
     }
     public function updatearticle(Request $request)
     { $id=$request['id'];
       $name=$request['name'];
       $description=$request['des'];
       $content=$request['editor1'];
       if($request->hasFile('image'))
       {
        $image=$request['image'];
        if($image->getClientOriginalExtension('myfile') =='jpg'|| $image->getClientOriginalExtension('myfile')=='png')
        {
          $imgname="http://localhost/NKTravel/public/image/".$image->getClientOriginalName('myfile');
          $image -> move('image',$imgname);
          articlepage::where('IDArticle','=',$id)->update(['NameArticle'=>$name,'Review'=>$description,'Image'=>$imgname,'Content'=>$content]);
          return redirect()->route('totalarticle');
        }
        else{
          return redirect()->route('totalarticle');
        }
       }
       else{
        articlepage::where('IDArticle','=',$id)->update(['NameArticle'=>$name,'Review'=>$description,'Content'=>$content]);
        return redirect()->route('totalarticle');
      }
     }
      public function deletearticle($id)
      {
        $article = articlepage::where('IDArticle','=',$id);
          $article->delete();
         return redirect()->route('totalarticle');
      }
      public function addtourinterface()
      {
        $contact=contact::all();
        return view('addtour',['contact'=>$contact]);
      }
      public function totalbilladmin()
      {
        $bill=bill::all();
        $contact=contact::all();
        return view('totalbilladmin',['bill'=>$bill,'contact'=>$contact]);
      }
      public function message()
      {
         $contact=contact::all();
        return view('messageadmin',['contact'=>$contact]);
      }
      public function detailbill($id)
      {
        $detailbill=detailbill::where('IDBill','=',$id)->get();
        $idbill=bill::where('IDBill','=',$id)->value('IDTour');
        $tour=tour::where('IDTour','=',$idbill)->get();
        $contact=contact::all();
        return view('detailbilladmin',['detail'=>$detailbill,'tour'=>$tour,'contact'=>$contact]);
      }
      public function detailtour($id)
      { 
        $tour=tour::where('IDTour','=',$id)->get();
        $image=detailimage::where('IDTour','=',$id)->get();
        $money=money::where('IDTour','=',$id)->get();
        return view('Detailtour',['tour'=>$tour,'image'=>$image,'money'=>$money]);
      }
      public function updatetour1(Request $request)
      {
        $idtour=$request['id'];
        $name=$request['name'];
        $day=$request['departureday'];
        $plan=$request['editor1'];
        $time=$request['time'];
        $em=$request['empty'];
        $pr=$request['price'];
        $type=$request['where'];
        $place=$request['place'];
        if($type=='Trong nước')
          {
            tour::where('IDTour','=',$idtour)->update(['NameTour'=>$name,'DepartureDay'=>$day,'Plan'=>$plan,'Howlong'=>$time,'Empty'=>$em,'Classify'=>'1','Money'=>$pr,'Area'=>$place]);
            return redirect()->route('totaltouradmin');
          }
           else{
            tour::where('IDTour','=',$idtour)->update(['NameTour'=>$name,'DepartureDay'=>$day,'Plan'=>$plan,'Howlong'=>$time,'Empty'=>$em,'Classify'=>'2','Money'=>$pr,'continents'=>$place]);
            return redirect()->route('totaltouradmin');
           }
        
      }
      public function updatetour2(Request $request)
      {
        $id=$request['id'];
        $a=$request['a'];
        $b=$request['b'];
        $c=$request['c'];
        
        $money=money::where('IDTour','=',$id)->get();
        $image=detailimage::where('IDTour','=',$id)->get();
        if(count($money)==0)
        {
            $money =new money();
            $money->IDTour=$id;
            $money->Adult=$a;
            $money->Child=$b;
            $money->Baby=$c;
            $money->save();
        }
        else{
          money::where('IDTour','=',$id)->update(['Adult'=>$a,'Child'=>$b,'Baby'=>$c]);
          // return redirect()->route('totaltouradmin');
        }
        if(count($image)==0)
        {
          $img1=$request['image1'];
          $img2=$request['image2'];
          $img3=$request['image3'];
          $img4=$request['image4'];
          if(($img1->getClientOriginalExtension('myfile') =='jpg' || $img1->getClientOriginalExtension('myfile') =='png') && ($img2->getClientOriginalExtension('myfile') =='jpg' || $img2->getClientOriginalExtension('myfile') =='png') && ($img3->getClientOriginalExtension('myfile') =='jpg' || $img3->getClientOriginalExtension('myfile') =='png') && ($img4->getClientOriginalExtension('myfile') =='jpg' || $img4->getClientOriginalExtension('myfile') =='png'))
          {
            
            $imgname="http://localhost/NKTravel/public/image/".$img1->getClientOriginalName('myfile');
               $img1 -> move('image',$imgname);
               $imgname2="http://localhost/NKTravel/public/image/".$img2->getClientOriginalName('myfile');
               $img2 -> move('image',$imgname2);
               $imgname3="http://localhost/NKTravel/public/image/".$img3->getClientOriginalName('myfile');
               $img3-> move('image',$imgname3);
               $imgname4="http://localhost/NKTravel/public/image/".$img4->getClientOriginalName('myfile');
               $img4-> move('image',$imgname4);
               $newimage = new detailimage();
               $newimage->IDTour=$id;
               $newimage->Img1=$imgname;
               $newimage->Img2=$imgname2;
               $newimage->Img3=$imgname3;
               $newimage->Img4=$imgname4;
               $newimage->save();
               return redirect()->route('totaltouradmin');
          }
          else{
            return redirect()->back()->withInput()->with('error','Có 1 file không phải ảnh !!');
          }
        }
        else{
           if($request->hasFile('image1'))
           { 
            $img1=$request['image1'];
            if($img1->getClientOriginalExtension('myfile') =='jpg'|| $img1->getClientOriginalExtension('myfile')=='png'){
              $imgname="http://localhost/NKTravel/public/image/".$img1->getClientOriginalName('myfile');
              $img1 -> move('image',$imgname);
              detailimage::where('IDTour','=',$id)->update(['Img1'=>$imgname]);
            }
           }
           if($request->hasFile('image2'))
           { 
            $img1=$request['image2'];
            if($img1->getClientOriginalExtension('myfile') =='jpg'|| $img1->getClientOriginalExtension('myfile')=='png'){
              $imgname="http://localhost/NKTravel/public/image/".$img1->getClientOriginalName('myfile');
              $img1 -> move('image',$imgname);
              detailimage::where('IDTour','=',$id)->update(['Img2'=>$imgname]);
            }
           }
           if($request->hasFile('image3'))
           { 
            $img1=$request['image3'];
            if($img1->getClientOriginalExtension('myfile') =='jpg'|| $img1->getClientOriginalExtension('myfile')=='png'){
              $imgname="http://localhost/NKTravel/public/image/".$img1->getClientOriginalName('myfile');
              $img1 -> move('image',$imgname);
              detailimage::where('IDTour','=',$id)->update(['Img3'=>$imgname]);
            }
           }
           if($request->hasFile('image4'))
           { 
            $img1=$request['image4'];
            if($img1->getClientOriginalExtension('myfile') =='jpg'|| $img1->getClientOriginalExtension('myfile')=='png'){
              $imgname="http://localhost/NKTravel/public/image/".$img1->getClientOriginalName('myfile');
              $img1 -> move('image',$imgname);
              detailimage::where('IDTour','=',$id)->update(['Img4'=>$imgname]);
            }
           }
           return redirect()->route('totaltouradmin');
        }
      }
}
