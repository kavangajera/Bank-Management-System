<?php
include 'htdocs\Php Project\partials\_dbconnect.php';
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
  <title>Payment</title>

  <style>
    .form-control{
      width:60%
    }
    .form-group {
      padding-top: 25vh;
      margin-left: 50vw;
    }

    button {
      margin: auto;
    }
     #pay{
      background-color: wheat;
             box-shadow: 5px 5px 5px 3px black; 
             padding: 20px;
             margin-left: 426px;
     }
    .btn-primary {
      background-color: black;
      margin-left: 290px;
    }

    body {
     background-color: antiquewhite;
      background-repeat: no-repeat;
      background-size: 100vw 100vh;
      background-attachment: fixed;
      background-repeat: no-repeat;
    }
  </style>
</head>

<body>
  <?php
  require 'htdocs\Php Project\partials\_nav.php';
  ?>

  <?php
  if (isset($_POST['transferbutton'])) {
    $reciever_name = $_POST['reciever'];
    $payment = $_POST['payment'];
    $pay_name = $_SESSION['username'];
    
    $sql = "SELECT * fROM `signup` WHERE `username`='$reciever_name' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 0) {
      echo '<div class="alert alert-danger alert-dismissible fade show"      role="alert">
          <strong>Success!</strong> Such type of name account has not exist.
          <button type="button" class="close" data-dismiss="alert"     aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
    } else {
      $rows = [];
      $rows = $result->fetch_array(MYSQLI_ASSOC);

      $_SESSION['reciever_balance'] = $rows['balance'];
      
      $p_balance = (int) $_SESSION["ibalance"] - $payment;
      $_SESSION["ibalance"] = $p_balance;
      if ($p_balance <= 2000) {
        echo "In your account balance is not sufficient";
      } else {
        $r_balance = (int) $_SESSION["reciever_balance"] + $payment;
        $_SESSION["reciever_balance"] = $r_balance;

        $sql = "UPDATE `signup` SET `balance` = '$r_balance' WHERE `username` = '$reciever_name'";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE `signup` SET `balance` = '$p_balance' WHERE `username` = '$pay_name'";
        $result = mysqli_query($conn, $sql);

        $sql = "INSERT INTO `$reciever_name` (`transaction`, `date-time`) VALUES ('recieve $payment from  $pay_name', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $sql = "INSERT INTO `$pay_name` (`transaction`, `date-time`) VALUES ('give $payment to $reciever_name',   current_timestamp())";
        $result = mysqli_query($conn, $sql);
        echo '<div class="alert alert-success alert-dismissible fade show"      role="alert">
        <strong>Success!</strong> Your transaction has been processed successfully!!
        <button type="button" class="close" data-dismiss="alert"     aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
    }
  }
  ?>

  <form action="/Php project/payment.php" method="post">
    <div class="form-group col-md-5 my-4" id="pay">
      <label for="reciever">Reciever's Username</label>
      <input type="text" class="form-control" id="reciever" name="reciever" placeholder="Enter valid username">
      <br>
      <label for="payment">Amount to be transfered from your account</label>
      <input type="number" class="form-control" id="payment" name="payment" placeholder="Enter amount">
      <button type="submit" class="btn btn-primary my-2 m-0" name="transferbutton">Transfer</button>
    </div>
  </form>
</body>

</html>