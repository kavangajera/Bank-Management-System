<?php
include 'htdocs\Php Project\partials\_dbconnect.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Deposit & Draw</title>
    <style>
        body {
           background-color: antiquewhite;
            background-size: 100vw 100vh;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .form-group {
            margin: auto;
        }

        button {
            margin: auto;
        }

        .btn-primary {
            background-color: black;
            margin-left: 290px;
        }

        form {
            padding-left: 50vw;
            /*750px */
            padding-top: 20vh;
            
        }
        #draw {
    margin-left: -465px;
    background-color: wheat;
    box-shadow: 5px 5px 5px 3px black;
    padding: 20px;
}
#dep {
    margin-top: -258px;
    background-color: wheat;
    box-shadow: 5px 5px 5px 3px black;
    padding: 20px;
    margin-left: 15px;
}
    </style>
</head>

<body>
    <?php
    require 'htdocs\Php Project\partials\_nav.php';
    ?>

    <?php
    if (isset($_POST['button'])) {
        $mpin = $_POST['mpin1'];
        
        if ($_SESSION["mpinnumber"] == $mpin) {
            $deposit = (int) $_POST['deposit'];
            $tempbalance = (int) $_SESSION["ibalance"];
            $tempbalance = $tempbalance + $deposit;
            $tempname = $_SESSION['username'];
            $_SESSION["ibalance"] = $tempbalance;
            $sql = "UPDATE `signup` SET `balance` = '$tempbalance' WHERE `username` =   '$tempname'";
            $result = mysqli_query($conn, $sql);
            echo '<div class="alert alert-success alert-dismissible fade show"      role="alert">
      <strong>Success!</strong> Your transaction has been processed successfully!!
      <button type="button" class="close" data-dismiss="alert"     aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
            $sql = "INSERT INTO `$tempname` (`transaction`, `date-time`) VALUES ('You deposited  $deposit rupees in your account', current_timestamp())";
            $result = mysqli_query($conn, $sql);
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
    <?php
    if (isset($_POST['drawbutton'])) {
        $mpin = $_POST['mpin'];
        if ($_SESSION["mpinnumber"] == $mpin) {
            $draw = (int) $_POST['withdraw'];
            $tempbalance = (int) $_SESSION["ibalance"];
            $tempbalance = $tempbalance - $draw;
            if ($tempbalance <= 2000) {
                echo '<div class="alert alert-danger alert-dismissible fade show"      role="alert">
                <strong>Oops!</strong> Your account balance is not sufficient.
                <button type="button" class="close" data-dismiss="alert"     aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            } else {
                $tempname = $_SESSION['username'];
                $_SESSION["ibalance"] = $tempbalance;
                $sql = "UPDATE `signup` SET `balance` = '$tempbalance' WHERE `username`= '$tempname'";
                $result = mysqli_query($conn, $sql);
                echo '<div class="alert alert-success alert-dismissible fade show"      role="alert">
                <strong>Success!</strong> Your transaction has been processed successfully!!
                <button type="button" class="close" data-dismiss="alert"     aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
                $sql = "INSERT INTO `$tempname` (`transaction`, `date-time`) VALUES ('you withdraw $draw rupees in your bank account', current_timestamp())";
                $result = mysqli_query($conn, $sql);
            }
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show"      role="alert">
          <strong>Oops!</strong> Wrong mpin please enter correct mpin.
          <button type="button" class="close" data-dismiss="alert"     aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
    }
    if(basename($_SERVER['PHP_SELF'])!=$_SESSION['loggedin']){
        session_unset();
    }
    ?>
    <form action="/Php project/deposit&draw.php" method="post">
        <div class="form-group col-md-6 my-4" id="draw">
            <label for="deposit">Amount to be deposited in your account</label>
            <input type="number" class="form-control" id="deposit" name="deposit" placeholder="Enter amount">
            <label for="mpin1">Enter your 6 digit mpin here</label>
            <input type="password" class="form-control" id="mpin1" name="mpin1" placeholder="Enter your mpin">
            <button type="submit" class="btn btn-primary my-2 m-0" name="button">Deposit</button>
        </div>
        <div class="form-group col-md-6 " id="dep">
            <label for="withdraw">Amount to be withdrawed from your account</label>
            <input type="number" class="form-control" id="withdraw" name="withdraw" placeholder="Enter amount">
            <label for="mpin">Enter your 6 digit mpin here</label>
            <input type="password" class="form-control" id="mpin" name="mpin" placeholder="Enter your mpin">
            <button type="submit" class="btn btn-primary my-2 m-0" name="drawbutton">Withdraw</button>
        </div>
    </form>
</body>

</html>