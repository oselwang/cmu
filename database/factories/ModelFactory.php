<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(\App\Models\Bengkel\JenisBuku::class, function (Faker\Generator $faker) {
    return [
        'deskripsi'   => $faker->text(15),
        'total_kartu' => $faker->numberBetween(0, 20),
        'total_oli'   => $faker->numberBetween(0, 20),
        'harga'       => $faker->numberBetween(10000, 200000),
    ];
});


$factory->define(\App\Models\Kota::class, function (Faker\Generator $faker) {
    return [
        'nama' => $faker->city,
    ];
});

$factory->define(\App\Models\Kelurahan::class, function (Faker\Generator $faker) {
    return [
        'nama' => $faker->city,
    ];
});

$factory->define(\App\Models\Kecamatan::class, function (Faker\Generator $faker) {
    return [
        'nama' => $faker->city,
    ];
});

$factory->define(\App\Models\Warna::class, function (Faker\Generator $faker) {
    return [
        'nick'      => $faker->name,
        'deskripsi' => $faker->text(15),
    ];
});

$factory->define(\App\Models\Unit::class, function (Faker\Generator $faker) {
    return [
        'nick'      => $faker->name,
        'deskripsi' => $faker->text(15),
    ];
});


$factory->define(\App\Models\Bengkel\CustomerBengkel::class, function (Faker\Generator $faker) {
    return [
        'dealer_id'        => $faker->numberBetween(1, 6),
        'warna_id'         => $faker->numberBetween(1, 50),
        'unit_id'          => factory(\App\Models\Unit::class)->create()->id,
        'jenis_buku_id'    => factory(\App\Models\Bengkel\JenisBuku::class)->create()->id,
        'kota_id'          => factory(\App\Models\Kota::class)->create()->id,
        'kecamatan_id'     => factory(\App\Models\Kecamatan::class)->create()->id,
        'kelurahan_id'     => factory(\App\Models\Kelurahan::class)->create()->id,
        'no_rangka'        => $faker->phoneNumber,
        'no_polisi'        => 'BM' . $faker->numberBetween(1, 9) . $faker->numberBetween(1, 9) . $faker->numberBetween(1, 9) . $faker->numberBetween(1, 9) . 'CE',
        'no_mesin'         => $faker->numberBetween(100, 500) . '-' . $faker->numberBetween(1000000, 9999999),
        'tahun'            => $faker->year(),
        'tipe_konsumen'    => $faker->randomElement(['Individual', 'Corporate']),
        'no_ksg'           => null,
        'nama'             => $faker->name,
        'alamat'           => $faker->address,
        'kode_pos'         => $faker->postcode,
        'gender'           => $faker->randomElement(['Pria', 'Wanita']),
        'tanggal_lahir'    => $faker->date(),
        'telephone_number' => $faker->phoneNumber,
        'cellphone_number' => $faker->phoneNumber,
        'id_number'        => $faker->phoneNumber,
        'stnk_expiry_date' => $faker->date()
    ];
});

$factory->define(\App\Models\Bengkel\DetailJasa::class, function (Faker\Generator $faker) {
    $estimasi_jam = $faker->numberBetween(1, 12);
    $estimasi_menit = $faker->numberBetween(1, 60);
    $estimasi_detik = $faker->numberBetween(1, 60);
    return [
        'tipe_jasa_id'   => $faker->numberBetween(1, 12),
        'deskripsi'      => $faker->text(15),
        'estimasi_jam'   => $estimasi_jam < 10 ? '0' . $estimasi_jam : $estimasi_jam,
        'estimasi_menit' => $estimasi_menit < 10 ? '0' . $estimasi_menit : $estimasi_menit,
        'estimasi_detik' => $estimasi_detik < 10 ? '0' . $estimasi_detik : $estimasi_detik,
        'harga'          => $faker->numberBetween(10000, 200000),
        'status'         => $faker->randomElement(['activated', 'deactivated'])
    ];
});


$factory->define(\App\Models\Bengkel\KategoriSp::class, function (Faker\Generator $faker) {
    return [
        'deskripsi' => $faker->text(10)
    ];
});

$factory->define(\App\Models\Bengkel\TipeSp::class, function (Faker\Generator $faker) {
    return [
        'deskripsi' => $faker->text(10)
    ];
});

$factory->define(\App\Models\Bengkel\CodeSp::class, function (Faker\Generator $faker) {
    return [
        'deskripsi'      => $faker->text(10),
        'subtitute'      => null,
        'kategori_sp_id' => null,
        'tipe_sp_id'     => null,
        'identifier'     => $faker->text(15) . $faker->randomNumber(),
        'status'         => $faker->randomElement(['activated', 'deactivated'])
    ];
});

$factory->define(\App\Models\Bengkel\DetailSp::class, function (Faker\Generator $faker) {
    return [
        'nama'           => $faker->text(10),
        'code'           => $faker->numberBetween(100, 500) . '-' . $faker->numberBetween(1000000, 9999999),
        'stock'          => $faker->randomNumber(),
        'kategori_sp_id' => null,
        'tipe_sp_id'     => null,
        'harga_beli'     => $faker->randomNumber(),
        'harga_jual'     => $faker->randomNumber(),
        'status'         => $faker->randomElement(['activated', 'deactivated'])
    ];
});

$factory->define(\App\Models\Bengkel\PenjualanSp::class, function (Faker\Generator $faker) {
    return [
        'customer_bengkel_id' => $faker->numberBetween(1, 50),
        'user_id'             => 2,
        'dealer_id'           => $faker->numberBetween(1, 6),
        'total_harga'         => $faker->randomNumber(),
        'ref_no'              => $faker->numberBetween(100, 500) . '-' . $faker->numberBetween(1000000, 9999999),
        'ref_date'            => $faker->date(),
        'qty'                 => $faker->randomNumber(),
    ];
});

$factory->define(\App\Models\Bengkel\PenjualanSpDetail::class, function (Faker\Generator $faker) {
    return [
        'detail_sp_id' => $faker->numberBetween(1, 50),
        'harga'        => $faker->randomNumber(),
        'subtotal'     => $faker->randomNumber(),
        'qty'          => $faker->randomNumber()
    ];
});


