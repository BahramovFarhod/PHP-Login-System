<!DOCTYPE html>
<html>
<head>
<title>PHP-Inlogsystem</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


<header>
      <nav>
    <div class="main-wrapper">
        <ul>
          <li><a href="index.php">Home</a></li>
        </ul>
          <div class="nav-login">
          <form action="about.php" method="POST">
            <input type="text" name="uid" placeholder="Username/e-mail" required>
            <input type="password" name="pwd" placeholder="password" required>
            <button type="submit" name="submit">Login</button>
          </form>
          <form action="index.php" method="POST">
            <button type="submit" name="submit">Loguit</button>
          </form>
            <a href="signup.php">Signup</a>
          </div>
        </div>
      </nav>
</header>
