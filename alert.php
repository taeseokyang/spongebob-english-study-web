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
    if ($code == '0') {
  ?>
    이미 있는 사용자 입니다.
    <a href="join.php">돌아 가기</a>
  <?php
    } else if($code == '1') {
  ?>
    사용자 이름 또는 비밀번호가 틀렸습니다.
    <a href="login.php">돌아 가기</a>
  <?php
    }else if($code == '2') {
  ?>
    회원가입이 완료되었습니다.
    <a href="main.php">메인 페이지로 가기</a>
  <?php
    }
  ?>
  </body>
</html>