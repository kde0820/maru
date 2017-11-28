<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../css/pay.css?version=2">
     <script src="../js/pay.js" charset="utf-8"></script>
     <!-- <script src="../jsjquery-3.2.1.min.js"></script>
     <script type="text/javascript">
     $(document).ready(function () {
       //your code here
       $('input[name=_selected_all_]').on('change', function(){
         $('input[name=_selected_]').prop('checked', this.checked);
       });

       var arr = $('input[name=_selected_]:checked').serializeArray().map(function(item) { return item.value });
     });
     </script> -->
  </head>
  <body>
    <div class="title">
      <h2>주문하기</h2>
    </div>
    <div class="btn_both">
      <div class="fl">
        <button type="button" id="goBackButton">뒤로 가기</button>
      </div>
      <div class="fr">
        <button type="button" id="cancleOrderButton">주문 취소</button>
      </div>
    </div>
<table>
  <tr>
    <th colspan="2">날짜</th>
    <th colspan="2">주문번호</th>
  </tr>
  <tr>
    <td style="width: 5%;"><input type="checkbox" name="_selected_all_"></td>
    <th>상품명</th>
    <th>수량</th>
    <th>가격</th>
  </tr>
  <tr>
    <td style="width: 5%;"><input type="checkbox" name="_selected_" value="ROW_1"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td style="width: 5%;"><input type="checkbox" name="_selected_" value="ROW_2"></td>
    <td>2</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td style="width: 5%;"><input type="checkbox" name="_selected_" value="ROW_3"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td style="width: 5%;"><input type="checkbox" name="_selected_" value="ROW_4"></td>
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
</table>

<div class="btn_both">
  <div class="fl">
    <button type="button" id="deleteGoodButton">물품 삭제</button>
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
