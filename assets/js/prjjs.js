$(document).ready(function() {
    tablePRJ();
    // $('.btn-detail').on('click', function() {
    //     $('#detailModal .modal-body').html('<p>Loading...</p>'); // Mengosongkan dan menambahkan teks "Loading..." saat tombol diklik
    //     $('#detailModal').modal('show'); // Menampilkan modal
    // });
});

function tablePRJ() {
    $.ajax({
        url: BASE_URL + "prj/tablePRJ",
        type: "POST",
        success: function (data) {
            $('#div-table-prj').html(data);
            $('#prjTable').DataTable({
                "processing": true,
                "responsive": true,
                "order": [[0, "desc"]]
            });
        }
    });
}
