<?php
include 'partials/_dbconnect.php';
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location:login.php");
  exit;
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <title>Welcome</title>
  <style>
    body {
      color: black;
      background-color: antiquewhite;
      background-size: 100vw 100vh;
      background-attachment: fixed;
      background-repeat: no-repeat;
    }

    .text{
      color:black;
    }

    .btn-primary{
      background-color: black;
    }
    .container{
      font-size: 3vh;
    }
    #cont{
      background-color: wheat;
             box-shadow: 5px 5px 5px 3px black; 
             text-align: center;
    }
    #bel{
      background-color: wheat;
             box-shadow: 5px 5px 5px 3px black; 
             text-align: center;
             margin: auto;
             text-align: center;
    }
  </style>
</head>

<body>

    
  <?php
  $check=0;
  require 'partials/_nav.php';
  if (isset($_POST['submit'])) {
    $cmpin = $_POST['cmpin'];
    if ($_SESSION["mpinnumber"] == $cmpin) {
      $check=1;
    } else {
      echo '<div class="alert alert-danger alert-dismissible fade show"      role="alert">
          <strong>Oops!</strong> Wrong mpin please enter correct mpin.
          <button type="button" class="close" data-dismiss="alert"     aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
    }

  }
  ?>
  <div class="container my-4">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome-
        <?php echo ucfirst($_SESSION['firstname']) ?>!
      </h4>
      <p>You are logged in as
        <?php echo $_SESSION['username']; ?>
      </p>
      <hr>
      <!-- <p class="mb-0">Whenever you need to, be sure to logout <a href="logout.php">using this link</a> </p> -->
    </div>
    
    <div class="container" id="cont">
      <h2><b>Personal Detail</b></h2>
      <?php
        echo "Name:-" . ucfirst($_SESSION["firstname"]) . " " . ucfirst($_SESSION["middlename"]) . " " . ucfirst($_SESSION["lastname"]) . "<br> Birth-Date:" . $_SESSION["birth"] . "<br>Mobile no:-" . $_SESSION["mobile"] . "<br><br>";
      ?>
    </div>
    

    <form action="/Php project/welcome.php" method="post">
      <div class="form-group col-md-4 my-4" id="bel">
        <label for="cmpin">To check your current balance enter <b>your mpin<b></label>
        <input type="password" class="form-control" id="cmpin" name="cmpin" placeholder="Please enter your mpin">
        <small id="emailHelp" class="form-text text">Make sure that you enter <b> 6 </b>digit pin.</small>
        <button type="submit" class="btn btn-primary my-2" name="submit">Submit</button>
      </div>
<?php
    if($check){
      echo "Your current balance is ". $_SESSION['ibalance'].".";
    }
    ?>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
      
</body>

</html>