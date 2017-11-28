<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="../css/cashSettlement.css?version=3">
    <script src="../js/settlement.js"></script>
</head>
<body>
<div  id="box">
    <h2>카드 결제</h2>

    <table>
        <tr>
            <td>카드번호</td>
            <td><input id="card" type="text" name="cardNum" placeholder="0000-0000-0000-0000" onkeyup="javascript:autoHypen()"></td>
        </tr>
        <tr>
            <td>최종금액</td>
            <td id="totalPrice2">2500원</td>
        </tr>
    </table>
    <div class="buttonAlign">
        <button onclick="cardPurchaseFailure()">취소</button>
        <button onclick="cardPurchaseComplete()">완료</button>
    </div>
</div>
</body>
</html>
