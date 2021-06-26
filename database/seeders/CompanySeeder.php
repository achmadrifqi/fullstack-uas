<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::truncate();
        Company::create([
            'description_company' => 'Yuki travel didirikan pada tahun 2011 dan dikelola oleh personel yang berpengetahuan luas di industri ini, Yukitravel adalah agen perjalanan ritel dan online yang menangani jenis perjalanan individu dan kelompok dengan distribusi penjualan yang sebagian besar berasal dari situs web dan media sosial. Yukitravel juga menawarkan paket liburan tematik terlengkap yang dibuat berdasarkan minat pelanggan, seperti: pesiar, bulan madu, aktif, liburan ski, mengemudi sendiri, Club Med, phototrip, dll. Dengan berbagai akomodasi mulai dari standar hingga mewah, kami menawarkan berbagai pilihan paket menarik yang tersedia di situs web kami dan juga paket yang disesuaikan berdasarkan permintaan klien. Yukitravel terhubung dan didukung oleh Organisasi Pariwisata Nasional, Hotel dan resor, maskapai penerbangan, dan pemasok perjalanan tepercaya. Jaringan kami di luar industri perjalanan memberi kami peluang menarik untuk menciptakan produk.',
        ]);
    }
}
