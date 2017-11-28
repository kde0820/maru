<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../css/pay.css?version=2">
     <script src="../js/pay.js?version=4" charset="utf-8"></script>
  </head>
  <body>
    <div class="title">
      <h2>주문하기</h2>
    </div>
    <div class="btn_both">
      <div class="fl">
        <button type="button" id="goBackButton" onClick="history.go(0)">뒤로 가기</button>
      </div>
      <div class="fr">
        <button type="button" id="cancleOrderButton" onClick="window.location.reload()">주문 취소</button>
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
    <th colspan="2"></th>
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
      <button type="button" id="payButton">결제</button>
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
