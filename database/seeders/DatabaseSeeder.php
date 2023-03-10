<?php

namespace Database\Seeders;

use App\Models\Catering;
use App\Models\Item;
use App\Models\Kategori;
use App\Models\Keranjang;
use App\Models\Menu;
use App\Models\Pesanan;
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
            'id_categori' => 1,
            'nama' => 'Paket 1',
            'harga' => 19000,
            'slug' => 'paket-1',
            'isi_menu' => 'Nasi putih, Sup terang bulan / sup cream jagung ayam cincang, Udang Tempura / Udang Furay/ Kakap Crispy, Cabe Hijau Sosis + Daging / Lada Hitam Fillet Ayam/ Ca Fillet Ayam,Galantine/ Fuyung Hay/ Ayam Katsu, Ca Buncis Ayam Cincang/ Capcay, Salad Buah',
            'deskripsi' => 'Nasi Kuning, Ayam Goreng/Bakar/Bakar Bumbu Rujak, Sambal Trasi, Perkedel , Telor Asin, Kering Kentang, Sambal Goreng Kentang Ati, Mie Goreng, Sempol, Udang Penyet, Sate Lilit, Bronies Coklat 30 cm',
            'kisaran_porsi' => '15 - 20 Orang',
            'pengemasan' => 'Triplek Kotak 100 x 70, Piring, Sendok, Centong Kayu BM, Tisue, Cobek Batu Kecil + Uleg',
            'catatan_lainnya' => 'Pembelian 10 gratis 1',
        ]);

        Kategori::create([
            'id_catering' => 1,
            'isi_kategori' => 'Prasmanan'
        ]);
        Kategori::create([
            'id_catering' => 1,
            'isi_kategori' => 'Nasi Kotak'
        ]);
        Kategori::create([
            'id_catering' => 1,
            'isi_kategori' => 'Tumpeng'
        ]);
        Pesanan::create([
            'id_catering' => 1,
            'id_user' => 1,
            'id_menu' => 1,
            'tgl_pengantaran' => '2023-04-21',
            'jumlah_menu' => 2,
            'total' => 100000,
        ]);

    }
}
