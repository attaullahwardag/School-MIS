<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeAmount;
use App\Models\FeeCatagory;
use App\Models\StudentClass;
class FeeAmountController extends Controller
{
    //
    public function ViewFeeAmount(){
        $data['allData'] = FeeAmount::all();
        return view('admin.setup.fee_catagory_amount.fee_amount_view', $data);
    }
    public function AddFeeAmount(){
        $data['fee_catagory'] = FeeCatagory::all();
        $data['fee_amount'] = FeeAmount::all();
        $data['student_class'] = StudentClass::all();
        return view('admin.setup.fee_catagory_amount.fee_amount_add',$data);
    }
    public function StoreFeeAmount(Request $request){
        dd($request);
    }
  
}
