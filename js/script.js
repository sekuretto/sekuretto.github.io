var mybutton = document.getElementById("toTop");


// BACK TO TOP BUTTON
// https://www.w3schools.com/howto/howto_js_scroll_to_top.asp
// When the user scrolls down 50px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// when button is clicked, scroll to top
function returnToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}