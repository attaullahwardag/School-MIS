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
        $data['allData'] = FeeAmount::select('fee_catagory_id')->groupBy('fee_catagory_id')->get();
        return view('admin.setup.fee_catagory_amount.fee_amount_view', $data);
    }
    public function AddFeeAmount(){
        $data['fee_catagory'] = FeeCatagory::all();
        $data['fee_amount'] = FeeAmount::all();
        $data['student_class'] = StudentClass::all();
        return view('admin.setup.fee_catagory_amount.fee_amount_add',$data);
    }
    public function StoreFeeAmount(Request $request){

        $countClass = count($request->class_id);
        if ($countClass != NULL){
            for($i=0; $i< $countClass; $i++){
                $fee_amount = new FeeAmount();
                $fee_amount->fee_catagory_id = $request->fee_catagory_id;
                $fee_amount->class_id = $request->class_id[$i];
                $fee_amount->amount = $request->amount[$i];
                $fee_amount->save();

            }
        }
        $notification = array(
    		'message' => 'Fee Amount Successfully Added',
    		'alert-type' => 'success',
    	);
        return redirect()->route('fee.amount.view')->with($notification);
    }
  
}
