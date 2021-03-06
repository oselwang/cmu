<div class="modal fade" id="edit-detail-jasa-modal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="edit-detail-jasa-modal-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <a style="text-decoration: none;font-size: 16px;color:black" class="text-center">Edit
                                    Jenis Buku</a>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true"><i class="typcn typcn-times-outline"
                                                                  style="font-size: 20px"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-divider col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 30px"></div>


                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <ul class="alert alert-danger hidden" id="error-edit-detail-jasa">

                        </ul>
                    </div>

                    <form id="edit-detail-jasa-form" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 quetion-wrapper" style="font-size: 16px;">
                                <input type="hidden" name="detail_jasa_id" value="">
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Deksripsi
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="deskripsi">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Tipe jasa
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select name="tipe_jasa_id" class="form-control">

                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Estimasi
                                </div>
                                <div class="col-lg-3 col-md-3 col-xs-3 clearfix">
                                    <input type="text" class="form-control" name="estimasi_jam">
                                </div>

                                <div class="col-lg-3 col-md-3 col-xs-3 clearfix">
                                    <input type="text" class="form-control" name="estimasi_menit">
                                </div>
                                <div class="col-lg-3 col-md-3 col-xs-3 clearfix">
                                    <input type="text" class="form-control" name="estimasi_detik">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Harga
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="number" class="form-control" name="harga" min="0">
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
