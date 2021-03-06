@extends('template.container')

@section('style')
    <link href="{{asset('css/main.min.css')}}" rel="stylesheet">
@stop

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Penjualan Spare Part</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <button class="btn btn-default"
                                            id="create-penjualan-sp"
                                            onclick="window.location.href = defaultUrl + 'bengkel/create-penjualan-sp'">
                                        Baru
                                    </button>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Ref No</th>
                                    <th>Ref Date</th>
                                    <th>Nama</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th>User ID</th>
                                </tr>
                                </thead>

                                <tbody id="datatable-body">
                                @foreach($penjualan_sps as $penjualan_sp)
                                    <tr id="row"
                                        onclick="window.location = '{{url('bengkel/penjualan-sp/' . $penjualan_sp->id)}}'">
                                        <input type="hidden" value="{{$penjualan_sp->id}}"
                                               name="penjualan_sp_id" onclick="alert('asd')">
                                        <td>{{$penjualan_sp->ref_no}}</td>
                                        <td>{{$penjualan_sp->ref_date}}</td>
                                        <td>{{$penjualan_sp->customer_bengkel->nama}}</td>
                                        <td>{{$penjualan_sp->qty}}</td>
                                        <td>{{$penjualan_sp->total_harga}}</td>
                                        <td>{{$penjualan_sp->user->username}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{--@include('template.modal.bengkel.sparepart.create_penjualan_sp')--}}
    {{--@include('template.modal.bengkel.sparepart.edit_penjualan_sp')--}}
    <!-- /page content -->
@stop
<!-- footer content -->
@section('script')
    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/plugin/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugin/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/plugin/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('js/plugin/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('js/plugin/jszip.min.js')}}"></script>
    <script src="{{asset('js/plugin/pdfmake.min.js')}}"></script>
    <script src="{{asset('js/plugin/dataTables.editor.min.js')}}"></script>
    <script src="{{asset('js/bengkel/sparepart/penjualan-sp.min.js')}}"></script>
@stop
