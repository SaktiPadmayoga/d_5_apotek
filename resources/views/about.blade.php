<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacare-About-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-green-800">
    @include('includes.navbar')

    <div class="mb-16">
        <div class="bg-gray-100 pt-32">
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-20 md:py-12">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center md:max-w-6xl md:mb-12 flex flex-col justify-center mx-auto items-center">
                    <div>
                        <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                            Tentang Kami
                        </p>
                    </div>
                    <h2 class="max-w-lg mb-8 font-sans md:text-7xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">
                            <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-gray-400 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                                <defs>
                                    <pattern id="dc223fcc-6d72-4ebc-b4ef-abe121034d6e" x="0" y="0" width=".135" height=".30">
                                        <circle cx="1" cy="1" r=".7"></circle>
                                    </pattern>
                                </defs>
                                <rect fill="url(#dc223fcc-6d72-4ebc-b4ef-abe121034d6e)" width="52" height="24"></rect>
                            </svg>
                            <span class="relative">PharmaCare</span>
                        </span>
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg text-justify md:max-w-2xl w-full">
                        Pharmacare adalah apotek online yang menyediakan berbagai macam obat-obatan berkualitas dan produk kesehatan. Kami berkomitmen untuk memberikan kemudahan bagi Anda dalam memenuhi kebutuhan kesehatan Anda. Dengan berbagai produk yang dapat diakses hanya dengan beberapa klik, Pharmacare menjamin pengalaman berbelanja yang aman, cepat, dan nyaman. Tim profesional kami siap membantu Anda dalam memilih produk yang tepat dan memberikan informasi yang diperlukan untuk menjaga kesehatan Anda. Kami juga memastikan bahwa semua transaksi dilakukan dengan aman dan privasi Anda dijaga dengan ketat.
                    </p>
                </div>
            </div>
        </div>

        <div class="relative px-4 sm:px-0">
            <div class="absolute inset-0 bg-gray-100 h-1/2"></div>
            <div class="relative mx-auto overflow-hidden bg-white divide-y rounded shadow sm:divide-y-0 sm:divide-x sm:max-w-screen-sm sm:grid-cols-3 lg:max-w-screen-xl">
                <section class="py-12 bg-gray-100">
                    <div class="container mx-auto px-4">
                        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">
                            FAQ (Pertanyaan yang Sering Diajukan)
                        </h2>

                        <div class="max-w-6xl mx-auto">
                            <div class="space-y-4">
                                <!-- Accordion Item 1 -->
                                <div>
                                    <button class="flex justify-between w-full p-4 text-left text-gray-800 bg-white rounded-lg shadow-sm focus:outline-none hover:shadow-md" onclick="toggleAccordion(this)">
                                        <span>1. Apakah saya perlu mendaftar untuk berbelanja di Pharmacare?</span>
                                        <span class="text-gray-500">+</span>
                                    </button>
                                    <div class="hidden px-4 py-2 text-gray-600">
                                        Iya, Anda dapat melakukan pembelian dengan mendaftar terlebih dahulu. Dengan mendaftar memberikan Anda kemudahan dalam melacak pesanan dan mengakses riwayat pembelian.
                                    </div>
                                </div>
                                <!-- Accordion Item 2 -->
                                <div>
                                    <button class="flex justify-between w-full p-4 text-left text-gray-800 bg-white rounded-lg shadow-sm focus:outline-none hover:shadow-md" onclick="toggleAccordion(this)">
                                        <span>2. Bagaimana cara melakukan pemesanan?</span>
                                        <span class="text-gray-500">+</span>
                                    </button>
                                    <div class="hidden px-4 py-2 text-gray-600">
                                        Anda hanya perlu memilih produk yang ingin dibeli, menambahkannya ke keranjang belanja, dan mengikuti langkah-langkah checkout untuk menyelesaikan pembelian.
                                    </div>
                                </div>

                                <!-- Accordion Item 3 -->
                                <div>
                                    <button class="flex justify-between w-full p-4 text-left text-gray-800 bg-white rounded-lg shadow-sm focus:outline-none hover:shadow-md" onclick="toggleAccordion(this)">
                                        <span>3. Apakah semua obat yang dijual di Pharmacare aman?</span>
                                        <span class="text-gray-500">+</span>
                                    </button>
                                    <div class="hidden px-4 py-2 text-gray-600">
                                        Ya, semua obat yang kami tawarkan telah terdaftar dan disetujui oleh badan pengawas obat dan makanan di Indonesia. Kami berkomitmen untuk menjual produk berkualitas tinggi.
                                    </div>
                                </div>

                                <!-- Accordion Item 4 -->
                                <div>
                                    <button class="flex justify-between w-full p-4 text-left text-gray-800 bg-white rounded-lg shadow-sm focus:outline-none hover:shadow-md" onclick="toggleAccordion(this)">
                                        <span>4. Bagaimana cara membayar pesanan saya?</span>
                                        <span class="text-gray-500">+</span>
                                    </button>
                                    <div class="hidden px-4 py-2 text-gray-600">
                                        Kami menerima beberapa metode pembayaran, termasuk transfer bank, kartu kredit, dan dompet digital. Pilih metode yang paling nyaman bagi Anda saat checkout.
                                    </div>
                                </div>

                                <!-- Accordion Item 5 -->
                                <div>
                                    <button class="flex justify-between w-full p-4 text-left text-gray-800 bg-white rounded-lg shadow-sm focus:outline-none hover:shadow-md" onclick="toggleAccordion(this)">
                                        <span>5. Apakah ada biaya pengiriman?</span>
                                        <span class="text-gray-500">+</span>
                                    </button>
                                    <div class="hidden px-4 py-2 text-gray-600">
                                        Biaya pengiriman tergantung pada lokasi Anda dan berat pesanan. Anda akan melihat biaya pengiriman sebelum menyelesaikan pesanan.
                                    </div>
                                </div>

                                <!-- Accordion Item 6 -->
                                <div>
                                    <button class="flex justify-between w-full p-4 text-left text-gray-800 bg-white rounded-lg shadow-sm focus:outline-none hover:shadow-md" onclick="toggleAccordion(this)">
                                        <span>6. Bagaimana jika saya menerima produk yang salah atau rusak?</span>
                                        <span class="text-gray-500">+</span>
                                    </button>
                                    <div class="hidden px-4 py-2 text-gray-600">
                                        Jika Anda menerima produk yang salah atau rusak, silakan hubungi layanan pelanggan kami dalam waktu 24 jam setelah menerima produk untuk pengembalian atau penukaran.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="relative px-4 sm:px-0">
                    <div class="absolute inset-0 bg-gray-100 h-1/2"></div>
                    <div class="relative grid mx-auto overflow-hidden bg-white divide-y rounded shadow sm:divide-y-0 sm:divide-x sm:max-w-screen-sm sm:grid-cols-2 lg:max-w-screen-xl">
                        <section class="py-12 bg-gray-100 w-full">
                            <div class="container mx-auto px-4">
                                <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">
                                    Kebijakan Privasi
                                </h2>

                                <div class="w-full">
                                    <div class="px-4 py-2 text-gray-600">
                                        Kebijakan Privasi Pharmacare menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda. Kami menghargai privasi Anda dan berkomitmen untuk melindungi data pribadi Anda. 
                                        Informasi yang kami kumpulkan meliputi nama, alamat, nomor telepon, dan informasi pembayaran. Kami hanya menggunakan informasi ini untuk memproses pesanan Anda dan tidak akan membagikannya kepada pihak ketiga tanpa izin Anda, kecuali diwajibkan oleh hukum. 
                                        Anda memiliki hak untuk mengakses dan memperbarui informasi pribadi Anda kapan saja.
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="py-12 bg-gray-100 w-full">
                            <div class="container mx-auto px-4">
                                <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">
                                    Syarat Layanan
                                </h2>

                                <div class="w-full">
                                    <div class="px-4 py-2 text-gray-600">
                                        Syarat Layanan Pharmacare mengatur penggunaan situs web kami. Dengan mengakses atau menggunakan situs web kami, Anda setuju untuk terikat dengan syarat dan ketentuan ini. 
                                        Kami berhak untuk mengubah syarat dan ketentuan ini kapan saja, dan perubahan tersebut akan berlaku segera setelah diposting di situs web kami. 
                                        Anda bertanggung jawab untuk memeriksa syarat dan ketentuan ini secara berkala. Jika Anda tidak setuju dengan syarat dan ketentuan ini, Anda tidak diperbolehkan untuk menggunakan situs web kami.
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')

    <script>
        function toggleAccordion(button) {
            const content = button.nextElementSibling;
            const isHidden = content.classList.contains('hidden');

            // Toggle hidden class
            content.classList.toggle('hidden', !isHidden);
            button.querySelector('span.text-gray-500').textContent = isHidden ? '-' : '+';
        }
    </script>
</body>
</html>
