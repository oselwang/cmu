$(document).ready(function () {

    $('#datatable').DataTable({});

    $('#create-kategori-sp').on('click', function () {
        $('#create-kategori-sp-modal').modal('toggle');
    });

    $('#datatable-body').on('click', '#row #delete', function () {
        var _ = $(this);
        var parent = _.parent();
        var kategori_sp_id = parent.parent().find('input').val();
        swal({
            title: "Apakah kamu yakin?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e63d53",
            confirmButtonText: "Iya",
            cancelButtonText: "Tidak"
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    type: 'post',
                    url: defaultUrl + 'bengkel/kategori-sp/delete',
                    data: {
                        kategori_sp_id: kategori_sp_id,
                        _token: $('input[name="_token"]').val()
                    },
                    success: function (data) {
                        location.reload();
                    },
                    error: function (data) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (index, value) {
                            swal({
                                title: "Maaf.",
                                text: value,
                                type: "error",
                                showConfirmButton: true
                            });
                        });
                    }
                });
            }
        });
    }).on('click', '#row #edit', function () {
        var _ = $(this);
        var parent = _.parent().parent();
        $('#edit-kategori-sp-modal').modal('toggle');
        var form = $('#edit-kategori-sp-form');
        form.find('input[name="deskripsi"]').val(parent.find('#deskripsi').text());
        form.find('input[name="kategori_sp_id"]').val(parent.find('input[name="kategori_sp_id"]').val());
    });

    $('#edit-kategori-sp-form').on('submit', function (e) {
        e.preventDefault();
        $('#error-edit-kategori-sp').addClass('hidden').empty();
        var _ = $(this);
        $.ajax({
            type: 'post',
            url: defaultUrl + 'bengkel/kategori-sp/update',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-edit-kategori-sp').empty();
                $.each(errors, function (index, value) {
                    $('#error-edit-kategori-sp').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#edit-kategori-sp-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });

    $('#create-kategori-sp-form').on('submit', function (e) {
        e.preventDefault();
        var _ = $(this);
        $('#error-create-kategori-sp').addClass('hidden').empty();
        $.ajax({
            type: 'post',
            url: defaultUrl + 'bengkel/kategori-sp/create',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-create-kategori-sp').empty();
                $.each(errors, function (index, value) {
                    $('#error-create-kategori-sp').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#create-kategori-sp-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });
});


