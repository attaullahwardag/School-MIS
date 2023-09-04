<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentYear;

class StudentYearController extends Controller
{
    //
    public function ViewStudentYear(){
        $data['allData'] = StudentYear::all();
        return view('admin.setup.student_year.student_year_view', $data);
    }
    public function AddStudentYear(){
        return view('admin.setup.student_year.student_year_add');
    }
    public function StoreStudentYear(Request $request){
        $validatedDate = $request->validate([
            'name' => 'required',
        ]);
        $student_year = new StudentYear();
        $student_year->name = $request->name;
        $student_year->save();
        $notification = array(
    		'message' => 'Student Year Successfully Added',
    		'alert-type' => 'success',
    	);
        return redirect()->route('student.year.view')->with($notification);
    }
    public function EditStudentYear($id){
        $year = StudentYear::find($id);
        return view('admin.setup.student_year.student_year_edit', compact('year'));
    }
    public function UpdateStudentYear(Request $request, $id){
        $year = StudentYear::find($id);
        $year->name = $request->name;
        $year->update();
        $notification = array(
    		'message' => 'Student Year Successfully Added',
    		'alert-type' => 'success',
    	);
        return redirect()->route('student.year.view')->with($notification);
    }
    public function DeleteStudentYear($id){
        StudentYear::where('id', $id)->delete();
        $notification = array(
    		'message' => 'Student Year Deleted Successfully',
    		'alert-type' => 'success',
    	);
        return redirect()->route('student.year.view')->with($notification);
    }
}
