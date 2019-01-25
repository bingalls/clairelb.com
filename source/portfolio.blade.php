@extends('_layouts.master')

@section('content')
<div>
    <section class="container mx-auto mt-8">
        <h1 class="text-center mb-2 text-4xl md:text-5xl font-serif">Portfolio</h1>
        <p class="md:w-2/3 mx-4 md:mx-auto mb-8 text-center">
            This portfolio displays a wide variety of the best Interior Design work Claire accomplished while at Athens Technical College.
        </p>
    </section>
    @foreach ($portfolio->sortBy('order') as $project)
        <div class="container flex flex-col justify-center px-4 sm:px-0 mb-12">
            <a
                class="inline-block md:w-2/3 mx-auto group no-underline text-grey-darkest text-center p-4 md:px-0"
                href="/portfolio/{{ $project->getFilename() }}"
            >
                <img
                    class="block w-full shadow-lg rounded mb-4 group-hover:lift transition"
                    src="/assets/images/portfolio/{{ $project->getFilename() }}/{{ $project->images[0] }}"
                >
                <h2 class="inline font-serif font-normal leading-tight text-xl md:text-3xl border-b border-transparent group-hover:border-grey-darkest transition">
                    {{ $project->title }}
                </h2>
            </a>
        </div>
    @endforeach
</div>
@endsection