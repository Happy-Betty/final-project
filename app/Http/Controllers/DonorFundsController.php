<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonorModel;
use Illuminate\Support\Facades\DB;

class DonorFundsController extends Controller
{
    //
    protected function  extract_month($array_month, $number){
        foreach($array_month as $months=>$value){
            if((int)$value=== (int)$number)
            return $months;
        }
        return 'January';
     }
     protected function check_amount($firstamount, $secondamount){
         if((int)$firstamount < (int)$secondamount){
             return False;
         }
         else{
             return True;
         }
     }
    public function index(){
        return view('auth.register_funds');
    }
    public function store(Request $request){
        $this->validate($request,
        ['amount'=>'required',
        'month'=>'required',
        'donorName'=>'required'
        ]
    );
    $array_of_months = ['January'=>'1', 'February'=>'2', 'March'=>'3', 'April'=>'4',
    'May'=>'5', 'June'=>'6', 'July'=>'7', 'August'=>'8', 
    'September'=>'9', 'October'=>'10', 'November'=>'11', 'December'=>'12'];
   
    $expode = explode("-", $request->month, 2)[0];
    //echo $this->extract_month($array_of_months, $expode);
    //check moeny exceeds
    if($this->check_amount((int)$request->amount,  (int)50000000)){
        DB::insert('insert into funds (donorName, Amount, Month) 
        values (?, ?, ?)', [$request->donorName, $request->amount,
        $this->extract_month($array_of_months, $expode)]);
        return redirect("/donorlist");
    }
    
    else{
      
      return back()->with("status", 'shs '.number_format($request->amount,2). ' is less');
    }
    
    }
}

