@extends('_layouts.master')

@section('content')
    <div class="container lg:w-3/4 text-center mb-4 lg:mb-8">
        <div class="pt-16 mx-8">
            <img class="max-w-full md:max-w-sm w-full mb-8" src="/assets/images/logo-dark.svg" alt="Claire Laree Beggs">
        </div>
        <div class="w-full bg-white shadow rounded-lg">
            <div class="flex flex-wrap items-center justify-center p-4">
                <a class="flex items-center justify-center mx-6 my-3 text-grey-darkest no-underline hover:opacity-75 transition" href="https://www.facebook.com/profile.php?id=100011055280081" target="_blank">
                    <svg class="mr-3 w-5 text-grey-darker fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 80v352c0 26.5-21.5 48-48 48h-85.3V302.8h60.6l8.7-67.6h-69.3V192c0-19.6 5.4-32.9 33.5-32.9H384V98.7c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9H184v67.6h60.9V480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z"/></svg>
                    Facebook
                </a>
                <a class="flex items-center justify-center mx-6 my-3 text-grey-darkest no-underline hover:opacity-75 transition" href="https://www.instagram.com/clairelb6designs/" target="_blank">
                    <svg class="mr-3 w-5 text-grey-darker fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                    Instagram
                </a>
                <a class="flex items-center justify-center mx-6 my-3 text-grey-darkest no-underline hover:opacity-75 transition" href="https://www.linkedin.com/in/claire-laree-beggs-654332158/" target="_blank">
                    <svg class="mr-3 w-5 text-grey-darker fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                    Linkedin
                </a>
                <a href="mailto:clairelb6@gmail.com" class="flex items-center justify-center mx-6 my-3 text-grey-darkest no-underline hover:opacity-75 transition">
                    <svg class="mr-3 w-5 text-grey-darker fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/></svg>
                    clairelb6@gmail.com
                </a>
            </div>
        </div>
    </div>
    <div class="container lg:w-3/4 mb-16">
        <div class="flex flex-wrap justify-between lg:-mx-2">
            <div class="w-full lg:w-1/2 lg:p-2 pb-4">
                <div class="h-full p-8 bg-white rounded-lg shadow-lg hover:lift transition">
                    <div class="mb-2 flex items-center mb-2">
                        <span class="bg-grey-darker rounded-full p-2 flex items-center mr-3"><svg class="inline-block w-4 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 0l20 8-8 4-2 8z"/></svg></span>
                        <h2 class="text-grey-darkest font-serif font-normal">Mission Statement</h2>
                    </div>
                    <div class="ml-12 mr-4">
                        I want to give my best, do good creative work, travel, explore, help others, and never stop learning throughout life.
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 lg:p-2 pb-4">
                <div class="h-full p-8 bg-white rounded-lg shadow-lg hover:lift transition">
                    <div class="mb-2 flex items-center mb-2">
                        <span class="bg-grey-darker rounded-full p-2 flex items-center mr-3"><svg class="inline-block w-4 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3.33 8L10 12l10-6-10-6L0 6h10v2H3.33zM0 8v8l2-2.22V9.2L0 8zm10 12l-5-3-2-1.2v-6l7 4.2 7-4.2v6L10 20z"/></svg></span>
                        <h2 class="text-grey-darkest font-serif font-normal">Education</h2>
                    </div>
                    <div class="ml-12 mr-4">
                        <p>Associates of Applied Science Degree, Interior Design</p>
                        <p>Athens Technical College, 2018</p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 lg:p-2 pb-4">
                <div class="h-full p-8 bg-white rounded-lg shadow-lg hover:lift transition">
                    <div class="mb-2 flex items-center mb-2">
                        <span class="bg-grey-darker rounded-full p-2 flex items-center mr-3"><svg class="inline-block w-4 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3.94 6.5L2.22 3.64l1.42-1.42L6.5 3.94c.52-.3 1.1-.54 1.7-.7L9 0h2l.8 3.24c.6.16 1.18.4 1.7.7l2.86-1.72 1.42 1.42-1.72 2.86c.3.52.54 1.1.7 1.7L20 9v2l-3.24.8c-.16.6-.4 1.18-.7 1.7l1.72 2.86-1.42 1.42-2.86-1.72c-.52.3-1.1.54-1.7.7L11 20H9l-.8-3.24c-.6-.16-1.18-.4-1.7-.7l-2.86 1.72-1.42-1.42 1.72-2.86c-.3-.52-.54-1.1-.7-1.7L0 11V9l3.24-.8c.16-.6.4-1.18.7-1.7zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg></span>
                        <h2 class="text-grey-darkest font-serif font-normal">Skills</h2>
                    </div>
                    <div class="mx-4 flex flex-col sm:flex-col md:flex-row lg:flex-col xl:flex-row">
                        <ul class="flex-1 list-reset ml-6">
                            <li class="mb-1">
                                <svg class="inline-block w-3 h-3 text-grey-light opacity-75 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                Graphic Design
                            </li>
                            <li class="mb-1">
                                <svg class="inline-block w-3 h-3 text-grey-light opacity-75 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                Hand Drafting
                            </li>
                            <li class="mb-1">
                                <svg class="inline-block w-3 h-3 text-grey-light opacity-75 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                Hand Rendering
                            </li>
                            <li class="mb-1">
                                <svg class="inline-block w-3 h-3 text-grey-light opacity-75 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                Physical Boards
                            </li>
                            <li class="mb-1">
                                <svg class="inline-block w-3 h-3 text-grey-light opacity-75 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                Microsoft Office Suite
                            </li>
                        </ul>
                        <ul class="flex-1 list-reset ml-6">
                            <li class="mb-1">
                                <svg class="inline-block w-3 h-3 text-grey-light opacity-75 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                AutoCAD
                            </li>
                            <li class="mb-1">
                                <svg class="inline-block w-3 h-3 text-grey-light opacity-75 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                SketchUp
                            </li>
                            <li class="mb-1">
                                <svg class="inline-block w-3 h-3 text-grey-light opacity-75 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                Digital Boards
                            </li>
                            <li class="mb-1">
                                <svg class="inline-block w-3 h-3 text-grey-light opacity-75 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                Sketch Models
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 lg:p-2 pb-4">
                <div class="h-full p-8 bg-white rounded-lg shadow-lg hover:lift transition">
                    <div class="mb-2 flex items-center mb-2">
                        <span class="bg-grey-darker rounded-full p-2 flex items-center mr-3"><svg class="inline-block w-4 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 0l6 4 8-4 6 4v16l-6-4-8 4-6-4V0zm7 6v11l6-3V3L7 6z"/></svg></span>
                        <h2 class="text-grey-darkest font-serif font-normal">Past Successes &amp; Experiences</h2>
                    </div>
                    <div class="ml-12">
                        <p class="mb-2">Been involved with charity and volunteer work, organized, and volunteered at multiple banquets, bricked churches in South Georgia, South Carolina, Indiana, and more.</p>
                        <p>Interior Design Student Association Founding Board Member/Secretary, responsibility of planning fundraisers, organizing paper work, and planning events.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
