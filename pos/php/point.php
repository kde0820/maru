<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'daeunroot1';
    $dbName = 'pos';
    $mysql = mysqli_connect($host, $user, $pw, $dbName);
    if(mysqli_connect_errno()){
      echo "DB 연결 실패 ". mysqli_connect_error();
    }
    $parameter = $_POST['searchID'];
    $sql = "select * from user where id =".$parameter;
    $result = mysqli_query($mysql, $sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../css/pay.css?version=2">
     <script src="../js/point.js?version=2" charset="utf-8"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>
  <body  onload="refresh()">
    <div class="">
      <table>
        <tr>
          <th>고객 이름</th>
          <td class="pointTable"></td>
        </tr>
        <tr>
          <th>보유 포인트</th>
          <td class="pointTable"></td>
        </tr>
        <tr>
          <th>사용 포인트</th>
          <td class="pointTable" onfocusout="calculate()">
            <input type="text" id="pointUse" value="0" sytle="width:100%;">
          </td>
        </tr>
        <tr>
          <th>사용 후 보유 포인트</th>
          <td class="pointTable"></td>
        </tr>
      </table>
    </div>
    <div class="insideModal">
      <button type="button" id="canclePointUseButton" onclick="closePopUp(event)">취소</button>
      <button type="button" id="confirmPointUseButton">확인</button>
    </div>

  </body>
  <script type="text/javascript">
    function refresh(){

      var pointTable = document.getElementsByClassName('pointTable');
      <?php
      $id = '';
      $point = '';

      $result = mysqli_fetch_array($result);
      $id = $result['id'];
      $point = $result['point'];
      ?>
      console.log(1);
      pointTable[0].innerHTML = '<?=$id?>';
      pointTable[1].innerHTML = '<?=$point?>';
      pointTable[3].innerHTML = '<?=$point?>';
    }
  </script>
</html>
