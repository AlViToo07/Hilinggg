<section id="event">
    <h1 class="text-indigo-950 font-['Playfair_Display'] text-[45px] leading-none font-semibold text-center">
        Famous Event's Indonesia
    </h1>
    <div class="container w-full">

        <div class=" grid grid-cols-3 gap-x-8 gap-y-10">

            <x-event>
                <x-slot name="img">{{ asset('img/wjg.jpg') }}</x-slot>
                <x-slot name="title">Wayang Jogja <br> Night Carnival</x-slot>
                <x-slot name="location">DI Yogyakarta</x-slot>
                <x-slot name="link">https://wjnc.jogjakota.go.id/</x-slot>
            </x-event>

            <x-event>
                <x-slot name="img">{{ asset('img/mask.jpg') }}</x-slot>
                <x-slot name="title">Internasional Mask Festival</x-slot>
                <x-slot name="location">Kesultanan Surakarta</x-slot>
                <x-slot name="link">https://eventdaerah.kemenparekraf.go.id/detail-event/international-mask-festival</x-slot>
            </x-event>

            <x-event>
                <x-slot name="img">{{ asset('img/ogoh.jpg') }}</x-slot>
                <x-slot name="title">Pawai Ogoh-Ogoh</x-slot>
                <x-slot name="location">Denpasar, Bali</x-slot>
                <x-slot name="link">https://jadesta.kemenparekraf.go.id/atraksi/pawai_ogohogoh</x-slot>
            </x-event>

            <x-event>
                <x-slot name="img">{{ asset('img/ramayan.jpg') }}</x-slot>
                <x-slot name="title">Ramayana Ballet Show</x-slot>
                <x-slot name="location">Prambanan Temple Java</x-slot>
                <x-slot name="link">https://www.borobudursunrise.net/news140-schedule-ramayana-ballet-prambanan-2016.html</x-slot>
            </x-event>

            <x-event>
                <x-slot name="img">{{ asset('img/karapan.jpg') }}</x-slot>
                <x-slot name="title">Karapan Sapi</x-slot>
                <x-slot name="location">Madura</x-slot>
                <x-slot name="link">https://www.kemenparekraf.go.id/ragam-pariwisata/5-Atraksi-Wisata-Ikonik-Indonesia-yang-Memukau-Wisatawan</x-slot>
            </x-event>

            <x-event>
                <x-slot name="img">{{ asset('img/batu (1).jpg') }}</x-slot>
                <x-slot name="title">Atraksi Lompat Batu</x-slot>
                <x-slot name="location">Nias, Sumatera Utara</x-slot>
                <x-slot name="link">https://www.kemenparekraf.go.id/ragam-pariwisata/5-Atraksi-Wisata-Ikonik-Indonesia-yang-Memukau-Wisatawan</x-slot>
            </x-event>

        </div>
    </div>
</section>