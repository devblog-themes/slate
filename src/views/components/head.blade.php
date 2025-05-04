<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
@if(isset($post) && isset($post->title))
    <title>{{ $post->title }}</title>
@else
    <title>Welcome to my developer blog</title>
@endif

{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/typography@0.3.1/dist/typography.min.css">
<style type="text/tailwindcss">
    @custom-variant dark (&:where(.dark, .dark *));
    {!! readfile(resource_path('assets/css/app.css')) !!}
</style>

<script>
    // prevent dark mode flicker by setting dark class immediately.
    if ( localStorage.getItem('dark') ) { document.documentElement.classList.add('dark'); }
</script>

@if(isset($settings->favicon))
    <link rel="icon" type="image/png" href="{{ Storage::url($settings->favicon) }}"/>
@endif

@if (isset($post->canonical_url) && !empty($post->canonical_url))
    <link rel="canonical" href="{{ $post->canonical_url }}">
@else
    <link rel="canonical" href="{{ Request::url() }}">
@endif

@if(isset($post) && isset($post->id) && isset($type) && $type == 'post')
    <meta name="description" content="{{ $post->excerpt() }}">
@else
    <meta name="description" content="Welcome to my developer blog">
@endif

@if(isset($post) && isset($post->id) && isset($type) && $type == 'post')
    <meta property="og:site_name" content="{{ $settings->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ $post->excerpt() }}" />
    <meta property="og:url" content="{{ Request::url() }}">
    @if(isset($post->image) && $post->getOriginal('image'))
        <meta property="og:image" content="{{ $post->image }}" />
    @endif

    <meta name="twitter:card" content="summary_large_image">
    @if( !is_null($user->settings('twitter')) && $user->settings('twitter') )
        <meta name="twitter:site" content="{{ '@' . $user->settings('twitter') }}">
        <meta name="twitter:creator" content="{{ '@' . $user->settings('twitter') }}">
    @endif
    <meta name="twitter:title" content="{{ $post->title }}" />
    <meta name="twitter:description" content="{{ $post->excerpt() }}" />
    @if(isset($post->image) && $post->getOriginal('image'))
        <meta name="twitter:image" content="{{ $post->image }}" />
    @endif
@endif
