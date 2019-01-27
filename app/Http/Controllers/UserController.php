<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    public function UserList()
    {
        $user = User::orderBy('id')->paginate(3);

        $data = array (
            'users' => $user,
        );
        return view('Users/UserList',$data);
    }

    public function AddUser(){
        return view('Users/AddUser');
    }

    public function SaveUser(Request $request)
    {
        $user = new User;

        $user->name=$request->name;
        $user->email=$request->email;
        $user->type=$request->type;
        $user->password=Hash::make($request->password);

        $user->save();

        return redirect()->route('UserList');
    }

    public function EditUser($id)
    {
        $user = User::find($id);

        $data = array(
            'user' => $user,
        );
        return view('Users/EditUser',$data);
    }

    function UpdateUser($id, Request $request)
    {
    	$valid = $request->validate([
    		'name'=> 'required|max:50',
            'type' => 'required',
            'email' => 'email|required',
            'password' => 'nullable|min:6',
    	]);

        $user = User::find($id);

        $user->name=$valid['name'];
        $user->email=$valid['email'];
        $user->type = $valid['type'];
        if(isset($valid['password']) && $valid['password'] != null && strlen($valid['password']) >= 6) { 
        	$user->password=Hash::make($valid['password']);
        } 
        $user->save();

        return redirect()->route('UserList');
    }

    function DeleteUser($id)
    {   
        if(Auth::user()->admin() == false)
        {
        return view('message')->with('message', 'You are not allowed to do that.');
        }
        $user = User::find($id);

        $user->delete();

        return redirect()->route('UserList');
    }

}
