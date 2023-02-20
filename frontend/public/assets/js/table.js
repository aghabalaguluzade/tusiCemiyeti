let tBody = document.getElementById('user_tbody');
let modal = document.getElementById('myModal');
let tr = tBody.getElementsByTagName('TR');
let span = document.getElementsByClassName("close")[0];


// When the user clicks on the button, open the modal 
for (let i = 0; i < tr.length; i++) {
  tr[i].onclick = function() {
    modal.style.display = "block";
    console.log(this.firstElementChild.innerHTML + ' Selected'); // копирование значения
  };
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
document.onkeydown = function(evt) {
    if (evt.keyCode == 27) {
        modal.style.display = "none";
    }
};