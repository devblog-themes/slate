<!DOCTYPE html>
<html lang="en">
<head>
    <x-head />
</head>
<body class="antialiased ease bg-stone-50 dark:bg-stone-950">

    <x-nav />
    <main>
        {{ $slot }}
    </main>

    <a href="https://devdojo.com/devblog" class="fixed transform -rotate-90 ml-3 origin-left left-0 bottom-0 font-thin text-xs text-stone-700 dark:text-stone-200 hover:text-black leading-none transition-colors duration-150 ease uppercase font-thin hidden md:block">
        Crafted with dev <span class="font-bold">blog</span>
    </a>
    <script src="/assets/js/app.js"></script>
</body>
</html>
