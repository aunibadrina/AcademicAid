<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\tutoringsession;
use App\Models\User;
 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $tutoringsession = tutoringsession::all();
        return view('admin.home',[
            'tutoringsession' => $tutoringsession
        ]); 
    }

    public function userProfile()
    {
        return view('userProfile');
    }
     
    public function updateProfile(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
        ]);
 
        # check if user profile image is null, then validate
        if (auth()->user()->profile_image == null) {
             $validate_image = Validator::make($request->all(), [
                'profile_image' => ['required', 'image', 'max:1000']
            ]);
             # check if their is any error in image validation
            if ($validate_image->fails()) {
                return response()->json(['code' => 400, 'msg' => $validate_image->errors()->first()]);
            }
        }
 
        # check if their is any error
        if ($validated->fails()) {
            return response()->json(['code' => 400, 'msg' => $validated->errors()->first()]);
        }
 
        # check if the request has profile image
        if ($request->hasFile('profile_image')) {
            $imagePath = 'storage/'.auth()->user()->profile_image;
            # check whether the image exists in the directory
            if (File::exists($imagePath)) {
                # delete image
                File::delete($imagePath);
            }
            $profile_image = $request->profile_image->store('profile_images', 'public');
        }
 
        # update the user info
        auth()->user()->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'profile_image' => $profile_image ?? auth()->user()->profile_image 
        ]);
        return response()->json(['code' => 200, 'msg' => 'profile updated successfully.']);
    }

    public function userList()
    {
        $User = User::all();
        return view('admin.layouts.userList', [
            'User' => $User
        ]);
    }

   

    //CRUD USER
    public function editUser(User $user ){
        return view('admin.editUser', ['user' => $user]);
    }

    public function updateUser(User $user, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required '

        ]);

        $user->update($data);

        return redirect('/userList')->with('success', 'User Updated Succesfully');
    }

    public function destroyUser(User $user){
        $user->delete();
        return redirect('/userList')->with('success', 'User Deleted Succesfully');
    }
}
