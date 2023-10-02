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
        <h2>My words</h2>
        <div class="word_top"><span class="word">word</span><span class="word">meaning</span></div>
        <ul class='words'>
            <?php
            // <li><span>Mr. Krabs:</span> That's nice. [arms crossed]</li>
                $username = $_SESSION[ 'username' ];
                $q = "SELECT id_num FROM account WHERE id = '$username' ";
                $result = mysqli_query($conn, $q);
                $row = mysqli_fetch_array($result);
                $account_num = $row['id_num'];
                
                $q = "SELECT *  from word where account = $account_num";
                $result = mysqli_query($conn, $q);
                $total_rows = mysqli_num_rows($result);
                while($row = mysqli_fetch_array($result)){
                  ?><li><span class="row">
                    <span class="word"> 
                      <?php
                      echo $row['eng'];
                      ?> 
                    </span>
                    <span class="meaning"> 
                      <?php
                      echo $row['kor'];
                      ?>
                    </span>
                    </span>
                  
  
                  <button class="word_remove" onclick="remove_word('<?php echo $row['num'] ?>');">X</button>
                  
                  </li>


                  <?php
                  
              }
                if ($total_rows == 0){
                    ?>
                    <div class="contents">
                        <span class="nothing">nothing yet</span>
                    <div>
                <?php
              }
              ?>
              <div class = "word_add_box">
              <h6>Add word</h6>
                <input id="word" class="word_add" type="text" name="w" minlength = "1"  maxlength = "25" placeholder="Word">
                <input id="meaning" class="word_add" type="text" name="m" minlength = "1"  maxlength = "40" placeholder="Meaning">

                <button class="word_add_btn" onclick="add_word();">Add</button>
              </div>
              <?php
                
                
                
                mysqli_close($conn);
            ?>
           
        </ul>
        
        <div class="foot">
            Maker : Yang with Kim and Park in Gachon uni / Email : ts.yang.0123@gmail.com / <a href="https://github.com/taeseokyang">Github</a>
        </div>
        <script>
          function add_word() {
            word = document.getElementById('word').value;
            meaning = document.getElementById('meaning').value;
            if (word == "" || meaning == ""){
              alert("nope");
            }else{
          
            $.ajax({
              url: "access_db.php",
              method: "GET",
              data: {
                "call_name": "add_word",
                "word" : word,
                "meaning" : meaning
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
          function remove_word(num) {
          
            $.ajax({
              url: "access_db.php",
              method: "GET",
              data: {
                "call_name": "remove_word",
                "num" : num
              },
              success(res) {
                // alert("good");
                location.reload();
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