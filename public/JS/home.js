function popup() {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
  } 

  function Close() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}  

//   var modal = document.getElementById("myModal");
// var addProductButton = document.getElementById("addProductButton");

// // عندما ينقر المستخدم في أي مكان خارج النافذة المنبثقة، أغلقها.
// document.addEventListener("click", function(event) {
//   if (event.target !== modal && event.target !== addProductButton) {
//     modal.style.display = "none";
//   }
// });