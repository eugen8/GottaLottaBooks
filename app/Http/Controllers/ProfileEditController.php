<?php
namespace App\Http\Controllers;
use DB;
use Auth;
use App\User;
use Illuminate\Http\Request;

class ProfileEditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $user = Auth::user();
        return view('user.profileEdit', compact('user'));
    }

    public function update(Request $request)
    {
        // $request is our form data that was submitted
        // Get the current user
        $user = Auth::user();
        // set the name of the user to the name from the form data
        $user->name = $request->input('name');
        // set the email of the user to the email from the form data
        $user->email = $request->input('email');
        // set the zip of the user to the zip from the form data
        $user->zip =$request->input('zip');
       
        // save the user to the database
        $user->save();

        // return to the page
        return back();
    }
}

?>