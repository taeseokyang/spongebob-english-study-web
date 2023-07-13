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
        <link rel="stylesheet" type="text/css" href="css/css.css?3.0.1">
    </head>
    <body>
        <div class="top">  
            <?php

                // $host = "sql101.infinityfree.com";
                // $user = "if0_34463025";
                // $pw = "fdBe0YiPtB0";
                // $dbName = "if0_34463025_spongenglish";
            
                $host = "127.0.0.1";
                $user = "root";
                $pw = "password";
                $dbName = "spengo";
            
                $conn = new mysqli($host, $user, $pw, $dbName);
                
                /* DB 연결 확인 */
                if($conn){ 
            
                }
                else{ die( 'Could not connect: ' . mysqli_error($conn) ); }
              
                $content = $_GET[ "c" ];
                $seoson = $_GET[ "s" ];
                $epi = $_GET[ "e" ];
                $action = $_GET[ "a" ];
                if ( $jb_login ) {
            ?>
            <a href="mypage.php">
            <?php
                    echo $_SESSION[ 'username' ]  ;
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
        <a href="https://www.netflix.com/watch/81408833?trackId=14277283&tctx=-97%2C-97%2C%2C%2C%2C%2C%2C%2C70155547%2CVideo%3A81408833%2CdetailsPageEpisodePlayButton">
            <img class="netflix" src="images/netflix.png">
        </a>
        <!-- c=sponge_bob&s=8&e=3&a=y -->
        <a href="script.php?<?php 
            echo "c=";
            echo $content;
            echo "&s=";
            echo $seoson;
            echo "&e=";
            echo $epi;
            echo "&a=";

            if($action=="y"){echo "n";}else{echo "y";}
            
        
        ?>
        ">
        <?php if($action=="y"){echo "remove action";}else{echo "show action";}?>
        </a>
        <ul class='script'>
            <?php
            // <li><span>Mr. Krabs:</span> That's nice. [arms crossed]</li>
                $q = "SELECT * FROM script WHERE content = '$content' and seoson = '$seoson' and epi = '$epi' ";
                $result = mysqli_query($conn, $q);


                while($row = mysqli_fetch_array($result)){
                    ?><li><?php
                    if ($row['cha']!="!action"){
                        ?> <span> <?php
                        echo $row['cha'];
                        ?> :</span>

                    <?php
                    }
                    if ($action =="y"){
                        echo $row['line'];
                    }
                    else{
                        $s=0;
                        $e=0;
                        while (strlen(strchr($row['line'],'['))!=0){
                            $s = strpos($row['line'], "[");
                            $e = strpos($row['line'], "]"); 
                            $row['line'] = substr($row['line'],0,$s).substr($row['line'],$e+1);
                            
                        }
                        echo  $row['line'];
                        
                    }
                    ?></li><?php
                    
                }
      
                mysqli_close($conn);
            ?>
        </ul>

        <div class="foot">
            
        </div>
    </body>
</html>