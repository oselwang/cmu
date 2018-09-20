<div class="modal fade" id="edit-user-modal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="edit-user-modal-wrapper">
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
                        <ul class="alert alert-danger hidden" id="error-edit-user">

                        </ul>
                    </div>

                    <form id="edit-user-form" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12" style="font-size: 16px;">
                                <input type="hidden" name="user_id">
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Nama
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="nama">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Username
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="username">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Password
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="password">
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Role
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <select name="role_id" class="form-control">

                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Hak Akses
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="checkbox" value="2" name="action_id[]"> Create
                                    <input type="checkbox" value="1" name="action_id[]"> Update
                                    <input type="checkbox" value="3" name="action_id[]"> View
                                    <input type="checkbox" value="4" name="action_id[]"> Report
                                    <input type="checkbox" value="5" name="action_id[]"> Delete
                                    <br>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12" style="font-weight: bold">
                                    Dealer
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <input type="checkbox" value="1" name="dealer_id[]"> HO - CMU HOLDING<br>
                                    <input type="checkbox" value="2" name="dealer_id[]"> CMURGT - CV. Cipta Mitra
                                    Usaha-Rengat<br>
                                    <input type="checkbox" value="3" name="dealer_id[]"> CMUBLS - CV. Cipta Mitra
                                    Usaha-Belilas<br>
                                    <input type="checkbox" value="4" name="dealer_id[]"> CMUAIR - CV. Cipta Mitra
                                    Usaha-Air Molek<br>
                                    <input type="checkbox" value="5" name="dealer_id[]"> CMUPRN - CV. Cipta Mitra
                                    Usaha-Peranap<br>
                                    <input type="checkbox" value="6" name="dealer_id[]"> CMUBTG - CV. Cipta Mitra
                                    Usaha-Batanggangsal<br>
                                </div>
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
