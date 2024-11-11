$(document).ready(function() {
    tablePRJ();
    
});

function tablePRJ() {
    $('#prjTable').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "ajax": {
            "url": BASE_URL + "PRJ/tablePRJ",
            "type": "POST",
        },
        "columnDefs": [
            { 
                "targets": [ 1 ], 
                "orderable": true, 
            },
        ],
    });
}
