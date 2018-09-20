$(document).ready(function () {

    $('#datatable').DataTable({});

    $('#create-tipe-sp').on('click', function () {
        $('#create-tipe-sp-modal').modal('toggle');
    });

    $('#datatable-body').on('click', '#row #delete', function () {
        var _ = $(this);
        var parent = _.parent();
        var tipe_sp_id = parent.parent().find('input').val();
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
                    url: defaultUrl + 'bengkel/tipe-sp/delete',
                    data: {
                        tipe_sp_id: tipe_sp_id,
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
        $('#edit-tipe-sp-modal').modal('toggle');
        var form = $('#edit-tipe-sp-form');
        form.find('input[name="deskripsi"]').val(parent.find('#deskripsi').text());
        form.find('input[name="tipe_sp_id"]').val(parent.find('input[name="tipe_sp_id"]').val());
    });

    $('#edit-tipe-sp-form').on('submit', function (e) {
        e.preventDefault();
        $('#error-edit-tipe-sp').addClass('hidden').empty();
        var _ = $(this);
        $.ajax({
            type: 'post',
            url: defaultUrl + 'bengkel/tipe-sp/update',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-edit-tipe-sp').empty();
                $.each(errors, function (index, value) {
                    $('#error-edit-tipe-sp').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#edit-tipe-sp-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });

    $('#create-tipe-sp-form').on('submit', function (e) {
        e.preventDefault();
        var _ = $(this);
        $('#error-create-tipe-sp').addClass('hidden').empty();
        $.ajax({
            type: 'post',
            url: defaultUrl + 'bengkel/tipe-sp/create',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-create-tipe-sp').empty();
                $.each(errors, function (index, value) {
                    $('#error-create-tipe-sp').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#create-tipe-sp-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });
});


