<?php 
  include 'inc_head.php';
?>
<!doctype html>
<html lang="ko">
<head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">  
        <meta charset="UTF-8">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <title>SPENGO</title>
        <link rel="stylesheet" type="text/css" href="css/css.css?3.0.0">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    </head>
  <body>
    <?php
      if ( $jb_login ) {
    ?>
      <h1>이미 로그인하셨습니다.</h1>
    <?php
      } else {
    ?>
    <div class="top">
    </div>
    <div class="head">
        <a href="index.php"><h1>Spengo</h1><h4>Learn english like sponge</h4></a>
        </div>
        <div class="menu">
        
    </div>
    <div class="contents">
    <div class="login">
      <h5>로그인</h5>
      <form action="login_result.php" method="POST">
        <input class="account" type="text" name="username" minlength = "5"  maxlength = "15" placeholder="Username"></br>
        <input class="account" type="password" name="password" minlength = "5"  maxlength = "15" placeholder="Password"></br>
      
        <button class="account_btn">Submit</button>
      </form>
    </div>
    <?php
      }
    ?>
    </div>
    <div class="foot">
            <a href="people.php">Maker : Yang with Kim and Park in Gachon uni</a> / Email : ts.yang.0123@gmail.com / <a href="https://github.com/taeseokyang">Github</a>
        </div>
  </body>
</html>