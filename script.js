
function openSidebar() {
    document.getElementById("mySidebar").style.display = "block";
}

function closeSidebar() {
    document.getElementById("mySidebar").style.display = "none";
}

//opens sign in form
function signInUser() {
    document.getElementById("id01").style.display = "block";
}

//closes sign in form
function closeModal() {
    document.getElementById("id01").style.display = "none";
}

function welcomeUser() {
    var username = document.getElementById("uname").value;
    alert("Welcome back " + username + "!");
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
