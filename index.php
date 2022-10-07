<?php
session_start();
?>
<?php
include 'config.php';
if(isset($_POST['signin'])){
  $uname=$_POST['username'];
  $pass=$_POST['password']; 
  $search="select *from users where username='$uname' AND password='$pass'";
  $query=mysqli_query($conn,$search);
   $ucount= mysqli_num_rows($query);
   if($ucount==1){
    echo "login succesfull";
    ?>
    <script>location.replace("dashboard.php")</script>
    <?php
   }
   else{
    ?>
    <script>alert("Pls Enter Valid Id & Password!!");</script>
    <?php
    
  }
}
    
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Court case event&status</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h3 style="height: 5px; align-items: center;padding-left: 500px;padding-top: 0px;margin: 0px;font-size: 48px; color: rgb(7, 7, 127);">Court Case Event And Staus</h3>
<div class="login-form">

  <form method="POST">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text"  name ="username"placeholder="CASE ID" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" name ="password" placeholder="Password" autocomplete="new-password">
      </div>
      <div class="selector">
        <div id="Select">
          <p id="text">Select Court</p>
          <img src="arrow.png" alt="" srcset="">
    
        </div>
        <ul id="list" class="hide">
          <li class="options"><p>Distric Court</p></li>
          <li class="options"><p>High Court</p></li>
          <li class="options"><p>Supreme court</p></li>
        </ul>
        <script>
          var selectField=document.getElementById("Select");
          var selectText=document.getElementById("text");
          var options=document.getElementsByClassName("options");
          var list=document.getElementById("list");
          selectField.onclick=function(){
                  list.classList.toggle("hide");
          }
          for(options of options){
            options.onclick=function(){
              selectText.innerHTML =this.textContent;
              list.classList.toggle("hide");
            }
          }
        </script>
      </div>
    
    </form>
 
    <div class="action" method="post">
      <button  method="post">Register</button>
      <button name ="signin" method="post">Sign in</button>
    </div>
    <!-- dropdown0 -->
   
<!-- dropdown0 -->

<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
