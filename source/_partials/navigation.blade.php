<nav class="fixed md:sticky w-full pin-t bg-grey-darkest text-white shadow-lg z-10">
    <div class="max-w-lg mx-auto hidden md:flex items-center justify-around text-sm font-normal px-8">
        <div class="flex-1 flex items-center justify-around">
            <a href="/portfolio" class="text-white no-underline py-2 px-2 opacity-75 hover:opacity-100 transition">Portfolio</a>
            <a href="/resume" class="text-white no-underline py-2 px-2 opacity-75 hover:opacity-100 transition">Resume</a>
        </div>
        <div class="flex-1 text-center">
            <a href="/" class="text-white no-underline text-4xl py-1 tracking-wide antialiased hover:opacity-75 transition">
                CLB
            </a>
        </div>
        <div class="flex-1 flex items-center justify-around">
            <a href="/traveling" class="text-white no-underline py-2 px-2 opacity-75 hover:opacity-100 transition">Traveling</a>
            <a href="/web-design" class="text-white no-underline py-2 px-2 opacity-75 hover:opacity-100 transition">Web Design</a>
        </div>
    </div>
    <div class="md:hidden px-4 text-white">
        <div class="flex justify-between items-center">
            <a href="/" class="p-2 text-white no-underline text-3xl font-sans tracking-wide antialiased">
                CLB
            </a>
            <button id="nav-button" class="p-2 text-white focus:outline-none focus:shadow-outline focus:opacity-50 rounded transition">
                <svg class="w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="m0 3h20v2h-20zm0 6h20v2h-20zm0 6h20v2h-20z"/></svg>
            </button>
        </div>
        <div id="mobile-nav-links" class="pb-4 hidden">
            <a class="block p-2 text-white no-underline" href="/portfolio">Portfolio</a>
            <a class="block p-2 text-white no-underline" href="/resume">Resume</a>
            <a class="block p-2 text-white no-underline" href="/traveling">Traveling</a>
            <a class="block p-2 text-white no-underline" href="/web-design">Web Design</a>
        </div>
    </div>
  </nav>