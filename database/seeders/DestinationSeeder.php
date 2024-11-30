<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;
use Carbon\Carbon;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::insert([
            [
                'name' => 'Malioboro',
                'slug' => 'malioboro',
                'description' => 'Berkunjung ke Yogyakarta rasanya kurang lengkap jika kamu tidak mengunjungi tempat legendaris yang satu ini. Apalagi kalau bukan Malioboro.

Malioboro merupakan salah satu kawasan jalan dari tiga jalan di Kota Yogyakarta yang membentang dari Tugu Yogyakarta hingga ke persimpangan Titik Nol Kilometer Yogyakarta.

Secara keseluruhan, kawasan Malioboro terdiri atas Jalan Margo Utomo, Jalan Malioboro, dan Jalan Margo Mulyo.
Kata Malioboro berasal dari bahasa sansekerta Malyabhara yang berarti karangan bunga.

Diketahui jalan Malioboro merupakan poros Garis Imajiner Kraton Yogyakarta.',
                'address' => 'Here’s how you can set up your migration to ensure that deleting a destinasi will also delete the corresponding bookmarks:',
                'city_id' => 1,
                'facilities' => '{}',
                'images' => '{"1":"malioboro1.jpg"}',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Heha Sky View',
                'slug' => 'heha-sky-view',
                'description' => 'Menjelajah Yogyakarta memang tak ada habisnya. Setiap kabupaten atau kota memiliki keunikan tersendiri, khususnya di bagian destinasi wisata yang selalu menawarkan pesona alamnya seperti Heha Sky View, tentu destinasi wisata ini masih asing didengar. Heha Sky View memang baru saja dibuka pada 2019. HeHa Sky View menawarkan beragam spot foto yang instagramable. Nama HeHa diambil dari nama depan pemilik resto yakni Herry Zudianto dan Handoyo Mawardi.

Heha Sky View ini sebenarnya merupakan tempat makan atau resto modern tiga lantai yang memang mengusung konsep swafoto dengan landscape alam dan taman. Jadi, bagi para pecandu swafoto, alam dan kuliner, HeHa Sky View bisa menjadi pilihan destinasi wisata yang tepat. Meski baru saja dibuka tempat tersebut mampu menarik perhatian para treveller atau pemburu foto cantik untuk datang ke destinasi yang terletak di Gunungkidul ini.',
                'address' => 'In your resources/views/cities/show.blade.php file, you can display the city details and the list of destinations. Here’s an example of how you might structure your view:',
                'city_id' => 1,
                'facilities' => '{}',
                'images' => '{"1":"heha1.jpeg"}',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Candi Umbul',
                'slug' => 'candi-umbul',
                'description' => 'Destinasi wisata yang satu ini menggabungkan antara wisata budaya dengan rekreasi keluarga.  Candi Umbul merupakan salah satu situs purbakala penginggalan dari Kerajaan Mataram Kuno antara tahun 800 – 850 M atau abad 9 M. Sama seperti Candi Selogriyo, Candi Gedongsongo dan Candi Dieng.  Terletak di lembah Sungai Elo, di Desa Kartoharjo, Kecamatan Grabag, Kabupaten Magelang,  diperkirakan Candi ini pada masa silam digunakan sebagai pertirtaan raja-raja dalam upacara keagaaman. Candi umbul sebuah pemandian berbentuk persegi empat  yang dibuat dari batu-batu komponen bangunan candi kuno.  Pemandian  Air Hangat Candi Umbul memilki 2 buah kolam ukuran 12,5 x 7,15 meter  dan kolam ukuran 8,5 x 7 meter. Mata air di dasar kolam menyemburkan gelembung - gelombung  gas yang mengandung belerang yang dipercaya bisa menyembuhkan penyakit kulit dan reumatik. Mata air hangat yang menyembul merupakan sisa-sisa masa purba jutaan tahun silam. B erwisata ke Pemandian Air Hangat  Candi Umbul adalah pilihan tepat, berekreasi bersama keluarga sekaligus mengenal peradaban  Indonesia. ',
                'address' => 'Set up routes for the city detail page and bookmarking.\r\nCreate a controller to fetch city and destination data.\r\nDefine relationships in your models.\r\n',
                'city_id' => 2,
                'facilities' => '{}',
                'images' => '{"1":"candiumbul1.jpeg"}',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Negeri Sayur Sukomakmur',
                'slug' => 'negeri-sayur-sukomakmur',
                'description' => 'Wisata alam jadi andalan Kabupaten Magelang. Menyajikan lanskap alam, praktis membuat siapapun betah berlama-lama di sana. Satu di antaranya Negeri Sayur Sukomakmur. Atau yang semula disebut Terasering Sitegong. Saat cuaca cerah, pengunjung dapat melihat gagahnya Gunung Sumbing dan hamparan ladang sayur milik warga.

Lokasinya di kaki Gunung Sumbing. Tepatnya di Dusun Nampan, Sukomakmur, Kajoran. Untuk menuju ke sana, pengunjung harus melewati jalan yang cukup terjal dan berkelok. Hanya pengguna roda dua yang bisa sampai puncak. Sementara pengunjung yang menggunakan roda empat, diminta parkir di bawah dan menggunakan ojek yang telah disediakan.

Sesampainya di Negeri Sayur Sukomakmur, pengunjung akan disuguhkan dengan hamparan ladang sayur milik warga yang tertata rapi dan asri. Mulai dari kol, brokoli, maupun daun bawang. Pengunjung dapat merasakan sensasi menyusuri jalan di antara ladang sayur. Saat masa panen, pengunjung juga bisa ikut memanennya bersama petani.',
                'address' => 'Set up routes for the city detail page and bookmarking.\r\nCreate a controller to fetch city and destination data.\r\nDefine relationships in your models.\r\n',
                'city_id' => 2,
                'facilities' => '{}',
                'images' => '{"1":"sayur1.jpg"}',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
