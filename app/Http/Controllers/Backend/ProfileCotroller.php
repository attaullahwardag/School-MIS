<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class ProfileCotroller extends Controller
{
    public function viewprofile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.profile.profile', compact('user'));
    }
    public function editprofile($id){
        $user = User::find($id);
        return view('admin.profile.edit_profile', compact ('user'));
    }
    public function updateprofile(Request $request, $id){
        $user = User::find($id);

        $validatedData = $request->validate([
            'image' => 'required',
           ]);
           #Handle File Upload
         if($request->hasfile('image'))
         {
             $name = uniqid() . '_' . time(). '.' . $request->image->getClientOriginalExtension();
             $path = public_path() .'/upload';
             $request->image->move($path, $name);
             $image = $name;
         }else{
            dd('hi');
         }
        $user->image = $image;
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->adress = $request->address;
        $user->gender = $request->gender;
        $user->status = $request->status;
        $user->usertype = $request->usertype;
        $user->update();
        $notification = array(
    		'message' => 'Profile Updated Successfully',
    		'alert-type' => 'success',
    	);

        return redirect()->route('view.profile')->with($notification);

    }
}
