$(document).ready(function () {

    $('#datatable').DataTable({});

    $('#create-jenis-buku').on('click', function () {
        $('#create-jenis-buku-modal').modal('toggle');
    });

    $('#datatable-body').on('click', '#row #delete', function () {
        var _ = $(this);
        var parent = _.parent();
        var jenis_buku_id = parent.find('input').val();
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
                    url: 'jenis-buku/delete',
                    data: {
                        jenis_buku_id: jenis_buku_id,
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
        $('#edit-jenis-buku-modal').modal('toggle');
        var form = $('#edit-jenis-buku-form');
        form.find('input[name="deskripsi"]').val(parent.find('#deskripsi').text());
        form.find('input[name="total_oli"]').val(parent.find('#total_oli').text());
        form.find('input[name="total_kartu"]').val(parent.find('#total_kartu').text());
        form.find('input[name="harga"]').val(parent.find('#harga').text());
        form.find('input[name="jenis_buku_id"]').val(parent.find('input[name="jenis_buku_id"]').val());
    });

    $('#edit-jenis-buku-form').on('submit', function (e) {
        e.preventDefault();
        $('#error-edit-jenis-buku').addClass('hidden').empty();
        var _ = $(this);
        $.ajax({
            type: 'post',
            url: 'jenis-buku/update',
            data: _.serializeArray(),
            success: function (data) {
                // location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-edit-jenis-buku').empty();
                $.each(errors, function (index, value) {
                    $('#error-edit-jenis-buku').removeClass('hidden').append('<li>' + value + '</li>');
                });
            }
        });
    });

    $('#create-jenis-buku-form').on('submit', function (e) {
        e.preventDefault();
        var _ = $(this);
        $('#error-create-jenis-buku').addClass('hidden').empty();
        $.ajax({
            type: 'post',
            url: 'jenis-buku/create',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-create-jenis-buku').empty();
                $.each(errors, function (index, value) {
                    $('#error-create-jenis-buku').removeClass('hidden').append('<li>' + value + '</li>');
                });
            }
        });
    });
});


