<div class="modal fade" id="edit-jenis-buku-modal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="edit-jenis-buku-modal-wrapper">
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
                        <ul class="alert alert-danger hidden" id="error-edit-jenis-buku">

                        </ul>
                    </div>

                    <form id="edit-jenis-buku-form" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 quetion-wrapper" style="font-size: 16px;">
                                <input type="hidden" name="jenis_buku_id" value="">
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Deksripsi
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="deskripsi">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Total Kartu
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="total_kartu">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Total Oli
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="total_oli">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Harga
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="harga">
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
