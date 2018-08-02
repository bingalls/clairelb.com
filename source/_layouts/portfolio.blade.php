@extends('_layouts.master')

@section('content')
    <div class="container my-16">
        <h1 class="text-4xl text-center font-serif font-bold mb-4">{{ $page->title }}</h1>
        <div class="md:w-3/4 mx-4 md:mx-auto mb-4">@yield('description')</div>
        <div class="container">
            <div class="flex flex-col items-center m-4 w-full mx-auto">
                @foreach($page->images as $image)
                    <img src="/assets/images/portfolio/{{ $page->getFilename() }}/{{ $image }}" class="block w-full md:w-2/3 my-2">
                @endforeach
            </div>
            <div class="md:w-2/3 mx-auto flex items-end justify-end">
                <a class="text-grey-darkest opacity-75 m-4 no-underline border-b border-grey-darkest" href="/portfolio">Back to portfolio</a>
            </div>
        </div>
    </div>
@endsection