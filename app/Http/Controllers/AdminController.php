<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Warga;
use App\Models\Role;
use App\Models\Admin;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin/login');
    }
    public function proLogin(Request $request)
    {
        $request->validate([
            'username' 		=>'required',
            'katasandi'	    =>'required|min:8'
        ]);
       $username = $request['username'];
       $password = $request['katasandi'];
       $token = $request['_token'];
       $admin   = Admin::where('username',$username)->get();
       if(count($admin)==1){
            foreach($admin as $admin){
                if(Hash::check($password, $admin->password)){
                    Admin::where('username',$username)->update([
                        'token'=> $token
                    ]);
                    session([
                        'nama' => $admin->nama,
                        'username' => $username,
                        'level' =>  $admin->level
                    ]);
                    return redirect("si-admin/$token");
                }else{
                    return redirect()->back()->with('gagal','Username atau Kata Sandi salah');
                }
            }
       }else{
           return redirect()->back()->with('gagal','Username atau Kata Sandi salah');
       }
    }
    public function index($token)
    {
        $data=array(
            'nama' => session('nama'),
            'username' => session('username'),
            'token' =>  $token,
            'level'=>session('level')
        );
        return view('admin/home',$data);
    }
    public function logout($token)
    {
        session()->flush();
        return redirect('/si-admin')->with('gagal','Berhasil Keluar');
    }
}
