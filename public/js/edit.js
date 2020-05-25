window.addEventListener("load", hasiera);

function hasiera() {
    $('.btnDelete').on('click', deleteData);
    $('.btnEdit').on('click', editData);
}


function deleteData() {
    $('#confirmModal').on('show.bs.modal', function(e) {
        var zitaId = $(e.relatedTarget).attr('data-id');
        $(this).find('.zitaNumber').text(zitaId);

        var url = "eliminar/:id";
        url = url.replace(':id', zitaId);
        $("#deleteForm").attr('action', url);

        $('#btnDeleteConfirm').on('click', deleteSubmit);
    });
}

function deleteSubmit() {
    $("#deleteForm").submit();
}



function editData() {
    var hora = document.getElementById("hora");
    var dia = document.getElementById("dia");
    var icon = document.getElementById("iconEdit");
    var btn = document.getElementById("btnEditUser");

    if (hora.readOnly) {
        hora.readOnly = false;
        dia.readOnly = false;

        // Cambiamos el tipo de icono
        icon.className = "fa fa-lg fa-save";
        btn.type = "button";

    } else {
        hora.readOnly = true;
        dia.readOnly = true;

        // Cambiamos el tipo de icono
        icon.className = "fa fa-lg fa-edit";
        btn.type = "submit";
    }
}