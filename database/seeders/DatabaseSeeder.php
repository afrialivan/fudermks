<?php

namespace Database\Seeders;

use App\Models\Catering;
use App\Models\Item;
use App\Models\Keranjang;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        User::create([
            'email' => 'afrial@gmail.com',
            'tlp' => '08342284293',
            'name' => 'Afrial Ivan Pratama',
            'tgl_lahir' => '2005-04-21',
            'alamat' => 'jl Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit hic amet, porro earum tenetur sunt ducimus voluptas consectetur minus non.',
            'username' => 'prall',
            'password' => bcrypt('111'),
            'role' => 'user',
        ]);

        User::create([
            'email' => 'catering@gmail.com',
            'tlp' => '08342284293',
            'name' => 'pak haji udin',
            'tgl_lahir' => '2005-04-21',
            'alamat' => 'jl Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit hic amet, porro earum tenetur sunt ducimus voluptas consectetur minus non.',
            'username' => 'udin',
            'password' => bcrypt('111'),
            'role' => 'catering',
            'nik' => '2143213412',
        ]);

        User::create([
            'email' => 'admin@gmail.com',
            'tlp' => '08341184293',
            'name' => 'ini mimin',
            'tgl_lahir' => '2005-04-21',
            'alamat' => 'jl Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit hic amet, porro earum tenetur sunt ducimus voluptas consectetur minus non.',
            'username' => 'admin',
            'password' => bcrypt('111'),
            'role' => 'admin',
            'nik' => '2143213411',
        ]);

        Catering::create([
            'id_user' => 2,
            'nama' => 'Catering Bede',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit hic amet, porro earum tenetur sunt ducimus voluptas consectetur minus non.',
            'alamat' => 'jl Lorem ipsum dolor sit amet consectetur adipisicing',
            'logo' => 'cateringg.png',
            'ktp' => 'ktp.png',
            'selfi_ktp' => 'ktp.png',
            'ig' => 'cateringbede',
            'slug' => 'catering-bede',
        ]);

        Menu::create([
            'id_catering' => 1,
            'nama' => 'ayam bakar rica rica',
            'harga' => 19000,
            'slug' => 'ayam-bakar-rica-rica',
            'jenis' => 'prasmanan'
        ]);
        Keranjang::create([
            'id_user' => 1,
            'id_menu' => 1,
            'jumlah_menu' => 8,
            'total' => 10000,
        ]);
        Item::create([
            'id_menu' => 1,
            'id_user' => 2,
            'isi_menu' => 'Nasi Goreng Bakar',
        ]);

    }
}
