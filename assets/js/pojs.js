$(document).ready(function() {
    tablePO();
    
    $('.update').on('click', function() {
        var oms = $(this).data('id'); // Ambil ID OMS dari atribut data-id
        updateAprov(oms); // Panggil fungsi updateAprov dan kirim ID OMS sebagai parameter
    });
    // console.log(oms);
    

    function updateAprov(oms) {
        $.ajax({
            url: BASE_URL + "approve/update_state", // URL menuju controller
            type: 'POST',
            data: { oms: oms },
            success: function(data) {
                console.log(data.oms);
                
                // Jika berhasil, reload halaman atau tampilkan pesan
                alert('Data berhasil diupdate!');
                location.reload(); // Reload halaman untuk melihat perubahan
                // tablePO();
            },
            error: function(xhr, status, error) {
                // Tampilkan pesan error jika terjadi kesalahan
                console.error(xhr.responseText);
                alert('Terjadi kesalahan saat mengupdate data.');
            }
        });
    }

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
