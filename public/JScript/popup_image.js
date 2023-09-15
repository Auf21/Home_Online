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
const sliderImages = document.querySelector('.images_top');
const popup = document.querySelector('.modal');
const popupImage = document.querySelector('.destination-image');
const closePopup = document.querySelector('.close-popup');

// Add event listeners to the slider images
sliderImages.addEventListener('click', (event) => {
  // Check if the clicked element is an image
  if (event.target.tagName === 'IMG') {
    // Set the popup image src to the clicked image src
    popupImage.src = event.target.src;
    // Show the popup
    popup.style.display = 'block';
  }
});

function Close() {
    // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}  


