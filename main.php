<?php 
  include 'inc_head.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <title>english with sponge_bob</title>
        <link rel="stylesheet" type="text/css" href="css/css.css?2.2.2">
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
        <a href="logout.php">로그아웃</a>
        <a href="">마이페이지</a>
        <?php
            }else{
        ?>
        <a href="join.php">회원가입</a>
        <a href="login.php">로그인</a>
        <?php
            }
        ?>
        </div>
        <a href="main.php"><div class="head">

            <img class="headimg" src="images/spongebob.jpeg">
            <h1>SpongeBob with English</h1>
        </div></a>
        <br>
        <h3>Member</h3>
        
        <ul>
            <li>
                Kim<br>
                <img class="profile" src="images/kim3.png"><br>
                이름 : 김서영<br>
                나이 : 만 20세<br>
                좌우명 : 나는 닌자다<br>

            </li>
            <br>
            <li>
                Park<br>
                <img class="profile" src="images/park.png"><br>
                이름 : 박연서<br>
                나이 : 만 20세<br>
                좌우명 : 해적왕이 될거야<br>
            </li>
            <br>
            <li>
                Yang<br>
                <img class="profile" src="images/yang2.png"><br>
                이름 : 양태석<br>
                나이 : 만 20세<br>
                좌우명 : 월요일 좋아<br>
            </li>
        </ul>
        </br>
        <h3>Script</h3>
        <ul>
            <li><h3><a href="script_page/epi1/epi1.php">episode 1(Accidents Will Happen)</a></h3></li>
            <li><h3><a href="script_page/epi2/epi2.php">episode 2(The Other Patty)</a></h3></li>
        </ul>
        <div class="foot">
            
        </div>
    </body>
</html>