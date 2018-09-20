$(document).ready(function () {

    $('#datatable').DataTable({});

    $.ajax({
        type: 'get',
        url: defaultUrl + 'bengkel/tipe-jasa/all',
        success: function (data) {
            var _ = $('#create-detail-jasa-form');
            var edit_form = $('#edit-detail-jasa-form');
            $.each(data, function (index, value) {
                _.find('select[name="tipe_jasa_id"]').append($('<option>', {
                    value: value.id,
                    text: value.deskripsi
                }));
                edit_form.find('select[name="tipe_jasa_id"]').append($('<option>', {
                    value: value.id,
                    text: value.deskripsi
                }));
            });
        }
    });

    $('#create-detail-jasa').on('click', function () {
        $('#create-detail-jasa-modal').modal('toggle');
    });

    $('#datatable-body').on('click', '#row #delete', function () {
        var _ = $(this);
        var parent = _.parent();
        var detail_jasa_id = parent.parent().find('input').val();
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
                    url: 'detail-jasa/delete',
                    data: {
                        detail_jasa_id: detail_jasa_id,
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
        $('#edit-detail-jasa-modal').modal('toggle');
        var form = $('#edit-detail-jasa-form');
        var detail_jasa_id = parent.find('input[name="detail_jasa_id"]').val();
        form.find('input[name="deskripsi"]').val(parent.find('#deskripsi').text());
        form.find('input[name="harga"]').val(parent.find('#harga').text());
        form.find('input[name="detail_jasa_id"]').val(detail_jasa_id);
        $.ajax({
            type: 'get',
            url: defaultUrl + 'bengkel/detail-jasa/' + detail_jasa_id,
            success: function (data) {
                form.find('select[name="tipe_jasa_id"]').val(data.tipe_jasa.id);
                form.find('input[name="estimasi_jam"]').val(data.estimasi_jam);
                form.find('input[name="estimasi_menit"]').val(data.estimasi_menit);
                form.find('input[name="estimasi_detik"]').val(data.estimasi_detik);
            }
        })
    });

    $('#edit-detail-jasa-form').on('submit', function (e) {
        e.preventDefault();
        $('#error-edit-detail-jasa').addClass('hidden').empty();
        var _ = $(this);
        $.ajax({
            type: 'post',
            url: 'detail-jasa/update',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-edit-detail-jasa').empty();
                $.each(errors, function (index, value) {
                    $('#error-edit-detail-jasa').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#edit-detail-jasa-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });

    $('#create-detail-jasa-form').on('submit', function (e) {
        e.preventDefault();
        var _ = $(this);
        $('#error-create-detail-jasa').addClass('hidden').empty();
        $.ajax({
            type: 'post',
            url: defaultUrl + 'bengkel/detail-jasa/create',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-create-detail-jasa').empty();
                $.each(errors, function (index, value) {
                    $('#error-create-detail-jasa').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#create-detail-jasa-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });
});


