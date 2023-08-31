<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userview(){
        $userdata = User::all();
        return view('admin.user.user_view', compact('userdata'));
    }
    public function useradd(){
        return view('admin.user.user_add ');
    }
    public function storeuser(Request $request){
        $validatedDate = $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password' => 'required'
        ]);
        $user =  new User();
        $user->name = $request->name;
        $user->usertype = $request->usertype;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $notification = array(
    		'message' => 'User Updated Successfully',
    		'alert-type' => 'success',
    	);
        return redirect()->route('user.add')->with($notification);
    }
    public function edituser($id){
        $user = User::find($id);
        return view ('admin.user.edit_user', compact('user'));
    }
    public function updateuser(Request $request,$id){

        $user = User::find($id);
        $user->name = $request->name;
        $user->usertype = $request->usertype;
        $user->email = $request->email;
        $user->update();

        $notification = array(
    		'message' => 'User Deleted Successfully',
    		'alert-type' => 'success',
    	);
        return redirect()->route('user.view')->with($notification);
    }
    public function deleteuser($id){

        User::where('id', $id)->delete();
        $notification = array(
    		'message' => 'User Deleted Successfully',
    		'alert-type' => 'success',
    	);
        return redirect()->route('user.view')->with($notification);
    }
    
}
