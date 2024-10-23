<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacare-Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@material-tailwind/html@latest/dist/material-tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .myunderline {
            text-underline-offset: 12px;
        }
        .dropdown-transition {
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <nav class="bg-white fixed w-full z-50 top-0 start-0 bg-opacity-90 backdrop-blur-sm shadow-lg bg-cover bg-no-repeat">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img class="w-12 h-12" src="img/logo.png" alt="PharmaCare logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap">PharmaCare</span>
            </a>

            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                @if (session('user'))
                <a href="{{url('/product/produk-cart')}}" class="flex items-center text-green-900 hover:text-white mr-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" class="text-green-900" fill="currentColor" stroke="currentColor">
                        <path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/>
                    </svg>
                </a>

                <div class="relative">
                    <img id="avatarButton" type="button" class="w-10 h-10 rounded-full cursor-pointer ml-3" src="https://memorandum.disway.id/upload/94f3a3d3b6155b48a535d477db40acda.jpg" alt="User dropdown">
                    
                    <div id="userDropdown" class="absolute right-0 mt-2 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 dropdown-transition">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>yoga</div>
                            <div class="font-medium truncate">sakti14yoga@gmail.com</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                            <li>
                                <a href="{{url('/profile')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="{{url('/logout')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
                        </div>
                    </div>
                </div>
                @else
                    <a href="{{url('register')}}" class="text-green-700 border-2 border-green-700 hover:bg-green-800 hover:text-white focus:ring-2 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2 text-center mr-3">Daftar</a>
                    <a href="{{url('login')}}" class="flex items-center justify-center text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2 text-center">Masuk</a>
                @endif

                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                    <li>
                        <a href="{{ url('/') }}" class="flex items-center space-x-2 py-2 px-3 bg-green-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:bg-transparent md:p-0 {{ Request::is('/') ? 'md:text-green-700 underline myunderline text-green-700' : 'text-gray-900' }}" aria-current="page">
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('produk') }}" class="flex items-center space-x-2 py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 {{ Request::is('produk*') || Request::is('product/produk-view*') || Request::is('product/produk-checkout') || Request::is('product/produk-cart')  ? 'md:text-green-700 underline myunderline text-green-700' : 'text-gray-900' }}">
                            <span>Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('about') }}" class="flex items-center space-x-2 py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 {{ Request::is('about') ? 'md:text-green-700 underline myunderline text-green-700' : 'text-gray-900' }}">
                            <span>Tentang Kami</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const avatarButton = document.getElementById('avatarButton');
            const userDropdown = document.getElementById('userDropdown');

            avatarButton.addEventListener('click', function () {
                userDropdown.classList.toggle('hidden');
                userDropdown.classList.toggle('dropdown-transition'); // Add transition class
            });

            window.addEventListener('click', function (event) {
                if (!avatarButton.contains(event.target) && !userDropdown.contains(event.target)) {
                    userDropdown.classList.add('hidden');
                }
            });
        });
    </script>

</body>
</html>
