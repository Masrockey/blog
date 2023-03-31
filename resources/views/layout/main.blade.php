<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $title }}
    </title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>


    <nav class="fixed top-0 left-0 z-20 w-full mb-0 bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-600">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="/" class="flex items-center">
            <img src="/images/logo.png" class="h-8 mr-3" alt="MasRockey Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">MasRockey</span>
        </a>
        <div class="flex md:order-2">
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-2" id="navbar-sticky">
            <ul class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="/" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ ($title === "Home" ? 'text-blue-700' : 'text-gray-900') }}">
                    Home
                </a>
            </li>
            <li>
                <a href="/blog" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ ($title === "Blog" ? 'text-blue-700' : 'text-gray-900') }}">
                    Blog
                </a>
            </li>
            <li>
                <a href="/about" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ ($title === "About" ? 'text-blue-700' : 'text-gray-900') }}">
                    About Me
                </a>
            </li>
            <li>
                <a href="/contact" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ ($title === "Contact" ? 'text-blue-700' : 'text-gray-900') }}">
                    Contact
                </a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container px-6 mx-auto my-24">
        @yield('container')
    </div>


</body>
</html>
