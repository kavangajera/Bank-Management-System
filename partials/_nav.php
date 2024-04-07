<html>
  <head>
    <style>
      .bg-dark {
    padding-inline: initial;
    background-color: #343a40!important;
}
    </style>
  </head>
<?php
if (isset($_SESSION["loggedin"]) && $_SESSION["username"]) {
  $loggedin = true;
} else {
  $loggedin = false;
}
echo '<nav id="sticky" class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="signup.php" style="hover:"><img src="Screenshot 2023-05-22 234313.png" alt="NCB LOGO" width="70" height="70"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/Php Project/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>';
if (!$loggedin) {
  echo '<li class="nav-item">
        <a class="nav-link" href="/Php Project/login.php">Login</a>
      </li>';
  echo '<li class="nav-item">
        <a class="nav-link" href="/Php Project/signup.php">Sign Up</a>
      </li>';
}
if ($loggedin) {
  echo '<li class="nav-item active">
        <a class="nav-link" href="/Php Project/deposit&draw.php">Transaction <span class="sr-only">(current)</span></a>
      </li>';
  echo '<li class="nav-item active">
        <a class="nav-link" href="/Php Project/payment.php">Payment<span class="sr-only">(current)</span></a>
      </li>';
  echo '<li class="nav-item active">
      <a class="nav-link" href="/Php Project/transaction.php">Transaction History<span class="sr-only">(current)</span></a>
    </li>';
}
echo '<li class="nav-item active">
        <a class="nav-link" href="/Php Project/contacts.php">Contact Us</a>
      </li>';
echo '<li class="nav-item active">
        <a class="nav-link" href="/Php Project/faqs.php">FAQs</a>
      </li>';
if ($loggedin) {
  echo '<li class="nav-item">
        <a class="nav-link" href="/Php Project/logout.php"><i class="fas fa-sign-out-alt fa-lg" style="color: #ffffff; padding-left:820px; padding-top:10px;"></i></a>
        </li>';

}

echo '</ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>';
?>
</html>