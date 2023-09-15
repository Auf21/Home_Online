// function CopyImage(){
//    // Get the modal
// var modal = document.getElementById("myModal");

// // الحصول على مسار الصورة من الوسم الأصلي
// var sourceImage = document.getElementById("myImg");
// let sourceImagePath = sourceImage.src;

// // تعيين مسار الصورة للوسم الجديد
// var destinationImage = document.getElementById("img01");
// destinationImage.src = sourceImagePath;
// // document.getElementById("l1").innerHTML=sourceImagePath;
//   modal.style.display = "block";
// }

// Get the slider images and the popup elements
function openModal(img) {
  var modal = document.getElementById("myModal");
  var modalImg = document.getElementById("img01");
  modal.style.display = "block";
  modalImg.src = img.src;
  // document.getElementById("l1").innerHTML=img.src;
}

function Close() {
    // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}  


