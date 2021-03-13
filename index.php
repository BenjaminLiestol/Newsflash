<html>
<head>
  <meta charset="utf-8" lang="en">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <link rel='stylesheet' type="text/css" href='style.css'></style>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

</head>

<body id="body">
  <div id="introwin" class="intro" class="noscroll">
      <h1 class="header">NewsFlash</h1>
      <p id="intro">Your News, Your Way</p>

<!--Slider-->
    <div class="slider">
      <input type="range" min="20" max="40" id="slider">
    </div>
  </div>

<!--Menu-->
  <div class="menu">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>
  <div class="overlay_settings" id="settings">

  <!--Buttons-->
      <div class="buttondiv">

        <!--Search Function-->
        <input type="text" class="design" id="urlInput" value="" placeholder="Search Topic:">
        <button type="button" id="search" class="design" onclick="search();">Go!</button>

        <!--Category creator-->
        <p class="text">Create Category</p>
        <button onclick="document.getElementById('id01').style.display='block'" class="design" type="button" name="button">+</button>

        <!--Country Selector-->
        <p class="text">Country Select</p>
        <div class="dropdown">
          <button type="button" class="design">v</button>
          <div class="dropdown-content">
            <a onclick="countrySelect('en');">EN</a>
            <a onclick="countrySelect('no');">NO</a>
          </div>
        </div>

        <!--Dark Mode-->
        <p class="text">Dark Mode</p>
        <label class="switch">
          <input id="button" type="checkbox" checked>
          <span></span>
        </label>

        <!--Hidden pictures-->
        <p class="text">Hide/Show Pictures</p>
        <label class="switch">
          <input id="slide" type="checkbox" checked>
          <span></span>
        </label>


        <!--Account settings. Work in progress-->
        <p class="text">My Account</p>
        <button class="design" type="button" name="button"><a href="welcome.php">^</a></button>



        <!--Disclaimer-->
        <p class="text">Powered by <a href="https://newsapi.org/" style="color:inherit" target='_blank'>NewsAPI</a></p>

      </div>
  </div>

<!--Form-->
  <div id="id01" class="modal">
    <!-- Modal Content -->
    <form class="modal-content animate">
      <div class="avatarContainer">
        <label for="uname"><b>Create Category</b></label>
        <input id="name" type="text" placeholder="Enter Category Name" name="cname" required>

        <button id="create" type="button" onclick="document.getElementById('id01').style.display='none'">Submit</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>

  <div id="OPdiv">
<!--Overlay articles go here-->
    <div id="articles">
    </div>
<!--Articles-->
    <div id="art0" class="container">
    </div>
  </div>

<!--Navbar-->
  <div id="nav" class="navbar">
    <a onclick="home();">Home</a>
  </div>
</body>
<footer>
  <script src="script.js" charset="utf-8"></script>
</footer>
</html>
