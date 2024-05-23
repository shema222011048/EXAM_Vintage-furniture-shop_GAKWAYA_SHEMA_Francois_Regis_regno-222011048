// JavaScript for the pop-up message
document.addEventListener("DOMContentLoaded", function() {
    // Get the modal
    var modal = document.getElementById('loginReminderModal');
  
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
  
    // Get the login button
    var loginButton = document.getElementById('loginButton');
  
    // When the page loads, show the modal
    modal.style.display = "block";
  
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
  
    // When the user clicks on login button, redirect them to the login page
    loginButton.onclick = function() {
      window.location.href = "login.php"; // Replace "login.php" with your actual login page URL
    }
  
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  });
  