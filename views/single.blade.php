<x-layout>

    <article class="prose lg:prose-sm post px-5 md:px-0 max-w-2xl! mx-auto my-10">
        <h1 class="font-semibold! mb-0! text-3xl! sm:text-4xl!">
            {{ $post->title }}
        </h1>
        
        @if(isset($post->image) && $post->getOriginal('image'))
            <img src="{{ $post->image }}" class="w-full mb-8 rounded">
        @endif
        
        @if($type != 'page')
            <p class="text-stone-500! text-sm uppercase tracking-widest">Created {{ $post->created_at }}</p>
        @endif

        <div class="post">
            {!! $post->body !!}
        </div>
    </article>

</x-layout>
