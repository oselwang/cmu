$(document).ready(function () {

    $('#datatable').DataTable({});

    $('#create-tipe-jasa').on('click', function () {
        $('#create-tipe-jasa-modal').modal('toggle');
    });

    $('#datatable-body').on('click', '#row #delete', function () {
        var _ = $(this);
        var parent = _.parent();
        var tipe_jasa_id = parent.parent().find('input').val();
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
                    url: 'tipe-jasa/delete',
                    data: {
                        tipe_jasa_id: tipe_jasa_id,
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
        $('#edit-tipe-jasa-modal').modal('toggle');
        var form = $('#edit-tipe-jasa-form');
        form.find('input[name="deskripsi"]').val(parent.find('#deskripsi').text());
        form.find('input[name="tipe_jasa_id"]').val(parent.find('input[name="tipe_jasa_id"]').val());
    });

    $('#edit-tipe-jasa-form').on('submit', function (e) {
        e.preventDefault();
        $('#error-edit-tipe-jasa').addClass('hidden').empty();
        var _ = $(this);
        $.ajax({
            type: 'post',
            url: 'tipe-jasa/update',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-edit-tipe-jasa').empty();
                $.each(errors, function (index, value) {
                    $('#error-edit-tipe-jasa').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#edit-tipe-jasa-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });

    $('#create-tipe-jasa-form').on('submit', function (e) {
        e.preventDefault();
        var _ = $(this);
        $('#error-create-tipe-jasa').addClass('hidden').empty();
        $.ajax({
            type: 'post',
            url: defaultUrl + 'bengkel/tipe-jasa/create',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-create-tipe-jasa').empty();
                $.each(errors, function (index, value) {
                    $('#error-create-tipe-jasa').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#create-tipe-jasa-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });
});


