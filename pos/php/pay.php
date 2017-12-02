<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'daeunroot1';
    $dbName = 'pos';
    $mysql = mysqli_connect($host, $user, $pw, $dbName);
    if(mysqli_connect_errno()){
      echo "DB 연결 실패 ". mysqli_connect_error();
    }
    mysqli_query($mysql, "set session character_set_connection=utf8;");
    mysqli_query($mysql, "set session character_set_results=utf8;");
    mysqli_query($mysql, "set session character_set_client=utf8;");

    $sql = "select * from goods";
    $result = mysqli_query($mysql, $sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../css/pay.css?version=4">
     <script src="../js/pay.js?version=6" charset="utf-8"></script>
  </head>
  <body>
    <div class="title">
      <h2>주문하기</h2>
    </div>
    <div class="btn_both">
      <div class="fl">
        <button type="button" id="goBackButton" onClick="history.back()">뒤로 가기</button>
      </div>
      <form name="addgoods" action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <select name="goods">
          <?php
            while ($row = mysqli_fetch_array($result))
            {
              echo "
              <option value='$row[price]'>$row[name]</option>
              ";
            }
           ?>
        </select>
        <input type="number" name="quantity" min="1">
        <div class="fl">
          <button type="button" id="submitbutton" onClick="addgood()">상품추가</button>
        </div>
      </form>
      <div class="fr">
        <button type="button" id="cancleOrderButton" onClick="window.location.reload()">주문 취소</button>
      </div>
      <div class="fr">
        <button type="button" id="adduserButton" onClick="openuser()">회원 추가</button>
      </div>
    </div>
<table>
  <tbody id="orderTable">
  <tr>
    <td style="width: 5%;"><input type="checkbox" onclick="selectAll(event.target)"></td>
    <th>상품명</th>
    <th>수량</th>
    <th>가격</th>
  </tr>
  <tr class = "row">
    <td style="width: 5%;"><input type="checkbox" name="item" value="1"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class = "row">
    <td style="width: 5%;"><input type="checkbox" name="item" value="2"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class = "row">
    <td style="width: 5%;"><input type="checkbox" name="item" value="3"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class = "row">
    <td style="width: 5%;"><input type="checkbox" name="item" value="4"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th colspan="2">총 금액</th>
    <th id="totalprice" colspan="2"></th>
  </tr>
  <tr>
    <th colspan="2">할인 금액<button id="pointUseButton" onclick="openmodal()">포인트 사용</button></th>
    <th colspan="2"></th>
  </tr>
  <tr>
    <th colspan="2">최종 금액</th>
    <th colspan="2"></th>
  </tr>
</tbody>
</table>

<div class="btn_both">
  <div class="fl">
    <button type="button" id="deleteGoodButton" onclick="deleteGood()">물품 삭제</button>
  </div>
  <div class="fr">
      <button type="button" id="payButton" onclick="location.href='selectpay.php'">결제</button>
  </div>
</div>

<!-- <button id="myBtn" onclick="openmodal()">Open Modal</button> -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="closemodal()">&times;</span>
    <p>
      <table>
        <tr>
          <th>고객 이름</th>
          <td  id="userName"></td>
        </tr>
        <tr>
          <th>보유 포인트</th>
          <td id="userPoint"></td>
        </tr>
        <tr>
          <th>사용 포인트</th>
          <td  id="userPointSpend"></td>
        </tr>
        <tr>
          <th>사용 후 보유 포인트</th>
          <td  id="newUserPoint"></td>
        </tr>
      </table>
      <div class="insideModal">
        <button type="button" id="canclePointUseButton" onclick="closemodal()">취소</button>
        <button type="button" id="confirmPointUseButton">확인</button>
      </div>
    </p>
  </div>
</div>
</body>
</html>
