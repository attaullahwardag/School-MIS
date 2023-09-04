<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentGroup;

class StudentGroupController extends Controller
{
    //
    public function ViewStudentGroup(){
        $data['allData'] = StudentGroup::all();
        return view('admin.setup.student_group.student_group_view', $data);
    }
    public function AddStudentGroup(){
        return view('admin.setup.student_group.student_group_add');
    }
    public function StoreStudentGroup(Request $request){
        $validatedDate = $request->validate([
            'name' => 'required',
        ]);
        $student_group = new StudentGroup();
        $student_group->name = $request->name;
        $student_group->save();
        $notification = array(
    		'message' => 'Student Group Successfully Added',
    		'alert-type' => 'success',
    	);
        return redirect()->route('student.group.view')->with($notification);
    }
    public function EditStudentGroup($id){
        $group = StudentGroup::find($id);
        return view('admin.setup.student_group.student_group_edit', compact('group'));
    }
    public function UpdateStudentGroup(Request $request, $id){
        $group = StudentGroup::find($id);
        $group->name = $request->name;
        $group->update();
        $notification = array(
    		'message' => 'Student Group Successfully Added',
    		'alert-type' => 'success',
    	);
        return redirect()->route('student.group.view')->with($notification);
    }
    public function DeleteStudentGroup($id){
        StudentGroup::where('id', $id)->delete();
        $notification = array(
    		'message' => 'Student Group Deleted Successfully',
    		'alert-type' => 'success',
    	);
        return redirect()->route('student.group.view')->with($notification);
    }
}
