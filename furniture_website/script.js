
var modal = document.getElementById('loginModal');
var span = document.getElementsByClassName("close")[0];
window.onload = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
