<section id="city">
    <div class="max-w-6xl mx-auto py-12 border-spacing-3">
        <h3 class="text-center text-indigo-950 font-bold font-['Playfair_Display']  text-[45px]">Your Best Choice City
        </h3>
        <div class="grid grid-cols-4 gap-x-8 gap-y-10 justify-center mt-10">
            <x-city_card>
                <x-slot name=link>
                    {{ route('city', 1) }}
                </x-slot>
                <x-slot name=img>
                    {{ asset('img/tugu.jpg') }}
                </x-slot>
                <x-slot name=city>
                    Yogyakarta
                </x-slot>
                <x-slot name=desc>
                    Kota budaya dengan candi-candi megah, kuliner gudeg yang khas, dan
                    suasana yang santai.
                </x-slot>
            </x-city_card>
            
            <x-city_card>
                <x-slot name=link>
                    {{ route('city', 2) }}
                </x-slot>
                <x-slot name=img>
                    {{ asset('img/borobudur.webp') }}
                </x-slot>
                <x-slot name=city>
                    Magelang
                </x-slot>
                <x-slot name=desc>
                    Kota dengan pemandangan alam yang indah, terutama di sekitar Gunung
                    Merapi, serta berbagai candi bersejarah.
                </x-slot>
            </x-city_card>

            <x-city_card>
                <x-slot name=link>
                    akun.html
                </x-slot>
                <x-slot name=img>
                    {{ asset('img/tumpak.jpg') }}
                </x-slot>
                <x-slot name=city>
                    Lumajang
                </x-slot>
                <x-slot name=desc>
                    Surga bagi pecinta alam, dengan air terjun, gunung, dan taman nasional
                    yang indah dan menakjubkan.
                </x-slot>
            </x-city_card>

            <x-city_card>
                <x-slot name=link>
                    akun.html
                </x-slot>
                <x-slot name=img>
                    {{ asset('img/mlanag.jpg') }}
                </x-slot>
                <x-slot name=city>
                    Bandung
                </x-slot>
                <x-slot name=desc>
                    Kota mode dengan suasana sejuk, bangunan-bangunan bergaya Eropa, dan
                    kuliner yang beragam.
                </x-slot>
            </x-city_card>

            <x-city_card>
                <x-slot name=link>
                    akun.html
                </x-slot>
                <x-slot name=img>
                    {{ asset('img/Gili-Trawangan-Activites-a-faire.jpg') }}
                </x-slot>
                <x-slot name=city>
                    Lombok
                </x-slot>
                <x-slot name=desc>
                    Pulau dengan pantai pasir putih, gunung berapi, dan budaya yang unik.
                </x-slot>
            </x-city_card>

            <x-city_card>
                <x-slot name=link>
                    akun.html
                </x-slot>
                <x-slot name=img>
                    {{ asset('img/rumah_gadang.jpg') }}
                </x-slot>
                <x-slot name=city>
                    Padang
                </x-slot>
                <x-slot name=desc>
                    Kota dengan kuliner pedas yang khas dan legendaris, bangunan bersejarah,
                    dan keindahan alam yang beragam.
                </x-slot>
            </x-city_card>

            <x-city_card>
                <x-slot name=link>
                    akun.html
                </x-slot>
                <x-slot name=img>
                    {{ asset('img/raja-ampat-surga8.jpg') }}
                </x-slot>
                <x-slot name=city>
                    Papua Barat
                </x-slot>
                <x-slot name=desc>
                    Surga bagi petualang, dengan hutan hujan tropis, pantai eksotis, dan
                    budaya asli yang masih terjaga.
                </x-slot>
            </x-city_card>

            <x-city_card>
                <x-slot name=link>
                    akun.html
                </x-slot>
                <x-slot name=img>
                    {{ asset('img/Prambanan-Temple-Java.jpg') }}
                </x-slot>
                <x-slot name=city>
                    Prambanan
                </x-slot>
                <x-slot name=desc>
                    Kompleks candi Hindu-Buddha terbesar di Indonesia, dengan arsitektur
                    yang megah dan sejarah yang kaya.
                </x-slot>
            </x-city_card>
        </div>
    </div>
</section>