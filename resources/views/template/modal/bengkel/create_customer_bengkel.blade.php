<div class="modal fade" id="create-customer-bengkel-modal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="create-customer-bengkel-modal-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <a style="text-decoration: none;font-size: 16px;color:black" class="text-center">Buat
                                    Customer Bengkel</a>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true"><i class="typcn typcn-times-outline"
                                                                  style="font-size: 20px"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-divider col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 30px"></div>

                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <ul class="alert alert-danger hidden" id="error-create-customer-bengkel">

                        </ul>
                    </div>

                    <form id="create-customer-bengkel-form" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 quetion-wrapper" style="font-size: 16px;">
                                {{--<input type="hidden" name="ingredient_id" value="">--}}
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Nama
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="nama">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Alamat
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="alamat">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Kode Pos
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="kode_pos">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Tanggal Lahir
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Gender
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select name="gender" class="form-control">
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    No Telepon
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="telephone_number">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    No Hp
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="cellphone_number">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    No Identitas
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="id_number">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    No Rangka
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="no_rangka">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    No Polisi
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="no_polisi">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    No Mesin
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="no_mesin">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Tahun
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="tahun">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Tipe Konsumen
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select class="form-control" name="tipe_konsumen">
                                        <option value="Individual">Individual</option>
                                        <option value="Corporate">Corporate</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    No KSG
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="no_ksg">
                                    <br>
                                </div>

                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Kota
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select name="kota_id" class="form-control">

                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Kelurahan
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select name="kelurahan_id" class="form-control">

                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Kecamatan
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select name="kecamatan_id" class="form-control">

                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Unit
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select name="unit_id" class="form-control">

                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Warna
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select name="warna_id" class="form-control">

                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Jenis Buku
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select name="jenis_buku_id" class="form-control">

                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Tanggal Expired STNK
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="date" class="form-control" name="stnk_expiry_date">
                                    <br>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <br>
                                <center>
                                    <button type="submit" class="btn btn-success"
                                            id="mark-cooked-btn">
                                        Submit
                                    </button>
                                    <button class="btn btn-default" data-dismiss="modal" aria-label="Close"
                                            type="button">
                                        Batal
                                    </button>
                                </center>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
