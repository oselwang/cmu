var container = '<div class="col-md-6 col-xs-12" id="penjualan-sp-detail"> ' +
    '<div class="x_panel"> ' +
    '<div class="x_title"> ' +
    '<h2>Penjualan Spare Part' +
    '<small>Info Detail</small> </h2> <div class="clearfix"></div> </div> <div class="x_content"> <br/> <div class="form-group"> <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Code Spare Part <span class="required">*</span> ' +
    '</label> <div class="col-md-5 col-sm-5 col-xs-10"> <input type="text" id="" required="required"class="form-control col-md-7 col-xs-12" name="code"> <input type="hidden" name="detail_part_id"> ' +
    '</div> <div class="col-md-1 col-sm-1 col-xs-2"> <button type="button" class="btn btn-primary" id="find-detail-sp">Cari</button> </div> </div> ' +
    '<div class="form-group"> <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty">Kuantitas Pembelian </label> <div class="col-md-6 col-sm-6 col-xs-12"> <input type="text" id="qty" name="qty" required="required" class="form-control col-md-7 col-xs-12"> ' +
    '</div> </div> <div class="form-group"> <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_date">Harga Jual </label> <div class="col-md-5 col-sm-5 col-xs-10"> <input type="text" disabled id="harga_jual" class="form-control col-md-7 col-xs-12"> ' +
    '</div> <div class="col-md-1 col-sm-1 col-xs-2"> <a href="' + defaultUrl + 'bengkel/detail-sp' + '" class="btn btn-primary">Ubah</a> </div> </div> <div class="form-group"> ' +
    '<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_date">Stock </label> <div class="col-md-6 col-sm-6 col-xs-12"> <input type="text" disabled id="stock" class="form-control col-md-7 col-xs-12"> ' +
    '</div> </div> <div class="form-group"> <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_date">Status </label> <div class="col-md-6 col-sm-6 col-xs-12"> <input type="text" disabled id="status" class="form-control col-md-7 col-xs-12"> ' +
    '</div> </div> <div class="form-group"> <div class="col-md-offset-3 col-sm-offset-3 col-md-9 col-sm-9" id="add-remove-button-container"> ' +
    '<button type="button" class="btn btn-default btn-sm" id="add-spare-part">Tambah Spare Part </button> <button type="button" class="btn btn-default btn-sm" id="remove-spare-part">Hapus Spare Part ' +
    '</button> </div> </div> <div class="ln_solid"></div> </div> </div> </div>';


$(document).ready(function () {

    $('#datatable').DataTable({});

    $('#create-penjualan-sp-form').submit(function (e) {
        e.preventDefault();
        var _ = $(this);
        var data = _.serializeArray();
        console.log(data);
        $.ajax({
            type: 'post',
            data: data,
            url: defaultUrl + 'bengkel/penjualan-sp/create',
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#error-create-penjualan-sp').empty();
                $.each(errors, function (index, value) {
                    $('#error-create-penjualan-sp').removeClass('hidden').append('<li>' + value + '</li>');
                });
                $('html,body').animate({scrollTop: 0}, 'slow');
            }
        });

    }).on('click', '#penjualan-sp-detail #add-spare-part', function (e) {
        e.preventDefault();
        var _ = $(this);
        var container = _.parent().parent().parent().parent().parent();
        container.clone().appendTo('#penjualan-sp-detail-container').find('input[type="text"]').val('');
        _.remove();
    }).on('click', '#penjualan-sp-detail #remove-spare-part', function (e) {
        e.preventDefault();
        var _ = $(this);
        var container = _.parent().parent().parent().parent().parent();
        container.remove();
        if ($('#add-spare-part').length == 0) {
            if ($('#penjualan-sp-detail').length == 0) {
                $('#create-customer-button-container').append('<button class="btn btn-default btn-sm" type="button" id="add-spare-part">Tambah Spare Part</button>');
            } else {
                $('#penjualan-sp-detail:last').find('#add-remove-button-container').prepend('<button class="btn btn-default btn-sm" type="button" id="add-spare-part">Tambah Spare Part</button>');
            }
        }
    }).on('click', '#create-customer-button-container #add-spare-part', function (e) {
        e.preventDefault();
        console.log(container);
        $('#penjualan-sp-detail-container').append(container);
        $(this).remove();
    }).on('click', '#find-customer-bengkel', function (e) {
        e.preventDefault();

        var phone = $('input[name="phone"]').val();
        $.ajax({
            type: 'get',
            url: defaultUrl + 'bengkel/customer-bengkel/phone/' + phone,
            success: function (data) {
                if (jQuery.isEmptyObject(data)) {
                    $('#nama').val('Data tidak ditemukan');
                    $('#alamat').val('Data tidak ditemukan');
                    $('#kota').val('Data tidak ditemukan');
                } else {
                    $('input[name="customer_bengkel_id"]').val(data.id);
                    $('#nama').val(data.nama);
                    $('#alamat').val(data.alamat);
                    $('#kota').val(data.kota.nama);
                }
            }
        });
    }).on('click', '#penjualan-sp-detail #find-detail-sp', function (e) {
        e.preventDefault();

        var parent = $(this).parent().parent().parent();
        var code = parent.find('input[name="code"]').val();
        $.ajax({
            type: 'get',
            url: defaultUrl + 'bengkel/detail-sp/code/' + code,
            success: function (data) {
                if (jQuery.isEmptyObject(data)) {
                    parent.find('#harga_jual').val('Data tidak ditemukan');
                    parent.find('#stock').val('Data tidak ditemukan');
                    parent.find('#status').val('Data tidak ditemukan');
                } else {
                    if (data.stock == 0) {
                        $('html,body').animate({scrollTop: 0}, 'slow');
                        $('#error-create-penjualan-sp').removeClass('hidden').append('<li>Tidak bisa input jika stock 0</li>');
                        $('#submit-button').prop('disabled', true);
                    } else {
                        $('#error-create-penjualan-sp').addClass('hidden');
                        $('#submit-button').prop('disabled', false);
                    }
                    parent.find('input[name="detail_sp_id[]"]').val(data.id);
                    parent.find('#harga_jual').val(data.harga_jual);
                    parent.find('#stock').val(data.stock);
                    parent.find('#status').val(data.status);
                }
            }
        });
    });

    $('#delete-button').on('click', function (e) {
        e.preventDefault();
        swal({
            title: "Apakah kamu yakin?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e63d53",
            confirmButtonText: "Hapus",
            cancelButtonText: "Batal"
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    type: 'post',
                    url: defaultUrl + 'bengkel/penjualan-sp/delete',
                    data: {
                        penjualan_sp_id: $('input[name="penjualan_sp_id"]').val(),
                        _token: $('input[name="_token"]').val()
                    },
                    success: function (data) {
                        window.location.href = defaultUrl + 'bengkel/penjualan-sp';
                    }
                });
            }
        });
    });
});


