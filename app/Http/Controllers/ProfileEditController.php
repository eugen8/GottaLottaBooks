<?php
namespace App\Http\Controllers;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    { 
        $this->validate(request(), [
            'fullname' => 'required',
            'username' => 'required',
            'zip' => 'required',
            'email' => 'required|email|unique:users',
        
        ]);

        $user->fullname = request('name');
        $user->username = request('username');
        $user->zip = request('zip');
        $user->email = request('email');
       
        $user->save();

        return back();
    }
}

?>