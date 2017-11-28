function opendetail(thisbutton) {
  var classvalue =  thisbutton.parentNode.parentNode.className;
  window.open("orderdetail.php?orderid="+classvalue, "detail", "width=570, height=570");
}

function setNum(name){
  var q = name + "_q";
  var numBox = document.getElementsByName(q);
  var chkBox = document.getElementsByName(name);

  if(chkBox[0].checked){
    console.log("checked");
    numBox[0].disabled = false;
    numBox[0].value = 1;
  }
  else {
    console.log("unchecked");
    numBox[0].disabled = true;
    numBox[0].value = 0;
  }
}
