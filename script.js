
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
