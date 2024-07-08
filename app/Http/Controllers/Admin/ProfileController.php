<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index()
  {
    if(Auth::user()->usertype == 'admin'){

        return view('admin.adm-dashboard');
    }
  }
  public function lockscreen(){
    auth()->logout();
    return redirect()->route('login');
  }
  public function logout(){
    auth()->logout();
    return redirect()->route('login');
  }
   public function profile()
    {
        $user = auth()->user();
        return view('admin.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $user->update($request->all());
        return back()->with('success', 'Profile updated successfully!');
    }
}
