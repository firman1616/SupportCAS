$(document).ready(function() {
    tableSales();    
});

function tableSales() {
    $.ajax({
        url: BASE_URL + "sales/tableSales",
        type: "POST",
        success: function (data) {
            $('#div-table-sales').html(data);
            $('#salesTable').DataTable({
                "processing": true,
                "responsive": true,
            });
        }
    });
}
