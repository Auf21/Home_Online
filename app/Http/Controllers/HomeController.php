<?php

namespace App\Http\Controllers;

use App\Models\around;
use App\Models\Home;
use App\Models\Image;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;
use TourRequestMail;

class HomeController extends Controller
{

public function index(){
    return view('home');
}

 public function home()
{
    //$home = Home::All();
   /*  $home = Home::select('id', 'info_position','room_no','area','condition','floor','cladding','bathroom_no','brdroom_no','carage','address','price','user_id','expanse','argement',
    'type',)->with('Image:id,title,path,home_id')->get();  */
    //  $home=Home::with('Image')->where('home_id',"=",null)->get(); 
     $home=Home::with('image')->get();
     return view('homeonline.home',compact('home')); 
 
} 

 public function show_home_info($id)
{   
    $home_info = Home::findorfail($id);
    $img=Image::homeimages($id);
    return view('homeonline.Showproduct', compact('home_info' , 'img'  )); 
} 




public function create(){

    return view('homeonline.showproduct');
}


public function AddProduct(){

    return view('homeonline.AddProduct');
}
public function addland(){

    return view('homeonline.addland');
}
public function addmarket(){

    return view('homeonline.addmarket');
}


public Function go_to_edit_product(string $id){
    return view('homeonline.editProduct',[
        'home'=>Home::findOrFail($id)
       ]);}

public function dashboard( ){

    $user = User::all();
    $count_user = $user->count(); 
    $home=Home::all();
    $count_home=$home->count();
    $count_home_home=Home::where('type', 'منزل')->count();
    $count_home_ah=Home::where('type', 'شاليه')->count();
    $count_home_land=Home::where('type','like', '%أرض%')->count();
    $count_home_vila=Home::where('type', 'فيلا')->count();
    $count_home_market=Home::where('type', 'محل')->count();
    $homef = Home::All(); 
    ///////
    
    
    return view ('homeonline.dashboard')->with(compact('count_user','count_home_home','count_home_ah','count_home_land','count_home_vila','count_home_market','count_home','user','home',"homef"));
}
public function edit_admin(Request $req ,$id){

    $active_user=User::findorfail($id);
   if($req->has('avilable'))
   /*  $active_user->avilable=$req->avilable; */
    $active_user->update(['avilable'=>$req->avilable]); 
    // return $req;
    if(!request()->input('pass')=="") 
    $active_user->password=request()->input('pass'); 
   return redirect('dashboard');
   
} 
/* public function edit_page($id){
    return view('homeonline.edit_admin_for_user');
} */

public function show_user(){
    $user = User::all();
    return view('homeonline.profile')->with(compact('user'));
}

public function logout(){
  auth('web')->logout(); 
  return redirect('home');
    // return

     
}

###########################    filter in home page ################# 
public function home_filter()
{
   
    $home = Home::where('type','like','%منزل%')->get();   
   return view('homeonline.home')->with(compact('home'));
} 
public function vila()
{
    $home = Home::where('type','like','%فيلا%')->get();   
   return view('homeonline.home')->with(compact('home'));
} 
public function shaleh()
{
    $home = Home::where('type','like','%شاليه%')->get();   
   return view('homeonline.home')->with(compact('home'));
} 
public function ard()
{
    $home = Home::where('type','like','%أرض%')->get();   
   return view('homeonline.home')->with(compact('home'));
} 
public function mahl()
{
    $home = Home::where('type','like','%محل%')->get();   
   return view('homeonline.home')->with(compact('home'));
} 
public function search(Request $request)
{
    $search = $request->input('search');
    $search= '%'. $search . '%' ;
if(
    $home = Home::where('address','like' ,  $search   )
    ->orWhere('room_no','like' ,$search )
    ->orWhere('brdroom_no','like' ,$search )
    ->orWhere('area','like' ,$search )
    ->orWhere('price','like' ,$search)
    ->orWhere('condition','like' ,$search )
    ->orWhere('expanse','like' ,$search )
    ->orWhere('floor','like' ,$search)
    ->orWhere('cladding','like' ,$search)
    ->orWhere('bathroom_no','like' ,$search )
    ->orWhere('carage','like' ,$search )
    ->orWhere('type','like' ,$search )
    ->orWhere('argement','like' ,$search )->get())

   return view('homeonline.home')->with(compact('home'));
} 
###########################   end filter in home page ################# 

public function send_email_to_around(Request $request){
    $send=new around();
    $send ->name=$request->input('name');
    $send ->phone=$request->input('phone');
    $send ->email=$request->input('email');
    $send ->message=$request->input('message');
    $send ->settime=$request->input('time');
    $send ->user_id = auth()->id();
    $send ->save();
    Mail::to($send->home->user->email)->send(new TourRequestMail($send));
    return redirect()->route('Showproduct', $send->home_id);
}
/* 
public function manger(){
    $users = User::all();
    $count = $users->count(); 
    return redirect('dashboard')->with(compact('users'));
} */


//////////////////////filter in dashbord ////////////////////////

###########################    filter in home page ################# 
public function home_filterall2()
{ $user = User::all();
    $count_user = $user->count(); 
    $home=Home::all();
    $count_home=$home->count();
    $homef = Home::All();   
    $count_home_home=Home::where('type', 'منزل')->count();
      $count_home_ah=Home::where('type', 'شاليه')->count();
    $count_home_land=Home::where('type','like', '%أرض%')->count();
    $count_home_vila=Home::where('type', 'فيلا')->count();
    $count_home_market=Home::where('type', 'محل')->count();
   return view('homeonline.dashboard')->with(compact('count_home_home','count_home_ah','count_home_land','count_home_vila','count_home_market','count_user','count_home','user','home','homef'));
} 
public function home_filter2()
{ $user = User::all();
    $count_user = $user->count(); 
    $home=Home::all();
    $count_home=$home->count();
    $homef = Home::where('type','like','%منزل%')->get();   
    $count_home_home=Home::where('type', 'منزل')->count();
    $count_home_ah=Home::where('type', 'شاليه')->count();
    $count_home_land=Home::where('type','like', '%أرض%')->count();
    $count_home_vila=Home::where('type', 'فيلا')->count();
    $count_home_market=Home::where('type', 'محل')->count();
   return view('homeonline.dashboard')->with(compact('count_home_home','count_home_ah','count_home_land','count_home_vila','count_home_market','count_user','count_home','user','home','homef'));
} 
public function vila2()
{ $user = User::all();
    $count_user = $user->count(); 
    $home=Home::all();
    $count_home=$home->count();
    $homef = Home::where('type','like','%فيلا%')->get();   
    $count_home_home=Home::where('type', 'منزل')->count();
    $count_home_ah=Home::where('type', 'شاليه')->count();
    $count_home_land=Home::where('type','like', '%أرض%')->count();
    $count_home_vila=Home::where('type', 'فيلا')->count();
    $count_home_market=Home::where('type', 'محل')->count();
   return view('homeonline.dashboard')->with(compact('count_home_home','count_home_ah','count_home_land','count_home_vila','count_home_market','count_user','count_home','user','home','homef'));
} 
public function shaleh2()
{ $user = User::all();
    $count_user = $user->count(); 
    $home=Home::all();
    $count_home=$home->count();
    $homef = Home::where('type','like','%شاليه%')->get();  
    $count_home_home=Home::where('type', 'منزل')->count();
    $count_home_ah=Home::where('type', 'شاليه')->count();
    $count_home_land=Home::where('type','like', '%أرض%')->count();
    $count_home_vila=Home::where('type', 'فيلا')->count();
    $count_home_market=Home::where('type', 'محل')->count(); 
   return view('homeonline.dashboard')->with(compact('count_home_home','count_home_ah','count_home_land','count_home_vila','count_home_market','count_user','count_home','user','home','homef'));
} 
public function ard2()
{ $user = User::all();
    $count_user = $user->count(); 
    $home=Home::all();
    $count_home=$home->count();
    $homef = Home::where('type','like','%أرض%')->get();   
    $count_home_home=Home::where('type', 'منزل')->count();
    $count_home_ah=Home::where('type', 'شاليه')->count();
    $count_home_land=Home::where('type','like', '%أرض%')->count();
    $count_home_vila=Home::where('type', 'فيلا')->count();
    $count_home_market=Home::where('type', 'محل')->count();
   return view('homeonline.dashboard')->with(compact('count_home_home','count_home_ah','count_home_land','count_home_vila','count_home_market','count_user','count_home','user','home','homef'));
}
public function mahl2()
{ $user = User::all();
    $count_user = $user->count(); 
    $home=Home::all();
    $count_home=$home->count();
    $homef = Home::where('type','like','%محل%')->get();   
    $count_home_home=Home::where('type', 'منزل')->count();
    $count_home_ah=Home::where('type', 'شاليه')->count();
    $count_home_land=Home::where('type','like', '%أرض%')->count();
    $count_home_vila=Home::where('type', 'فيلا')->count();
    $count_home_market=Home::where('type', 'محل')->count(); 
   return view('homeonline.dashboard')->with(compact('count_home_home','count_home_ah','count_home_land','count_home_vila','count_home_market','count_user','count_home','user','home','homef'));
}  
///////////////////////////////////////////////////
/* public function active()
{  $user = User::all();
    $count_user = $user->count(); 
    $home=Home::all();
    $count_home=$home->count();
    $homef = Home::where('avilable','like','1')->get();   
   return view('homeonline.dashboard')->with(compact('count_user','count_home','user','home','homef','user2'));
} 
public function dont_active()
{ $user = User::all();
    $count_user = $user->count(); 
    $home=Home::all();
    $count_home=$home->count();
    $user2 = User::where('avilable','like','0')->get();   
    $homef = Home::where('type','like','%منزل%')->get();   
   return view('homeonline.dashboard')->with(compact('count_user','count_home','user','home','homef','user2'));
} 
public function mange()
{   $user = User::all();
    $count_user = $user->count(); 
    $home=Home::all();
    $count_home=$home->count();
    $homef = Home::where('type','like','%فيلا%')->get();   
    $user2 = User::where('type','like','1')->get();   
  
   return view('homeonline.dashboard')->with(compact('count_user','count_home','user','home','homef','user2'));
}  */
public function about_me(){
    return view('homeonline.about');
}

}
 