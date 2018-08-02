@extends('_layouts.master')

@section('content')
<div class="container my-8">
    <h1 class="font-serif text-5xl text-center mb-4">Web Design</h1>
    <p class="max-w-lg mx-auto text-center">
        Checkout some of the websites I've designed.
        I primarily use Squarespace for the designs,
        which makes it easy for business owners to make changes to the design and content after I've completed the initial design.
    </p>
</div>
<div class="container my-8 mx-auto flex flex-col md:flex-row justify-around">
    @foreach($websites as $website)
        <a
            href="{{ $website->url }}"
            target="_blank"
            class="block md:w-1/2 rounded-lg bg-white m-2 shadow-lg no-underline hover:lift transition"
        >
            <img
                src="/assets/images/web-design/{{ $website->screenshot }}"
                class="w-full block rounded-t-lg bg-top bg-center bg-cover"
            >
            <span class="flex items-center justify-center text-2xl text-grey-darkest py-6 font-serif">
                {{ $website->title }}
            </span>
        </a>
    @endforeach
</div>
@endsection
