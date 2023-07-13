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
        <title>SPENGO</title>
        <link rel="stylesheet" type="text/css" href="css/css.css?3.0.2">
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
        <a href="main.php"><h1>Spengo</h1><h4>Learn english like sponge</h4></a>
        </div>
        <div class="menu">
        
        </div>
        <br>
        <div class="contents">
            <h2>Script</h2>
            <ul>
                <li>
                    <h5>Sponge bob - season 8</h5>
                    <ul>
                        <li>
                            <!-- 8 -->
                            <ul>
                                <li><h3><a href="script.php?c=sponge_bob&s=8&e=1&a=y">Episode 1(Accidents Will Happen)</a></h3></li>
                                <li><h3><a href="script.php?c=sponge_bob&s=8&e=2&a=y">Episode 2(The Other Patty)</a></h3></li>
                                <li><h3><a href="script.php?c=sponge_bob&s=8&e=3&a=y">Episode 3(Drive Thru)</a></h3></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="foot">
            Maker : Yang with Kim and Park in Gachon uni / Email : ts.yang.0123@gmail.com / <a href="https://github.com/taeseokyang">Github</a>
        </div>
    </body>
</html>