<?php 
  include 'inc_head.php';
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
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

      $username = $_POST[ 'username' ];
      $password = $_POST[ 'password' ];
      
      $q = "SELECT * FROM account WHERE id = '$username'";
      $result = mysqli_query($conn, $q);
      $row = mysqli_fetch_array($result);
      if ($row !=null and $password == $row['password']) {
        $_SESSION[ 'username' ] = $username;
        Header("Location:index.php");
      } else {
        $code = 1;
        include 'alert.php';
      }
      
      mysqli_close($conn);
    ?>
  </body>
</html>