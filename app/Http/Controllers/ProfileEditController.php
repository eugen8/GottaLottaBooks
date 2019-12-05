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
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->zip =$request->input('zip');

        //$request->image->move(public_path('images'), $user->id . '.' . $request->image->extension());
        if($files = $request->file('image')) {
            $profileImage = $user->id . '.' . $files->getClientOriginalExtension();
            $files->move(public_path('images'), $profileImage);
            $user->image = $profileImage;
        }

        $user->save();

        return back();
    }
}

?>