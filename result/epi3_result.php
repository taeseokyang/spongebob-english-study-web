<?php 
  include '../inc_head.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <title>english with sponge_bob</title>
        <link rel="stylesheet" type="text/css" href="../css/css.css?2.2.2">
    </head>
    <body>
    <div class="top">
        <?php
            echo $_SESSION[ 'username' ]
        ?>
        
        <?php
            if ( $jb_login ) {
        ?>
        님 안녕하세요
        <a href="../logout.php">로그아웃</a>
        <a href="">마이페이지</a>
        <?php
            }else{
        ?>
        <a href="../join.php">회원가입</a>
        <a href="../login.php">로그인</a>
        <?php
            }
        ?>
        </div>
        <a href="../main.php"><div class="head">
            <img class="headimg" src="../images/spongebob.jpeg">
            <h1>SpongeBob with English</h1>
        </div></a>
        <a href="https://www.netflix.com/watch/81408832?trackId=14277283&tctx=-97%2C-97%2C%2C%2C%2C%2C%2C%2C70155547%2CVideo%3A81408832%2CdetailsPageEpisodePlayButton">
            <img class="netflix" src="../images/netflix.png">
        </a>
        <ul>
            <li>Kim</li>
            <li>Park</li>
            <li>Yang</li>
            <!-- <audio controls>
                <source src="https://drive.google.com/file/d/10sFzFHQpDMYa8DGwxDGW71bZIC9ju6QD/view?usp=drive_link" type="audio/mp4">
                브라우저가 audio 태그를 지원하지 않습니다.
            </audio> -->
            <a href="https://drive.google.com/file/d/10sFzFHQpDMYa8DGwxDGW71bZIC9ju6QD/view?usp=drive_link">
                audio
            </a>
        </ul>
        

        <div class="foot">
            
        </div>
    </body>
</html>