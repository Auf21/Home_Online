function regular_edit_profil() {
    // const regex = /^[a-zA-Z\u0621-\u064A]{1,30}$/;
    // const input =document.getElementById('name').value;
    // if(regex.test(input))
    // {
    //     alert('valid input');
    // }else{
    //     alert('invalid input');
    // }

    // \[a-zA-\Zu0621-\u064A]
    var user = document.getElementById("name").value;
    var user2 = document.getElementById("name");

    var user3 = document.getElementById("phone").value;
    var user4 = document.getElementById("phone");

    var user5 = document.getElementById("pass").value;
    var user6 = document.getElementById("pass");

    var user7 = document.getElementById("name2").value;
    var user8 = document.getElementById("name2");

    var re = /^[a-zA-Z\u0600-\u06FF]{0,30}$/;
    if (re.test(user)) {
    }
    else {
        user2.style.border = "red solid 3px";
        alert("يجب ادخال احرف فقط في حقل الاسم");
        return false;
    }

    var ree = /^[a-zA-Z\u0600-\u06FF]{0,30}$/;
    if (ree.test(user7)) {
    }
    else {
        user8.style.border = "red solid 3px";
        alert("يجب ادخال احرف فقط في حقل الاسم");
        return false;
    }

    var num = /^09[0-9]{8}$/;
    if (num.test(user3)) {
    }
    else {
        user4.style.border = "red solid 3px";
        alert("يجب ادخال ارقام تبدأ ب09 وبطول 10ارقام");
        return false;
    }
    var pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w\d\s:])([^\s]){8,}$/;
    if (pass.test(user5)) {
        return true;
    }
    else {
        user6.style.border = "red solid 3px";
        alert("يجب ادخال كلمة سر تحوي احرف كبيرة وصغيرة وارقام ورموز وان لا تقل عن 8 محارف");
        return false;
    }

}
