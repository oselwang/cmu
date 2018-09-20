<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', 'PageController@login');
    Route::get('auth/login', 'PageController@login');

    Route::post('auth/login', 'Auth\AuthController@login');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('auth/logout', 'Auth\AuthController@logout');

    Route::get('home', 'PageController@home');
    Route::group(['prefix' => 'bengkel'], function () {
        Route::group(['namespace' => 'Bengkel'], function () {
            //Page
            Route::get('jenis-buku', 'PageController@jenisBuku');
            Route::get('customer-bengkel', 'PageController@customerBengkel');
            Route::get('tipe-jasa', 'PageController@tipeJasa');
            Route::get('detail-jasa', 'PageController@detailJasa');
            Route::get('kategori-sp', 'PageController@kategoriSp');
            Route::get('tipe-sp', 'PageController@tipeSp');
            Route::get('code-sp', 'PageController@codeSp');
            Route::get('detail-sp', 'PageController@detailSp');
            Route::get('penjualan-sp', 'PageController@penjualanSp');
            Route::get('create-penjualan-sp', 'PageController@createPenjualanSp');

            //JenisBuku
            Route::get('jenis-buku/all', 'JenisBukuController@index');
            Route::post('jenis-buku/delete', 'JenisBukuController@delete');
            Route::post('jenis-buku/update', 'JenisBukuController@update');
            Route::post('jenis-buku/create', 'JenisBukuController@create');

            //CustomerBengkel
            Route::get('customer-bengkel/all', 'CustomerBengkelController@index');
            Route::get('customer-bengkel/{customer_bengkel_id}', 'CustomerBengkelController@show');
            Route::get('customer-bengkel/phone/{phone}', 'CustomerBengkelController@getByPhone');
            Route::post('customer-bengkel/delete', 'CustomerBengkelController@delete');
            Route::post('customer-bengkel/update', 'CustomerBengkelController@update');
            Route::post('customer-bengkel/create', 'CustomerBengkelController@create');

            //TipeJasa
            Route::get('tipe-jasa/all', 'TipeJasaController@index');
            Route::post('tipe-jasa/delete', 'TipeJasaController@delete');
            Route::post('tipe-jasa/update', 'TipeJasaController@update');
            Route::post('tipe-jasa/create', 'TipeJasaController@create');

            //DetailJasa
            Route::get('detail-jasa/all', 'DetailJasaController@index');
            Route::get('detail-jasa/{detail_jasa_id}', 'DetailJasaController@show');
            Route::post('detail-jasa/delete', 'DetailJasaController@delete');
            Route::post('detail-jasa/update', 'DetailJasaController@update');
            Route::post('detail-jasa/create', 'DetailJasaController@create');


            Route::group(['namespace' => 'SparePart'], function () {
                //KategoriSp
                Route::get('kategori-sp/all', 'KategoriSpController@index');
                Route::get('kategori-sp/{kategori_sp_id}', 'KategoriSpController@show');
                Route::post('kategori-sp/delete', 'KategoriSpController@delete');
                Route::post('kategori-sp/update', 'KategoriSpController@update');
                Route::post('kategori-sp/create', 'KategoriSpController@create');

                //TipeSp
                Route::get('tipe-sp/all', 'TipeSpController@index');
                Route::get('tipe-sp/{tipe_sp_id}', 'TipeSpController@show');
                Route::post('tipe-sp/delete', 'TipeSpController@delete');
                Route::post('tipe-sp/update', 'TipeSpController@update');
                Route::post('tipe-sp/create', 'TipeSpController@create');

                //CodeSp
                Route::get('code-sp/all', 'CodeSpController@index');
                Route::get('code-sp/{code_sp_id}', 'CodeSpController@show');
                Route::post('code-sp/delete', 'CodeSpController@delete');
                Route::post('code-sp/update', 'CodeSpController@update');
                Route::post('code-sp/create', 'CodeSpController@create');

                //DetailSp
                Route::get('detail-sp/all', 'DetailSpController@index');
                Route::get('detail-sp/{detail_sp_id}', 'DetailSpController@show');
                Route::get('detail-sp/code/{code}', 'DetailSpController@getByCode');
                Route::post('detail-sp/delete', 'DetailSpController@delete');
                Route::post('detail-sp/update', 'DetailSpController@update');
                Route::post('detail-sp/create', 'DetailSpController@create');

                //PenjualanSp
                Route::get('penjualan-sp/all', 'PenjualanSpController@index');
                Route::get('penjualan-sp/{penjualan_sp_id}', 'PenjualanSpController@show');
                Route::post('penjualan-sp/delete', 'PenjualanSpController@delete');
                Route::post('penjualan-sp/update', 'PenjualanSpController@update');
                Route::post('penjualan-sp/create', 'PenjualanSpController@create');
            });

        });
    });

    Route::group(['prefix' => 'setup'], function () {
        Route::group(['namespace' => 'Setup'], function () {

            //Page
            Route::get('user-management', 'PageController@userManagement');

            //Role
            Route::get('role/all', 'RoleController@index');

            //kota
            Route::get('kota/all', 'KotaController@index');

            //kelurahan
            Route::get('kelurahan/all', 'KelurahanController@index');

            //kecamatan
            Route::get('kecamatan/all', 'KecamatanController@index');

            //unit
            Route::get('unit/all', 'UnitController@index');

            //dealer
            Route::get('dealer/all', 'DealerController@index');
            Route::get('dealer/specific/user', 'DealerController@getByLoggedInUser');
            Route::post('dealer/set/session', 'DealerController@setSession');

            //warna
            Route::get('warna/all', 'WarnaController@index');

            //User
            Route::get('user-management/{user_id}', 'UserManagementController@show');
            Route::post('user-management/create', 'UserManagementController@create');
            Route::post('user-management/update', 'UserManagementController@update');
            Route::post('user-management/delete', 'UserManagementController@delete');
        });
    });
});
