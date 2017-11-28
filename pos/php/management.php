<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../css/management.css?version=2">
    <script src="../js/management.js"></script>
</head>
<body>
    <div class="container">
        <div class="title">
          <h2>관리 페이지</h2>
        </div>
        <div id="backBtn"><button class="btn-1">뒤로 가기 </button></div>
        <div class="content">
            <table>
                <tr>
                    <td>
                        <button class="order">주문 목록</button>
                    </td>
                    <td>
                        <button class="order">외부 주문</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>현금 잔고: <p id="cash" onchange="showCashBalance()">500000원</p></b>
                    </td>
                    <td>
                        <b>매출: <p id="sales" onchange="showSalesBalance()">500000원</p> </b>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
