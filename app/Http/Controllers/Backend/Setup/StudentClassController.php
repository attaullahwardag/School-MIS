<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentClass;

class StudentClassController extends Controller
{
    //
    public function ViewStudentClass(){
        $data['allData'] = StudentClass::all();
        return view('admin.setup.student_class.student_class_view', $data);
    }
    public function AddStudentClass(){
        return view('admin.setup.student_class.student_class_add');
    }
    public function StoreStudentClass(Request $request){
        $validatedDate = $request->validate([
            'name' => 'required',
        ]);
        $student_class = new StudentClass();
        $student_class->name = $request->name;
        $student_class->save();
        $notification = array(
    		'message' => 'Student Class Successfully Added',
    		'alert-type' => 'success',
    	);
        return redirect()->route('student.class.view')->with($notification);
    }
}
