<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentShift;

class StudentShiftController extends Controller
{
    //
    public function ViewStudentShift(){
        $data['allData'] = StudentShift::all();
        return view('admin.setup.student_shift.student_shift_view', $data);
    }
    public function AddStudentShift(){
        return view('admin.setup.student_shift.student_shift_add');
    }
    public function StoreStudentShift(Request $request){
        $validatedDate = $request->validate([
            'name' => 'required',
        ]);
        $student_shift = new StudentShift();
        $student_shift->name = $request->name;
        $student_shift->save();
        $notification = array(
    		'message' => 'Student Shift Successfully Added',
    		'alert-type' => 'success',
    	);
        return redirect()->route('student.shift.view')->with($notification);
    }
    public function EditStudentShift($id){
        $shift = StudentShift::find($id);
        return view('admin.setup.student_shift.student_shift_edit', compact('shift'));
    }
    public function UpdateStudentShift(Request $request, $id){
        $shift = StudentShift::find($id);
        $shift->name = $request->name;
        $shift->update();
        $notification = array(
    		'message' => 'Student Shift Successfully Added',
    		'alert-type' => 'success',
    	);
        return redirect()->route('student.shift.view')->with($notification);
    }
    public function DeleteStudentShift($id){
        StudentShift::where('id', $id)->delete();
        $notification = array(
    		'message' => 'Student Shift Deleted Successfully',
    		'alert-type' => 'success',
    	);
        return redirect()->route('student.shift.view')->with($notification);
    }
}
