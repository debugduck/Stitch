<?php
  include "connect_db.php";
  $dbname = "stich_db1";
  extractEventData($dbname);
  echo json_encode($event_names);
?>
<html>
<!--- Google Material Design API-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-amber.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<head>
<style>
 .add-event-button {
  margin-left: 1450px;
  }
.demo-card-wide.mdl-card {
  width: 512px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 176px;
  background: url('http://i0.kym-cdn.com/entries/icons/original/000/013/564/doge.jpg') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
</style>

<class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title" href="index.html">Stitch</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="index.php">Home</a>
        <a class="mdl-navigation__link" href="event_page.php">View Events</a>
        <a class="mdl-navigation__link" href="about.html">About</a>
        <a class="mdl-navigation__link" href="sign_in.php">Sign In</a>
      </nav>
    </div>
  </header>
  <main class="mdl-layout__content">
    <div id="page-content" class="page-content">
      <!-- Your content goes here -->
    </div>
  </main>
</div>
</head>
<body>
<div id="debug"> 
</div>
<h1>Events</h1>
  <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored add-event-button" onclick="window.location.href='create_event.php'">
    <i class="material-icons">add</i>
</button>
  <!-- Colored FAB button -->
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col">
    
    
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Welcome</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Soccer Game <br />
    Tuesday November 7th, 2017 | 10 am
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      See Details
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>
  
  
  </div>
  <div class="mdl-cell mdl-cell--4-col">
    
    
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Welcome</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Northern Neck Destress Fest <br />
    Tuesday November 7th, 2017 | 8 pm
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      See Details
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>
    
  </div>
  <div class="mdl-cell mdl-cell--4-col">
    
    
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Welcome</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Dance Practice <br />
    Thursday November 9th, 2017 | 5:30 pm
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      See Details
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>
    
    
  </div>
  
  
  <div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col">
    
    
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Welcome</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Going Running <br />
    Friday November 3rd, 2017 | 8:30 am
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      See Details
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>
  
  
  </div>
  <div class="mdl-cell mdl-cell--4-col">
    
    
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Welcome</h2>
  </div>
  <div class="mdl-card__supporting-text">
    ECE 301 Study Session <br />
    Wednesday November 1st, 2017 | 6:45 pm
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      See Details
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>
    
  </div>
  <div class="mdl-cell mdl-cell--4-col">
    
    
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Welcome</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Halloween Party at Rogers <br />
     Tuesday October 31st, 2017 | 7 pm
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      See Details
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
  var event_data = <?php echo json_encode($event_data); ?>;
  console.log(event_data);
  document.getElementById("debug").innerHTML = "Event data: " + '<br>';
  for(obj in event_data) {
    document.getElementById("debug").innerHTML += obj + " : "+event_data[obj].name + " -> ";
    for(i in obj) {
      document.getElementById("debug").innerHTML += i + " : "+obj[i] + '<br>';
    }
  }
  var event_names = <?php echo json_encode($event_names); ?>;
  console.log(event_names);
</script>
</body>
</html>