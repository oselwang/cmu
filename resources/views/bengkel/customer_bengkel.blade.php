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
                            <h2>Customer Bengkel</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <button class="btn btn-default" id="create-customer-bengkel">Baru</button>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>No Rangka</th>
                                    <th>No Polisi</th>
                                    <th>No Mesin</th>
                                    <th>No Hp</th>
                                    <th>Unit</th>
                                    <th>Warna</th>
                                    <th>Tahun</th>
                                    <th>Tipe Konsumen</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody id="datatable-body">
                                @foreach($customer_bengkels as $customer_bengkel)
                                    <tr id="row">
                                        <input type="hidden" value="{{$customer_bengkel->id}}"
                                               name="customer_bengkel_id">
                                        <td id="nama">{{$customer_bengkel->nama}}</td>
                                        <td id="alamat">{{$customer_bengkel->alamat}}</td>
                                        <td id="kota">{{$customer_bengkel->kota->nama}}</td>
                                        <td id="no_rangka">{{$customer_bengkel->no_rangka}}</td>
                                        <td id="no_polisi">{{$customer_bengkel->no_polisi}}</td>
                                        <td id="no_mesin">{{$customer_bengkel->no_mesin}}</td>
                                        <td id="cellphone_number">{{$customer_bengkel->cellphone_number}}</td>
                                        <td id="telephone_number">{{$customer_bengkel->unit->nick}}</td>
                                        <td id="telephone_number">{{$customer_bengkel->warna->nick}}</td>
                                        <td id="tahun">{{$customer_bengkel->tahun}}</td>
                                        <td id="tipe_konsumen">{{$customer_bengkel->tipe_konsumen}}</td>
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
    @include('template.modal.bengkel.create_customer_bengkel')
    @include('template.modal.bengkel.edit_customer_bengkel')
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
    <script src="{{asset('js/bengkel/customer-bengkel.min.js')}}"></script>
@stop
