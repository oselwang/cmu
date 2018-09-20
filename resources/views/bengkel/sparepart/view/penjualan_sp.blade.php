@extends('template.container')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <form id="update-penjualan-sp-form" class="form-horizontal form-label-left">
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
                                <input type="hidden" name="penjualan_sp_id" value="{{$penjualan_sp->id}}">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_no">
                                        Ref No <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" disabled id="ref_no" required="required"
                                               class="form-control col-md-7 col-xs-12" name="ref_no"
                                               value="{{$penjualan_sp->ref_no}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_date">Ref Date
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" id="ref_date" name="ref_date" required="required"
                                               class="form-control col-md-7 col-xs-12"
                                               value="{{$penjualan_sp->ref_date}}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">
                                        No Telephone Customer <span class="required">*</span>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-10">
                                        <input type="text" id="phone" required="required"
                                               class="form-control col-md-7 col-xs-12" name="phone"
                                               placeholder="No. Handphone atau No. Telfon rumah"
                                               value="{{!empty($penjualan_sp->customer_bengkel->telephone_number) ? $penjualan_sp->customer_bengkel->telephone_number : $penjualan_sp->customer_bengkel->handphone_number}}"
                                               disabled>
                                        <input type="hidden" name="customer_bengkel_id">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">
                                        Nama <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" disabled id="nama"
                                               class="form-control col-md-7 col-xs-12"
                                               value="{{$penjualan_sp->customer_bengkel->nama}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">
                                        Alamat <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" disabled id="alamat"
                                               class="form-control col-md-7 col-xs-12"
                                               value="{{$penjualan_sp->customer_bengkel->alamat}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kota">
                                        Kota <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" disabled id="kota"
                                               class="form-control col-md-7 col-xs-12"
                                               value="{{$penjualan_sp->customer_bengkel->kota->nama}}">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="penjualan-sp-detail-container">
                    @foreach($penjualan_sp->detail_sp as $detail_sp)
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
                                                   class="form-control col-md-7 col-xs-12" name="code"
                                                   value="{{$detail_sp->code}}" disabled>
                                            <input type="hidden" name="detail_sp_id[]" value="{{$detail_sp->id}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty">Kuantitas
                                            Pembelian
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="qty" name="qty[]" required="required"
                                                   class="form-control col-md-7 col-xs-12"
                                                   value="{{$detail_sp->pivot->qty}}" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_date">Harga
                                            Jual
                                        </label>
                                        <div class="col-md-5 col-sm-5 col-xs-10">
                                            <input type="text" disabled name="harga_jual[]" id="harga_jual"
                                                   class="form-control col-md-7 col-xs-12"
                                                   value="{{$detail_sp->pivot->harga}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_date">Stock
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" disabled id="stock"
                                                   class="form-control col-md-7 col-xs-12"
                                                   value="{{$detail_sp->stock}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref_date">Status
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" disabled id="status"
                                                   class="form-control col-md-7 col-xs-12"
                                                   value="{{$detail_sp->status}}">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row" id="submit-button-container">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <center>
                                <button class="btn btn-danger" id="delete-button">Hapus</button>
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

