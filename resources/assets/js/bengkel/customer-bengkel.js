$(document).ready(function () {

    $('#datatable').DataTable({});

    $.ajax({
        type: 'get',
        url: defaultUrl + 'setup/kota/all',
        success: function (data) {
            var _ = $('#create-customer-bengkel-form');
            var edit_form = $('#edit-customer-bengkel-form');
            $.each(data, function (index, value) {
                _.find('select[name="kota_id"]').append($('<option>', {
                    value: value.id,
                    text: value.nama
                }));
                edit_form.find('select[name="kota_id"]').append($('<option>', {
                    value: value.id,
                    text: value.nama
                }));
            });
        }
    });

    $.ajax({
        type: 'get',
        url: defaultUrl + 'setup/warna/all',
        success: function (data) {
            var _ = $('#create-customer-bengkel-form');
            var edit_form = $('#edit-customer-bengkel-form');
            $.each(data, function (index, value) {
                _.find('select[name="warna_id"]').append($('<option>', {
                    value: value.id,
                    text: value.nick
                }));
                edit_form.find('select[name="warna_id"]').append($('<option>', {
                    value: value.id,
                    text: value.nick
                }));
            });
        }
    });

    $.ajax({
        type: 'get',
        url: defaultUrl + 'setup/kelurahan/all',
        success: function (data) {
            var _ = $('#create-customer-bengkel-form');
            var edit_form = $('#edit-customer-bengkel-form');
            $.each(data, function (index, value) {
                _.find('select[name="kelurahan_id"]').append($('<option>', {
                    value: value.id,
                    text: value.nama
                }));
                edit_form.find('select[name="kelurahan_id"]').append($('<option>', {
                    value: value.id,
                    text: value.nama
                }));
            });
        }
    });

    $.ajax({
        type: 'get',
        url: defaultUrl + 'setup/kecamatan/all',
        success: function (data) {
            var _ = $('#create-customer-bengkel-form');
            var edit_form = $('#edit-customer-bengkel-form');
            $.each(data, function (index, value) {
                _.find('select[name="kecamatan_id"]').append($('<option>', {
                    value: value.id,
                    text: value.nama
                }));
                edit_form.find('select[name="kecamatan_id"]').append($('<option>', {
                    value: value.id,
                    text: value.nama
                }));
            });
        }
    });

    $.ajax({
        type: 'get',
        url: defaultUrl + 'setup/unit/all',
        success: function (data) {
            var _ = $('#create-customer-bengkel-form');
            var edit_form = $('#edit-customer-bengkel-form');
            $.each(data, function (index, value) {
                _.find('select[name="unit_id"]').append($('<option>', {
                    value: value.id,
                    text: value.nick
                }));
                edit_form.find('select[name="unit_id"]').append($('<option>', {
                    value: value.id,
                    text: value.nick
                }));
            });
        }
    });

    $.ajax({
        type: 'get',
        url: defaultUrl + 'bengkel/jenis-buku/all',
        success: function (data) {
            var _ = $('#create-customer-bengkel-form');
            var edit_form = $('#edit-customer-bengkel-form');
            $.each(data, function (index, value) {
                _.find('select[name="jenis_buku_id"]').append($('<option>', {
                    value: value.id,
                    text: value.deskripsi
                }));
                edit_form.find('select[name="jenis_buku_id"]').append($('<option>', {
                    value: value.id,
                    text: value.deskripsi
                }));
            });
        }
    });

    $('#create-customer-bengkel').on('click', function () {
        $('#create-customer-bengkel-modal').modal('toggle');
    });

    $('#datatable-body').on('click', '#row #delete', function () {
        var _ = $(this);
        var parent = _.parent();
        var customer_bengkel_id = parent.parent().find('input').val();
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
                    url: 'customer-bengkel/delete',
                    data: {
                        customer_bengkel_id: customer_bengkel_id,
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
        $('#edit-customer-bengkel-modal').modal('toggle');
        var form = $('#edit-customer-bengkel-form');
        var customer_bengkel_id = parent.find('input[name="customer_bengkel_id"]').val();
        $.ajax({
            type: 'get',
            url: defaultUrl + 'bengkel/customer-bengkel/' + customer_bengkel_id,
            success: function (data) {
                form.find('input[name="nama"]').val(data.nama);
                form.find('input[name="alamat"]').val(data.alamat);
                form.find('input[name="no_rangka"]').val(data.no_rangka);
                form.find('input[name="no_polisi"]').val(data.no_polisi);
                form.find('input[name="no_mesin"]').val(data.no_mesin);
                form.find('input[name="tahun"]').val(data.tahun);
                form.find('input[name="no_ksg"]').val(data.no_ksg);
                form.find('input[name="kode_pos"]').val(data.kode_pos);
                form.find('input[name="no_polisi"]').val(data.no_polisi);
                form.find('input[name="tanggal_lahir"]').val(data.tanggal_lahir);
                form.find('input[name="telephone_number"]').val(data.telephone_number);
                form.find('input[name="cellphone_number"]').val(data.cellphone_number);
                form.find('input[name="id_number"]').val(data.id_number);
                form.find('input[name="stnk_expiry_date"]').val(data.stnk_expiry_date);
                form.find('select[name="kota_id"]').val(data.kota.id);
                form.find('select[name="kelurahan_id"]').val(data.kelurahan.id);
                form.find('select[name="kecamatan_id"]').val(data.kecamatan.id);
                form.find('select[name="unit_id"]').val(data.unit.id);
                form.find('select[name="warna_id"]').val(data.warna.id);
                form.find('select[name="jenis_buku_id"]').val(data.jenis_buku.id);
                form.find('select[name="gender"]').val(data.gender);
                form.find('select[name="tipe_konsumen"]').val(data.tipe_konsumen);
                form.find('input[name="customer_bengkel_id"]').val(parent.find('input[name="customer_bengkel_id"]').val());
            }
        });
    });

    $('#edit-customer-bengkel-form').on('submit', function (e) {
        e.preventDefault();
        $('#error-edit-customer-bengkel').addClass('hidden').empty();
        var _ = $(this);
        $.ajax({
            type: 'post',
            url: 'customer-bengkel/update',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-edit-customer-bengkel').empty();
                $.each(errors, function (index, value) {
                    $('#error-edit-customer-bengkel').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#edit-customer-bengkel-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });

    $('#create-customer-bengkel-form').on('submit', function (e) {
        e.preventDefault();
        var _ = $(this);
        $('#error-create-customer-bengkel').addClass('hidden').empty();
        $.ajax({
            type: 'post',
            url: defaultUrl + 'bengkel/customer-bengkel/create',
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-create-customer-bengkel').empty();
                $.each(errors, function (index, value) {
                    $('#error-create-customer-bengkel').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('#create-customer-bengkel-modal').animate({scrollTop: 0}, 'slow');
            }
        });
    });
});


