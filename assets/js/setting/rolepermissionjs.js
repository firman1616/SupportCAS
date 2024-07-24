$(document).ready(function() {
    tableRolepermission();
    // $('.select2').select2();
    // $('.select22').select2();
    $('#id').val('');
    $('#rolepermissionForm').trigger("reset");

    // tambah data
    $('#save-data').click(function (e) { 
        e.preventDefault();

        Swal.fire({
            icon: 'info',
            title: 'Data Sedang diproses',
            showConfirmButton: false,
            // timer: 3000
        })

        $.ajax({
            data: $('#rolepermissionForm').serialize(),
            url: BASE_URL + "Setting/role_permission/store",
            type: "POST",
            datatype: 'json',
            success: function(data) {
                $('#rolepermissionForm').trigger("reset");
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Data Berhasil disimpan',
                    showConfirmButton: false,
                    timer: 1500
                })
                tableRolepermission();
            },
            error: function(data) {
                console.log('Error:', data);
                $('$save-data').html('Save changes');
            }
        });
     })

    $('body').on('click','.edit',function (e) {
        var id = $(this).data('id');
        $.ajax({
            url: BASE_URL + "Setting/Role_permission/vedit/" + id,
            type: 'GET',
            dataType : 'json',            
            success: function (data) {
                console.log(data);
                $('#id').val(id);
                $('#permission').val(data.permission);
                
            }
        })
    })

    
});

function tableRolepermission() {
    $.ajax({
        url: BASE_URL + "setting/Role_permission/tableRolepermission",
        type: "POST",
        success: function (data) {
            $('#div-table-role-permission').html(data);
            $('#rolepermissionTable').DataTable({
                "processing": true,
                "responsive": true,
            });
        }
    });
}
