var count = 4;
var i=0;

function selectAll(target){
  var item = document.getElementsByName("item");
  if(target.checked == true){
    uncheckAll(item);
  }
  else{
    checkAll(item);
  }

}

function uncheckAll(item){
  for(i=0;i<count;i++){
    item[i].checked = true;
  }
}

function checkAll(item){
  for(i=0;i<count;i++){
    item[i].checked = false;
  }
}

function deleteGood(){
  var item = document.getElementsByName("item");
  for(i = 0; i<count; i++){
    if(count>0 && item[i].checked){
      var row = document.getElementsByClassName("row");
      row = row[i];
      console.log("test1 : "+count);
      if(count==1){
        alert("hi");
      }
      else{
        console.log("test2 : "+count);
        var parent = document.getElementById("orderTable");
        parent.removeChild(row);
        console.log(parent);
        count-=1;
      }
    }
  }
}

// Get the modal
// Get the button that opens the modal
var btn = document.getElementById("pointUseButton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
function openmodal() {
    var modal = document.getElementById('myModal');
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closemodal() {
    var modal = document.getElementById('myModal');
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    var modal = document.getElementById('myModal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
