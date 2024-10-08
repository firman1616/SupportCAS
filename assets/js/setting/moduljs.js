$(document).ready(function() {
    tableModul();
    tableaksesModul();
    $('#id').val('');
    $('#modulForm').trigger("reset");

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
            data: $('#modulForm').serialize(),
            url: BASE_URL + "Setting/modul/store",
            type: "POST",
            datatype: 'json',
            success: function(data) {
                $('#modulForm').trigger("reset");
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Data Berhasil disimpan',
                    showConfirmButton: false,
                    timer: 1500
                })
                tableModul();
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
                    url: BASE_URL + "setting/modul/delete/" + id,
                    // data: { id: id },
                    // type: 'DELETE'
                    method: 'POST'
                });                   
                Swal.fire(
                    'Deleted!',
                    'Data berhasil dihapus.',
                    'success'
                )
                tableModul();
            }
        })
    });

    $('body').on('click','.edit',function (e) {
        var id = $(this).data('id');
        $.ajax({
            url: BASE_URL + "Setting/modul/vedit/" + id,
            type: 'GET',
            dataType : 'json',            
            success: function (data) {
                console.log(data);
                $('#id').val(id);
                $('#nama_modul').val(data.nama_modul);
                $('#url_modul').val(data.url_modul);
                $('#icon_modul').val(data.icon_modul);
                $('#seq_modul').val(data.seq_modul);
                $('#status').val(data.status).trigger('change');
                
            }
        })
    })

    
});

function tableModul() {
    $.ajax({
        url: BASE_URL + "setting/modul/tableModul",
        type: "POST",
        success: function (data) {
            $('#div-table-modul').html(data);
            $('#modulTable').DataTable({
                "processing": true,
                "responsive": true,
            });
        }
    });
}

function tableaksesModul() {
    $.ajax({
        url: BASE_URL + "setting/modul/tableaksesModul",
        type: "POST",
        success: function (data) {
            $('#div-table-akses-modul').html(data);
            $('#modulaksesTable').DataTable({
                "processing": true,
                "responsive": true,
            });
        }
    });
}
