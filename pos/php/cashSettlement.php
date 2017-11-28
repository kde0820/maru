<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="../css/cashSettlement.css?version=2">
    <script src="../js/settlement.js"></script>
</head>
<body>
<div class="w3-container" id="box">
    <h2>현금 결제</h2>

    <table>
        <tr>
            <td >받은 금액</td>
            <td><input type="number" id="givenPrice" onchange="calculation()"></td>
        </tr>
        <tr>
            <td>최종금액</td>
            <td id="totalPrice">2500</td>
        </tr>
        <tr>
            <td>거스름돈</td>
            <td id ="change">0</td>
        </tr>
    </table>
    <div class="buttonAlign"><button onclick="cashPurchaseFailure()" >취소</button><button onclick="cashPurchaseComplete()">완료</button></div>
</div>

</body>
</html>
