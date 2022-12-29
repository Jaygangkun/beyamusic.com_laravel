<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;

class PageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login()
    {
        return view('pages.login');
    }

    public function login_post(Request $request)
    {
        $find_users = User::where('email', $request->email)->get();
        if(count($find_users) == 0) {
            return back()->withInput()->with('error','No email exists!');
        }

        if(!Hash::check($request->password, $find_users[0]->password)) {
            return back()->withInput()->with('error','Password is incorrect!');
        }

        Session::put('user', $find_users[0]);

        return redirect('genres');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function register_post(Request $request)
    {
        $find_users = User::where('email', $request->email)->get();
        if(count($find_users) > 0) {
            return back()->withInput()->with('error','Email already exists!');
        }

        if($request->password != $request->password_confirm) {
            return back()->withInput()->with('error','Password and Confirm password are incorrect!');
        }
        
        $user = new User;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_type = $request->user_type;
        $user->save();

        return back()->withInput()->with('success','User created successfully! Please login!');
        // return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    }

    public function logout() 
    {
        Session::flush();
        return redirect('login');
    }
    
}
