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
                            <h2>Detail Spare Part</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <button class="btn btn-default" id="create-detail-sp">Baru</button>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Code</th>
                                    <th>Stock</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Status</th>
                                    <th>Kategori</th>
                                    <th>Tipe</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody id="datatable-body">
                                @foreach($detail_sps as $detail_sp)
                                    <tr id="row">
                                        <input type="hidden" value="{{$detail_sp->id}}"
                                               name="detail_sp_id">
                                        <input type="hidden"
                                               value="{{isset($detail_sp->kategori_sp->id) ? $detail_sp->kategori_sp->id : null}}"
                                               name="kategori_sp_id">
                                        <input type="hidden"
                                               value="{{isset($detail_sp->tipe_sp->id) ? $detail_sp->tipe_sp->id : null}}"
                                               name="tipe_sp_id">
                                        <td>{{$detail_sp->id}}</td>
                                        <td id="nama">{{$detail_sp->nama}}</td>
                                        <td id="nama">{{$detail_sp->code}}</td>
                                        <td id="stock">{{$detail_sp->stock}}</td>
                                        <td id="harga_beli">{{$detail_sp->harga_beli}}</td>
                                        <td id="harga_jual">{{$detail_sp->harga_jual}}</td>
                                        <td>{{isset($detail_sp->kategori_sp->deskripsi) ? $detail_sp->kategori_sp->deskripsi : null}}</td>
                                        <td id="tipe_sp_id">{{isset($detail_sp->tipe_sp->deskripsi) ? $detail_sp->tipe_sp->deskripsi : null}}</td>
                                        <td id="status">{{$detail_sp->status}}</td>
                                        <td><a id="edit">Edit</a> | <a id="delete">Hapus</a></td>
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
    @include('template.modal.bengkel.sparepart.create_detail_sp')
    @include('template.modal.bengkel.sparepart.edit_detail_sp')
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
    <script src="{{asset('js/bengkel/sparepart/detail-sp.min.js')}}"></script>
@stop
