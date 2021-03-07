// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
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

// Get the PopI
var popI = document.getElementById("Popup");

// Get the button that opens the PopI
var btn = document.getElementById("Inscription");

// Get the <span> element that closes the PopI
var span = document.getElementsByClassName("btnClose")[0];

// When the user clicks on the button, open the PopI
btn.onclick = function() {
    popI.style.display = "block";
}

// When the user clicks on <span> (x), close the PopI
span.onclick = function() {
    popI.style.display = "none";
}

// When the user clicks anywhere outside of the PopI, close it
window.onclick = function(event) {
    if (event.target == popI) {
        popI.style.display = "none";
    }
}