<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class modificarUser extends Controller
{
    public function showUser(Request $request){
    	$id = $request->input('id');
    	$name = $request->input('name');
        $email = $request->input('email');
        $telefono = $request->input('telefono');
 
    	DB::table('users')->where('id',$id)->update(['name' =>$name,'email'=>$email,'telefono'=>$telefono]);

    	return view('perfil');
    	





    }
}
