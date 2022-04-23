<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "Style/style.css">
    <link rel = "stylesheet" href = "Style/Podcast.css">
    <title>Podcast page</title>
  </head>
  <body>
    <h1><img src="Photos/DSS Logo.png" alt="logo" width="200" height="86">Deep Socializing Sessions</h1>
    <header>
         <div class="row">
       <ul class ="main-nav">
           <li class = "active"><a href = "Deep Socializing Sessions.php">HOME</a></li>
         <li><a href = "Podcast.php">PODCASTS</a></li>
         <li><a href = "News.php">NEWS</a></li>
         <li><a href = "Events.php">EVENTS</a></li>
         <li><input id="search" type="search" name="txt_search" placeholder="Search"></li>
      </ul>
      </div>
    </header>
    <h2>Lets socialize!</h2>
    <div class="Nav_links">
  		<h3>Login Details</h3>
  		<form action="" method="post">
  			<p>Username</p>
  			<input type="text" name="txt_username" placeholder="Username"><br>
  			<p>Password</p>
  			<input type="password" name="txt_pass" placeholder="Password"><br><br>
  			<input id="login" type="submit" name="btn_login" value="Login"> &nbsp; <input id="login" type="submit" name="btn_logout" value="Logout"><br><br>
  			<a href="createAcc.html">Don't have an acc? <br>Create account</a><br><br>
  			<a href="News.html">Get more updates</a><br><br>
  			<img id="ricky" src="Photos/Booking Poster.jpg" alt="RickyMero" width="100" height="100">
  		</form>
  	</div>
    <div id="centre">
      <div id="show022">
        <img  src="Photos/DSS show 022.jpg" alt="Dss align="left" show 022" width="200" height="200">
        <audio controls="controls">
          deep socializing sessions 022 "Exclusive Mix" by RickyMero
          <source src="Music/DSS show 022 Exclusive Mix.mp3" type="audio/mpeg">
        </audio>
      </div>
      <div id="show021">
        <img  src="Photos/DSS show 021.jpg" alt="Dss show 021" width="200" height="200">
        <audio controls="controls">
          deep socializing sessions 021 "Exclusive Mix" by RickyMero
          <source src="Music/DSS show 021 Exclusive Mix (Deeper than deep pt.2).mp3" type="audio/mpeg">
        </audio>
      </div>
      <div id="show020">
        <img  src="Photos/birthdayCover.jpg" alt="Dss show 020" width="200" height="200">
        <audio controls="controls">
          <source src="Music/DSS show 020 Exclusive Mix.mp3" type="audio/mpeg">
        </audio>
      </div>
    </div>
    <div id="footer">
      <a href=".html">next page</a>
    </div>
  </body>
</html>
