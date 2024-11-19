<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>🚣‍♂️Traveling</title>
    <link rel="stylesheet" href="{{ asset('css/final.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Lobster&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Lobster&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
</head>
<body class="bg-[#e7eef0] font-['Poppins']">
    <!-- Navbar Start -->
        <nav class="flex flex-row max-w-6xl mx-auto justify-between items-center mt-3 bg-indigo-950 rounded-3xl sticky top-3 z-50">
            <a href={{ route('home') }}><img src="./src/img/pasawat-removebg-preview.png" class="ms-5 mt-2" width="85px" alt="Logo"></a>
            <ul class="flex flex-row gap-7  font-semibold">
                 <li>
                    <a href="#Home" class=" text-base text-white  hover:text-violet-600">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#city" class="text-base  text-white  hover:text-violet-600">
                        City
                    </a>
                </li>
                <li>
                    <a href="#Tourism" class="text-base text-white  hover:text-violet-600">
                        Tourist
                    </a>
                </li>
                <li>
                    <a href="#event" class="text-base text-white  hover:text-violet-600">
                        Attraction
                    </a>
                </li>
            </ul>
            <div class="flex flex-row items-center mr-2">
                <div class="bg-white py-2 px-4 rounded-full ">
                    <input type="search" name="search" id="search" class="text-sm text-black outline-none font-semibold" placeholder="Search">
                    <button class="bg-violet-600 text-white  px-3 py-1 rounded-full hover:bg-neutral-200 text-base "><img src="./src/img/cari-removebg-preview.png" width="18px" alt=""></button>
                </div>
                <div class="p-[8px]">
                    <a href="" class="bg-violet-600 text-white py-2 px-3 rounded-full hover:bg-neutral-200 hover:text-black text-base font-semibold">Sign In</a>
                </div>
                <div>
                    <a href="" class="bg-violet-600 text-white py-2 px-3 rounded-full hover:bg-neutral-200 hover:text-black text-base font-semibold " >Register</a>
                </div>
            </div>
        </nav>
    <!-- Navbar End -->

    <!-- Home Start -->
    <section class="max-w-6xl mx-auto pt-12 font-['Poppins']" id="Home" data-aos="zoom-in-up">
        <div class="flex flex-row justify-around items-center">
            <div class="flex flex-col py-auto">
                <div class="w-fit gap-x-2 px-3 py-2 small-badge flex flex-row bg-white rounded-full">
                    <div class="px-2 py-1 flex gap-x-1">
                        <img src="./src/img/web.png" class="w-6" alt="">
                        <p class="text-base font-semibold text-indigo-950 text-[13px]">
                            Website Rekomendasi Penjalanan Wisata Anda!
                        </p> 
                    </div>
                </div>
                <div class="flex gap-y-2 flex-col my-6">    
                    <h1 class="text-indigo-950 font-['Playfair_Display'] text-[55px] leading-none font-semibold">
                        Tempat Baru,<br>Kenangan Berharga!
                    </h1>
                    <p class="text-base leading-loose text-gray-500 text-[15px]">
                        Rekomendasi Wisata di Seluruh Indonesia, Berdasarkan Kota,<br>Wisata, dan Event, Untuk Petualangan Tak Terlupakan!
                    </p>
                </div>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]" >Daftar Sekarang</a>
            </div>
            <div class="flex flex-row items-center ujang">
                <img src=".//src/img/kana.png" class="w-96" alt="">
            </div>
        </div>
    </section> 
     <!-- Home End -->

    <!-- City Start -->
     <section id="city">
        <div class="max-w-6xl mx-auto py-12 border-spacing-3">
            <h3 class="text-center text-indigo-950 font-bold font-['Playfair_Display']  text-[45px]">Your Best Choice City</h3>
            <div class="grid grid-cols-4 gap-x-8 justify-center mt-10">
                <div class="my-card flex flex-col gap-y-5 bg-white text-indigo-950 hover:bg-indigo-950 hover:text-white rounded-2xl p-5 transition delay-150 duration-300 border-2 border-indigo-950 hover:border-sky-500">
                    <a href="akun.html"><img src="./src/img/tugu.jpg" class="rounded-2xl" alt="Tugu Jogja"></a>
                    <a href="akun.html"><h3 class="font-semibold text-center" >Yogyakarta</h3></a>
                    <p class="text-sm text-justify">Kota budaya dengan candi-candi megah, kuliner gudeg yang khas, dan suasana yang santai.</p>
                </div>
                <div class="my-card flex flex-col gap-y-5 bg-white text-indigo-950 hover:bg-indigo-950 hover:text-white rounded-2xl p-5 transition delay-150 duration-300 border-2 border-indigo-950 hover:border-sky-500">
                    <a href="akun.html"><img src="./src/img/borobudur.webp" class="rounded-2xl" alt="Borobudur"></a>
                    <a href="akun.html"><h3 class="font-semibold text-center" >Magelang</h3></a>
                    <p class="text-sm text-justify">Kota dengan pemandangan alam yang indah, terutama di sekitar Gunung Merapi, serta berbagai candi bersejarah.</p>
                </div>
                <div class="my-card flex flex-col gap-y-5 bg-white text-indigo-950 hover:bg-indigo-950 hover:text-white rounded-2xl p-5 transition delay-150 duration-300 border-2 border-indigo-950 hover:border-sky-500">
                    <a href="akun.html"><img src="./src/img/tumpak.jpg" class="rounded-2xl" alt="Lumajang"></a>
                    <a href="akun.html"><h3 class="font-semibold text-center" >Lumajang</h3></a>
                    <p class="text-sm text-justify">Surga bagi pecinta alam, dengan air terjun, gunung, dan taman nasional yang indah dan menakjubkan.</p>
                </div>
                <div class="my-card flex flex-col gap-y-5 bg-white text-indigo-950 hover:bg-indigo-950 hover:text-white rounded-2xl p-5 transition delay-150 duration-300 border-2 border-indigo-950 hover:border-sky-500">
                    <a href="akun.html"><img src="./src/img/mlanag.jpg" class="rounded-2xl" alt="Bandung"></a>
                    <a href="akun.html"><h3 class="font-semibold text-center" >Bandung</h3></a>
                    <p class="text-sm text-justify">Kota mode dengan suasana sejuk, bangunan-bangunan bergaya Eropa, dan kuliner yang beragam.</p>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-x-8 justify-center mt-10">
                <div class="my-card flex flex-col gap-y-5 bg-white text-indigo-950 hover:bg-indigo-950 hover:text-white rounded-2xl p-5 transition delay-150 duration-300 border-2 border-indigo-950 hover:border-sky-500">
                    <a href="akun.html"><img src="./src/img/Gili-Trawangan-Activites-a-faire.jpg" class="rounded-2xl" alt="Lombok"></a>
                    <a href="akun.html"><h3 class="font-semibold text-center" >Lombok</h3></a>
                    <p class="text-sm text-justify">Pulau dengan pantai pasir putih, gunung berapi, dan budaya yang unik.</p>
                </div>
                <div class="my-card flex flex-col gap-y-5 bg-white text-indigo-950 hover:bg-indigo-950 hover:text-white rounded-2xl p-5 transition delay-150 duration-300 border-2 border-indigo-950 hover:border-sky-500">
                    <a href="akun.html"><img src="./src/img/rumah_gadang.jpg" class="rounded-2xl" alt="Padang"></a>
                    <a href="akun.html"><h3 class="font-semibold text-center" >Padang</h3></a>
                    <p class="text-sm text-justify">Kota dengan kuliner pedas yang khas dan legendaris, bangunan bersejarah, dan keindahan alam yang beragam.</p>
                </div>
                <div class="my-card flex flex-col gap-y-5 bg-white text-indigo-950 hover:bg-indigo-950 hover:text-white rounded-2xl p-5 transition delay-150 duration-300 border-2 border-indigo-950 hover:border-sky-500">
                    <a href="akun.html"><img src="./src/img/raja-ampat-surga8.jpg" class="rounded-2xl" alt="Papua Barat"></a>
                    <a href="akun.html"><h3 class="font-semibold text-center" >Papua Barat</h3></a>
                    <p class="text-sm text-justify">Surga bagi petualang, dengan hutan hujan tropis, pantai eksotis, dan budaya asli yang masih terjaga.</p>
                </div>
                <div class="my-card flex flex-col gap-y-5 bg-white text-indigo-950 hover:bg-indigo-950 hover:text-white rounded-2xl p-5 transition delay-150 duration-300 border-2 border-indigo-950 hover:border-sky-500">
                    <a href="akun.html"><img src="./src/img/Prambanan-Temple-Java.jpg" class="rounded-2xl" alt="Prambanan"></a>
                    <a href="akun.html"><h3 class="font-semibold text-center" >Prambanan</h3></a>
                    <p class="text-sm text-justify">Kompleks candi Hindu-Buddha terbesar di Indonesia, dengan arsitektur yang megah dan sejarah yang kaya.</p>
                </div>
            </div>
        </div>
     </section>
     <!-- City End -->

     <!-- Torism Start -->
     <section class="max-w-6xl mx-auto pt-12  font-['Poppins']" id="Tourism" data-aos="zoom-in-up">
        <div class="flex flex-row justify-around items-center">
            <div class="flex flex-row items-center ujang">
                <img src="..//src/img/poseter2.png" class="w-96" alt="">
            </div>
            <div class="flex flex-col py-auto">
                <div class="flex gap-y-2 flex-col">    
                    <h1 class="text-indigo-950 font-['Playfair_Display'] text-[55px] leading-none font-semibold">
                        Your Best,<br>Choice Tourism!
                    </h1>
                    <p class="leading-loose text-gray-500 text-[15px]">
                        Rekomendasi Wisata di Seluruh Indonesia, Berdasarkan <br>Wisata Untuk Petualangan Tak Terlupakan!
                    </p>
                </div>
                <div class="w-fit gap-x-2 px-3 py-2 small-badge flex flex-row bg-white rounded-full">
                    <div class="px-2 py-1 flex gap-x-1">
                        <img src="./src/img/web.png" class="w-6" alt="">
                        <p class=" font-semibold text-indigo-950 text-[15px]">
                            Website Rekomendasi Penjalanan Wisata Anda!
                        </p> 
                    </div>
                </div>
                <div class="w-fit gap-x-2 px-3 py-2 mt-2 small-badge flex flex-row bg-white rounded-full">
                    <div class="px-2 py-1 flex gap-x-1">
                        <img src="./src/img/web.png" class="w-6" alt="">
                        <p class=" font-semibold text-indigo-950 text-[15px]">
                            Website Rekomendasi Penjalanan Wisata Anda!
                        </p> 
                    </div>
                </div>
                <a href="#Tourism" class="bg-violet-700 mt-3 text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]" >Kunjungi</a>
            </div>
        </div>
    </section> 
      <!-- Tourism End -->

     <!-- Slide Tourism Start -->
    <section id="slide">
        <div class="slider" >
            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🌅Pantai</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Pemandangan laut dan pasir putih memukau di Pantai Tanjung Aan di Lombok, Pantai Sawarna di Banten, Pantai Losari di Makassar, dan Pantai Gili Trawangan Lombok.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🏔️Pengunungan</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Kawasan hijau dengan udara sejuk dan panorama indah seperti Gunung Rinjani di Lombok, Gunung Papandayan di Garut, dan Pegunungan Arfak di Papua Barat.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🎭Budaya</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Menyajikan seni, tradisi, dan kerajinan khas, seperti batik di Solo, pertunjukan wayang di Yogyakarta, dan seni ukir di Jepara.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🌊Bawah Laut</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Surga bagi penyelam dan pecinta laut, seperti Taman Laut Wakatobi di Sulawesi Tenggara, Pulau Weh di Aceh, dan Pulau Menjangan di Bali.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🌳Taman Nasional</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Kawasan alam dengan spesies langka, seperti Taman Nasional Baluran di Jawa Timur (savanna dan banteng), Taman Nasional Lorentz di Papua (puncak bersalju), dan Taman Nasional Sembilang di Sumatera Selatan (hutan mangrove).</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🏞️Air Terjun</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Pesona air terjun dengan keindahan alami, seperti Air Terjun Sipiso-Piso di Sumatera Utara, Air Terjun Coban Rondo di Malang, dan Air Terjun Nungnung di Bali.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🚤Danau</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Panorama indah dan tenang, seperti Danau Singkarak di Sumatera Barat, Danau Sentani di Papua, dan Danau Poso di Sulawesi Tengah.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🎎Sejarah</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Menelusuri jejak masa lalu di Museum Fatahillah di Jakarta, Benteng Vredeburg di Yogyakarta, dan Situs Megalitikum Gunung Padang di Jawa Barat.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🍜 Kuliner</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Mencicipi kuliner khas, seperti soto Betawi di Jakarta, coto Makassar di Sulawesi Selatan, dan sate lilit di Bali.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🕌Religi</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Kunjungi tempat ibadah bersejarah, seperti Masjid Menara Kudus di Jawa Tengah, Klenteng Sam Poo Kong di Semarang, dan Gereja Ayam di Magelang.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🏡Desa Wisata</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Menikmati suasana pedesaan yang otentik, seperti Desa Pentingsari di Sleman, Desa Wisata Bena di Flores, dan Desa Trunyan di Bali.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🚣‍♂️Wisata Adventure</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Tantang adrenalin dengan paragliding di Matantimali, Sulawesi Tengah, mendaki tebing di Citatah Bandung, atau cave tubing di Gua Pindul Yogyakarta.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🌿Desa Agro</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Pelajari proses pertanian dan nikmati hasilnya di perkebunan apel Batu, kebun stroberi di Lembang Bandung, dan kebun durian di Medan.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">⛺Perkemahan</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Camping di alam terbuka, seperti di Ranu Kumbolo di kaki Gunung Semeru, Puncak Becici di Bantul, atau Gunung Prau di Dieng.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🏯Kampung Adat</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Memahami tradisi lokal di Kampung Naga di Tasikmalaya, Desa Kete Kesu di Toraja, dan Kampung Adat Sijunjung di Sumatera Barat.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🍃Hutan Mangrove</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Ekosistem unik di Mangrove Brebes, Mangrove Tarakan, dan Mangrove Bali.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">📚Edukasi</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Menambah pengetahuan di Taman Pintar Yogyakarta, Museum Geologi Bandung, dan Kebun Raya Bogor.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🌆Kota Tua</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Jelajahi sejarah kota di Kota Tua Jakarta, Kota Lama Semarang, dan kawasan Braga di Bandung.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🐘Safari dan Satwa Liar</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Menyaksikan satwa liar di Taman Safari Bogor, Bali Safari & Marine Park, dan Kebun Binatang Ragunan di Jakarta.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🚣‍♂️Off-Road dan Jeep Adventure</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Serunya petualangan jeep di Merapi Lava Tour Yogyakarta, Bromo Jeep Adventure di Jawa Timur, dan Jeep Adventure di Bandung.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🚤Arung Jeram</h1>
                <p class="text-center mb-3 mt-3 text-indigo-950">Pengalaman mendebarkan di Sungai Asahan di Sumatera Utara, Sungai Progo di Yogyakarta, dan Sungai Elo di Magelang</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <div class="item justify-items-center">
                <h1 class="text-3xl font-semibold  text-indigo-950">🛒Belanja </h1>
                <p class="text-center mb-3 mt-3  text-indigo-950">Berbelanja di Pasar Baru Jakarta, Pasar Beringharjo Yogyakarta, dan Sentra Kerajinan Kasongan di Bantul.</p>
                <a href="" class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>

            <button id="next" class="text-indigo-950 text-6xl font-bold">></button>
            <button id="prev" class="text-indigo-950 text-6xl font-bold"><</button>
        </div>
    </section>
     <!-- Slide Tourism End -->
 
    <!-- Patner Start -->
     <section class="Partner max-w-6xl mx-auto py-10" data-aos="zoom-in-up">
            <div class="flex flex-row justify-center">
                <h1 class="text-indigo-950 font-['Playfair_Display'] text-[35px] leading-none font-bold">
                    Our Partner
                </h1>
            </div>
            <div class="flex flex-row gap-x-10 items-center justify-center mt-8">
                <img class="w-[122px]" src="./src/img/agoda-vector-logo-2021-removebg-preview.png" alt="">
                <img class="w-[122px]" src="./src/img/tiket.com-removebg-preview.png" alt="">
                <img class="w-[102px]" src="./src/img/traveloka-removebg-preview.png" alt="">
                <img class="w-[122px]" src="./src/img/aladin.png" alt="">
                <img class="w-[122px]" src="./src/img/KAI_Access_logo-removebg-preview.png" alt="">
            </div>
     </section>
    <!-- Patner End -->

    <!-- Event Start -->
     <section id="event">
        <h1 class="text-indigo-950 font-['Playfair_Display'] text-[45px] leading-none font-semibold text-center">
            Famous Event's Indonesia
        </h1>
        <div class="container max-w-6xl ">            
           
            <div class="card__container card__container1 flex flex-rows-5 gap-x-8">

                <article class="card__article">
                    <img src="./src/img/wjg.jpg" alt="tugu" class="card__img">

                    <div class="card__data justify-items-center">
                        <span class="card__description text-center">Wayang Jogja <br> Night Carnival</span>
                        <p class=" card__title text-center text-indigo-950">DI Yogyakarta</p>
                        <a href="https://wjnc.jogjakota.go.id/" target="_blank" class="hover:bg-violet-700 text-white py-2 px-5 rounded-full bg-indigo-950 text-base font-semibold  w-fit text-center text-[15px]">Kunjungi</a>
                    </div>
                </article>   

                <article class="card__article">
                    <img src="./src/img/mask.jpg" alt="tugu" class="card__img">

                    <div class="card__data justify-items-center">
                        <span class="card__description text-center">Internasional Mask Festival</span>
                        <p class=" card__title text-center text-indigo-950">Kesultanan Surakarta</p>
                        <a href="https://eventdaerah.kemenparekraf.go.id/detail-event/international-mask-festival" target="_blankx" class="hover:bg-violet-700 text-white py-2 px-5 rounded-full bg-indigo-950 text-base font-semibold  w-fit text-center text-[15px]">Kunjungi</a>
                    </div>
                </article>   

                <article class="card__article">
                    <img src="./src/img/ogoh.jpg" alt="tugu" class="card__img">

                    <div class="card__data justify-items-center">
                        <span class="card__description text-center">Pawai Ogoh-Ogoh</span>
                        <p class=" card__title text-center text-indigo-950">Denpasar, Bali</p>
                        <a href="https://jadesta.kemenparekraf.go.id/atraksi/pawai_ogohogoh" target="_blank" class="hover:bg-violet-700 text-white py-2 px-5 rounded-full bg-indigo-950 text-base font-semibold  w-fit text-center text-[15px]">Kunjungi</a>
                    </div>
                </article>   
                
             </div>

             <div class="card__container  flex flex-rows-5 gap-x-8">

                <article class="card__article">
                    <img src="./src/img/ramayan.jpg" alt="tugu" class="card__img">

                    <div class="card__data justify-items-center">
                        <span class="card__description text-center">Ramayana Ballet Show</span>
                        <p class="card__title text-center text-indigo-950">Prambanan Temple Java</p>
                        <a href="https://www.borobudursunrise.net/news140-schedule-ramayana-ballet-prambanan-2016.html" target="_blank" class="hover:bg-violet-700 text-white py-2 px-5 rounded-full bg-indigo-950 text-base font-semibold  w-fit text-center text-[15px]">Kunjungi</a>
                    </div>
                </article>   

                <article class="card__article">
                    <img src="./src/img/karapan.jpg" alt="tugu" class="card__img">

                    <div class="card__data justify-items-center">
                        <span class="card__description text-center">Karapan Sapi</span>
                        <p class=" card__title text-center text-indigo-950">Madura</p>
                        <a href="https://www.kemenparekraf.go.id/ragam-pariwisata/5-Atraksi-Wisata-Ikonik-Indonesia-yang-Memukau-Wisatawan" target="_blank" class="hover:bg-violet-700 text-white py-2 px-5 rounded-full bg-indigo-950 text-base font-semibold  w-fit text-center text-[15px]">Kunjungi</a>
                    </div>
                </article>   

                <article class="card__article">
                    <img src="./src/img/batu (1).jpg" alt="tugu" class="card__img">

                    <div class="card__data justify-items-center">
                        <span class="card__description text-center">Atraksi Lompat Batu</span>
                        <p class=" card__title text-center text-indigo-950">Nias, Sumatera Utara</p>
                        <a href="https://www.kemenparekraf.go.id/ragam-pariwisata/5-Atraksi-Wisata-Ikonik-Indonesia-yang-Memukau-Wisatawan" target="_blank" class="hover:bg-violet-700 text-white py-2 px-5 rounded-full bg-indigo-950 text-base font-semibold  w-fit text-center text-[15px]">Kunjungi</a>
                    </div>
                </article>   
                
             </div>
        </div>
     </section>
     <!-- Event End -->

     <!-- SVG Start -->
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1e1b4b" fill-opacity="1" d="M0,96L34.3,128C68.6,160,137,224,206,229.3C274.3,235,343,181,411,160C480,139,549,149,617,138.7C685.7,128,754,96,823,117.3C891.4,139,960,213,1029,240C1097.1,267,1166,245,1234,202.7C1302.9,160,1371,96,1406,64L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>       
     <!-- SVG End -->

     <!-- Footer Start -->
     <section class="footer  bg-indigo-950" >
        <div class="max-w-6xl mx-auto py-8 grid grid-cols-5 justify-end items-center">
            
            <div class="company flex flex-col col-span-2 gap-y-1">
                <div class="flex flex-rows items-center">
                    <a href="index.html"><img src="./src/img/pasawat-removebg-preview.png" width="85px" alt="Logo"></a>
                    <h1 class="text-white font-['Playfair_Display'] text-[30px] pb-5 font-semibold text-start ">
                        weserve
                    </h1>
                </div>
                <p class="text-gray-500">Discover Your Next Adventure with the Latest Travel Recommendations, bringing you unique destinations <br> and unforgettable experiences.</p>
            </div>

            <div class="site-map flex flex-col gap-y-7">
                <h3 class="text-white font-bold text-lg product">
                    Product
                </h3>
                <ul class="flex flex-col gap-y-2">
                    <li>
                        <a href="#" class="text-base text-gray-500 hover:text-violet-700">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-500 hover:text-violet-700">
                            City
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-500 hover:text-violet-700">
                            Tourist
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-500 hover:text-violet-700">
                            Attraction
                        </a>
                    </li>
                </ul>
            </div>

            <div class="site-map flex flex-col gap-y-7">
                <h3 class="text-white font-bold text-lg product">
                    Explore
                </h3>
                <ul class="flex flex-col gap-y-2">
                    <li>
                        <a href="#" class="text-base text-gray-500 hover:text-violet-700">
                            Jakarta
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-500 hover:text-violet-700">
                            Yogyakarta
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-500 hover:text-violet-700">
                            Bali
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-500 hover:text-violet-700">
                            Lombok
                        </a>
                    </li>
                </ul>
            </div>

            <div class="site-map flex flex-col gap-y-7">
                <h3 class="text-white font-bold text-lg product">
                    Terms And Policies
                </h3>
                <ul class="flex flex-col gap-y-2">
                    <li>
                        <a href="#" class="text-base text-gray-500 hover:text-violet-700">
                            Privacy Policy
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-500 hover:text-violet-700">
                            Terms of Use
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-500 hover:text-violet-700">
                            Acessibility
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-500 hover:text-violet-700">
                            Reward System Policy
                        </a>
                    </li>
                </ul>
            </div>
        </div>
     </section>
     <!-- Footer End -->
      
     <script>
        let items = document.querySelectorAll('.slider .item');
        let active = 3;
        function loadShow(){
            items[active].style.transform = `none`;
            items[active].style.zIndex = 1;
            items[active].style.filter = 'none';
            items[active].style.opacity = 1;
            
            let stt = 0;
            for(var i = active + 1; i < items.length; i ++){
                stt++;
                items[i].style.transform = `translateX(${120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(-1deg)`;
                items[i].style.zIndex = -stt;
                items[i].style.filter = 'blur(5px)';
                items[i].style.opacity = stt > 2 ? 0 : 0.6;
            }
             stt = 0;
            for(var i = (active - 1); i >= 0; i --){
                stt++;
                items[i].style.transform = `translateX(${-120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(1deg)`;
                items[i].style.zIndex = -stt;
                items[i].style.filter = 'blur(5px)';
                items[i].style.opacity = stt > 2 ? 0 : 0.6;
            }
        }
        loadShow();
        let next = document.getElementById('next');
        let prev = document.getElementById('prev');
        next.onclick = function(){
           active = active + 1 < items.length ?  active + 1 : active;
           loadShow();
        }
        prev.onclick = function(){
            active = active - 1 >= 0 ? active -1 : active;
            loadShow();
        }
        
        
        </script>
</body>





</html>