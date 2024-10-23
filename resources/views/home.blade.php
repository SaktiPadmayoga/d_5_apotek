<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacare-Home-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])

    <style>
        .parallax {
            position: relative;
            background-attachment: fixed;
            overflow: hidden;
            height: 100vh;
            z-index: -1;
        }

        .content {
            position: relative;
            z-index: 10;
        }

        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            object-fit: cover;
            filter: brightness(0.6); /* Tambahkan filter untuk efek kontras lebih baik */
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

</head>
<body class="bg-gray-100">
    
    @include('includes.navbar')
    
    <main class="mt-20 ">
        <div class="relative pt-20">
            <div class="absolute inset-0 w-full h-full bg-fixed parallax">
                <video autoplay muted loop class="object-cover w-full h-full video-bg">
                    <source src="img/bg-vid.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="relative bg-opacity-75 bg-deep-purple-accent-700">
                <div class="absolute inset-x-0 bottom-0">
                    <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-gray-100" preserveAspectRatio="none">
                      <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                    </svg>
                  </div>
                <div class="relative px-4 py-12 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-2xl md:px-24 lg:px-8 lg:py-20">
                    <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-2xl md:px-24 lg:px-8 lg:pb-20">
                        <div class="max-w-xl mx-auto sm:max-w-xl md:max-w-4xl">
                            <div class="text-center">
                                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-4xl md:mb-5">
                                    <div>
                                        <p class="inline-block px-3 py-px mb-9 font-semibold tracking-wider text-white uppercase rounded-full bg-teal-accent-400">
                                            Selamat Datang di PharmaCare
                                        </p>
                                    </div>
                                    <h2 class="max-w-7xl mb-16 font-sans text-2xl leading-3 text-white sm:text-4xl md:mx-auto font-bold">
                                        <span class="relative inline-block">
                                            <span class="relative">Solusi Kesehatan Anda, Langsung di Ujung Jari. Dapatkan Obat dan Produk Kesehatan anda di PharmaCare.</span>
                                        </span>
                                    </h2>
                                </div>
                                <form class="flex flex-col items-center justify-center w-full max-w-2xl mx-auto mb-10 md:flex-row md:px-16">
                                    <div class="relative w-full flex items-center justify-center mx-auto">
                                        <input type="search" id="search-dropdown" class="block h-10 p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-s-lg focus:ring-green-500 focus:border-green-500" placeholder="Temukan obat yang anda butuhkan..." required />
                                        <button type="submit" class="h-10 p-2.5 text-sm font-medium text-white bg-green-700 rounded-e-lg border border-green-700 hover:bg-green-800">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                            </svg>
                                            <span class="sr-only">Search</span>
                                        </button>
                                    </div>
                                </form>
                                <a href="#unggul" aria-label="Scroll down" class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-white rounded-full hover:text-deep-purple-accent-400 hover:border-deep-purple-accent-400 hover:shadow hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                                        <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="w-full max-w-7xl mx-auto my-20  px-4 sm:px-6 lg:px-8" id="unggul">
            <h2 class="pb-8 md:text-3xl font-semibold w-full sm:text-center sm:mb-6 sm:text-2xl">Mengapa Memilih PharmaCare</h2> 
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center">
                    <div class="bg-teal-100 rounded-full p-3 mb-4">
                        <img src="img/mengapa-1.png" alt="" class="h-44">
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Aman & Terpercaya</h3>
                    <p class="text-gray-600 text-center">Seluruh obat yang kami jual telah melalui uji lab resmi dan terjamin layak dipasarkan.</p>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center">
                    <div class="bg-teal-100 rounded-full p-3 mb-4">
                        <img src="img/mengapa-2.png" alt="" class="h-44">
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Produk Lengkap</h3>
                    <p class="text-gray-600 text-center">Tersedia lebih dari 1000 jenis obat untuk memenuhi kebutuhan anda</p>
                </div>
                
                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center">
                    <div class="bg-teal-100 rounded-full p-3 mb-4">
                        <img src="img/mengapa-3.png" alt="" class="h-44">
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Kapan Saja & Dimana Saja</h3>
                    <p class="text-gray-600 text-center">Dapatkan obat anda kapan saja dan dimana saja</p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center bg-cover bg-fixed h-full mb-0" style="background-image: url('https://images.unsplash.com/photo-1592323818181-f9b967ff537c?q=80&w=2768&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); ">
            <div class="w-full h-full bg-black bg-opacity-60 ">
                <div class="bg-white m-12 rounded-xl shadow-xl bg-opacity-80 max-w-5xl flex item center mx-auto">
                    <section class="my-8">
                        <div class="container mx-auto flex flex-col items-center pb-6 mb-4 md:p-10 md:px-12">
                            <h1 class="text-3xl font-semibold leading-none text-center">Apa kata pelanggan tentang pembelian obat di web kami?</h1>
                        </div>
                        <div class="container mx-auto grid grid-cols-1 gap-8 lg:gap-20 md:px-10 md:pb-10 lg:grid-cols-2">
                            <!-- Testimoni 1 -->
                            <div class="flex flex-col items-center mx-12 lg:mx-0">
                                <div class="relative text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="absolute top-0 left-0 w-8 h-8 dark:text-gray-300">
                                        <path d="M232,246.857V16H16V416H54.4ZM48,48H200V233.143L48,377.905Z"></path>
                                        <path d="M280,416h38.4L496,246.857V16H280ZM312,48H464V233.143L312,377.905Z"></path>
                                    </svg>
                                    <p class="px-6 py-1 text-lg italic">Pembelian obat di web apotek ini sangat mudah dan cepat. Pesanan saya langsung diproses dan sampai tepat waktu!</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="absolute bottom-0 right-0 w-8 h-8 dark:text-gray-300">
                                        <path d="M280,185.143V416H496V16H457.6ZM464,384H312V198.857L464,54.1Z"></path>
                                        <path d="M232,16H193.6L16,185.143V416H232ZM200,384H48V198.857L200,54.1Z"></path>
                                    </svg>
                                </div>
                                <span class="w-56 h-1 my-2 rounded-lg bg-green-600"></span>
                                <p>Ahmad Fauzi</p>
                            </div>
                            <!-- Testimoni 2 -->
                            <div class="flex flex-col items-center max-w-lg mx-12 lg:mx-0">
                                <div class="relative text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="absolute top-0 left-0 w-8 h-8 dark:text-gray-300">
                                        <path fill="currentColor" d="M232,246.857V16H16V416H54.4ZM48,48H200V233.143L48,377.905Z"></path>
                                        <path fill="currentColor" d="M280,416h38.4L496,246.857V16H280ZM312,48H464V233.143L312,377.905Z"></path>
                                    </svg>
                                    <p class="px-6 py-1 text-lg italic">Website ini sangat membantu ketika saya butuh obat secara cepat. Proses pembayarannya mudah, dan obat langsung dikirim.</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="absolute bottom-0 right-0 w-8 h-8 dark:text-gray-300">
                                        <path fill="currentColor" d="M280,185.143V416H496V16H457.6ZM464,384H312V198.857L464,54.1Z"></path>
                                        <path fill="currentColor" d="M232,16H193.6L16,185.143V416H232ZM200,384H48V198.857L200,54.1Z"></path>
                                    </svg>
                                </div>
                                <span class="w-56 h-1 my-2 rounded-lg bg-green-600"></span>
                                <p>Dewi Kartika</p>
                            </div>
                            <!-- Testimoni 3 -->
                            <div class="flex flex-col items-center mx-12 lg:mx-0">
                                <div class="relative text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="absolute top-0 left-0 w-8 h-8 dark:text-gray-300">
                                        <path d="M232,246.857V16H16V416H54.4ZM48,48H200V233.143L48,377.905Z"></path>
                                        <path d="M280,416h38.4L496,246.857V16H280ZM312,48H464V233.143L312,377.905Z"></path>
                                    </svg>
                                    <p class="px-6 py-1 text-lg italic">Saya sangat terbantu dengan adanya web apotek ini. Stok obat lengkap, dan deskripsi obat sangat jelas. Saya bisa beli obat dengan tenang.</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="absolute bottom-0 right-0 w-8 h-8 dark:text-gray-300">
                                        <path d="M280,185.143V416H496V16H457.6ZM464,384H312V198.857L464,54.1Z"></path>
                                        <path d="M232,16H193.6L16,185.143V416H232ZM200,384H48V198.857L200,54.1Z"></path>
                                    </svg>
                                </div>
                                <span class="w-56 h-1 my-2 rounded-lg bg-green-600"></span>
                                <p>Rina Suryani</p>
                            </div>
                            <!-- Testimoni 4 -->
                            <div class="flex flex-col items-center max-w-lg mx-12 lg:mx-0">
                                <div class="relative text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="absolute top-0 left-0 w-8 h-8 dark:text-gray-300">
                                        <path fill="currentColor" d="M232,246.857V16H16V416H54.4ZM48,48H200V233.143L48,377.905Z"></path>
                                        <path fill="currentColor" d="M280,416h38.4L496,246.857V16H280ZM312,48H464V233.143L312,377.905Z"></path>
                                    </svg>
                                    <p class="px-6 py-1 text-lg italic">Apotek ini sangat membantu keluarga saya, terutama saat butuh obat di waktu mendesak. Layanan pengiriman cepat dan tepat waktu.</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="absolute bottom-0 right-0 w-8 h-8 dark:text-gray-300">
                                        <path fill="currentColor" d="M280,185.143V416H496V16H457.6ZM464,384H312V198.857L464,54.1Z"></path>
                                        <path fill="currentColor" d="M232,16H193.6L16,185.143V416H232ZM200,384H48V198.857L200,54.1Z"></path>
                                    </svg>
                                </div>
                                <span class=" w-56 h-1 my-2 rounded-lg bg-green-600"></span>
                                <p>Bayu Pratama</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <section class="py-12 bg-gray-100 max-w-5xl flex justify-center mx-auto mb-20 mt-10">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-semibold text-center text-gray-800 mb-12">
                    Dipercaya oleh Perusahaan Farmasi Terkemuka
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-6 gap-8">
                    @php
                        $companies = [
                            'Kalbe Farma',
                            'Kimia Farma',
                            'Dexa Medica',
                            'Sanbe Farma',
                            'Biofarma',
                            'Tempo Scan',
                            'Pharos',
                            'Medifarma',
                            'Bernofarm',
                            'Interbat',
                            'Indofarma',
                            'GSK Indonesia',
                            
                        ];
                    @endphp
        
                    @foreach ($companies as $company)
                        <div class="flex flex-col items-center justify-center p-2 py-6 bg-gray-100 rounded-xl shadow-lg hover:shadow-md transition-shadow duration-300">
                            <img src="https://kalbe.com.my/wp-content/uploads/2023/01/cropped-Kalbe-Farma-New.png" alt="" class="w-40">
                            <p class=" text-sm mt-3 font-semibold text-green-800">{{ $company }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    @include('includes.footer')

</body>
</html>