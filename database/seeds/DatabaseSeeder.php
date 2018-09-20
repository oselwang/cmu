<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(ActionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(DealerSeeder::class);
        $this->call(UserSeeder::class);
//        $this->call(JenisBukuSeeder::class);
        $this->call(AllLocationSeeder::class);
        $this->call(WarnaSeeder::class);
        $this->call(CustomerBengkelSeeder::class);
        $this->call(TipeJasaSeeder::class);
        $this->call(DetailJasaSeeder::class);
        $this->call(KategoriSpSeeder::class);

        Model::reguard();
    }
}
