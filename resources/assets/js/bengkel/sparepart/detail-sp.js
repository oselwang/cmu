$(document).ready(function () {

    $('#datatable').DataTable({});

    $.ajax({
        type: 'get',
        url: defaultUrl + 'bengkel/kategori-sp/all',
        success: function (data) {
            var _ = $('#create-detail-sp-form');
            var edit_form = $('#edit-detail-sp-form');
            $.each(data, function (index, value) {
                _.find('select[name="kategori_sp_id"]').append($('<option>', {
                    value: value.id,
                    text: value.deskripsi
                }));
                edit_form.find('select[name="kategori_sp_id"]').append($('<option>', {
                    value: value.id,
                    text: value.deskripsi
                }));
            });
        }
    });

    $.ajax({
        type: 'get',
        url: defaultUrl + 'bengkel/tipe-sp/all',
        success: function (data) {
            var _ = $('#create-detail-sp-form');
            var edit_form = $('#edit-detail-sp-form');
            $.each(data, function (index, value) {
                _.find('select[name="tipe_sp_id"]').append($('<option>', {
                    value: value.id,
                    text: value.deskripsi
                }));
                edit_form.find('select[name="tipe_sp_id"]').append($('<option>', {
                    value: value.id,
                    text: value.deskripsi
                }));
            });
        }
    });

    $('#create-detail-sp').on('click', function () {
        $('#create-detail-sp-modal').modal('toggle');
    });

    $('#datatable-body').on('click', '#row #delete', function () {
        var _ = $(this);
        var parent = _.parent();
        var detail_sp_id = parent.parent().find('input').val();
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
                    url: defaultUrl + 'bengkel/detail-sp/delete',
                    data: {
                        detail_sp_id: detail_sp_id,
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
        $('#edit-detail-sp-modal').modal('toggle');
        var form = $('#edit-detail-sp-form');
        form.find('input[name="nama"]').val(parent.find('#nama').text());
        form.find('input[name="stock"]').val(parent.find('#stock').text());
        form.find('input[name="harga_jual"]').val(parent.find('#harga_jual').text());
        form.find('input[name="harga_beli"]').val(parent.find('#harga_beli').text());
        form.find('select[name="kategori_sp_id"]').val(parent.find('input[name="kategori_sp_id"]').val());
        form.find('select[name="tipe_sp_id"]').val(parent.find('input[name="tipe_sp_id"]').val());
        form.find('input[name="detail_sp_id"]').val(parent.find('input[name="detail_sp_id"]').val());
        form.find('select[name="status"]').val(parent.find('#status').text());
    });

    $('#edit-detail-sp-form').on('submit', function (e) {
        e.preventDefault();
        $('#error-edit-detail-sp').addClass('hidden').empty();
        var _ = $(this);
        $.ajax({
            type: 'post',
            url: defaultUrl + 'bengkel/detail-sp/update',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-edit-detail-sp').empty();
                $.each(errors, function (index, value) {
                    $('#error-edit-detail-sp').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#edit-detail-sp-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });

    $('#create-detail-sp-form').on('submit', function (e) {
        e.preventDefault();
        var _ = $(this);
        $('#error-create-detail-sp').addClass('hidden').empty();
        $.ajax({
            type: 'post',
            url: defaultUrl + 'bengkel/detail-sp/create',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-create-detail-sp').empty();
                $.each(errors, function (index, value) {
                    $('#error-create-detail-sp').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#create-detail-sp-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });
});


