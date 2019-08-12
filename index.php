<!--Referenced from https://www.w3schools.com/w3css/w3css_mobile.asp for the mobile website design-->

<!DOCTYPE html>
<html>
<title>Restroom Rater</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body style="max-width:400px">

<nav class="w3-sidebar w3-bar-block w3-card" id="mySidebar">
<div class="w3-container w3-theme-d2">
  <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
  <br>
  <div class="w3-padding w3-center">
    <!--<img class="w3-circle" src="img_avatar.jpg" alt="avatar" style="width:75%">-->
  </div>
</div>
<a class="w3-bar-item w3-button" href="#">Preferences</a>
<a class="w3-bar-item w3-button" href="#">Settings</a>

</nav>

<header class="w3-bar w3-card w3-theme">
  <button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>
  <h1 class="w3-bar-item">Restroom Rater</h1>
</header>

<?php include('dbinteraction.php') ?>

<body>
	<!-- HTML for SEARCH BAR -->
  <div id="tfheader">

    <input type="text" input list="Restroom-filters" class="searchbarinput" name="q" size="21" maxlength="120"><input type="submit" value="Search..." class="searchbarbutton">
    <datalist id="Restroom-filters">
      <option value="Disabled Access">
      <option value="Automatic Sinks">
      <option value="Automatic Toilets">
      <option value="Automatic Urinals">
      <option value="Vending Machine(Womens')">
      <option value="Single User">
      <option value="Requires Key">
      <option value="Child Accomodation">
      <option value="Vending Machine(Men's)">
    </datalist>
  	<div class="searchbarclear"></div>


    </div>
</body>


<div align="center">
  <br>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45482.58713296012!2d-123.31855583386259!3d44.56302825292917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54c0409daa14d77d%3A0xd70d808f22bdc0be!2sCorvallis%2C+OR!5e0!3m2!1sen!2sus!4v1565107313690!5m2!1sen!2sus" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

  
  <h3 align="center">Nearby Restrooms</h3>
  <!-- Cynthia's changes -->
    <ul align="center">
      <li align="left">
      <div class="grow">
        Starbucks
        <img src="./wheelchair.png" alt="wheelchair icon" class="icon">
        <img src="./dollar.png" alt="dollar icon" class="icon">
        <img src="./baby_both.png" class="icon">
        <img src="./key.png" class="icon">
        <div class="stars">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
        <p>"This bathroom is really clean!</p>
      </div>
      </li>
      <li align="left">
      <div class="grow">
        McDonald's
        <img src="./wheelchair.png" alt="wheelchair icon" class="icon">
        <img src="./dollar.png" alt="dollar icon" class="icon">
        <img src="./needle.png" alt="dollar icon" class="icon">
        <img src="./baby_mom.png" alt="dollar icon" class="icon">
        <div class="stars">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
        </div>
        <p>"Pretty clean. Could use more toilet paper.</p>
      </div>
      </li>
      <li align="left">
      <div class="grow">
        Library
        <img src="./wheelchair.png" alt="wheelchair icon" class="icon">
        <img src="./needle.png" alt="dollar icon" class="icon">
        <img src="./baby_both.png" alt="dollar icon" class="icon">
        <div class="stars">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </div>
        <p>"Okay cleanliness. Easily accessible."</p>
      </div>
      </li>
    </ul>
    <!-- Cynthia's changes end here -->
  <br>
</div>

<footer class="w3-container w3-theme w3-margin-top">
  <h3></h3>
</footer>


</head>


<script>

closeSidebar();
function openSidebar() {
  document.getElementById("mySidebar").style.display = "block";
}

function closeSidebar() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>

</html>
