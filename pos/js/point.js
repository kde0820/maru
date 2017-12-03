var pointTable = document.getElementsByClassName('pointTable');

function closePopUp(target){
  window.close(target);
}

function calculate(){
  var x = parseInt(pointTable[1].innerHTML);
  var y = parseInt(document.getElementById('pointUse').value);
  pointTable[3].innerHTML = parseInt(x-y);
}
