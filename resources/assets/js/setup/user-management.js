$(document).ready(function () {

    $('#datatable').DataTable({});

    $.ajax({
        type: 'get',
        url: defaultUrl + 'setup/role/all',
        success: function (data) {
            var _ = $('#create-user-form');
            var edit_form = $('#edit-user-form');
            $.each(data, function (index, value) {
                _.find('select[name="role_id"]').append($('<option>', {
                    value: value.id,
                    text: value.nama
                }));
                edit_form.find('select[name="role_id"]').append($('<option>', {
                    value: value.id,
                    text: value.nama
                }));
            });
        }
    });

    $('#create-user').on('click', function () {
        $('#create-user-modal').modal('toggle');
    });

    $('#datatable-body').on('click', '#row #delete', function () {
        var _ = $(this);
        var parent = _.parent();
        var user_id = parent.parent().find('input[name="user_id"]').val();
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
                    url: defaultUrl + 'setup/user-management/delete',
                    data: {
                        user_id: user_id,
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
        $('#edit-user-modal').modal('toggle');
        var form = $('#edit-user-form');
        $.ajax({
            type: 'get',
            url: defaultUrl + 'setup/user-management/' + parent.find('input[name="user_id"]').val(),
            success: function (data) {
                form.find('input[name="dealer_id[]"]').prop('checked', false);
                form.find('input[name="action_id[]"]').prop('checked', false);
                $.each(data.dealer, function (index, value) {
                    form.find('input[name="dealer_id[]"][value=' + value.id + ']').prop('checked', true);
                });
                $.each(data.action, function (index, value) {
                    form.find('input[name="action_id[]"][value=' + value.id + ']').prop('checked', true);
                });
                form.find('select[name="role_id"]').val(data.role_id);
            }
        });
        form.find('input[name="nama"]').val(parent.find('#nama').text());
        form.find('input[name="user_id"]').val(parent.find('input[name="user_id"]').val());
        form.find('input[name="username"]').val(parent.find('#username').text());
        form.find('input[name="password"]').val(parent.find('#password').text());
        form.find('input[name="tipe_jasa_id"]').val(parent.find('input[name="tipe_jasa_id"]').val());
    });

    $('#edit-user-form').on('submit', function (e) {
        e.preventDefault();
        $('#error-edit-user').addClass('hidden').empty();
        var _ = $(this);
        $.ajax({
            type: 'post',
            url: defaultUrl + 'setup/user-management/update',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-edit-user').empty();
                $.each(errors, function (index, value) {
                    $('#error-edit-user').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#edit-user-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });

    $('#create-user-form').on('submit', function (e) {
        e.preventDefault();
        var _ = $(this);
        $('#error-create-user').addClass('hidden').empty();
        $.ajax({
            type: 'post',
            url: defaultUrl + 'setup/user-management/create',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-create-user').empty();
                $.each(errors, function (index, value) {
                    $('#error-create-user').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#create-user-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });
});


