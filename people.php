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
        <div class="contents">
        <h2>People</h2>
        <ul>
            <li>
                <div class='people'>
                <div class='people_img'>
                    <img class="profile" src="images/kim3.png">
                </div>
                <div class='people_txt'>
                    <h3>Name : Seo-Yeong Kim</h3><br>
                    <h3>Age : 19</h3><br>
                    <h3>Motto : I am Ninja.</h3><br>
                </div> 
                </div> 
            </li>
            <br>
            <li>
            <div class='people'>
                <div class='people_img'>
                    <img class="profile" src="images/park.png">
                </div>
                <div class='people_txt'>
                <h3>Name : Yeon-Seo Park</h3><br>
                <h3>Age : 19</h3><br>
                <h3>Motto : I will be King of Pirate.</h3><br>
                </div>  
                </div> 
            </li>
            <br>
            <li>
            <div class='people'>
                <div class='people_img'>
                    <img class="profile" src="images/yang2.png">
                </div>
                <div class='people_txt'>
                <h3>Name : Tae-Seok Yang</h3><br>
                <h3>Age : 20</h3><br>
                <h3>Motto : I like monday.</h3><br>
                </div>  
                </div> 
            </li>
            <br>
            <li>
            <div class='people'>
                <div class='people_img'>
                    <img class="profile" src="images/choi.png">
                </div>
                <div class='people_txt'>
                <h3>Name : Ji-Woo Choi</h3><br>
                <h3>Age : 20</h3><br>
                <h3>Motto : Life is health and happy.</h3><br>
                </div>  
                </div> 
            </li>
        </ul>
        </div>
        <div class="foot">
            <a href="people.php">Maker : Yang with Kim and Park in Gachon uni</a> / Email : ts.yang.0123@gmail.com / <a href="https://github.com/taeseokyang">Github</a>
        </div>
    </body>
</html>