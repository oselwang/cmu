@extends('template.container')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <form id="create-penjualan-sp-form" class="form-horizontal form-label-left">
                {{csrf_field()}}
                <input type="hidden" value="{{Auth::id()}}" name="user_id">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Penjualan Spare Part
                                    <small>Info Umum</small>
                                </h2>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <br/>

                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <ul class="alert alert-danger hidden" id="error-create-penjualan-sp">

                                    </ul>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_no">
                                        Ref No <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" disabled id="ref_no" required="required"
                                               class="form-control col-md-7 col-xs-12" name="ref_no"
                                               value="auto by system">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_date">Ref Date
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" id="ref_date" name="ref_date" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">
                                        No Telephone Customer <span class="required">*</span>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-10">
                                        <input type="text" id="phone" required="required"
                                               class="form-control col-md-7 col-xs-12" name="phone"
                                               placeholder="No. Handphone atau No. Telfon rumah">
                                        <input type="hidden" name="customer_bengkel_id">
                                    </div>

                                    <div class="col-md-1 col-sm-1 col-xs-2">
                                        <button type="button" class="btn btn-primary" id="find-customer-bengkel">Cari
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">
                                        Nama <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" disabled id="nama"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">
                                        Alamat <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" disabled id="alamat"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kota">
                                        Kota <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" disabled id="kota"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-3 col-sm-offset-3 col-md-6 col-sm-6"
                                         id="create-customer-button-container">
                                        <a href="{{url('bengkel/customer-bengkel')}}" class="btn btn-default btn-sm">Buat
                                            Customer Baru</a>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="penjualan-sp-detail-container">
                    <div class="col-md-6 col-xs-12" id="penjualan-sp-detail">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Penjualan Spare Part
                                    <small>Info Detail</small>
                                </h2>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <br/>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                        Code Spare Part <span class="required">*</span>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-10">
                                        <input type="text" id="" required="required"
                                               class="form-control col-md-7 col-xs-12" name="code">
                                        <input type="hidden" name="detail_sp_id[]">
                                    </div>

                                    <div class="col-md-1 col-sm-1 col-xs-2">
                                        <button type="button" class="btn btn-primary" id="find-detail-sp">Cari</button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty">Kuantitas
                                        Pembelian
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="qty" name="qty[]" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_date">Harga Jual
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-10">
                                        <input type="text" disabled name="harga_jual[]" id="harga_jual"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-2">
                                        <a href="{{url('bengkel/detail-sp')}}" class="btn btn-primary">Ubah</a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_date">Stock
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" disabled id="stock"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_date">Status
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" disabled id="status"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-3 col-sm-offset-3 col-md-9 col-sm-9"
                                         id="add-remove-button-container">
                                        <button type="button" class="btn btn-default btn-sm" id="add-spare-part">Tambah
                                            Spare
                                            Part
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" id="remove-spare-part">
                                            Hapus Spare
                                            Part
                                        </button>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="submit-button-container">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <center>
                                <button type="submit" class="btn btn-success" id="submit-button">Submit</button>
                            </center>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
@section('script')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/bengkel/sparepart/penjualan-sp.min.js')}}"></script>
@stop

