@extends('layout.master')

@section('title', '🚣‍♂️Traveling')

@section('content')
    <!-- Home Start -->
    <section class="max-w-6xl mx-auto font-['Poppins']" id="Home" data-aos="zoom-in-up">
        <div class="flex flex-row justify-around items-center">
            <div class="flex flex-col py-auto">
                <div class="w-fit gap-x-2 px-3 py-2 small-badge flex flex-row bg-white rounded-full">
                    <div class="px-2 py-1 flex gap-x-1">
                        <img src="{{ asset('img/web.png') }}" class="w-6" alt="">
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
                        Rekomendasi Wisata di Seluruh Indonesia, Berdasarkan Kota,<br>Wisata, dan Event, Untuk Petualangan
                        Tak Terlupakan!
                    </p>
                </div>
                <a href=""
                    class="bg-violet-700  text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Daftar
                    Sekarang</a>
            </div>
            <div class="flex flex-row items-center ujang">
                <img src="{{ asset('img/kana.png') }}" class="w-96" alt="">
            </div>
        </div>
    </section>
    <!-- Home End -->

    <!-- City Start -->
    <x-cities />
    <!-- City End -->

    <!-- Torism Start -->
    <section class="max-w-6xl mx-auto pt-12  font-['Poppins']" id="Tourism" data-aos="zoom-in-up">
        <div class="flex flex-row justify-around items-center">
            <div class="flex flex-row items-center ujang">
                <img src="{{ asset('img/poseter2.png') }}" class="w-96" alt="">
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
                        <img src="{{ asset('img/web.png') }}" class="w-6" alt="">
                        <p class=" font-semibold text-indigo-950 text-[15px]">
                            Website Rekomendasi Penjalanan Wisata Anda!
                        </p>
                    </div>
                </div>
                <div class="w-fit gap-x-2 px-3 py-2 mt-2 small-badge flex flex-row bg-white rounded-full">
                    <div class="px-2 py-1 flex gap-x-1">
                        <img src="{{ asset('img/web.png') }}" class="w-6" alt="">
                        <p class=" font-semibold text-indigo-950 text-[15px]">
                            Website Rekomendasi Penjalanan Wisata Anda!
                        </p>
                    </div>
                </div>
                <a href="#Tourism"
                    class="bg-violet-700 mt-3 text-white py-2 px-5 rounded-full hover:bg-indigo-950 text-base font-semibold justify-center w-fit text-center text-[15px]">Kunjungi</a>
            </div>
        </div>
    </section>
    <!-- Tourism End -->

    <!-- Slide Tourism Start -->
    <x-slides />


    <!-- Slide Tourism End -->

    <!-- Patner Start -->
    <section class="Partner max-w-6xl mx-auto py-10" data-aos="zoom-in-up">
        <div class="flex flex-row justify-center">
            <h1 class="text-indigo-950 font-['Playfair_Display'] text-[35px] leading-none font-bold">
                Our Partner
            </h1>
        </div>
        <div class="flex flex-row gap-x-10 items-center justify-center mt-8">
            <img class="w-[122px]" src="{{ asset('img/agoda-vector-logo-2021-removebg-preview.png') }}" alt="">
            <img class="w-[122px]" src="{{ asset('img/tiket.com-removebg-preview.png') }}" alt="">
            <img class="w-[102px]" src="{{ asset('img/traveloka-removebg-preview.png') }}" alt="">
            <img class="w-[122px]" src="{{ asset('img/aladin.png') }}" alt="">
            <img class="w-[122px]" src="{{ asset('img/KAI_Access_logo-removebg-preview.png') }}" alt="">
        </div>
    </section>
    <!-- Patner End -->

    <!-- Event Start -->
    <x-events/>
    <!-- Event End -->


@endsection

@section('scripts')
    <script>
        let items = document.querySelectorAll('.slider .item');
        let active = 3;

        function loadShow() {
            items[active].style.transform = `none`;
            items[active].style.zIndex = 1;
            items[active].style.filter = 'none';
            items[active].style.opacity = 1;

            let stt = 0;
            for (var i = active + 1; i < items.length; i++) {
                stt++;
                items[i].style.transform =
                    `translateX(${120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(-1deg)`;
                items[i].style.zIndex = -stt;
                items[i].style.filter = 'blur(5px)';
                items[i].style.opacity = stt > 2 ? 0 : 0.6;
            }
            stt = 0;
            for (var i = (active - 1); i >= 0; i--) {
                stt++;
                items[i].style.transform =
                    `translateX(${-120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(1deg)`;
                items[i].style.zIndex = -stt;
                items[i].style.filter = 'blur(5px)';
                items[i].style.opacity = stt > 2 ? 0 : 0.6;
            }
        }
        loadShow();
        let next = document.getElementById('next');
        let prev = document.getElementById('prev');
        next.onclick = function() {
            active = active + 1 < items.length ? active + 1 : active;
            loadShow();
        }
        prev.onclick = function() {
            active = active - 1 >= 0 ? active - 1 : active;
            loadShow();
        }
    </script>
@endsection
