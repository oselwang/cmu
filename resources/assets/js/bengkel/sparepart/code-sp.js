$(document).ready(function () {

    $('#datatable').DataTable({});

    $.ajax({
        type: 'get',
        url: defaultUrl + 'bengkel/kategori-sp/all',
        success: function (data) {
            var _ = $('#create-code-sp-form');
            var edit_form = $('#edit-code-sp-form');
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
            var _ = $('#create-code-sp-form');
            var edit_form = $('#edit-code-sp-form');
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

    $('#create-code-sp').on('click', function () {
        $('#create-code-sp-modal').modal('toggle');
    });

    $('#datatable-body').on('click', '#row #delete', function () {
        var _ = $(this);
        var parent = _.parent();
        var code_sp_id = parent.parent().find('input').val();
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
                    url: defaultUrl + 'bengkel/code-sp/delete',
                    data: {
                        code_sp_id: code_sp_id,
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
        $('#edit-code-sp-modal').modal('toggle');
        var form = $('#edit-code-sp-form');
        form.find('input[name="deskripsi"]').val(parent.find('#deskripsi').text());
        form.find('input[name="identifier"]').val(parent.find('#identifier').text());
        form.find('select[name="kategori_sp_id"]').val(parent.find('input[name="kategori_sp_id"]').val());
        form.find('select[name="tipe_sp_id"]').val(parent.find('input[name="tipe_sp_id"]').val());
        form.find('input[name="code_sp_id"]').val(parent.find('input[name="code_sp_id"]').val());
        form.find('select[name="status"]').val(parent.find('#status').text());
    });

    $('#edit-code-sp-form').on('submit', function (e) {
        e.preventDefault();
        $('#error-edit-code-sp').addClass('hidden').empty();
        var _ = $(this);
        $.ajax({
            type: 'post',
            url: defaultUrl + 'bengkel/code-sp/update',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-edit-code-sp').empty();
                $.each(errors, function (index, value) {
                    $('#error-edit-code-sp').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#edit-code-sp-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });

    $('#create-code-sp-form').on('submit', function (e) {
        e.preventDefault();
        var _ = $(this);
        $('#error-create-code-sp').addClass('hidden').empty();
        $.ajax({
            type: 'post',
            url: defaultUrl + 'bengkel/code-sp/create',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-create-code-sp').empty();
                $.each(errors, function (index, value) {
                    $('#error-create-code-sp').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#create-code-sp-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });
});


