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
            $action = $_GET[ "a" ];
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
        <h2>My Scraps</h2>
        <ul class='script'>
            <a href="myscrap.php?<?php 
                echo "&a=";

                if($action=="y"){echo "n";}else{echo "y";}
                
            
            ?>
            ">
            <?php if($action=="y"){echo "remove action";}else{echo "show action";}?>
            </a>
            <?php
            // <li><span>Mr. Krabs:</span> That's nice. [arms crossed]</li>
                $username = $_SESSION[ 'username' ];
                $q = "SELECT id_num FROM account WHERE id = '$username' ";
                $result = mysqli_query($conn, $q);
                $row = mysqli_fetch_array($result);
                $account_num = $row['id_num'];
                $search = '#'.$account_num.'\_';

                $q = "SELECT id, content, seoson, epi,title, num,cha, scrap, line, substring(scrap,LOCATE(concat('#','$account_num','_'),scrap)+(length('$account_num')+2),LOCATE(concat('_','$account_num','#'),scrap)-(LOCATE(concat('#','$account_num','_'),scrap)+length('$account_num')+2)) as scrap_order  from script where scrap like '%#$account_num\_%' order by cast(scrap_order as unsigned) asc;";
                $result = mysqli_query($conn, $q);
                $total_rows = mysqli_num_rows($result);

                if ($total_rows == 0){
                    ?>
                    <div class="contents">
                        <span class="nothing">nothing yet</span>
                    <div>
                    <?php
                }
                
                while($row = mysqli_fetch_array($result)){
                  ?><li><a href="script.php?<?php 
                  echo "c=";
                  echo $row['content'];
                  echo "&s=";
                  echo $row['seoson'];
                  echo "&e=";
                  echo $row['epi'];
                  echo "&a=y";
                  echo "&t=";
                  echo $row['title'];
                  echo "&n=";
                  echo $row['num'];
              ?>
              "><span class="row"><?php
                  if ($row['cha']!="!action"){
                      ?> <span class="cha"> <?php
                      echo $row['cha'];
                      ?> :</span>

                  <?php
                  }
                  if ($action =="y"){
                      echo $row['line'];
                  }
                  else{
                      if ($row['cha']=="!action"){
                          echo "(This line is only action)";
                      }
                      $s=0;
                      $e=0;
                      while (strlen(strchr($row['line'],'['))!=0){
                          $s = strpos($row['line'], "[");
                          $e = strpos($row['line'], "]"); 
                          $row['line'] = substr($row['line'],0,$s).substr($row['line'],$e+1);
                          
                      }
                      echo  $row['line'];
                      
                  }
                  ?>
                    </span></a>
                    <?php
                    if(strlen(strstr($row['scrap'],'#'.$account_num.'_'))==0){
                    ?>
                    <button id="<?php echo $row['id'] ?>" class="scrap_btn_no" onclick="getPhpFunction('<?php echo $row['id'] ?>');"></button>
                    <?php
                    }else{
                    ?>
                    <button id="<?php echo $row['id'] ?>" class="scrap_btn" onclick="getPhpFunction('<?php echo $row['id'] ?>');"></button>
                    <?php
                    }
                    ?>
                    </li>


                    <?php
                    
                }
                mysqli_close($conn);
            ?>
        </ul>

        <div class="foot">
            Maker : Yang with Kim and Park in Gachon uni / Email : ts.yang.0123@gmail.com / <a href="https://github.com/taeseokyang">Github</a>
        </div>
        <script>
    function getPhpFunction(line_id) {
      $.ajax({
        url: "access_db.php",
        method: "GET",
        data: {
          "call_name": "scrap",
          "id" : line_id
        },
        success(res) {
            
          if(res == '1'){
            document.getElementById(line_id).className = "scrap_btn";
          }else if(res == '0'){
            document.getElementById(line_id).className = "scrap_btn_no";
          }
          console.log(res);
        },
        error(err) {
          console.log(err);
          return;
        }
      });
    }
  </script>
    </body>
</html>