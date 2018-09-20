<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a>Setup <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    {{--<li><a href="index3.html">Bank</a></li>--}}
                    {{--<li><a href="index.html">Custody List</a></li>--}}
                    {{--<li><a href="index2.html">Custody Unit</a></li>--}}
                    {{--<li><a href="index3.html">Company Group</a></li>--}}
                    {{--<li><a href="index3.html">Kecamatan</a></li>--}}
                    {{--<li><a href="index3.html">Kelurahan</a></li>--}}
                    {{--<li><a href="index3.html">Kota</a></li>--}}
                    {{--<li><a href="index3.html">Master Holiday</a></li>--}}
                    {{--<li><a href="index3.html">Month</a></li>--}}
                    {{--<li><a href="index3.html">Periode Faktur</a></li>--}}
                    {{--<li><a href="index3.html">Tab Display</a></li>--}}
                    <li><a href="{{url('setup/user-management')}}">User Management</a></li>
                    {{--<li><a href="index3.html">Warna</a></li>--}}
                </ul>
            </li>
            <li><a>Master <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">

                    <li><a>Bengkel<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="sub_menu"><a href="{{url('bengkel/jenis-buku')}}">Jenis Buku</a>
                            </li>
                            <li class="sub_menu"><a href="{{url('bengkel/customer-bengkel')}}">Customer Bengkel</a></li>
                            <li><a>Jasa<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu"><a href="{{url('bengkel/tipe-jasa')}}">Type</a></li>
                                    <li class="sub_menu"><a href="{{url('bengkel/detail-jasa')}}">Detail</a></li>
                                    {{--<li class="sub_menu"><a href="level2.html">Import</a></li>--}}
                                </ul>
                            </li>
                            <li><a>Spare Part<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu"><a href="{{url('bengkel/kategori-sp')}}">Category Spart</a>
                                    </li>
                                    <li class="sub_menu"><a href="{{url('bengkel/tipe-sp')}}">Spart Type</a></li>
                                    <li class="sub_menu"><a href="{{url('bengkel/code-sp')}}">Code</a></li>
                                    <li class="sub_menu"><a href="{{url('bengkel/detail-sp')}}">Detail Spart</a></li>
                                    {{--<li class="sub_menu"><a href="level2.html">Import</a></li>--}}
                                </ul>
                            </li>
                            {{--<li class="sub_menu"><a href="level2.html">Delivery Type</a></li>--}}
                            {{--<li><a>Cabang<span class="fa fa-chevron-down"></span></a>--}}
                            {{--<ul class="nav child_menu">--}}
                            {{--<li class="sub_menu"><a href="level2.html">Type</a></li>--}}
                            {{--<li class="sub_menu"><a href="level2.html">Details</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="sub_menu"><a href="level2.html">Type Part Masuk</a></li>--}}
                            {{--<li class="sub_menu"><a href="level2.html">Type Part Keluar</a></li>--}}
                            {{--<li class="sub_menu"><a href="level2.html">No. KSG</a></li>--}}
                            {{--<li class="sub_menu"><a href="level2.html">WO Type</a></li>--}}
                            {{--<li class="sub_menu"><a href="level2.html">Main Dealer Part</a></li>--}}
                            {{--<li><a>Mekanik<span class="fa fa-chevron-down"></span></a>--}}
                            {{--<ul class="nav child_menu">--}}
                            {{--<li class="sub_menu"><a href="level2.html">Pendidikan</a></li>--}}
                            {{--<li class="sub_menu"><a href="level2.html">Details</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a>Pesanan Part<span class="fa fa-chevron-down"></span></a>--}}
                            {{--<ul class="nav child_menu">--}}
                            {{--<li class="sub_menu"><a href="level2.html">Type Pesanan Part</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                        </ul>
                    </li>
                    {{--<li><a>Showroom <span--}}
                    {{--class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li><a>Channel<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Type</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Channel Detail</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a>Leasing<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Group</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Leasing Detail</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a>Unit<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Merk</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Unit Code</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Jenis Unit</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Details Unit</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Unit Biro</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Agen Biro Jasa</a></li>--}}
                    {{--<li><a>Salesman<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Type</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Salesman Details</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Commission Scheme</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a>Legal<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Jenis DP</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Pengeluaran</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Pekerjaan</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Pendidikan</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Term Of Payment</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Customer Showroom</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Soft Payment</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Leasing In House</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a>CRM <span--}}
                    {{--class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li><a>Pendidikan<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Tingkat Sekolah</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Jurusan Pendidikan</a>--}}
                    {{--</li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Jenis Sekolah</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Nama Sekolah</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a>Residential<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Kelurahan</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Kecamatan</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Propinsi</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Kota</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Negara</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Kewarganegaraan</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a>Bacaan<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Jenis Bacaan</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Buku Bacaan</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a>General<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Hobi</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Hub Keluarga</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Warna</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Makanan Favorite</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Suku Bangsa</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Salesman</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Religion</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Zodiak</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Expense</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a>Occupation<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Detail Perusahaan</a>--}}
                    {{--</li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Position</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Pekerjaan</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a>Follow Up<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Petugas (officer)</a>--}}
                    {{--</li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Type</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Hasil</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Response Customer</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a>Finance <span--}}
                    {{--class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li><a>Bank Book<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Jenis Biaya</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">AR Type</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">AP Type</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Kas Besar Items</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Kas Kecil Items</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a>Accounting <span--}}
                    {{--class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                    {{--<li class="sub_menu"><a href="level2.html">Group Account</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Report Center</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Journal Type</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Chart Of Account</a></li>--}}
                    {{--<li class="sub_menu"><a href="level2.html">Automatic Jurnal</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                </ul>
            </li>
            <li><a>Module <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">

                    <li><a>Bengkel<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="sub_menu"><a href="{{url('bengkel/penjualan-sp')}}">Penjualan Spart</a>
                            </li>
                            {{--<li class="sub_menu"><a href="{{url('bengkel/pesanan-sp')}}">Pesanan Part</a>--}}
                            {{--</li>--}}
                            {{--<li class="sub_menu"><a href="{{url('bengkel/list-pesanan-sp')}}">List Pesanan Spart</a>--}}
                            {{--</li>--}}
                            {{--<li class="sub_menu"><a href="{{url('bengkel/indent-sp')}}">Indent Part</a>--}}
                            {{--</li>--}}
                            {{--<li class="sub_menu"><a href="{{url('bengkel/daftar-stock-sp')}}">Daftar Stock Part</a>--}}
                            {{--</li>--}}
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>