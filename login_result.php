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
      $host = "sql101.infinityfree.com";
      $user = "if0_34463025";
      $pw = "fdBe0YiPtB0";
      $dbName = "if0_34463025_spongenglish";

      $conn = new mysqli($host, $user, $pw, $dbName);
      
      /* DB 연결 확인 */
    if($conn){ echo "Connection established"; }
    else{ die( 'Could not connect: ' . mysqli_error($conn) ); }

      $username = $_POST[ 'username' ];
      $password = $_POST[ 'password' ];
      
      $q = "SELECT * FROM account WHERE id = '$username'";
      $result = mysqli_query($conn, $q);
      $row = mysqli_fetch_array($result);
      if ($row !=null and $password == $row['pw']) {
        $_SESSION[ 'username' ] = $username;
        Header("Location:main.php");
      } else {
        $code = 1;
        include 'alert.php';
      }
      
      mysqli_close($conn);
    ?>
  </body>
</html>