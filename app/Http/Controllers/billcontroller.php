<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\tour;
use App\customer;
use App\articlepage;
use App\contact;
use App\comment;
use App\district;
use App\city;
use App\town;
use App\bill;
use App\detailbill;
use Session;

class billcontroller extends Controller
{
    public function createbill(Request $request)
    {
        $id=$request['id'];
        $adult=$request['amount1'];
        $young=$request['amount2'];
        $baby=$request['amount3'];
        $tour=tour::where('IDTour','=',$id)->get();
        $province=city::all();
        $user=Auth::User();        
        return view('bill',['city'=>$province,'tour'=>$tour,'adult'=>$adult,'young'=>$young,'baby'=>$baby,'user'=>$user]);
    }
    public function city(Request $request)
    {
        $code=$request['number'];
        $town=district::where('matp','=',$code)->get();
        echo $town;
    }
    public function savebill(Request $request)
    {
        $check=bill::where('IDTour','=',$request->id)->value('IDBill');
        if($check=='')
        {
          $tour=tour::where('IDTour','=',$request->id)->get();  
        $bill =new bill(); 
        $bill->IDTour=$request->id;
        $bill->Day=$request->date;
        $bill->NameTour=$tour[0]['NameTour'];
        $bill->Image=$tour[0]['Image'];
        $bill->save();
        
        $detailbill= new detailbill();
        $idbill=bill::where('IDTour','=',$request->id)->value('IDBill');
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $note=$request->note;
        if($note==null)
        {
            $note=" ";
        }
        $address=$request->address;
        $town=$request->district;
        $city=$request->province;
        $town1=district::where('maqh','=',$town)->value('name');
        $city1=city::where('matp','=',$city)->value('name');
        $dc=$address.",".$town1.",".$city1;
        $adult=$request->a;
        $young=$request->b;
        $baby=$request->c;
        $total=$request->total;
        $detailbill->IDBill=$idbill;
        $detailbill->NameCustomer=$name;
        $detailbill->Email=$email;
        $detailbill->Phone=$phone;
        $detailbill->Address=$dc;
        $detailbill->Adult=$adult;
        $detailbill->Young=$young;
        $detailbill->Baby=$baby;
        $detailbill->Total=$total;
        $detailbill->Note=$note;
        $detailbill->Status='Đang chuẩn bị';
        $detailbill->TotalMoney=$total;
        $detailbill->save();
        return redirect()->route('cart');       
        }
        else{
            $detailbill= new detailbill();
            $idbill=bill::where('IDTour','=',$request->id)->value('IDBill');
            $name=$request->name;
            $email=$request->email;
            $phone=$request->phone;
            $note=$request->note;
            if($note==null)
        {
            $note=" ";
        }
            $address=$request->address;
            $town=$request->district;
            $city=$request->province;
            $town1=district::where('maqh','=',$town)->value('name');
            $city1=city::where('matp','=',$city)->value('name');
            $dc=$address.",".$town1.",".$city1;
            $adult=$request->a;
            $young=$request->b;
            $baby=$request->c;
            $total=$request->total;
            $detailbill->IDBill=$idbill;
            $detailbill->NameCustomer=$name;
            $detailbill->Email=$email;
            $detailbill->Phone=$phone;
            $detailbill->Address=$dc;
            $detailbill->Adult=$adult;
            $detailbill->Young=$young;
            $detailbill->Baby=$baby;
            $detailbill->TotalMoney=$total;
            $detailbill->Note=$note;
            $detailbill->Status='Đang chuẩn bị';
            $detailbill->save();
            return redirect()->route('cart');
        }
        
    }
    public function cart()
    {   $user=Session::get('user_name');
        $tour_booked=detailbill::where('NameCustomer','=',$user[0]['NameCustomer'])->get();
        if(count($tour_booked)!=0)
        {
            $detailtour=tour::where('IDTour','=',$tour_booked[0]->bill()->first()->IDTour)->get();
            return view('cart',['booked'=>$tour_booked,'detailtour'=>$detailtour]);
        }
        else{
           return view('cart');
        }
    }
    public function deletetour(Request $request)
    {
        $idbill=$request['id'];
        $name=$request['ten'];
        $bill=detailbill::where('IDBill','=',$idbill)->where('NameCustomer','=',$name);
        $bill->delete();
    }

}
