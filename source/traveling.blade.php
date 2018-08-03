@extends('_layouts.master')

@section('content')
<div>
    <div class="w-full md:h-lg bg-center bg-cover"
        style="background-image: linear-gradient(to bottom right, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(/assets/images/traveling/travel.jpg)">
    </div>
    <section class="container mx-auto mt-8">
        <h1 class="text-center mb-2 text-4xl md:text-5xl font-serif font-normal">Traveling the World</h1>
        <p class="md:w-3/4 mx-4 md:mx-auto mb-8 text-center">Take a peek at some videos from my travels in Portugal, Spain and more!</p>
    </section>
    <div class="container mx-auto flex flex-col md:flex-row md:flex-wrap items-center justify-center">
        @foreach ($traveling->sortBy('date') as $post)
            <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                <a class="px-4 mb-16 flex flex-col items-center justify-center no-underline text-white rounded-lg shadow-lg h-64 bg-center bg-cover text-center hover:lift transition"
                    style="background-image: linear-gradient(to bottom right, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(/assets/images/traveling/{{ $post->thumbnail_path }})"
                    href="/traveling/{{ $post->getFilename() }}">
                    <h2 class="font-normal text-2xl md:text-3xl leading-tight mb-2">{!! $post->title !!}</h2>
                    <span class="opacity-75 text-sm">{{ date('F jS, Y', $post->date) }}</span>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection