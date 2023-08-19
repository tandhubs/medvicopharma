/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("dropdown1").classList.toggle("show");
  }
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) {
    if (!e.target.matches('.company-btn')) {
    var dropdown1 = document.getElementById("dropdown1");
      if (dropdown1.classList.contains('show')) {
        dropdown1.classList.remove('show');
      }
    }
  }