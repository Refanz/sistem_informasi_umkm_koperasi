function showAlert2() {
    swal({
        title: "Apakah Anda yakin untuk menghapus data ini?",
        text: "Setelah dihapus, Anda tidak akan dapat memulihkan kembali file ini!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Nice! Data Berhasil Disimpan!", {
                    icon: "success",
                });
            } else {
                swal("Data Anda Aman!");
            }
        });
}

function showAlertSucces() {
    swal({
        title: "Sukses",
        text: "Data berhasil ditambah!",
        icon: "success"
    });
}


