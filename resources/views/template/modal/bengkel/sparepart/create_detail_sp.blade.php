<div class="modal fade" id="create-detail-sp-modal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="create-detail-sp-modal-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <a style="text-decoration: none;font-size: 16px;color:black" class="text-center">Buat
                                    Detail Spare Part</a>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true"><i class="typcn typcn-times-outline"
                                                                  style="font-size: 20px"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-divider col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 30px"></div>

                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <ul class="alert alert-danger hidden" id="error-create-detail-sp">

                        </ul>
                    </div>

                    <form id="create-detail-sp-form" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 quetion-wrapper" style="font-size: 16px;">

                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Nama
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="nama">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Stock
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="number" class="form-control" name="stock">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Harga Beli
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="number" class="form-control" name="harga_beli">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Harga Jual
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="number" class="form-control" name="harga_jual">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Kategori
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select class="form-control" name="kategori_sp_id"></select>
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Tipe
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select class="form-control" name="tipe_sp_id">
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Status
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select class="form-control" name="status">
                                        <option value="activated">Activated</option>
                                        <option value="deactivated">Deactivated</option>
                                    </select>
                                    <br>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <br>
                                <center>
                                    <button type="submit" class="btn btn-success">
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
