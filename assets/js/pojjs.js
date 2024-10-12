$(document).ready(function() {
    tablePOJ();
});

function tablePOJ() {
    $.ajax({
        url: BASE_URL + "POJ/tablePOJ",
        type: "POST",
        success: function (data) {
            $('#div-table-poj').html(data);
            $('#pojTable').DataTable({
                "processing": true,
                "responsive": true,
                "order": [[1, "desc"]]
            });
        }
    });
}
