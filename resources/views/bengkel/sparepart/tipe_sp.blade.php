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
                            <h2>Tipe Spare Part</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <button class="btn btn-default" id="create-tipe-sp">Baru</button>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody id="datatable-body">
                                @foreach($tipe_sps as $tipe_sp)
                                    <tr id="row">
                                        <input type="hidden" value="{{$tipe_sp->id}}"
                                               name="tipe_sp_id">
                                        <td>{{$tipe_sp->id}}</td>
                                        <td id="deskripsi">{{$tipe_sp->deskripsi}}</td>
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
    @include('template.modal.bengkel.sparepart.create_tipe_sp')
    @include('template.modal.bengkel.sparepart.edit_tipe_sp')
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
    <script src="{{asset('js/bengkel/sparepart/tipe-sp.min.js')}}"></script>
@stop
