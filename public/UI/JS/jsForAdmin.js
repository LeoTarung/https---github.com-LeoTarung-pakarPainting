function updateRelasi(reject) {
    $.get(
        "/partial/modal/relasi" + "/" + reject, {},
        function(data) {
            $("#ModalrelasiLabel").html("Edit Relasi " + reject); //Untuk kasih judul di modal
            $("#Modalrelasi").modal("show"); //kalo ID pake "#" kalo class pake "."
            $('#Modalrelasi .modal-body').load("/partial/modal/relasi" + "/" + reject);
        }
    );
}