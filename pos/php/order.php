<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'daeunroot1';
    $dbName = 'pos';
    $mysql = mysqli_connect($host, $user, $pw, $dbName);
    if(mysqli_connect_errno()){
      echo "DB 연결 실패 ". mysqli_connect_error();
    }
    $sql = "select * from orderlist";
    $result = mysqli_query($mysql, $sql);
    $payment = array('','현금', '카드');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>주문 목록</title>
    <link href="../css/order.css" rel="stylesheet">
    <script type="text/javascript" src="../js/order.js?version=2"></script>
  </head>
  <body>
    <div class="container">
      <div class="title">
        <h2>주문 목록</h2>
      </div>
      <div class="btn_both">
      	<div class="fl">
      		<button type="button" id="back">뒤로 가기</button>
      	</div>
      	<div class="fr">
      		<button type="button" id="cancle">주문 취소</button>
      	</div>
      </div>
      <table id="orderbox">
        <tbody>
        <tr>
          <th>선택</th>
          <th>번호</th>
          <th>주문일자</th>
          <th>결제금액</th>
          <th>결제수단</th>
          <th>주문상세조회</th>
        </tr>
        <?php
          while($row = mysqli_fetch_array($result))
          {
            $pay = $row['payment'];
            echo "
            <tr class='$row[oid]'>
              <td><input type='checkbox' name='$row[oid]'></td>
              <td>$row[oid]</td>
              <td>$row[date]</td>
              <td>$row[totalprice]</td>
              <td>$payment[$pay]</td>
              <td><button type='button' id='detail' onclick='opendetail(this)'>조회</button></td>
            </tr>
            ";
          }
        ?>
        <tbody>
      </table>
    </div>
  </body>
</html>
