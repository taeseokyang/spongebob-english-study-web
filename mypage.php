<?php 
  include 'inc_head.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">  
        <meta charset="UTF-8">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>SPENGO</title>
        <link rel="stylesheet" type="text/css" href="css/css.css?3.0.0">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    </head>
    <body>
        <div class="top">  
        <?php
            if ( $jb_login ) {
        ?>
        <a href="mypage.php">
        <?php
                echo $_SESSION[ 'username' ]
        ?>
        </a>
        <a href="logout.php">로그아웃</a>
        <?php
            }else{
        ?>
        <a class="top_text" href="join.php">회원가입</a>
        <a class="top_text" href="login.php">로그인</a>
        <?php
            }
        ?>
        </div>
        <div class="head">
        <a href="index.php"><h1>Spengo</h1><h4>Learn english like sponge</h4></a>
        </div>
        <div class="menu">
        
        </div>
        <br>

        <a href="myscrap.php?&a=y"><div class="mypage_box">
            My scraps
        </div></a>
        <a href="myword.php"><div class="mypage_box">
            My words
        </div></a>

        

        <div class="foot">
            Maker : Yang with Kim and Park in Gachon uni / Email : ts.yang.0123@gmail.com / <a href="https://github.com/taeseokyang">Github</a>
        </div>
    </body>
</html>