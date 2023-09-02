<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentClass;

class StudentClassController extends Controller
{
    //
    public function ViewStudent(){
        $data['allData'] = StudentClass::all();
        return view('admin.setup.student_class.students_view');
    }
}
