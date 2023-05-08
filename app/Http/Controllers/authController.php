<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Laravel\Socialite\Facades\Socialite;

class authController extends Controller
{
    function index(){
        return view('auth.index');
    }
    function redirect(){
        return Socialite::driver('google')->redirect();
    }
    function callback(){
        $user = Socialite::driver('google')->user();
        $id = $user->id;
        $email = $user->email;
        $name = $user->name;
        $cek = User::where('email', $email)->count();
        $avatar = $user->avatar;
        if($cek > 0){
            $avatar_file = $id.".jpg";
            $filecontent = file_get_contents($avatar);
            File::put(public_path("admin/images/$avatar_file"), $filecontent);
            $user= User::updateOrCreate(
                ['email' => $email],
                [
                    'name' => $name,
                    'google_id' => $id,
                    'avatar' => $avatar_file
                ]
            );
            Auth::login($user);
            return redirect()->to('dashboard');
        } else {
            return redirect()->to('auth')->with('error', 'Maaf akun anda tidak mendapatkan izin akses ke halaman admin');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->to('auth');
    }
}
