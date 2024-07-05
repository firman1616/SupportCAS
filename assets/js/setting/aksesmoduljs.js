$('.form-check-input').on('click', function() {
    const modul_id = $(this).data('modul');
    const role_id = $(this).data('role');

    console.log(modul_id);

    // var modul = $(this).val();

    $.ajax({
        url: BASE_URL + "setting/Modul/change_akses_modul",
        type: 'post',
        data: {
            modul_id: modul_id,
            role_id: role_id
        },
        success: function(data) {
            console.log(data.role_id);
            // document.location.href = BASE_URL + "setting/Modul/akses_modul/" + role_id
        }
    })
});