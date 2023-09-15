 @extends('homeonline.layout')
@section('title','home')
@section('home')

  
       <!--start extended page -->
       <h1 class="p-relative">الصفحة الرئيسية</h1>
        
       <div class="courses-page d-grid m-20 gap-20">
         @if($home->isEmpty())
         <p style="width: 200px; color:red; font-size:30px; " >لا يوجد نتائج </p>
         @else
         @foreach ($home as $home) 
         <div class="course bg-white rad-6 p-relative">
          
           <div class="box">
             @foreach ($home->image as $img) 
             <div class="mySlides fade">
               <img id="myImg"  class="cover" src="{{URL( 'images/home/'."$img->path??" )}}  " alt="2" {{-- onclick="openModal(this)" --}}>
             </div>
            {{--   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a> --}}
              @endforeach
           </div>

           <div class="p-20">
             <h4 class="m-0">{{$home->type}} {{$home->cladding}}</h4>
             <p class="description c-grey mt-15 fs-14">
               {{$home->address}}
             </p>
           </div>
           <div class="info p-15 p-relative between-flex">
             <span class="title bg-blue c-white btn-shape"><a href="{{route('Showproduct',$home->id)}}" style="color: white;">مزيد_من_المعلومات</a></span>
             <span class="c-grey">
               <i class="fa-solid fa-person-shelter"></i>
               {{$home->room_no}}
             </span>
             <span class="c-grey">
               {{$home->price}}
               <i class=""> ل.س</i>
             </span>
           </div>
         </div>
    @endforeach  
    @endif
       </div>
 @endsection



       <!--end extended page -->