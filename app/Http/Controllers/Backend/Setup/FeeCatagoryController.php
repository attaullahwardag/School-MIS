<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeCatagory;

class FeeCatagoryController extends Controller
{
    //
    public function ViewFeeCatagory(){
        $data['allData'] = FeeCatagory::all();
        return view('admin.setup.fee_catagory.fee_catagory_view', $data);
    }
    public function AddFeeCatagory(){
        return view('admin.setup.fee_catagory.fee_catagory_add');
    }
    public function StoreFeeCatagory(Request $request){
        $validatedDate = $request->validate([
            'name' => 'required',
        ]);
        $fee_catagory = new FeeCatagory();
        $fee_catagory->name = $request->name;
        $fee_catagory->save();
        $notification = array(
    		'message' => 'Fee Catagory Successfully Added',
    		'alert-type' => 'success',
    	);
        return redirect()->route('fee.catagory.view')->with($notification);
    }
    public function EditFeeCatagory($id){
        $fee_catagory = FeeCatagory::find($id);
        return view('admin.setup.fee_catagory.fee_catagory_edit', compact('fee_catagory'));
    }
    public function UpdateFeeCatagory(Request $request, $id){
        $fee_catagory = FeeCatagory::find($id);
        $fee_catagory->name = $request->name;
        $fee_catagory->update();
        $notification = array(
    		'message' => 'Fee Catagory Successfully Added',
    		'alert-type' => 'success',
    	);
        return redirect()->route('fee.catagory.view')->with($notification);
    }
    public function DeleteFeeCatagory($id){
        FeeCatagory::where('id', $id)->delete();
        $notification = array(
    		'message' => 'Fee Catagory Deleted Successfully',
    		'alert-type' => 'success',
    	);
        return redirect()->route('fee.catagory.view')->with($notification);
    }
}

