const flasData = $(".flash-data").data("flashdata");

if (flasData) {
    Swal.fire("Berhasil!", flasData, "success");
}

const flashDataerror = $(".flash-dataerror").data("flashdataerror");
if (flashDataerror) {
    Swal.fire({
        icon: "error",
        title: "Gagal",
        text: flashDataerror,
    });
}

//tombol hapus
$(".tombol-hapus").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");

    Swal.fire({
        title: "Apakah Anda Yakin?",
        text: "Akan Menghapus Data Ini!",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "Tidak",
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Hapus",
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    });
});
