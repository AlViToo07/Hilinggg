@extends('layout.master')

@section('title', '🚣‍♂️Traveling')

@section('content')

    @if ($customer->bookmarks->isEmpty())
        <div class="flex justify-center items-center p-4 h-60">
            <p class="text-gray-500">No bookmarks found. Start adding some!</p>
        </div>
    @else
        @foreach ($customer->bookmarks as $bookmark)
            <a href="#"
                class="flex flex-row items-center mx-auto max-w-4xl bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-5">
                <img class="object-cover rounded-t-lg w-full h-full max-w-96 md:rounded-none md:rounded-s-lg"
                    src="{{ asset('img/tugu.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">{{ $bookmark->destination->name }}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-4">
                        {{ $bookmark->destination->description }}
                    </p>
                </div>
            </a>
        @endforeach
    @endif
    {{-- <a href="#"
        class="flex flex-row items-center mx-auto max-w-4xl bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-5">
        <img class="object-cover rounded-t-lg w-full h-full max-w-96 md:rounded-none md:rounded-s-lg"
            src="{{ asset('img/tugu.jpg') }}" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">Tugu Jogja</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Lorem ipsum dolor, sit amet
                consectetur adipisicing
                elit. Maiores ullam accusantium praesentium impedit accusamus quos ipsum ipsa, consectetur nesciunt ut!</p>
        </div>
    </a>
    <a href="#"
        class="flex flex-row items-center mx-auto max-w-4xl bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-5">
        <img class="object-cover rounded-t-lg w-full h-full max-w-96 md:rounded-none md:rounded-s-lg"
            src="{{ asset('img/tugu.jpg') }}" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">Tugu Jogja</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Lorem ipsum dolor, sit amet
                consectetur adipisicing
                elit. Maiores ullam accusantium praesentium impedit accusamus quos ipsum ipsa, consectetur nesciunt ut!</p>
        </div>
    </a> --}}

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
    </script>
@endsection

@endsection
