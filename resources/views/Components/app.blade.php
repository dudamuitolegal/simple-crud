<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="bg-white shadow dark:bg-gray-800">
    <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
        <x-nav-link :active="(bool)Request::is('/')" href="/">Home</x-nav-link>
        <x-nav-link :active="(bool)Request::is('contact')" href="/contact">Contact</x-nav-link>
        <x-nav-link :active="(bool)Request::is('jobs')" href="/jobs">Jobs</x-nav-link>
    </div>
</nav>
    <section class="bg-white dark:bg-gray-900 ">
        <div class="container min-h-screen px-6 py-12 mx-auto">
            <div>
                <p class="text-sm font-medium text-blue-500 dark:text-blue-400">{{$title}}</p>
                <h1 class="mt-3 text-2xl font-semibold text-gray-800 dark:text-white md:text-3xl">{{$slot}}</h1>
                @if(!isset($list))

                @else
                    {{$list}}
                @endif
            </div>
        </div>
</section>

</body>
</html>


