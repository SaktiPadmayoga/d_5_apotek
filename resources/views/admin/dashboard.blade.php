@extends('admin.navAdmin')

@section('content')

<div class="ml-60 pt-5 max-h-screen overflow-auto">
        <div class="px-6 py-8">
            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-3xl p-8 mb-5 shadow-2xl bg-opacity-60">
                <h1 class="text-4xl font-bold mb-3">Dashboard</h1>
                <section class="py-6 dark:bg-gray-100 overflow-hidden">
                    <div class="container flex flex-col justify-center px-4 mx-auto">
                        <div class="grid grid-cols-12 gap-6">
                            <a class="  hover:scale-105 transition duration-300 shadow-lg rounded-lg sm:col-span-6 xl:col-span-3 md:col-span-4  intro-y bg-white"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                        </svg>
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">4.510</div>
    
                                            <div class="mt-1 text-base text-gray-600">Produk Terjual</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="  hover:scale-105 transition duration-300 shadow-lg rounded-lg  sm:col-span-6 xl:col-span-3 md:col-span-4 intro-y bg-white"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">4.510</div>
    
                                            <div class="mt-1 text-base text-gray-600">Pengguna</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="  hover:scale-105 transition duration-300 shadow-lg rounded-lg  sm:col-span-6 xl:col-span-3 md:col-span-4  intro-y bg-white"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                        </svg>
                                        
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">4.510</div>
    
                                            <div class="mt-1 text-base text-gray-600">Total Produk</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="  hover:scale-105 transition duration-300 shadow-lg rounded-lg  sm:col-span-6 xl:col-span-3 md:col-span-4  intro-y bg-white"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                        </svg>
                                        
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">12.500.000</div>
    
                                            <div class="mt-1 text-base text-gray-600">Total Penjualan</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                
    
                <hr class="my-10">
                <h2 class="text-2xl font-bold mb-3">Data Pengguna </h2>
                
                <div class="col-span-12">
                    <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                        <div class="bg-white p-4 shadow-lg rounded-lg">
                            <div class="mt-4">
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto">
                                        <div class="py-2 align-middle inline-block min-w-full">
                                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">NO</span>
                                                                </div>
                                                            </th>
                                                            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">NAMA</span>
                                                                </div>
                                                            </th>
                                                            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">EMAIL</span>
                                                                </div>
                                                            </th>
                                                            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">NO TELEPON</span>
                                                                </div>
                                                            </th>
                                                            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">ALAMAT</span>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white divide-y divide-gray-200">
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>1</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>Ahmad Setiawan</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>ahmad.setiawan@example.com</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>+6281234567890</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>Jl. Sudirman No.12, Jakarta</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>2</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>Siti Nurhaliza</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>siti.nurhaliza@example.com</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>+6282234567890</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>Jl. Diponegoro No.5, Bandung</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>3</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>Budi Santoso</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>budi.santoso@example.com</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>+6283234567890</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>Jl. Kartini No.8, Surabaya</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>4</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>Rina Amelia</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>rina.amelia@example.com</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>+6284234567890</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>Jl. Pahlawan No.21, Yogyakarta</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>5</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>Andi Prasetyo</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>andi.prasetyo@example.com</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>+6285234567890</p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>Jl. Merdeka No.10, Medan</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
</div>


@endsection