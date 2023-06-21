<?php 
  include 'inc_head.php';
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <?php
      if ( $jb_login ) {
    ?>
      <h1>이미 로그인하셨습니다.</h1>
    <?php
      } else {
    ?>
      <h1>로그인</h1>
      <form action="login_result.php" method="POST">
        <input type="text" name="username" minlength = "5"  maxlength = "15" placeholder="Username">
        <input type="password" name="password" minlength = "5"  maxlength = "15" placeholder="Password">
        <button>Submit</button>
      </form>
    <?php
      }
    ?>
  </body>
</html>