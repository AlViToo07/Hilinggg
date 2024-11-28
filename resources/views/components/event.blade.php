<article class="card__article">
    <img src="{{ $img }}" class="card__img">

    <div class="card__data justify-items-center">
        <span class="card__description text-center">{{ $title }}</span>
        <p class=" card__title text-center text-indigo-950">{{ $location }}</p>
        <a href="{{ $link }}" target="_blank"
            class="hover:bg-violet-700 text-white py-2 px-5 rounded-full bg-indigo-950 text-base font-semibold  w-fit text-center text-[15px]">Kunjungi</a>
    </div>
</article>