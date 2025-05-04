<x-layout>

    <div class="mt-16 md:mt-24 lg:mt-32">
        <div class="max-w-2xl mx-auto mb-16 px-6 xl:px-0 mt-12 md:mt-20 lg:mt-24">
            <h1 class="text-3xl sm:text-4xl  font-bold leading-tight dark:text-white mb-5 sm:mb-0">
                Hello, My name is Zara. <br>I am web dev/designer living in New York
            </h1> 
            <p class="text-base lg:text-lg text-stone-500 mb-12 md:mb-20 mt-5">
                This is my personal developer blog where I document things that I learn, love, and care about.
            </p>
            @if(count($posts->items) <= 0)
                <p>No Posts Available</p>
            @else
                <x-loop :posts="$posts->items" />
                @if($posts->currentPage < $posts->lastPage)
                    <a href="/posts/{{ $posts->currentPage + 1 }}" class="text-stone-500 hover:text-stone-600 mt-12 block underline">Load More Posts</a>
                @endif
            @endif
        </div>
    </div>

</x-layout>