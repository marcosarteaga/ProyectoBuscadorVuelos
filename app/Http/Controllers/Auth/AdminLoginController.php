<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        //defining our middleware for this controller
        $this->middleware('guest:admin',['except' => ['logout']]);
    }

    //function to show admin login form */
    public function username()
    {
        $identity  = request()->get('identity');
        $fieldName = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$fieldName => $identity]);
        return $fieldName;
    }
    public function showLoginForm() {
        return view('auth.admin-login');
    }
    //function to login admins
    public function login(Request $request) {
        //validate the form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        //attempt to login the admins in
        if (Auth::guard('admin')){
            //if successful redirect to admin dashboard
            $arrayClientes = DB::table('pasajeros')->select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento')->paginate(1);
      		$comisionActual = DB::table('comision')->select('comision')->where('id',1)->get();
      
      		return view('backend',['arrayClientes'=> $arrayClientes,'comisionActual'=>$comisionActual]);
            
        }
        //if unsuccessfull redirect back to the login for with form data
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }
}
