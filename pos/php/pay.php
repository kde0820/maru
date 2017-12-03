<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'daeunroot1';
    $dbName = 'pos';
    $mysql = mysqli_connect($host, $user, $pw, $dbName);
    if(mysqli_connect_errno()){
      echo "DB 연결 실패 ". mysqli_connect_error();
    }
    $sql = "select * from user";
    $result = mysqli_query($mysql, $sql);
?>
<!DOCTYPE html>
<html>
  <head> <base target="_self"/>
    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../css/pay.css?version=2">
     <script src="../js/pay.js?version=4" charset="utf-8"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script>




     </script>
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
    <th colspan="2">할인 금액<button id="pointUseButton" onclick="openPopUp()">포인트 사용</button></th>
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
    <div>
      <form method="post" name="searchForm" action="<?=$_SERVER['PHP_SELF']?>">
        <input type="text" name="searchID" id="searchID">
        <button type="button" onclick="search()">검색</button>
        <script type="text/javascript">
          function search(){
            document.searchForm.submit();
            <?php
            $action = '';
            if(isset($_POST['action']))
             $action = $_POST['action'];

            //폼이 입력되었을 때 처리부
            if($action == 'form_submit') {
              echo '<xmp>';
              print_r($_POST);
              echo '</xmp>';

              exit;
            }
            ?>
          }
        </script>
      </form>
      <!-- <?php
      $action = '';
      if(isset($_POST['action'])){
        $action = $_POST['action'];
        echo '2';
      }else{
        echo 'error';
      }
      if($action == 'form_submit'){
        echo '<xmp>';
        print_r($_POST);
        echo '</xmp>';
        while ($row = mysqli_fetch_array($result))
        {
          $point = $row["point"];
          $id = $row["id"];
          if(array_key_exists('searchID', $_POST ) && $_POST['searchID']==$id){

            // echo "
            // <div>$row[point]</div>
            // ";
          }
        }
      }
      ?> -->
    </div>

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
