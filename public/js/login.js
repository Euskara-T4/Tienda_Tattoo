window.addEventListener("load", hasiera);

function hasiera() {
    // Get the modal
    var modal = document.getElementById('loginModal');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    
    if(document.getElementById("btnLogin")){
        document.getElementById("btnLogin").addEventListener("click", log);
    }
}

function log(){
    document.getElementById('loginModal').style.display='block';
    style="width:auto;"
}
