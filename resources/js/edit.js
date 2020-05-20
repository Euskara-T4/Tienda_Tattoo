window.addEventListener("load", hasiera);

function hasiera() {
    document.getElementById("btnEditUser").addEventListener("click", editUser);

    document.getElementById("btnEditPost").addEventListener("click", editpost);

}


function editUser() {
    var izena = document.getElementById("izenaTxt");
    var abizena = document.getElementById("abizenaTxt");
    var email = document.getElementById("emailTxt");
    var password = document.getElementById("passwordTxt");
    var adminRol = document.getElementById("adminRolTxt");
    var icon = document.getElementById("iconEdit");
    var btn = document.getElementById("btnEditUser");


    // Comprobamos si estan para editar
    if (izena.readOnly) {
        izena.readOnly = false;
        abizena.readOnly = false;
        email.readOnly = false;
        password.readOnly = false;
        adminRol.readOnly = false;

        // Cambiamos el tipo de icono
        icon.className = "fa fa-lg fa-save";
        btn.type ="button";       
    
    } else {
        izena.readOnly = true;
        abizena.readOnly = true;
        email.readOnly = true;
        password.readOnly = true;
        adminRol.readOnly = true;

        // Cambiamos el tipo de icono
        icon.className = "fa fa-lg fa-edit";
        btn.type = "submit";  
    }
}
    
function editpost() {
    var titulua = document.getElementById("tituluaTxt");
    var abizena = document.getElementById("erabiltzaile_izTxt");
    var email = document.getElementById("laburpenaTxt");
    var icon = document.getElementById("iconEdit");
    var btn = document.getElementById("btnEditPost");


    // Comprobamos si estan para editar
    if (titulua.readOnly) {
        titulua.readOnly = false;
        erabiltzaile_iz.readOnly = false;
        laburpena.readOnly = false;
        
        // Cambiamos el tipo de icono
        icon.className = "fa fa-lg fa-save";
        btn.type ="button";       
      
    } else {
        izena.readOnly = true;
        erabiltzaile_iz.readOnly = true;
        laburpena.readOnly = true;
        
        // Cambiamos el tipo de icono
        icon.className = "fa fa-lg fa-edit";
        btn.type = "submit";
    }

}