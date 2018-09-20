var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.sass('custom.scss', 'public/css/custom.min.css');
    mix.sass('main.scss', 'public/css/main.min.css');

    mix.scripts('home.js', 'public/js/home.min.js');
    mix.scripts('global.local.js', 'public/js/global.local.min.js');
    mix.scripts('bengkel/jenis-buku.js', 'public/js/bengkel/jenis-buku.min.js');
    mix.scripts('bengkel/customer-bengkel.js', 'public/js/bengkel/customer-bengkel.min.js');
    mix.scripts('bengkel/tipe-jasa.js', 'public/js/bengkel/tipe-jasa.min.js');
    mix.scripts('bengkel/detail-jasa.js', 'public/js/bengkel/detail-jasa.min.js');
    mix.scripts('bengkel/sparepart/kategori-sp.js', 'public/js/bengkel/sparepart/kategori-sp.min.js');
    mix.scripts('bengkel/sparepart/tipe-sp.js', 'public/js/bengkel/sparepart/tipe-sp.min.js');
    mix.scripts('bengkel/sparepart/code-sp.js', 'public/js/bengkel/sparepart/code-sp.min.js');
    mix.scripts('bengkel/sparepart/detail-sp.js', 'public/js/bengkel/sparepart/detail-sp.min.js');
    mix.scripts('bengkel/sparepart/penjualan-sp.js', 'public/js/bengkel/sparepart/penjualan-sp.min.js');

    mix.scripts('setup/user-management.js', 'public/js/setup/user-management.min.js');
});
