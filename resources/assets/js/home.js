$(document).ready(function () {
    $.ajax({
        type: 'get',
        url: defaultUrl + 'setup/dealer/specific/user',
        success: function (data) {
            if (data.length > 1) {
                $.each(data, function (index, value) {
                    $('select[name="dealer_id"]').append($('<option>', {
                        value: value.id,
                        text: value.nama
                    }));
                });
            } else {
                $('#company-select-box').remove();
                $('#submit-btn').remove();
            }

        },
        error: function (data) {
            swal({
                type: 'error',
                title: 'Mohon refresh kembali halaman ini.'
            });
        }
    });

    $.getJSON("https://talaikis.com/api/quotes/random/", function (data) {
        $('#quote').append('"' + data.quote + '"');
        $('#author').append(data.author);
    });

    $('#set-session-form').submit(function (e) {
        e.preventDefault();
        var _ = $(this);
        $.ajax({
            type: 'post',
            url: _.attr('action'),
            data: _.serializeArray(),
            success: function (data) {
                swal({
                    type: 'success',
                    title: 'Sukses'
                });
                location.reload();
            },
            error: function (data) {
                swal({
                    type: 'info',
                    title: 'Refresh kembali page'
                })
            }
        })
    });
});
