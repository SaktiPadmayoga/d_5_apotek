<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacare-ProdukCart-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
    <body class="bg-gray-100">
        @include('includes.navbar')
        <div class="container mx-auto px-4 pt-36 pb-24 max-w-5xl">
            <h1 class="text-2xl font-semibold mb-6">Keranjang</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-2">
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600">
                                <span class="ml-2 text-gray-700">Tentukan Semua</span>
                            </label>
                            <button class="text-green-600 hover:underline">Hapus</button>
                        </div>
                        <div class="border-t py-4 flex items-center justify-between ">
                            <div class="flex items-center ">
                                <input type="checkbox" checked class="form-checkbox h-5 w-5 text-green-600 mr-4">
                                <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/1/17/259b5571-e748-40db-8a53-697a15c866a9.jpg" alt="Product" class="w-20 h-20 object-cover rounded-md mr-4">
                                <div>
                                    <h4 class="font-semibold">Paracetamol 500 mg (10 Tablet)</h4>
                                    <p class="text-green-500 font-semibold">RP. 3.500</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <button class="text-gray-500 hover:text-gray-700 border rounded-l px-2 py-1">
                                    -
                                </button>
                                <input type="text" value="1" class="w-10 py-1 text-center border-t border-b">
                                <button class="text-gray-500 hover:text-gray-700 border rounded-r px-2 py-1">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-1">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold mb-4">Ringkasan Belanja</h2>
                        <div class="flex justify-between mb-2">
                            <span>Total Harga (1 Produk)</span>
                            <span>Rp. 3.500</span>
                        </div>
                        <div class="border-t pt-2 mt-2 mb-5">
                            <div class="flex justify-between font-semibold">
                                <span>Total Belanja</span>
                                <span>Rp. 3.500</span>
                            </div>
                        </div>
                        <a href="{{url('/product/produk-checkout')}}" class="w-full mt-20 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Bayar</a>
                    </div>
                </div>
            </div>
    
            <div class="mt-12">
                <h2 class="text-xl font-semibold mb-4">Produk Rekomendasi</h2>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="bg-white rounded-lg shadow-md p-4 transition-transform transform hover:-translate-y-2 hover:shadow-lg">
                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/6/25/bb63cf83-a580-4c5f-8eb3-1ccc35a49043.jpg" alt="Product" class="w-full h-32 object-cover rounded-md mb-2">
                            <h3 class="font-semibold text-sm mb-1">Produk Rekomendasi {{ $i + 1 }}</h3>
                            <p class="text-orange-500 font-semibold text-sm">Rp. {{ rand(1000, 10000) }}</p>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        @include('includes.footer')
    </body>
</html>