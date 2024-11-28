@php
    use App\Models\Bookmark;
@endphp

@extends('layout.master')

@section('title', '🚣‍♂️Traveling')

@section('content')

    @php
        $images = json_decode($city->images, true); // Mengubah JSON menjadi array
        $image1 = $images['image1'] ?? ''; // Mengambil image1
    @endphp

    <h1 class="mx-auto max-w-6xl font-['Playfair_Display'] text-5xl mb-5">{{ $city->name }}</h1>
    {{-- <h1 class="mx-auto text-center">{{ $destinations }}</h1> --}}
    <!-- View Start -->
    <section class="max-w-6xl mx-auto font-['Poppins']" id="Tourism" data-aos="zoom-in-up">
        <div class="flex flex-row justify-evenly gap-x-7">
            <div class="flex flex-row items-center ujang1">
                <img src="{{ asset('img/' . $images['1']) }}" width="680px" class="rounded-xl" alt="">
            </div>
            <div class="flex flex-col gap-y-8 ujang justify-center">
                <div class="flex gap-y-2 flex-col">
                    <img src="{{ asset('img/tugu.jpg') }}" width="310px" class="rounded-xl" alt="">
                </div>
                <div class="flex gap-y-2 flex-col">
                    <img src="{{ asset('img/tugu.jpg') }}" width="310px" class="rounded-xl" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- View End -->

    <div class="max-w-6xl mx-auto mt-10">
        <!-- Carousel Container -->
        <div class="relative">
            <!-- Carousel Slides -->
            <div class="overflow-hidden relative">
                <div class="carousel-slide flex transition-transform duration-500 ease-in-out" id="carouselSlides">
                    @foreach ($destinations as $destination)
                        <div class="w-full flex-none flex justify-center items-center">
                            <section id="city">
                                <div class="max-w-6xl mx-auto py-12 items-cente mt-10 content-center bg-white rounded-3xl">
                                    <div class="ms-10">
                                        <div class="flex flex-row items-center">
                                            <h1
                                                class="text-indigo-950 font-['Playfair_Display'] text-[30px] leading-none font-semibold mb-3 mr-2">
                                                {{ $destination->name }}
                                            </h1>
                                            @auth
                                                @php
                                                    $customer = Auth::user()->customer;
                                                    $exists = Bookmark::where('customer_id', $customer->id)
                                                        ->where('item_type', 'Wisata')
                                                        ->where('item_id', $destination->id)
                                                        ->exists();
                                                @endphp

                                                @if ($exists)
                                                    {{-- Jika destinasi sudah ada di bookmark, tampilkan tombol Remove Bookmark --}}
                                                    <form action="{{ route('bookmarks.destroy', $destination->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="#ffb949"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffb949"
                                                            class="size-7">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                                        </svg></button>
                                                    </form>
                                                @else
                                                    {{-- Jika destinasi belum ada di bookmark, tampilkan tombol Add Bookmark --}}
                                                    <form action="{{ route('bookmarks.store', $destination->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary"><svg
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                class="size-7">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                                            </svg></button>
                                                    </form>
                                                @endif
                                            @endauth
                                            {{-- <a href="" class=""><img
                                                    src="{{ asset('img/image-removebg-preview 1.png') }}" class="w-9"
                                                    alt=""></a> --}}
                                        </div>
                                        <div class="flex flex-row ms-2">
                                            <img src="{{ asset('img/bintang-removebg-preview.png') }}" class="w-5"
                                                alt="">
                                            <img src="{{ asset('img/bintang-removebg-preview.png') }}" class="w-5"
                                                alt="">
                                            <img src="{{ asset('img/bintang-removebg-preview.png') }}" class="w-5"
                                                alt="">
                                            <img src="{{ asset('img/bintang-removebg-preview.png') }}" class="w-5"
                                                alt="">
                                            <img src="{{ asset('img/bintang-removebg-preview.png') }}" class="w-5"
                                                alt="">
                                        </div>
                                        <div class="flex flex-row">
                                            <img src="{{ asset('img/tempat.png') }}" class="w-8" alt="">
                                            <p class="text-sm mt-2">Daerah Istimewa Yogyakarta</p>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-x-5 mt-10">
                                        <div class="my-card flex flex-col gap-y-5 ps-10">
                                            <p>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus eius
                                                suscipit ad saepe
                                                reprehenderit recusandae maiores. Recusandae itaque, sed omnis excepturi
                                                iure
                                                autem, sint veniam
                                                optio expedita ipsum pariatur nisi. <br>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque ullam
                                                accusantium doloribus
                                                saepe reiciendis dolore sequi atque facilis! Praesentium voluptates expedita
                                                aperiam nisi corporis
                                                iure exercitationem maiores dolor nobis corrupti?
                                            </p>
                                            <div class="bg-[#e7eef0] rounded-2xl p-5 ">
                                                <div class="flex flex-col-2 gap-y-10 items-center justify-center gap-x-10">
                                                    <div class="flex-row">
                                                        <div class="flex flex-row">
                                                            <svg width="22" height="22" viewBox="0 0 22 22"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.23051 2.58519L2.87801 7.67269C2.16301 8.24102 1.70467 9.44185 1.86051 10.3402L3.07967 17.6369C3.29967 18.9385 4.54634 19.9927 5.86634 19.9927H16.133C17.4438 19.9927 18.6997 18.9294 18.9197 17.6369L20.1388 10.3402C20.2855 9.44185 19.8272 8.24102 19.1213 7.67269L12.7688 2.59435C11.788 1.80602 10.2022 1.80602 9.23051 2.58519V2.58519Z"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M9.05664 13.1815C10.2208 12.0723 11.7791 12.0723 12.9433 13.1815"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M14.886 11.2392C14.4137 10.7751 13.8687 10.3912 13.2727 10.1026C12.5625 9.75871 11.7838 9.58008 10.9948 9.58008C10.2058 9.58008 9.42699 9.75871 8.71685 10.1026C8.14852 10.3776 7.60768 10.7534 7.10352 11.2392"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M10.9951 15.584H11.0035" stroke="#828282"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="text-sm ms-2 fong-['Poopins']">Free Wifi</p>
                                                        </div>

                                                        <div class="flex flex-row mt-2">
                                                            <svg width="22" height="22" viewBox="0 0 22 22"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M1.8335 13.75H16.9585C18.7277 13.75 20.1668 15.1892 20.1668 16.9583C20.1668 18.7275 18.7277 20.1667 16.9585 20.1667C15.1893 20.1667 13.7502 18.7275 13.7502 16.9583V16.5"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M1.8335 11.0007H16.9585C18.7185 11.0007 20.1668 9.56148 20.1668 7.79232C20.1668 6.03232 18.7185 4.58398 16.9585 4.58398C16.1083 4.5864 15.2937 4.9252 14.6925 5.52636C14.0914 6.12751 13.7526 6.94216 13.7502 7.79232V8.25065"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M1.8335 8.25003H8.53433C9.02203 8.25003 9.49877 8.10541 9.90427 7.83446C10.3098 7.56351 10.6258 7.1784 10.8125 6.72783C10.9991 6.27726 11.0479 5.78146 10.9528 5.30313C10.8576 4.82481 10.6228 4.38544 10.2779 4.04059C9.93308 3.69573 9.49371 3.46089 9.01539 3.36574C8.53706 3.2706 8.04127 3.31943 7.5907 3.50606C7.14012 3.69269 6.75501 4.00875 6.48406 4.41425C6.21311 4.81975 6.0685 5.2965 6.0685 5.78419V6.13253"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="text-sm ms-2 fong-['Poopins']">Air Conditioning</p>
                                                        </div>


                                                        <div class="flex flex-row mt-2">
                                                            <svg width="22" height="22" viewBox="0 0 22 22"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.2173 2.59375H7.78234C5.49984 2.59375 4.99567 3.73042 4.70234 5.12375L3.6665 10.0829H18.3332L17.2973 5.12375C17.004 3.73042 16.4998 2.59375 14.2173 2.59375V2.59375Z"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M20.1575 18.168C20.2583 19.2405 19.3967 20.1663 18.2967 20.1663H16.5733C15.5833 20.1663 15.4458 19.7447 15.2717 19.2222L15.0883 18.6722C14.8317 17.9205 14.6667 17.4163 13.3467 17.4163H8.65334C7.33334 17.4163 7.14084 17.9847 6.91167 18.6722L6.72834 19.2222C6.55417 19.7447 6.41667 20.1663 5.42667 20.1663H3.70334C2.60334 20.1663 1.74167 19.2405 1.8425 18.168L2.35584 12.5855C2.48417 11.2105 2.75 10.083 5.15167 10.083H16.8483C19.25 10.083 19.5158 11.2105 19.6442 12.5855L20.1575 18.168Z"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M3.66667 7.33301H2.75" stroke="#828282"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M19.2502 7.33301H18.3335" stroke="#828282"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M11 2.75V4.58333" stroke="#828282"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M9.625 4.58301H12.375" stroke="#828282"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M5.5 13.75H8.25" stroke="#828282"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M13.75 13.75H16.5" stroke="#828282"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="text-sm ms-2 fong-['Poopins']">Parkir Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex-row">
                                                        <div class="flex flex-row">
                                                            <svg width="22" height="22" viewBox="0 0 22 22"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.9723 20.1673C16.0351 20.1673 20.139 16.0634 20.139 11.0007C20.139 5.9379 16.0351 1.83398 10.9723 1.83398C5.90958 1.83398 1.80566 5.9379 1.80566 11.0007C1.80566 16.0634 5.90958 20.1673 10.9723 20.1673V20.1673Z"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M11 15.125C12.094 15.125 13.1432 14.6904 13.9168 13.9168C14.6904 13.1432 15.125 12.094 15.125 11C15.125 9.90598 14.6904 8.85677 13.9168 8.08318C13.1432 7.3096 12.094 6.875 11 6.875C9.90598 6.875 8.85677 7.3096 8.08318 8.08318C7.3096 8.85677 6.875 9.90598 6.875 11C6.875 12.094 7.3096 13.1432 8.08318 13.9168C8.85677 14.6904 9.90598 15.125 11 15.125V15.125Z"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M4.49121 4.51953L7.73621 7.75536" stroke="#828282"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M4.4917 17.4819L7.7367 14.2461" stroke="#828282"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M17.4623 17.4819L14.2173 14.2461" stroke="#828282"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M17.4623 4.51953L14.2173 7.75536" stroke="#828282"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="text-sm ms-2 fong-['Poopins']">Swimming Pool</p>
                                                        </div>

                                                        <div class="flex flex-row mt-2">
                                                            <svg width="22" height="22" viewBox="0 0 22 22"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.85645 16.8213L9.69811 19.0213C10.0648 19.3879 10.8898 19.5713 11.4398 19.5713H14.9231C16.0231 19.5713 17.2148 18.7463 17.4898 17.6463L19.6898 10.9546C20.1481 9.67125 19.3231 8.57125 17.9481 8.57125H14.2814C13.7314 8.57125 13.2731 8.11292 13.3648 7.47125L13.8231 4.53792C14.0064 3.71292 13.4564 2.79625 12.6314 2.52125C11.8981 2.24625 10.9814 2.61292 10.6148 3.16292L6.85645 8.75459"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-miterlimit="10" />
                                                                <path
                                                                    d="M2.18164 16.8217V7.83835C2.18164 6.55501 2.73164 6.09668 4.01497 6.09668H4.93164C6.21497 6.09668 6.76497 6.55501 6.76497 7.83835V16.8217C6.76497 18.105 6.21497 18.5633 4.93164 18.5633H4.01497C2.73164 18.5633 2.18164 18.105 2.18164 16.8217Z"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="text-sm ms-2 fong-['Poopins']">Top Rated In Area</p>
                                                        </div>


                                                        <div class="flex flex-row mt-2">
                                                            <svg width="22" height="22" viewBox="0 0 22 22"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.0002 17.4173C11.9726 17.4173 12.9053 17.031 13.5929 16.3434C14.2805 15.6557 14.6668 14.7231 14.6668 13.7507C14.6668 12.7782 14.2805 11.8456 13.5929 11.1579C12.9053 10.4703 11.9726 10.084 11.0002 10.084C10.0277 10.084 9.09507 10.4703 8.40744 11.1579C7.7198 11.8456 7.3335 12.7782 7.3335 13.7507C7.3335 14.7231 7.7198 15.6557 8.40744 16.3434C9.09507 17.031 10.0277 17.4173 11.0002 17.4173V17.4173Z"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M9.57031 13.7509L10.1661 14.3467C10.3403 14.5209 10.6245 14.53 10.7986 14.3559L12.4303 12.8525"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M8.25009 20.1673H13.7501C17.4351 20.1673 18.0951 18.6915 18.2876 16.8948L18.9751 11.3948C19.2226 9.15815 18.5809 7.33398 14.6668 7.33398H7.33342C3.41925 7.33398 2.77759 9.15815 3.02509 11.3948L3.71259 16.8948C3.90509 18.6915 4.56509 20.1673 8.25009 20.1673Z"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M6.875 7.03156V6.1424C6.875 4.0799 8.53417 2.05406 10.5967 1.86156C11.1697 1.80526 11.7483 1.86956 12.295 2.05034C12.8417 2.23111 13.3445 2.52435 13.7711 2.91119C14.1976 3.29802 14.5385 3.76988 14.7717 4.29639C15.0048 4.8229 15.1252 5.39239 15.125 5.96823V7.23323"
                                                                    stroke="#828282" stroke-width="1.5"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="text-sm ms-2 fong-['Poopins']">Parkir Available</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-card flex flex-col gap-y-5  items-center">
                                            <img src="{{ asset('img/tugu.jpg') }}" class="w-96 rounded-2xl ujang"
                                                alt="">
                                            <div class="">
                                                <h1
                                                    class="text-indigo-950 font-['Playfair_Display'] text-[25px] text-center leading-none font-semibold">
                                                    Explore The Area
                                                </h1>
                                                <div class="flex flex-row mt-5">
                                                    <img src="{{ asset('img/tempat.png') }}" class="w-6"
                                                        alt="">
                                                    <p class="text-xs mt-2">Hotel Aston</p>
                                                    <p class="ms-5 text-xs mt-2">2 Min Drive</p>
                                                </div>
                                                <div class="flex flex-row">
                                                    <img src="{{ asset('img/tempat.png') }}" class="w-6"
                                                        alt="">
                                                    <p class="text-xs mt-2">Universitas Brawijaya</p>
                                                    <p class="ms-5 text-xs mt-2">2 Min Drive</p>
                                                </div>
                                                <div class="flex flex-row">
                                                    <img src="{{ asset('img/tempat.png') }}" class="w-6"
                                                        alt="">
                                                    <p class="text-xs mt-2">XXI Cinema 21</p>
                                                    <p class="ms-5 text-xs mt-2">2 Min Drive</p>
                                                </div>
                                                <div class="flex flex-row">
                                                    <img src="{{ asset('img/tempat.png') }}" class="w-6"
                                                        alt="">
                                                    <p class="text-xs mt-2">Daerah Istimewa Yogyakarta</p>
                                                    <p class="ms-5 text-xs mt-2">2 Min Drive</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button onclick="prevSlide()"
                class="absolute top-1/2 -left-10 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                &#10094;
            </button>
            <button onclick="nextSlide()"
                class="absolute top-1/2 -right-10 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                &#10095;
            </button>
        </div>
    </div>

    <!-- Location Start -->
    {{-- <section id="city">
        <div class="max-w-6xl mx-auto py-12 items-cente mt-10 content-center bg-white rounded-3xl">
            <div class="ms-10">
                <div class="flex flex-row">
                    <h1 class="text-indigo-950 font-['Playfair_Display'] text-[30px] leading-none font-semibold">
                        Candi Borobudur
                    </h1>
                    <a href="" class="ujang"><img src="{{ asset('img/image-removebg-preview 1.png') }}"
                            class="w-9" alt=""></a>
                </div>
                <div class="flex flex-row ms-2">
                    <img src="{{ asset('img/bintang-removebg-preview.png') }}" class="w-5" alt="">
                    <img src="{{ asset('img/bintang-removebg-preview.png') }}" class="w-5" alt="">
                    <img src="{{ asset('img/bintang-removebg-preview.png') }}" class="w-5" alt="">
                    <img src="{{ asset('img/bintang-removebg-preview.png') }}" class="w-5" alt="">
                    <img src="{{ asset('img/bintang-removebg-preview.png') }}" class="w-5" alt="">
                </div>
                <div class="flex flex-row">
                    <img src="{{ asset('img/tempat.png') }}" class="w-8" alt="">
                    <p class="text-sm mt-2">Daerah Istimewa Yogyakarta</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-x-5 mt-10">
                <div class="my-card flex flex-col gap-y-5 ps-10">
                    <p class="w-[33rem] h-60 overflow-hidden text-ellipsis line-clamp-[10]">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus eius suscipit ad saepe
                        reprehenderit recusandae maiores. Recusandae itaque, sed omnis excepturi iure autem, sint veniam
                        optio expedita ipsum pariatur nisi. <br>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque ullam accusantium doloribus
                        saepe reiciendis dolore sequi atque facilis! Praesentium voluptates expedita aperiam nisi corporis
                        iure exercitationem maiores dolor nobis corrupti?
                    </p>
                    <div class="bg-[#e7eef0] rounded-2xl p-5 w-[33rem]">
                        <div class="flex flex-col-2 gap-y-10 items-center justify-center gap-x-10">
                            <div class="flex-row">
                                <div class="flex flex-row">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.23051 2.58519L2.87801 7.67269C2.16301 8.24102 1.70467 9.44185 1.86051 10.3402L3.07967 17.6369C3.29967 18.9385 4.54634 19.9927 5.86634 19.9927H16.133C17.4438 19.9927 18.6997 18.9294 18.9197 17.6369L20.1388 10.3402C20.2855 9.44185 19.8272 8.24102 19.1213 7.67269L12.7688 2.59435C11.788 1.80602 10.2022 1.80602 9.23051 2.58519V2.58519Z"
                                            stroke="#828282" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M9.05664 13.1815C10.2208 12.0723 11.7791 12.0723 12.9433 13.1815"
                                            stroke="#828282" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.886 11.2392C14.4137 10.7751 13.8687 10.3912 13.2727 10.1026C12.5625 9.75871 11.7838 9.58008 10.9948 9.58008C10.2058 9.58008 9.42699 9.75871 8.71685 10.1026C8.14852 10.3776 7.60768 10.7534 7.10352 11.2392"
                                            stroke="#828282" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M10.9951 15.584H11.0035" stroke="#828282" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p class="text-sm ms-2 fong-['Poopins']">Free Wifi</p>
                                </div>

                                <div class="flex flex-row mt-2">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.8335 13.75H16.9585C18.7277 13.75 20.1668 15.1892 20.1668 16.9583C20.1668 18.7275 18.7277 20.1667 16.9585 20.1667C15.1893 20.1667 13.7502 18.7275 13.7502 16.9583V16.5"
                                            stroke="#828282" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M1.8335 11.0007H16.9585C18.7185 11.0007 20.1668 9.56148 20.1668 7.79232C20.1668 6.03232 18.7185 4.58398 16.9585 4.58398C16.1083 4.5864 15.2937 4.9252 14.6925 5.52636C14.0914 6.12751 13.7526 6.94216 13.7502 7.79232V8.25065"
                                            stroke="#828282" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M1.8335 8.25003H8.53433C9.02203 8.25003 9.49877 8.10541 9.90427 7.83446C10.3098 7.56351 10.6258 7.1784 10.8125 6.72783C10.9991 6.27726 11.0479 5.78146 10.9528 5.30313C10.8576 4.82481 10.6228 4.38544 10.2779 4.04059C9.93308 3.69573 9.49371 3.46089 9.01539 3.36574C8.53706 3.2706 8.04127 3.31943 7.5907 3.50606C7.14012 3.69269 6.75501 4.00875 6.48406 4.41425C6.21311 4.81975 6.0685 5.2965 6.0685 5.78419V6.13253"
                                            stroke="#828282" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p class="text-sm ms-2 fong-['Poopins']">Air Conditioning</p>
                                </div>


                                <div class="flex flex-row mt-2">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.2173 2.59375H7.78234C5.49984 2.59375 4.99567 3.73042 4.70234 5.12375L3.6665 10.0829H18.3332L17.2973 5.12375C17.004 3.73042 16.4998 2.59375 14.2173 2.59375V2.59375Z"
                                            stroke="#828282" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M20.1575 18.168C20.2583 19.2405 19.3967 20.1663 18.2967 20.1663H16.5733C15.5833 20.1663 15.4458 19.7447 15.2717 19.2222L15.0883 18.6722C14.8317 17.9205 14.6667 17.4163 13.3467 17.4163H8.65334C7.33334 17.4163 7.14084 17.9847 6.91167 18.6722L6.72834 19.2222C6.55417 19.7447 6.41667 20.1663 5.42667 20.1663H3.70334C2.60334 20.1663 1.74167 19.2405 1.8425 18.168L2.35584 12.5855C2.48417 11.2105 2.75 10.083 5.15167 10.083H16.8483C19.25 10.083 19.5158 11.2105 19.6442 12.5855L20.1575 18.168Z"
                                            stroke="#828282" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M3.66667 7.33301H2.75" stroke="#828282" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19.2502 7.33301H18.3335" stroke="#828282" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M11 2.75V4.58333" stroke="#828282" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.625 4.58301H12.375" stroke="#828282" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M5.5 13.75H8.25" stroke="#828282" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.75 13.75H16.5" stroke="#828282" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p class="text-sm ms-2 fong-['Poopins']">Parkir Available</p>
                                </div>
                            </div>
                            <div class="flex-row">
                                <div class="flex flex-row">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.9723 20.1673C16.0351 20.1673 20.139 16.0634 20.139 11.0007C20.139 5.9379 16.0351 1.83398 10.9723 1.83398C5.90958 1.83398 1.80566 5.9379 1.80566 11.0007C1.80566 16.0634 5.90958 20.1673 10.9723 20.1673V20.1673Z"
                                            stroke="#828282" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M11 15.125C12.094 15.125 13.1432 14.6904 13.9168 13.9168C14.6904 13.1432 15.125 12.094 15.125 11C15.125 9.90598 14.6904 8.85677 13.9168 8.08318C13.1432 7.3096 12.094 6.875 11 6.875C9.90598 6.875 8.85677 7.3096 8.08318 8.08318C7.3096 8.85677 6.875 9.90598 6.875 11C6.875 12.094 7.3096 13.1432 8.08318 13.9168C8.85677 14.6904 9.90598 15.125 11 15.125V15.125Z"
                                            stroke="#828282" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M4.49121 4.51953L7.73621 7.75536" stroke="#828282" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M4.4917 17.4819L7.7367 14.2461" stroke="#828282" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.4623 17.4819L14.2173 14.2461" stroke="#828282" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.4623 4.51953L14.2173 7.75536" stroke="#828282" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p class="text-sm ms-2 fong-['Poopins']">Swimming Pool</p>
                                </div>

                                <div class="flex flex-row mt-2">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.85645 16.8213L9.69811 19.0213C10.0648 19.3879 10.8898 19.5713 11.4398 19.5713H14.9231C16.0231 19.5713 17.2148 18.7463 17.4898 17.6463L19.6898 10.9546C20.1481 9.67125 19.3231 8.57125 17.9481 8.57125H14.2814C13.7314 8.57125 13.2731 8.11292 13.3648 7.47125L13.8231 4.53792C14.0064 3.71292 13.4564 2.79625 12.6314 2.52125C11.8981 2.24625 10.9814 2.61292 10.6148 3.16292L6.85645 8.75459"
                                            stroke="#828282" stroke-width="1.5" stroke-miterlimit="10" />
                                        <path
                                            d="M2.18164 16.8217V7.83835C2.18164 6.55501 2.73164 6.09668 4.01497 6.09668H4.93164C6.21497 6.09668 6.76497 6.55501 6.76497 7.83835V16.8217C6.76497 18.105 6.21497 18.5633 4.93164 18.5633H4.01497C2.73164 18.5633 2.18164 18.105 2.18164 16.8217Z"
                                            stroke="#828282" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <p class="text-sm ms-2 fong-['Poopins']">Top Rated In Area</p>
                                </div>


                                <div class="flex flex-row mt-2">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.0002 17.4173C11.9726 17.4173 12.9053 17.031 13.5929 16.3434C14.2805 15.6557 14.6668 14.7231 14.6668 13.7507C14.6668 12.7782 14.2805 11.8456 13.5929 11.1579C12.9053 10.4703 11.9726 10.084 11.0002 10.084C10.0277 10.084 9.09507 10.4703 8.40744 11.1579C7.7198 11.8456 7.3335 12.7782 7.3335 13.7507C7.3335 14.7231 7.7198 15.6557 8.40744 16.3434C9.09507 17.031 10.0277 17.4173 11.0002 17.4173V17.4173Z"
                                            stroke="#828282" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.57031 13.7509L10.1661 14.3467C10.3403 14.5209 10.6245 14.53 10.7986 14.3559L12.4303 12.8525"
                                            stroke="#828282" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M8.25009 20.1673H13.7501C17.4351 20.1673 18.0951 18.6915 18.2876 16.8948L18.9751 11.3948C19.2226 9.15815 18.5809 7.33398 14.6668 7.33398H7.33342C3.41925 7.33398 2.77759 9.15815 3.02509 11.3948L3.71259 16.8948C3.90509 18.6915 4.56509 20.1673 8.25009 20.1673Z"
                                            stroke="#828282" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M6.875 7.03156V6.1424C6.875 4.0799 8.53417 2.05406 10.5967 1.86156C11.1697 1.80526 11.7483 1.86956 12.295 2.05034C12.8417 2.23111 13.3445 2.52435 13.7711 2.91119C14.1976 3.29802 14.5385 3.76988 14.7717 4.29639C15.0048 4.8229 15.1252 5.39239 15.125 5.96823V7.23323"
                                            stroke="#828282" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p class="text-sm ms-2 fong-['Poopins']">Parkir Available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-card flex flex-col gap-y-5  items-center">
                    <img src="{{ asset('img/tugu.jpg') }}" class="w-96 rounded-2xl ujang" alt="">
                    <div class="">
                        <h1
                            class="text-indigo-950 font-['Playfair_Display'] text-[25px] text-center leading-none font-semibold">
                            Explore The Area
                        </h1>
                        <div class="flex flex-row mt-5">
                            <img src="{{ asset('img/tempat.png') }}" class="w-6" alt="">
                            <p class="text-xs mt-2">Hotel Aston</p>
                            <p class="ms-5 text-xs mt-2">2 Min Drive</p>
                        </div>
                        <div class="flex flex-row">
                            <img src="{{ asset('img/tempat.png') }}" class="w-6" alt="">
                            <p class="text-xs mt-2">Universitas Brawijaya</p>
                            <p class="ms-5 text-xs mt-2">2 Min Drive</p>
                        </div>
                        <div class="flex flex-row">
                            <img src="{{ asset('img/tempat.png') }}" class="w-6" alt="">
                            <p class="text-xs mt-2">XXI Cinema 21</p>
                            <p class="ms-5 text-xs mt-2">2 Min Drive</p>
                        </div>
                        <div class="flex flex-row">
                            <img src="{{ asset('img/tempat.png') }}" class="w-6" alt="">
                            <p class="text-xs mt-2">Daerah Istimewa Yogyakarta</p>
                            <p class="ms-5 text-xs mt-2">2 Min Drive</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Location End -->

    <!-- Hotel Start -->
    <section class="hotel max-w-6xl mx-auto pt-12">
        <h3 class="text-center text-indigo-950 font-bold font-['Playfair_Display']  text-[45px]">Hotel Recommendations</h3>
        <div class="wrapper">
            <div class="containers">
                <input class="cekBox" type="radio" name="slide" id="c1" checked>
                <label for="c1" class="card">
                    <div class="row">
                        <div class="icon">1</div>
                        <div class="description">
                            <h4>Hotel Aston</h4>
                            <p>Hotel Aston di Kota Bogor Jawa Barat</p>
                        </div>
                    </div>
                </label>
                <input class="cekBox" type="radio" name="slide" id="c2">
                <label for="c2" class="card">
                    <div class="row">
                        <div class="icon">2</div>
                        <div class="description">
                            <h4>Hotel Aston</h4>
                            <p>Hotel Aston di Kota Bogor Jawa Barat</p>
                        </div>
                    </div>
                </label>
                <input class="cekBox" type="radio" name="slide" id="c3">
                <label for="c3" class="card">
                    <div class="row">
                        <div class="icon">3</div>
                        <div class="description">
                            <h4>Hotel Aston</h4>
                            <p>Hotel Aston di Kota Bogor Jawa Barat</p>
                        </div>
                    </div>
                </label>
                <input class="cekBox" type="radio" name="slide" id="c4">
                <label for="c4" class="card">
                    <div class="row">
                        <div class="icon">4</div>
                        <div class="description">
                            <h4>Hotel Aston</h4>
                            <p>Hotel Aston di Kota Bogor Jawa Barat</p>
                        </div>
                    </div>
                </label>
                <input class="cekBox" type="radio" name="slide" id="c5">
                <label for="c5" class="card">
                    <div class="row">
                        <div class="icon">5</div>
                        <div class="description">
                            <h4>Hotel Aston</h4>
                            <p>Hotel Aston di Kota Bogor Jawa Barat</p>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </section>
    <!-- Hotel End -->

@section('scripts')
    <script>
        let currentSlide = 0;
        const slides = document.getElementById('carouselSlides');
        const totalSlides = slides.children.length;

        function updateCarouselPosition() {
            const offset = -currentSlide * 100; // Move by 100% per slide
            slides.style.transform = `translateX(${offset}%)`;
        }

        function nextSlide() {
            if (currentSlide < totalSlides - 1) {
                currentSlide++;
            } else {
                currentSlide = 0;
            }
            updateCarouselPosition();
        }

        function prevSlide() {
            if (currentSlide > 0) {
                currentSlide--;
            } else {
                currentSlide = totalSlides - 1;
            }
            updateCarouselPosition();
        }

        // Auto-slide for Carousel 1
        setInterval(() => {
            nextSlide();
        }, 5000); // Slide every 3 seconds (3000 ms)
    </script>
@endsection

@endsection
