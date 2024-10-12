$(document).ready(function() {
    tablePR();
    // $('.btn-detail').on('click', function() {
    //     $('#detailModal .modal-body').html('<p>Loading...</p>'); // Mengosongkan dan menambahkan teks "Loading..." saat tombol diklik
    //     $('#detailModal').modal('show'); // Menampilkan modal
    // });
});

function tablePR() {
    $.ajax({
        url: BASE_URL + "pr_approve/tablePR",
        type: "POST",
        success: function (data) {
            $('#div-table-pr').html(data);
            $('#prTable').DataTable({
                "processing": true,
                "responsive": true,
                "order": [[1, "desc"]]
            });
        }
    });
}
