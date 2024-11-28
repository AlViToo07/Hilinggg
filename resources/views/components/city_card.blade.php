<div
    class="my-card flex flex-col gap-y-5 bg-white text-indigo-950 hover:bg-indigo-950 hover:text-white rounded-2xl p-5 transition delay-150 duration-300 border-2 border-indigo-950 hover:border-sky-500">
    <a href="{{ $link }}"><img src="{{ $img }}" class="rounded-2xl" alt={{ $city }}></a>
    <a href="{{ $link }}" class="font-semibold text-center">{{ $city }}</a>
    <p class="text-sm text-justify">{{ $desc }}</p>
</div>
