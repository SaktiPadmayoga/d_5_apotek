<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacare-Profile-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <!-- Material Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    @include('includes.navbar')
    
    <div class="container mx-auto pt-32 pb-24 px-20">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="md:col-span-1">
                <div class="bg-white rounded-lg shadow-xl p-6 mb-6">
                    <div class="flex items-center mb-4">
                        <img src="https://memorandum.disway.id/upload/94f3a3d3b6155b48a535d477db40acda.jpg" alt="Profile" class="rounded-full mr-3 w-12 h-12">
                        <div>
                            <h2 class="font-bold text-lg">yoga</h2>
                            <p class="text-sm text-gray-600">sakti14yoga@gmail.com</p>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-3">
                        <h3 class="font-bold mb-3">Daftar Transaksi</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-600 hover:text-green-500">Keranjang</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-green-500">Semua Transaksi</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="md:col-span-3">
                <div class="bg-white rounded-lg shadow-xl p-6">
                    <div class="flex border-b pb-4 mb-4">
                        <button class="mr-4 text-green-800 border-b-2 border-green-800 pb-4 -mb-4 font-semibold text-xl">Profile</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                        <div class="flex flex-col items-center justify-center col-span-2">
                            <img src="https://memorandum.disway.id/upload/94f3a3d3b6155b48a535d477db40acda.jpg" alt="Profile Picture" class="rounded-full mx-auto mb-4 h-64 w-64">
                            <button class=" bg-green-100 text-green-500 px-4 py-2 rounded-full  mx-auto">Choose Photo</button>
                        </div>
                        <div class="flex flex-col col-span-3">
                            <h3 class="font-bold mb-4">Personal Data</h3>
                            <div class="mb-4">
                                <p class="text-sm text-gray-600 mb-1">Nama</p>
                                <div class="flex justify-between">
                                    <p>yoga</p>
                                    <a href="#" class="text-green-500 text-sm">Ubah</a>
                                </div>
                            </div>
                            <div class="mb-4">
                                <p class="text-sm text-gray-600 mb-1">Alamat</p>
                                <div class="flex justify-between">
                                    <p>Laundry Omah Adhem, MAGUWOHARJO, DEPOK KABUPATEN SLEMAN, KABUPATEN SLEMAN 55282</p>
                                    <a href="#" class="text-green-500 text-sm">Ubah</a>
                                </div>
                            </div>
                            <h3 class="font-bold mb-4 mt-6">Kontak Personal</h3>
                            <div class="mb-4">
                                <p class="text-sm text-gray-600 mb-1">Email</p>
                                <div class="flex justify-between items-center">
                                    <p>sakti14yoga@gmail.com</p>
                                    <div>
                                        <a href="#" class="text-green-500 text-sm">Ubah</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <p class="text-sm text-gray-600 mb-1">Phone</p>
                                <div class="flex justify-between">
                                    <p>081353807890</p>
                                    <a href="#" class="text-green-500 text-sm">Ubah</a>
                                </div>
                            </div>
                            <h3 class="font-bold mb-4 mt-6">Keamanan</h3>
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Kata Sandi</p>
                                <a href="#" class="text-green-500 text-sm">Ubah Kata Sandi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
</body>
</html>