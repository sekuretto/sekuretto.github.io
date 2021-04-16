var modal = document.getElementById("imgmodal");
var mybutton = document.getElementById("toTop");


// IMAGE GALLERY MODAL
// Get the image and insert it inside the modal - use its "alt" text as a caption
var images = document.querySelectorAll(".gallery");
// console.log(images[0]);
// console.log(images[0].id);
// console.log(images[0].src);
var img = document.getElementById("1");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}


// BACK TO TOP BUTTON
// When the user scrolls down 50px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function returnToTop() {
  document.documentElement.scrollTop = 0;
}