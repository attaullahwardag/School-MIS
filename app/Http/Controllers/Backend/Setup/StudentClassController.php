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
    public function EditStudentClass($id){
        $class = StudentClass::find($id);
        return view('admin.setup.student_class.student_class_edit', compact('class'));
    }
    public function UpdateStudentClass(Request $request, $id){
        $class = StudentClass::find($id);
        $class->name = $request->name;
        $class->update();
        $notification = array(
    		'message' => 'Student Class Successfully Added',
    		'alert-type' => 'success',
    	);
        return redirect()->route('student.class.view')->with($notification);
    }
    public function DeleteStudentClass($id){
        StudentClass::where('id', $id)->delete();
        $notification = array(
    		'message' => 'Student Class Deleted Successfully',
    		'alert-type' => 'success',
    	);
        return redirect()->route('student.class.view')->with($notification);

    }
}
