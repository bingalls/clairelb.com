@extends('_layouts.master')

@section('content')
<div class="container flex flex-wrap items-center justify-center py-8">
    <div class="w-full px-4 sm:px-0 mb-16 no-underline text-grey-darkest">
        <div
            style="background-image: url('/assets/images/traveling/{{ $page->thumbnail_path }}')"
            class="block mb-8 mx-auto w-full lg:w-3/4 h-64 md:h-lg bg-cover bg-center shadow-lg"
        >
            @if ($page->video_link)
                <iframe src="{{ $page->video_link }}" class="block h-full w-full shadow-lg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            @endif
        </div>
        <div class="w-full lg:w-2/3 mx-auto">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between lg:mb-4">
                <h2 class="font-serif font-normal text-3xl">{{ strip_tags($page->title) }}</h2>
                <span class="text-sm opacity-75 mb-2 lg:mb-0">Claire Beggs | {{ date('F jS, Y', $page->date) }}</span>
            </div>
            <div class="post-content mb-8">@yield('body')</div>
            <div class="text-right">
                <a class="text-grey-darkest opacity-75 m-4 no-underline border-b border-grey-darkest py-1" href="/traveling">Back to traveling</a>
            </div>
        </div>
    </div>
</div>
@endsection