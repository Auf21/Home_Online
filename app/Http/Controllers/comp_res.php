<?php

namespace App\Http\Controllers;
use App\Models\around;
use App\Models\Home;
use App\Models\Image;
use App\Models\img_home;
use App\Models\User;
use App\Trait\UplaodImageTraits;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use TourRequestMail;
 
class comp_res extends Controller
{
    use UplaodImageTraits;
    /**
     * Display a listing of the resource.
     */
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        
        $home = new Home();
        $home ->address=$request->input('addres');
        $home ->info_position=$request->input('disc');
        $home ->room_no=$request->input('no_room');
        $home ->brdroom_no=$request->input('no_bedroom');
        $home ->area=$request->input('area');
        $home ->price=$request->input('price');
        $home ->condition=$request->input('condition');
        $home ->expanse=$request->input('expence');
        $home ->floor=$request->input('floor');
        $home ->cladding=$request->input('cladding');
        $home ->bathroom_no=$request->input('no_bathroom');
        $home ->carage=$request->input('carage');
        $home ->type=$request->input('type');
        $home ->argement=$request->input('argement');
        $home->user_id = auth()->id();
        $home->save();
        ///////////////////////////
    
        $images=$request->file('images');
        foreach ($images as $imge) {
            $image=$this->UploadImage('home',$imge);

            $img=Image::create(['title'=>$image,'home_id'=>$home->id,'path'=>$image]);
        }  
      //  return 'success';
      return redirect()->route('home');
        
    }
/////////////////////// store land ///////////////////////////////
public function storeland(Request $request)
{
    
    $home = new Home();
    $home ->address=$request->input('addres');
    $home ->info_position=$request->input('disc');
    $home ->area=$request->input('area');
    $home ->price=$request->input('price');
    $home ->bathroom_no=$request->input('no_bathroom');
    $home ->type=$request->input('type');
    $home ->argement=$request->input('argement');
    $home->user_id = auth()->id();
    $home->save();
    ///////////////////////////

    $images=$request->file('images');
    foreach ($images as $imge) {
        $image=$this->UploadImage('home',$imge);

        $img=Image::create(['title'=>$image,'home_id'=>$home->id,'path'=>$image]);
    }  

    /* 
    

    }  */
    
  
  //  return 'success';
   
   
    return redirect()->route('home');
    
}
/////////  end addmarket ///////////////////

public function storeaddmarket(Request $request)
{
    
    $home = new Home();
    $home ->address=$request->input('addres');

    $home ->area=$request->input('area');
    $home ->price=$request->input('price');
    $home ->condition=$request->input('condition');

    $home ->floor=$request->input('floor');
    $home ->cladding=$request->input('cladding');
        $home ->type=$request->input('type');
    $home ->argement=$request->input('argement');
    $home->user_id = auth()->id();
    $home->save();
    ///////////////////////////

    $images=$request->file('images');
    foreach ($images as $imge) {
        $image=$this->UploadImage('home',$imge);

        $img=Image::create(['title'=>$image,'home_id'=>$home->id,'path'=>$image]);
    }  

    /* 
    

    }  */
    
  
  //  return 'success';
   
   
    return redirect()->route('home');
    
}
/////////  end addmarket ///////////////////

/* public function store(Request $request)
{
    // افحص صحة المدخلات
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'images' => 'required|array|min:1',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    // أنشئ كائن عقار جديد واربطه بالمستخدم الحالي
    $property = new Property();
    $property->title = $request->title;
    $property->description = $request->description;
    $property->price = $request->price;
    $property->user_id = auth()->id();
    $property->save();

    // حلق على مصفوفة الصور واحفظ كل صورة في مجلد storage/app/public/properties وأنشئ كائن صورة جديد واربطه بالعقار
    foreach ($request->images as $image) {
        // احصل على اسم الملف وامتداده
        $fileName = time() . '.' . $image->getClientOriginalExtension();

        // انقل الملف إلى المجلد المطلوب
        $image->storeAs('public/properties', $fileName);

        // أنشئ كائن صورة جديد واربطه بالعقار
        $image = new Image();
        $image->title = $fileName;
        $image->path = 'storage/properties/' . $fileName;
        $image->property_id = $property->id;
        $image->save();
    }

    // ارجع رسالة نجاح
    return redirect()->route('properties.index')->with('success', 'تم إضافة العقار بنجاح');
}



 */


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         ##################
         $user = User::findOrFail($id);
         if(!request()->input('f_name')=="")
         $user -> name=request()->input('f_name');
         if(!request()->input('l_name')=="")
         $user ->lname=request()->input('l_name');
         if(!request()->input('phone')=="")
         $user ->phone= request()->input('phone');
         if(!request()->input('email')=="")
         $user ->email= request()->input('email');
         if(!request()->input('gender')=="")
         $user ->gender=request()->input('gender');
         if(!request()->input('country')=="") 
         $user ->country= request()->input('country');
         
         $user->save();
         return redirect()->route('showprof'); 
       }
    public function edit_product(string $id)
    {
        $home = Home::findOrFail($id);
        if(!request()->input('addres')=="")
        $home ->address=request()->input('addres');
        if(!request()->input('disc')=="")
        $home ->info_position=request()->input('disc');
        if(!request()->input('no_room')=="")
        $home ->room_no=request()->input('no_room');
        if(!request()->input('no_bedroom')=="")
        $home ->brdroom_no=request()->input('no_bedroom');
        if(!request()->input('area')=="")
        $home ->area=request()->input('area');
        if(!request()->input('price')=="")
        $home ->price=request()->input('price');
        if(!request()->input('condition')=="")
        $home ->condition=request()->input('condition');
        if(!request()->input('expence')=="")
        $home ->expanse=request()->input('expence');
        if(!request()->input('floor')=="")
        $home ->floor=request()->input('floor');
        if(!request()->input('cladding')=="")
        $home ->cladding=request()->input('cladding');
        if(!request()->input('no_bathroom')=="")
        $home ->bathroom_no=request()->input('no_bathroom');
        if(!request()->input('carage')=="")
        $home ->carage=request()->input('carage');
        if(!request()->input('type')=="")
        $home ->type=request()->input('type');
        if(!request()->input('argement')=="")
        $home ->argement=request()->input('argement');
        $home->user_id = auth()->id();
        $home->save();
        ///////////////////////////
       /* $img=new Image();
        
         $images=request()->file('images');
        foreach ($images as $imge) {
        $fileName = time() . '.' . $imge->getClientOriginalExtension();
        request()->images->move('public/images/home',$fileName );
           
            $img->title = $fileName;
            $img->path = 'public/images/home' . $fileName;
            $img->$home->home_id ;
            $img->save(); 
       } */
       return redirect('profile');
      }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
 /*    public function destroy(Home $home)
{
    // Get the user's data.
    $user = \Illuminate\Support\Facades\Auth::user();

    // Check if the user is the owner of the property.
    if ($user->id !== $home->user_id) {
        // The user is not the owner of the property, so redirect them to the home page.
        return view('homeonline.home');
    }

    // Delete the property from the database.
    $home->delete();

    // Redirect the user to the home page.
    return view('homeonline.profile');
} */

public function destroy( $id)
    {
        $todelete= Home::findOrFail($id);
        $todelete->delete();
     
        return redirect()->route('showprof');
    }
 
    
}

