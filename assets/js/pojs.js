$(document).ready(function() {
    tablePO();    
});

function tablePO() {
    $.ajax({
        url: BASE_URL + "approve/tablePO",
        type: "POST",
        success: function (data) {
            $('#div-table-po').html(data);
            $('#poTable').DataTable({
                "processing": true,
                "responsive": true,
            });
        }
    });
}
