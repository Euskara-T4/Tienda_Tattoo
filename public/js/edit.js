window.addEventListener("load", hasiera);

function hasiera() {
    // Format Calendar
    var dates = document.getElementsByClassName("myDate");
    var dateValue = document.getElementsByClassName("dateValue");
    for (var i = 0; i < dates.length; i++) {
        var str = dateValue[i].value;
        var date = str.split(" ", 1);
        dates[i].value = date;
    }


    $('.btnDelete').on('click', deleteData);

    var iconsEditPeti = document.getElementsByClassName("iconEdit");
    for (var i = 0; i < iconsEditPeti.length; i++) {
        iconsEditPeti[i].addEventListener("click", editData);
    }

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


function editData(e) {
    var icon = e.target;
    var zita = e.target.parentNode.className;

    var hora = document.getElementsByClassName(zita)[0];
    var dia = document.getElementsByClassName(zita)[1];

    if (hora.readOnly) {
        hora.readOnly = false;
        dia.readOnly = false;

        icon.className = "fa fa-lg fa-save";
        icon.parentNode.type = "button";

    } else {
        hora.readOnly = true;
        dia.readOnly = true;

        icon.className = "fa fa-lg fa-edit";
        icon.parentNode.type = "submit";
    }
}