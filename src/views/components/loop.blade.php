@foreach($posts as $post)

    <div class="cursor-pointer pt-8" onClick="window.location='/post/{{ $post->slug }}'">
        <h2 class="mb-2">
            <a href="/post/{{ $post->slug }}" class="text-xl hover:underline tracking-tight leading-tight font-semibold dark:text-stone-100">{{ $post->title }}</a>
        </h2>
        <p class="text-stone-500 text-sm">{{ $post->description }}</p>
    </div>

@endforeach
