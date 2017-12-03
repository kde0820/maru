<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'daeunroot1';
    $dbName = 'pos';
    $mysql = mysqli_connect($host, $user, $pw, $dbName);
    if(mysqli_connect_errno()){
      echo "DB 연결 실패 ". mysqli_connect_error();
    }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../css/pay.css?version=2">
     <script src="../js/point.js?version=2" charset="utf-8"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>
  <body>
    <div>
      <form method="post" name="searchForm" action="point.php">
        <input type="text" name="searchID" id="searchID">
        <!-- <input type="hidden" class="userTable" name="searchedID" value"">
        <input type="hidden" class="userTable" name="searchedPoint" value=""> -->
        <button type="submit">검색</button>
        <button type="button" id="canclePointUseButton" onclick="closePopUp(event)">취소</button>
      </form>

  </body>
</html>
