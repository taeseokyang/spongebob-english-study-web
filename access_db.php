<?php 
  include 'inc_head.php';


  if (isset($_GET["call_name"])) {
    switch($_GET["call_name"]) {
    case "scrap":
    	echo scrap($jb_login,$_SESSION[ 'username' ],$_GET["id"]);
      return;
    case "add_word":
      echo add_word($jb_login,$_SESSION[ 'username' ],$_GET["word"],$_GET["meaning"]);
      return;
    case "remove_word":
      echo remove_word($jb_login,$_SESSION[ 'username' ],$_GET["num"]);
      return;
    case "add_comment":
      echo add_comment($jb_login,$_SESSION[ 'username' ],$_GET["text"]);
      return;
    case "remove_comment":
      echo remove_comment($jb_login,$_SESSION[ 'username' ],$_GET["id"]);
      return;
  };
  }
  
  function scrap($login,$name,$id)
  {
    if ($login) {
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
        
        $return = "";
        $username = $name;
        $q = "SELECT id_num FROM account WHERE id = '$username' ";
        $result = mysqli_query($conn, $q);
        $row = mysqli_fetch_array($result);
        $account_num = $row['id_num'];

        $q = "SELECT count FROM account WHERE id = '$username' ";
        $result = mysqli_query($conn, $q);
        $row = mysqli_fetch_array($result);
        $count = (int)$row['count']+1;


        $q = "SELECT * FROM script WHERE id = $id ";
        $result = mysqli_query($conn, $q);
        $row = mysqli_fetch_array($result);

        if(strlen(strstr($row['scrap'],'#'.$account_num))==0){
            $scrap = $row['scrap'].'#'.$account_num.'_'.$count.'_'.$account_num.'#';
            $return = "1";
        }
        else{
            $s = strpos($row['scrap'],'#'.$account_num.'_');
            $e = strlen($account_num.'_'.$count.'_'.$account_num);
            $scrap = substr($row['scrap'],0,$s).substr($row['scrap'],$s+$e+2);
            $return = "0";
        }
        $q = "UPDATE script SET scrap = '$scrap' WHERE id = $id" ;
        mysqli_query($conn, $q);

        $q = "UPDATE account SET count = '$count' WHERE id = '$username'" ;
        mysqli_query($conn, $q);

        mysqli_close($conn);
        return $return;
    }else{
        return "'please login'";
    }
    
  }
  function add_word($login,$name,$word,$meaning)
  {
    if ($login) {
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
        
        $username = $name;
        $q = "SELECT id_num FROM account WHERE id = '$username' ";
        $result = mysqli_query($conn, $q);
        $row = mysqli_fetch_array($result);
        $account_num = $row['id_num'];


        $q = "INSERT INTO word VALUES (NULL, $account_num, '$word', '$meaning')";
        $result = mysqli_query($conn, $q);

        mysqli_close($conn);
        return 1;
    }else{
        return "please login";
    }
    
  }
  function remove_word($login,$name,$num)
  {
    if ($login) {
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

        $q = "DELETE FROM word WHERE num=$num";
        $result = mysqli_query($conn, $q);

        mysqli_close($conn);
        return 1;
    }else{
        return "please login";
    }
    
  }
  function add_comment($login,$name,$text)
  {
    if ($login) {
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

        $q = "INSERT INTO comment VALUES (NULL, '$name', '$text',now())";
        $result = mysqli_query($conn, $q);

        mysqli_close($conn);
        return 1;
    }else{
        return "please login";
    }
    
  }
  function remove_comment($login,$name,$id)
  {
    if ($login) {
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

        $q = "DELETE FROM comment WHERE id=$id";
        $result = mysqli_query($conn, $q);
        mysqli_close($conn);
        return 1;
    }else{
        return "please login";
    }
    
  }
?>