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
                            <h2>User</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <button class="btn btn-default" id="create-user">Baru</button>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Dealer</th>
                                    <th>Role</th>
                                    <th>Hak akses</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody id="datatable-body">
                                @foreach($users as $user)
                                    <tr id="row">
                                        <input type="hidden" value="{{$user->id}}"
                                               name="user_id">
                                        <td id="nama">{{$user->nama}}</td>
                                        <td id="username">{{$user->username}}</td>

                                        <td id="dealer">
                                            @foreach($user->dealer as $dealer)
                                                {{$dealer->nama}} <br>
                                            @endforeach
                                        </td>

                                        <td id="role">
                                            {{$user->role->nama}}
                                        </td>

                                        <td id="action">
                                            @foreach($user->action as $action)
                                                {{$action->nama}} <br>
                                            @endforeach
                                        </td>


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
    @include('template.modal.setup.user.create_user')
    @include('template.modal.setup.user.edit_user')
    <!-- /page content -->
@stop

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
    <script src="{{asset('js/setup/user-management.min.js')}}"></script>
@stop