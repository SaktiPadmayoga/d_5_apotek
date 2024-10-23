<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacare-ProdukCheckout-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100">
    @include('includes.navbar')
    <div class="container mx-auto px-4 pt-36 pb-24 max-w-5xl">
        <h1 class="text-2xl font-semibold mb-6">Pembayaran</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="md:col-span-2">
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h2 class="text-lg font-semibold mb-3">Alamat Pengiriman</h2>
                    <hr>
                    <p class="mb-2 mt-3">sakti _ (rumah)</p>
                    <p class="mb-2">081353807890</p>
                    <p class="mb-4">Laundry Omah Adhem, MAGUWOHARJO, DEPOK KABUPATEN SLEMAN, KABUPATEN SLEMAN 55282</p>
                    <div class="flex space-x-4">
                        <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-100">Pilih Alamat Lain</button>
                        <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-100">Ubah Alamat</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/1/17/259b5571-e748-40db-8a53-697a15c866a9.jpg" alt="Product" class="w-20 h-20 object-cover rounded-md mr-4">
                            <div>
                                <h3 class="font-semibold">Paracetamol 500 mg (10 Tablet) - First Medifarma</h3>
                                <p class="text-green-500 font-semibold">RP. 3.500</p>
                                <p class="text-sm text-gray-500">1 Produk</p>
                            </div>
                        </div>
                        <button class="mt-16 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Pengiriman ▼</button>
                    </div>
                </div>
            </div>
            <div class="md:col-span-1">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold mb-4">Ringkasan Belanja</h2>
                    <div class="flex justify-between mb-2">
                        <span>Harga Barang (1)</span>
                        <span>Rp. 3.500</span>
                    </div>
                    <div class="border-t pt-2 mt-2">
                        <div class="flex justify-between font-semibold">
                            <span>Total Pembayaran</span>
                            <span>Rp. 3.500</span>
                        </div>
                    </div>
                    <button class="w-full mt-4 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Bayar</button>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>