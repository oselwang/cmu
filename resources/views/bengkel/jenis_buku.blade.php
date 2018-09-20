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
                            <h2>Jenis Buku</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <button class="btn btn-default" id="create-jenis-buku">Baru</button>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Deskripsi</th>
                                    <th>Total Kartu</th>
                                    <th>Total Oli</th>
                                    <th>Harga</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Terakhir Update</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>


                                <tbody id="datatable-body">
                                @foreach($jenis_bukus as $jenis_buku)
                                    <tr id="row">
                                        <input type="hidden" value="{{$jenis_buku->id}}" name="jenis_buku_id">
                                        <td id="deskripsi">{{$jenis_buku->deskripsi}}</td>
                                        <td id="total_kartu">{{$jenis_buku->total_kartu}}</td>
                                        <td id="total_oli">{{$jenis_buku->total_oli}}</td>
                                        <td id="harga">{{$jenis_buku->harga}}</td>
                                        <td>{{$jenis_buku->created_at}}</td>
                                        <td>{{$jenis_buku->updated_at}}</td>
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
    @include('template.modal.bengkel.create_jenis_buku')
    @include('template.modal.bengkel.edit_jenis_buku')
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
    <script src="{{asset('js/bengkel/jenis-buku.min.js')}}"></script>
@stop
