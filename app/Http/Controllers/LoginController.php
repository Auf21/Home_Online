<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Url;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Foundation\Auth\User as AuthUser;

$user;
class LoginController extends Controller
{

    public function login(){
        return view('homeonline.login2');
    }
    
    public function signin(Request $req)

    {
       
     $check = $req->only('email', 'password');
     if(Auth::attempt($check)&& Auth::User()->avilable===0){
        return view('homeonline.sorry');}
  
    elseif (Auth::attempt($check) && Auth::User()->type===0 ) {
        return redirect()->intended('home');
    }
    elseif (Auth::attempt($check) && Auth::User()->type===1 ) {
        return redirect()->intended('dashboard');
    }
    

     else
    { return back()->withErrors(['message' => 'خطأ في بيانات تسجيل الدخول']);}
}
/* public function check_avilable(Request $req){
          
    $check = $req->only('email', 'password');
    if(Auth::attempt($check)&& Auth::User()->avilable==0){
        return redirect()->intended ('sorry');

    }
    else{
        return redirect()->intended('signin');

    } 
} */


   
//////////////////التحقق من تسجيل الدخول وعرض خطأ
/*     public function signin(Request $req){
if (auth()->guard('web')->attempt(['email'=>$req->email,'password'=>$req->password ])){
    return redirect()->route('home');
}
return redirect()->back()->with(['error'=>('2222')]);

    }   */
    /////////////////التحقق كمان مع رسالة مطبوعة
/*     public function signin(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth()->attempt($credentials)) {
        // Authentication passed...
        return redirect()->intended('home');
    }

    return redirect()->back()->withErrors(['login' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة.']);
}
 */
///////////////////// كمان تحقق مع رسالة منبثقة
/*  public function signin(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth()->attempt($credentials)) {
        // Authentication passed...
        return redirect()->intended('home')->with('success', 'تم تسجيل الدخول بنجاح!');
    }

    return back()->withErrors([
        'login' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة.',
    ]); 
} */
/////////////////////
public function signup(Request $request)
{
    // انشاء الحساب الجديد
    $user = User::create([
        'name' => $request->f_name,
        'lname' => $request->l_name,
        'phone' => $request->phone,
        'email' => $request->email,
        'gender' => $request->gender?? 'ذكر',
        'birthday_date' => $request->date,
        'country' => $request->country,
        'password' => bcrypt($request->password)
    ]);
    if ( $request) {
        Auth::login($user);
    }
 
    return redirect('login');
  
}
/////////////////////

/* 
public function signup(Request $req){
    
    //    return $req; 
    User::create([
        'name'=>$req->f_name,
        'lname'=>$req->l_name,
        'email'=>$req->email,
        'password'=>Hash::make($req->password),
        'phone'=>$req->phone,
    ]);
 // تسجيل الدخول بعد انشاء الحساب الجديد
 Auth::login(User);

 // الانتقال للصفحة الرئيسية للموقع
 return redirect('/');
}*/

 public function logup(){
return view('homeonline.logup2');
}   



}
