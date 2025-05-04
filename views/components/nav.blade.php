<div class="relative">
        <div class="max-w-2xl mx-auto flex justify-between items-center h-20 select-none px-6 xl:px-0">
            <a href="/" class="font-black text-xl dark:text-white">
                <span class="bg-black dark:bg-white text-white dark:text-black px-2 py-1 rounded">ZK</span>
            </a>
            <nav class="relative flex flex-row-reverse sm:flex-row uppercase text-sm">
                <div id="openMenu" class="sm:hidden w-6 h-6 flex flex-col justify-center items-end cursor-pointer ml-4">
                    <svg class="w-8 h-8 dark:text-stone-200" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 8h16M4 16h16"></path></svg>
                </div>
                <div id="closeMenu" class="fixed top-0 right-0 mr-6 rounded-lg mt-6 z-50 w-8 h-8 p-1 flex flex-col hidden sm:hidden justify-center items-end cursor-pointer ml-4">
                    <svg class="w-6 h-6 text-stone-600 dark:text-stone-200" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M6 18L18 6M6 6l12 12"></path></svg>
                </div>
                <div id="menu" class="fixed top-0 right-0 h-screen sm:h-auto sm:relative flex flex-col justify-start hidden items-end sm:flex-row z-40 sm:flex w-full font-semibold text-xl sm:text-sm sm:w-auto pr-4 sm:pr-0 pt-20 sm:pt-0">
                    <div class="absolute w-full h-full inset-0 bg-white shadow-sm dark:bg-stone-950 top-0 right-0 block sm:hidden"></div>
                    <a href="/" class="@if(Request::is('/')){{ 'underline dark:text-white text-stone-950' }}@else{{ 'hover:underline text-stone-700 dark:text-stone-400 hover:text-stone-950 dark:hover:text-white' }}@endif relative flex inline items-center px-3 tracking-wide">Home</a>
                    @foreach($pages as $page)
                        @if($page->in_menu)
                            <a href="/{{ $page->slug }}" class="@if(Request::is($page->slug)){{ 'dark:text-white text-stone-950 underline' }}@else{{ 'hover:underline text-stone-700 dark:text-stone-400 hover:text-stone-950 dark:hover:text-white' }}@endif relative flex inline items-center px-3 tracking-wide">{{ $page->title }}</a>
                        @endif
                    @endforeach
                </div>
                <div id="darkToggle" class="font-semibold relative flex items-center pl-6 ml-4 cursor-pointer group tracking-wide  dark:text-white"> 
                    <div class="horizon w-6 h-6 overflow-hidden flex justify-center items-center border-b group-hover:border-stone-600 border-transparent absolute left-0">
                        <svg class="w-6 h-6 transform transition duration-700 ease absolute" id="sun" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <svg class="w-6 h-6 transform transition duration-700 ease absolute hidden" id="moon" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" stroke="currentColor"><path d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </div> 
                    <span class="hidden sm:inline-block">
                        <span id="dayText" class="ml-2">Day mode</span>
                        <span id="nightText" class="ml-2 hidden">Night mode</span>
                    </span>
                </div>
            </nav>
        </div>
    </div>