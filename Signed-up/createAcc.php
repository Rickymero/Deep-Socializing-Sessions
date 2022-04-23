<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "style.css">
    <title>About page</title>
  </head>
  <body>
    <h1><img src="DSS Logo.png" alt="logo" width="200" height="86">Deep Socializing Sessions</h1>
    <header>
         <div class="row">
       <ul class ="main-nav">
           <li class = "active"><a href = "sign-up.php">HOME</a></li>
         <li><a href = "Podcast.php">PODCASTS</a></li>
         <li><a href = "News.php">NEWS</a></li>
         <li><a href = "Events.php">EVENTS</a></li>
         <li><input id="search" type="search" name="txt_search" placeholder="Search"></li>
      </ul>
      </div>
    </header>
    <h2>Lets socialize!</h2>
    <div class="form">
      <table align="center">
        <form action="" method="post">
          <tr>
            <td>Username</td>
            <td><input required type="text" name="txt_username" placeholder="Username"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input required type="email" name="txt_email" placeholder="Email"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input required type="password" name="txt_pass" placeholder="Password"></td>
          </tr>
          <tr>
            <td>Confirm Password</td>
            <td><input required type="password" name="txt_confirm" placeholder="Confirm Password"></td>
          </tr>
          <tr>
            <td>  </td>
            <td><input type="submit" name="btn_submit" value="Submit">&nbsp;<input type="reset" name="btn_reset" value="reset"></td>
          </tr>
        </form>
      </table>
    </div>
  </body>
</html>
