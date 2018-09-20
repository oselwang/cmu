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
                            <h2>Code Spare Part</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <button class="btn btn-default" id="create-code-sp">Baru</button>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Deskripsi</th>
                                    <th>Subtitute</th>
                                    <th>Kategori</th>
                                    <th>Tipe</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody id="datatable-body">
                                @foreach($code_sps as $code_sp)
                                    <tr id="row">
                                        <input type="hidden" value="{{$code_sp->id}}"
                                               name="code_sp_id">
                                        <input type="hidden"
                                               value="{{isset($code_sp->kategori_sp->id) ? $code_sp->kategori_sp->id : null}}"
                                               name="kategori_sp_id">
                                        <input type="hidden"
                                               value="{{isset($code_sp->tipe_sp->id) ? $code_sp->tipe_sp->id : null}}"
                                               name="tipe_sp_id">
                                        <td>{{$code_sp->id}}</td>
                                        <td id="identifier">{{$code_sp->identifier}}</td>
                                        <td id="deskripsi">{{$code_sp->deskripsi}}</td>
                                        <td id="subtitute">{{$code_sp->subtitute}}</td>
                                        <td>{{isset($code_sp->kategori_sp->deskripsi) ? $code_sp->kategori_sp->deskripsi : null}}</td>
                                        <td id="tipe_sp_id">{{isset($code_sp->tipe_sp->deskripsi) ? $code_sp->tipe_sp->deskripsi : null}}</td>
                                        <td id="status">{{$code_sp->status}}</td>
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
    @include('template.modal.bengkel.sparepart.create_code_sp')
    @include('template.modal.bengkel.sparepart.edit_code_sp')
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
    <script src="{{asset('js/bengkel/sparepart/code-sp.min.js')}}"></script>
@stop
