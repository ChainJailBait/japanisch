<?php session_start();
require_once("config.inc.php");

try {
  $db = new PDO('mysql:host=localhost;dbname='.DB_NAME, DB_USER, DB_PW);
  }
  catch(PDOException $e){
    echo "Verbindung fehlgeschlagen";
    die();
    
}

 
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Japanisch.GitHub.io by ChainJailBait</title>
    <link rel="stylesheet" href="stylesheets/styles.css">
    <link rel="stylesheet" href="stylesheets/pygment_trac.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="javascripts/respond.js"></script>
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="stylesheets/ie.css">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

  </head>
  <body>
      <div id="header">
        <nav>
          <li class="fork"><a href="https://github.com/ChainJailBait/japanisch.github.io">View On GitHub</a></li>
          <li class="downloads"><a href="https://github.com/ChainJailBait/japanisch.github.io/zipball/master">ZIP</a></li>
          <li class="downloads"><a href="https://github.com/ChainJailBait/japanisch.github.io/tarball/master">TAR</a></li>
          <li class="title">DOWNLOADS</li>
        </nav>
      </div><!-- end header -->

    <div class="wrapper">

      <section>
        <div id="title">
          <h1>Japanisch.GitHub.io</h1>
          <p>ewebp 3.semester</p>
          <hr>
          <span class="credits left">Project maintained by <a href="https://github.com/ChainJailBait">ChainJailBait</a></span>
          <span class="credits right">Hosted on GitHub Pages &mdash; Theme by <a href="https://twitter.com/michigangraham">mattgraham</a></span>
        </div>

        <h3>
<a id="welcome-to-github-pages" class="anchor" href="#welcome-to-github-pages" aria-hidden="true"><span class="octicon octicon-link"></span></a>Welcome to GitHub Pages.</h3>

<h2>Login</h2>
<?php
if (isset($_SESSION['username'])){
 
 $_SESSION['signed_in'] = true;
                     
              
                     
                    echo 'Hallo ' . $_SESSION['username'] . '. <a href="forum.php">Weiter zum Forum.</a>.';
                
 
  echo "<p><a href='logout.php'>Logout</a>.</p>

";
}
?>
<form method="POST" action="login.php">
  Benutzername: <input type="text" name="user"/><br/>
  Passwort: <input type="password" name="password"/><br/>
  <input type="submit" value="einloggen" name="login"/>
</form>

<h2>Registrieren</h2>
<form method="POST" action="register.php">
  Benutzername: <input type="text" name="user"/><br/>
  Passwort: <input type="password" name="password"/><br/>
    Passwort wiederholen: <input type="password" name="password2"/><br/>
  <input type="submit" value="registrieren" name="register"/>
</form>
    <!--[if !IE]><script>fixScale(document);</script><![endif]-->
    
  </body>
</html>
