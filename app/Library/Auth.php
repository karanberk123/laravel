<?php
namespace App\Library;

use Helper;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class Auth
{
    public static  function register($email, $username, $password, $password_again): array
    {
        $email = trim($email);
        $username = trim($username);
        $password = trim($password);
        $password_again = trim($password_again);


        if ($password != $password_again) {
            return [false, 'parolalar aynı değil'];
        }
        if (strlen($password) < 8) {
            return [false,'parola 8 karakterden uzun olmalı'];
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return [false, 'email adresinin formatı hatalı'];
        }

        if (Helper::asci($username)){
            return [false, 'kullanıcı adı asci karakterler içeremez'];
        }
        $verication_code = rand(99999, 99999999);
        $code = sha1($username . $password);
        $password_code = md5($code);

        $usernameControl = User::where('username', $username)->first();
        if($usernameControl){
            return [false, "username zaten alınmıs durumda başka al"];

        }

        $emailControl = User::where('email', $email)->first();
        if($emailControl){
            return [false, "email zaten alınmıs durumda başka al"];
        }

        $register = User::create([
            'username' => $username,
            'email'=>$email,
            'password'=> $password_code,
        ]);
        
        if($register){
            session()->put('userID',$register->id);
            session()->put('username',$username);
            session()->put('email',$email);
            return [true, 'Kayıt başarılı'];
        }else{
            return [false, 'Kayıt başarısız'];
        }
        return [false, 'Kayıt başarısız'];
    }

    public static function login(string $username, string $password): array
    {
        $password_code = md5(sha1($username . $password));
        $user = User::where('username', $username)->where('password', $password_code)->first();


        if (!$user) {
            return [false, "Kullanıcı adı veya şifre hatalı"];
        }
        
        session()->put('userID',$user->id);
        session()->put('username',$username);
        session()->put('email',$user->email);
        return [true, 'Giriş başarılı'];
    }
}


?>