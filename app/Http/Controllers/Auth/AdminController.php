<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;





class AdminController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        //
    }


    public function store(AdminLoginRequest $request)
    {
        if ($request->authenticate()) {
            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::ADMIN);
            
        }
        // dd(trans('Dashboard/auth.failed'));

        return redirect()->back()->withErrors(['name'=>(trans('Dashboard/auth.failed'))]);
        // return redirect()->back()->withErrors(['name'=>'admin error']);



    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
