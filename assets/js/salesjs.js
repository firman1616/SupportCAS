$(document).ready(function() {
    tableSales();
    $('#id').val('');
    $('#menuForm').trigger("reset");

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
            data: $('#menuForm').serialize(),
            url: BASE_URL + "Setting/menu/store",
            type: "POST",
            datatype: 'json',
            success: function(data) {
                $('#menuForm').trigger("reset");
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Data Berhasil disimpan',
                    showConfirmButton: false,
                    timer: 1500
                })
                tableMeu();
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
                    url: BASE_URL + "setting/menu/delete/" + id,
                    // data: { id: id },
                    // type: 'DELETE'
                    method: 'POST'
                });                   
                Swal.fire(
                    'Deleted!',
                    'Data berhasil dihapus.',
                    'success'
                )
                tableMeu();
            }
        })
    });

    $('body').on('click','.edit',function (e) {
        var id = $(this).data('id');
        $.ajax({
            url: BASE_URL + "Setting/menu/vedit/" + id,
            type: 'GET',
            dataType : 'json',            
            success: function (data) {
                console.log(data);
                $('#id').val(id);
                $('#nama_menu').val(data.nama_menu);
                $('#url_menu').val(data.url_menu);
                $('#modul_id').val(data.modul_id).trigger('change');
                
            }
        })
    })

    
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
