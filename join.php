<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

    <h1>회원가입</h1>
    <form action="join_result.php" method="POST">
      <input type="text" name="username" minlength = "5"  maxlength = "15" placeholder="Username">
      <input type="password" name="password" minlength = "5"  maxlength = "15" placeholder="Password">
      <button>Submit</button>
    </form>

  </body>
</html>