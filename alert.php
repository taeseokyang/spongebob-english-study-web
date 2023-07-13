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
        <link rel="stylesheet" type="text/css" href="css/css.css?3.0.13">
    </head>
  <body>
  <div class="top">
    </div>
  <div class="head">
        <a href="main.php"><h1>Spengo</h1><h4>Learn english like sponge</h4></a>
        </div>
        <div class="menu">
        
    </div>
    <div class="contents">
  <?php
    if ($code == '0') {
  ?>
    <h2>이미 있는 사용자 입니다.</h2>
    <a href="join.php">돌아 가기</a>
  <?php
    } else if($code == '1') {
  ?>
    <h2>사용자 이름 또는 비밀번호가 틀렸습니다.</h2>
    <a href="login.php">돌아 가기</a>
  <?php
    }else if($code == '2') {
  ?>
    <h2>회원가입이 완료되었습니다.</h2>
    <a href="main.php">메인 페이지로 가기</a>
  <?php
    }
  ?>
  </div>
  <div class="foot">
            Maker : Yang with Kim and Park in Gachon uni / Email : ts.yang.0123@gmail.com
        </div>
  </body>
</html>