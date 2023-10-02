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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/css.css?5.5.0">
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
        <a class="top_text" href="join.php">회원 가입</a>
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
            <div class="main">
                To visitors</br></br>
                Hi! Do you want to learn english? Then watch Sponge bob! </br>
                Our site provide sponge bob english scripts for learn english. </br>
                If you make account and do login </br>
                then you can use scrap and Vocabulary note function! </br>
                Thank you for visit our web site!</br>
                We hope you to get help through this!</br>
                <span>From SPENGO.</span>
                

            </div>
            <h2>Scripts</h2>
            <ul>
                <li>
                    <h5>Sponge bob - season 8</h5>
                    <ul>
                        <li>
                            <!-- 8 -->
                            <ul class="main_epi">
                                <li><h3><a href="script.php?c=sponge_bob&s=8&e=1&a=y&t=Accidents Will Happen">Episode 1(Accidents Will Happen)</a></h3></li>
                                <li><h3><a href="script.php?c=sponge_bob&s=8&e=2&a=y&t=The Other Patty">Episode 2(The Other Patty)</a></h3></li>
                                <li><h3><a href="script.php?c=sponge_bob&s=8&e=3&a=y&t=Drive Thru">Episode 3(Drive Thru)</a></h3></li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class = 'comment'>
                <h6>Comment</h6>
                <span class="comment_name">
                <?php
                if ( $jb_login ) {
                    echo $_SESSION[ 'username' ];
                }else{
                    echo 'SPENGO';
                }
                ?>
                </span>
                <?php
                if ( $jb_login ) {
                ?>
                <input id="comment_text" class="comment_text" type="text" name="c" minlength = "1"  maxlength = "490" placeholder="Write a comment here">
                <?php
                }else{
                ?> 
                <input id="comment_text" class="comment_text" type="text" name="c" minlength = "1"  maxlength = "490" placeholder="Please login" disabled>
                <?php
                }
                ?>
                <button class="comment_btn" onclick="add_comment();">></button>
                <ul>
                <?php
                $q = "SELECT *  from comment order by id desc limit 5;";
                $result = mysqli_query($conn, $q);
                $total_rows = mysqli_num_rows($result);
                while($row = mysqli_fetch_array($result)){
                  ?><li><span class="row">
                    <span class="name"> 
                      <?php
                      echo $row['name'];
                      ?> 
                    </span>
                    <span class="text"> 
                      <?php
                      echo $row['text'];
                      ?>
                    </span>
                    <span class="date"> 
                      <?php
                      echo $row['date'];
                      ?>
                    </span>
                    </span>

                    <?php
                    if ( $jb_login ) {
                        if ($row['name'] == $_SESSION[ 'username' ]){
                    ?>
                        <button class="comment_remove" onclick="remove_comment(<?php echo $row['id'] ?>);">X</button>
                    <?php
                        }
                    }
                    ?>
                  </li>
                <?php
                }
                ?>
                </ul>
            </div>
            
        </div>
        <div class="foot">
            <a href="people.php">Maker : Yang with Kim and Park in Gachon uni</a> / Email : ts.yang.0123@gmail.com / <a href="https://github.com/taeseokyang">Github</a>
        </div>
        <script>
        function remove_comment(id) {
            $.ajax({
              url: "access_db.php",
              method: "GET",
              data: {
                "call_name": "remove_comment",
                "id" : id
              },
              success(res) {
                location.reload();
                console.log(res);
              },
              error(err) {
                console.log(err);
                return;
              }
            });

            

          }
        function add_comment() {
            text = document.getElementById('comment_text').value;
            if (text == ""){
              alert("nope");
            }else{

            $.ajax({
              url: "access_db.php",
              method: "GET",
              data: {
                "call_name": "add_comment",
                "text" : text
              },
              success(res) {
                // alert("Added!");
                location.reload();
                console.log(res);
              },
              error(err) {
                console.log(err);
                return;
              }
            });

            }

          }
          </script>
    </body>
</html>
