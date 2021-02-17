<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
      //checking what user is logged in as and redirect

        $user = Auth::user();
        $home = 'home';

        if($user->hasRole('admin'))
        {
          $home = 'admin.home';
        }
        else if ($user->hasRole('user'))
        {
          $home = 'user.home';
        }
        return redirect()->route($home);
    }
}
