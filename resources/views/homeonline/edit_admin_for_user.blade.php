<div class="quick-draft p-20 bg-white rad-10">
    <h2 class="mt-0 mb-10"> تخصيص المستخدم</h2>
    <form action="{{route('edit_admin')}}" method="POST" >
        @csrf 
      
        
        <div class="edit_pro">
          <label for="">كلمة السر الجديدة:</label>
          <input type="text" name="pass" class="edit">
        </div> 
        <label for="active"> وضع الحساب</label>
      
        <select name="avilable" class="edit">
          <option value="1">تفعيل</option>
          <option value="0">الغاء تفعيل</option>
        </select>
        <div class="fs-14 b1">
          {{-- <button class="button_edit" onclick="">تعديل</button> --
          <input type="submit" value="تعديل" name="save-edit" >
        </div>--}}
      </form>
   
  </div>