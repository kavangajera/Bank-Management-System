<?php
include 'htdocs\Php Project\partials\_dbconnect.php';
session_start();
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

    <title>FAQs</title>
    <style>
        body{
            background-color: antiquewhite;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-repeat: no-repeat;
            
        }
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
margin-top: -165px;
}

td, th {
  border: 2px solid rgb(205, 195, 195);
  text-align: left;
  padding: 18px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>

<body>
    <?php
    require 'htdocs\Php Project\partials\_dbconnect.php';
    ?>
    <br>
    
        <table>
            <tr>
                <th>Sr. No</th>
                <th>QUESTIONS</th>
                <th>ANSWERS</th>
            </tr>
        
            <tr>
                <td>1.</td>
           <td><b> When Nadiad Co-operative bank was established?</b><br></td>
            <td><b></b> 22/04/2023</td>
            </tr>
        
        <br>
        
            <tr>
                <td>2.</td>
            <td><b>Who are the owner of Nadiad Co-operative bank?<br></b></td>
            <td><b></b> Bank is owned by 3 persons (i)Kavan Gajera,(ii)Smit Haraniya and (iii)Faldu Arpit.</td>
            </tr>
        
        <br>
        <tr>
            <td>3.</td>
           <td> <b>In which of the cities in Gujarat there is the branch of NCB?</b><br></td>
            <td><b></b> Our bank has reached almost to every village and remote areas and there are multiple branches in the metro cities too.</td>
        </tr>
        <br>
         <tr>
            <td>4.</td>
        <td><b>Can anyone open a zero balance account in Nadiad Co-operative bank?</b><br></td>
           <td> <b></b> Yes we provide the facility of zero balance account opening to our users.</td>
           </tr>
        <br>
         
         <tr>
            <td>5.</td>
        <td><b>What amount of interest does NCB provide to the users on F.D?</b><br></td>
          <td> <b></b> Our bank provides 8.25% interest on F.D's.</td>
        </tr>
        <br>
        <tr>
            <td>5.</td>
        <td><b>Does Nadiad Co-operative bank provide security t the online users?</b><br></td>
          <td>  <b></b> Yes our website uses block-chain technology so that our website is totally safe and secure for the users to use.</td>
        
        <br>
        </tr>
        <tr>
            <td>6.</td>
       <td> <b>Where is main branch of Nadiad Co-operative bank located?<br></b></td>
          <td>  <b></b> Main branch of Nadiad Co-operative bank is located in Nadiad near Sudarshan dairy,kishan samosa road,Nadiad 387001. </td>
        
        <br>
        </tr>
        <tr>
            <td>7.</td>
       <td> <b>Is net banking facility available for the users?</b><br></td>
           <td> <b></b> Yes users can use net banking and can easily process their transactions sitting at their home.</td>
        
        <br>
        </tr>
        </table>
    
</body>

</html>