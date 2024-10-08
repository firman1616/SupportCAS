$(document).ready(function() {
    tableUser();
    $('.select2').select2();
    $('.select22').select2();
    $('#id').val('');
    $('#userForm').trigger("reset");

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
            data: $('#userForm').serialize(),
            url: BASE_URL + "Setting/user/store",
            type: "POST",
            datatype: 'json',
            success: function(data) {
                $('#userForm').trigger("reset");
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Data Berhasil disimpan',
                    showConfirmButton: false,
                    timer: 1500
                })
                tableUser();
            },
            error: function(data) {
                console.log('Error:', data);
                $('$save-data').html('Save changes');
            }
        });
     })

    //  hapus data
    // delete function
    $('body').on('click', '.delete', function(e) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                var id = $(this).data('id');
                $.ajax({
                    url: BASE_URL + "setting/User/delete/" + id,
                    // data: { id: id },
                    // type: 'DELETE'
                    method: 'POST'
                });                   
                Swal.fire(
                    'Deleted!',
                    'Data berhasil dihapus.',
                    'success'
                )
                tableUser();
            }
        })
    });

    $('body').on('click','.edit',function (e) {
        var id = $(this).data('id');
        $.ajax({
            url: BASE_URL + "Setting/User/vedit/" + id,
            type: 'GET',
            dataType : 'json',            
            success: function (data) {
                console.log(data);
                $('#id').val(id);
                $('#nama_user').val(data.name);
                $('#username').val(data.email);
                $('#dept').val(data.dept_id).trigger('change');
                $('#role').val(data.role_id).trigger('change');
                
            }
        })
    })

    
});

function tableUser() {
    $.ajax({
        url: BASE_URL + "setting/User/tableUser",
        type: "POST",
        success: function (data) {
            $('#div-table-user').html(data);
            $('#userTable').DataTable({
                "processing": true,
                "responsive": true,
            });
        }
    });
}
