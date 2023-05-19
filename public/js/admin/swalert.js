function showAlert2(id) {
    Swal.fire({
        title: "Apakah Anda yakin?",
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: 'OK',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('hapus-form-'+id).submit();
        }
    })
}

function showAlert3(data, id) {
    Swal.fire({
        title: "Apakah Anda yakin?",
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: 'OK',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('hapus-'+data+'-'+id).submit();
        }
    })
}

function showAlertSucces() {
    swal({
        title: "Sukses",
        text: "Data berhasil ditambah!",
        icon: "success"
    });
}


