<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacare-ProdukView-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100">
    @include('includes.navbar')
    <main class="flex gap-5 pt-32 px-20 items-center justify-center bg-gray-100 max-w-7xl mx-auto">
        <section class="flex flex-col mx-auto p-10 my-10 mb-44  rounded-lg justify-center bg-white shadow-xl">
            <div class="flex">
                <div class="md:w-96 h-full rounded-lg shadow-xl flex items-center justify-center overflow-hidden">
                    <div class="photo-main rounded-t-lg bg-green-200 w-full h-full">
                        <img class="w-full h-full object-cover" src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/1/17/259b5571-e748-40db-8a53-697a15c866a9.jpg" alt="gambar obat">
                    </div>
                </div>
                <div class="product__info ml-8 space-y-6">
                    <div class="title">
                        <h1 class="text-black text-3xl font-black mb-1">Paracetamol 500 mg (10 Tablet) - First Medifarma</h1>
                    </div>
                    <div class="text-green-800 my-6">
                        Harga <span class="text-4xl ml-9 font-bold">Rp. 3.500</span>
                    </div>
                    <div class="text-green-800 mt-6 mb-3">
                        Kategori <span class="ml-5 px-2 py-1 bg-green-500 rounded-full font-semibold text-white">Tanpa Resep Dokter</span>
                    </div>
                    <div class="flex items-center">
                        <div class="text-green-800 my-6 mr-9">
                            Jumlah
                        </div>
                        <form class="max-w-xs">
                            <div class="flex items-center">
                                <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-9 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                                
                                <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-100 border-y-0 border border-gray-300 h-9 text-center text-gray-900 text-sm focus:border-blue-500 block w-16" placeholder="0" required />
                                
                                <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100  hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-9 focus:ring-gray-100  focus:ring-2 focus:outline-none">
                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="flex space-x-4">
                        <a href="{{url('/product/produk-cart')}}" class="flex flex-row py-2 px-3 border border-green-800 bg-green-200 text-green-800 font-bold rounded-lg shadow-lg hover:bg-green-500  active:scale-95 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-green-800" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor">
                                <path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/>
                            </svg>
                            <span class="ml-3">Keranjang</span>
                        </a>
                        <a href="{{url('/product/produk-checkout')}}" class="inline-flex items-center py-2 px-3 bg-green-800 text-white font-bold rounded-lg shadow-lg hover:bg-green-900 active:scale-95 transition">
                            Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-10 text-left">
                <h2 class="text-2xl font-semibold mb-2">Deskripsi Produk</h2>
                <hr>
                <p class="text-gray-700 text-lg font-medium mt-2 mb-4">Paracetamol 500 mg Tablet merupakan obat yang dapat digunakan untuk meringankan rasa sakit pada sakit kepala, sakit gigi, dan menurunkan demam. Paracetamol bekerja pada pusat pengatur suhu di hipotalamus untuk menurunkan suhu tubuh (antipiretik) serta menghambat sintesis prostaglandin sehingga dapat mengurangi nyeri ringan sampai sedang (analgesik).</p>

                <h3 class="text-lg font-semibold mb-2">Indikasi Umum</h3>
                <p class="text-gray-700 mb-4">Obat ini digunakan untuk meredakan nyeri ringan hingga sedang seperti sakit kepala, sakit gigi, nyeri otot, serta menurunkan demam.</p>

                <h3 class="text-lg font-semibold mb-2">Komposisi</h3>
                <p class="text-gray-700 mb-4">Paracetamol 500 mg.</p>

                <h3 class="text-lg font-semibold mb-2">Dosis</h3>
                <p class="text-gray-700 mb-4">Dewasa: 1-2 kaplet, 3-4 kali per hari. Penggunaan maksimum 8 kaplet per hari. Anak 7-12 tahun: 0.5-1 kaplet, 3-4 kali per hari. Penggunaan maksimum 4 kaplet per hari.</p>

                <h3 class="text-lg font-semibold mb-2">Aturan Pakai</h3>
                <p class="text-gray-700 mb-4">Obat dapat diminum sebelum atau sesudah makan.</p>

                <h3 class="text-lg font-semibold mb-2">Perhatian</h3>
                <p class="text-gray-700 mb-4">Hati-hati penggunaan pada pasien dengan gagal ginjal, gangguan fungsi hati, dan alergi atau mengalami hipersensitivitas terhadap paracetamol.</p>

                <h3 class="text-lg font-semibold mb-2">Kontra Indikasi</h3>
                <p class="text-gray-700 mb-4">Parasetamol jangan diberikan kepada penderita hipersensitif/alergi terhadap Paracetamol. Penderita gangguan fungsi hati berat.</p>

                <h3 class="text-lg font-semibold mb-2">Efek Samping</h3>
                <p class="text-gray-700 mb-4">Demam, mual, nyeri lambung, kehilangan nafsu makan, urin berwarna gelap, tinja/kotoran berwarna coklat kemerahan, mata atau kulit berwarna kuning, tinja/kotoran berdarah atau berwarna hitam.</p>

                <h3 class="text-lg font-semibold mb-2">Golongan Produk</h3>
                <p class="text-gray-700 mb-4">Obat Bebas (Hijau).</p>

                <h3 class="text-lg font-semibold mb-2">Kemasan</h3>
                <p class="text-gray-700 mb-4">1 Strip @ 10 Tablet.</p>

                <h3 class="text-lg font-semibold mb-2">Manufaktur</h3>
                <p class="text-gray-700 mb-4">First Medifarma.</p>

                <h3 class="text-lg font-semibold mb-2">No. Registrasi</h3>
                <p class="text-gray-700">BPOM: GBL9607102904A1.</p>
            </div>
        </section>
    </main>
    
    @include('includes.footer')
    
</body>
</html>
