<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // العرض الخاص بصفحة البروفايل
    /* public function showprof()
    {
        // التحقق من تسجيل دخول المستخدم
        if (Auth::check()) {
            // استرجاع بيانات المستخدم الحالي
            $user = Auth::user();
            // استرجاع عرض البروفايل
            return view('homeonline.profile')->with(compact('user'));
            
        }
        // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول في حالة عدم تسجيل دخول المستخدم
        return redirect()->route('homeonline.login'); 
    } */

    public function showProfile()
{
    // Get the current user's ID.
    $userId = auth()->id();

    // Check if the user is logged in.
    if (auth()->check()) {
        // The user is logged in, so get the user's properties.
        $home = Home::where('user_id', $userId)->get();

        // Get the user's data.
        $user = User::find($userId);
      
        // Render the profile page with the user's properties and data.
        return view('homeonline.profile', compact('user', 'home'));
    } else {
        // The user is not logged in, so redirect them to the login page.
        return redirect()->route('homeonline.login');
    }
}





}