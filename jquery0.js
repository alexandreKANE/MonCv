var btn = document.getElementById("myBtn");
var rea = document.getElementById("rea");
vat int1 = document.getElementById("int1");


// When the user clicks on the button, open the modal
btn.onclick = function() {
    int1.style.display = "block";
}

span.onclick = function() {
    rea.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
