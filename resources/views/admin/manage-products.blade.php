@extends('admin.navAdmin')

@section('content')

<div class="ml-60 pt-5 max-h-screen overflow-auto">
    <div class="px-6 py-8">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white bg-opacity-60 rounded-3xl p-8 mb-5 shadow-2xl">
                <h1 class="text-4xl font-bold mb-3 text-center">Manage Produk</h1>
                <section class="py-6 overflow-hidden mx-auto">
                    <div class="container flex flex-col items-center justify-center px-4 mx-auto">
                        <div class="grid grid-cols-1 gap-6">
                            <a class="hover:scale-105 transition duration-300 shadow-lg rounded-lg w-64 intro-y bg-white" href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                    </div>
                                    <div class="ml-2 w-full flex">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">4.510</div>
                                            <div class="mt-1 text-base text-gray-600">Total Produk</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    
                </section>
                <section class="bg-white rounded-2xl my-10 mx-24 p-8 pb-12 mt-10 shadow-xl ">
                    <h2 class="text-3xl font-bold mb-5 text-center">Tambah Obat</h2>
                <form class="space-y-5 max-w-2xl mx-auto" action="#">
                    <div>
                        <label for="nama" class="block mb-2 font-medium text-black">Nama Obat</label>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="" required>
                    </div>
                    
                    <div>
                        <label for="deskripsi" class="block mb-2  font-medium text-black">Deskripsi Obat</label>
                        <textarea name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="" required></textarea>
                    </div>
                    
                    <label for="kategori" class="block mb-2 font-medium text-black">Kategori Obat</label>
                    <div class="w-full">
                        <select required name="kategori" id="kategori" class="block w-full p-2 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                            <option value="Tanpa resep dokter">Obat tanpa resep dokter</option>
                            <option value="Dengan resep dokter">Obat dengan resep dokter</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="stok" class="block mb-2 font-medium text-black">Stok</label>
                        <input type="number" name="stok" id="stok" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="" required>
                    </div>
                    
                    <div>
                        <label for="harga" class="block mb-2 font-medium text-black">Harga</label>
                        <input type="number" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="" required>
                    </div>
                    
                    <div class="mb-5">
                        <label class="block mb-2 font-medium text-gray-900" for="file_input">Gambar Produk</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file">
                    </div>
                    
                    <div class="flex items-center">
                        <a href="" class="w-full text-white bg-green-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Tambah Produk
                        </a>
                    </div>
                </form>
                </section>
                
                <div class="col-span-12 pt-10">
                    <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                        <div class="bg-white p-4 shadow-lg rounded-lg">
                            <h2 class="text-3xl font-bold mb-3 py-3 text-center">Data Obat</h2>
                            
                            <!-- Search Bar -->
                            <div class="flex justify-center mb-8">
                                <input type="text" class="border-2 border-gray-300 bg-white h-10 px-5 pr-32 rounded-lg text-sm focus:outline-none"
                                    placeholder="Cari obat..." id="searchBar">
                                <button type="submit" class="ml-2 bg-green-500 text-white h-10 px-4 rounded-lg">Cari</button>
                            </div>
                
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
                                                                    <span class="mr-2">NO.</span>
                                                                </div>
                                                            </th>
                                                            <th class="px-5 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">NAMA OBAT</span>
                                                                </div>
                                                            </th>
                                                            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">DESKRIPSI</span>
                                                                </div>
                                                            </th>
                                                            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">KATEGORI</span>
                                                                </div>
                                                            </th>
                                                            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">HARGA</span>
                                                                </div>
                                                            </th>
                                                            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">STOK</span>
                                                                </div>
                                                            </th>
                                                            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">AKSI</span>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white divide-y divide-gray-200">
                                                        <!-- Baris Obat 1 -->
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">1</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Paracetamol</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Obat pereda nyeri dan penurun demam.</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Tanpa Resep Dokter</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Rp. 5.000</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">100</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <div class="flex space-x-4">
                                                                    <a href="#" class="text-blue-500 hover:text-blue-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                        </svg>
                                                                        <p>Edit</p>
                                                                    </a>
                                                                    <a href="#" class="text-red-500 hover:text-red-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                        </svg>
                                                                        <p>Delete</p>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- Baris Obat 2 -->
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">2</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Ibuprofen</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Obat antiinflamasi nonsteroid (NSAID) untuk nyeri ringan hingga sedang.</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Tanpa Resep Dokter</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Rp. 10.000</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">80</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <div class="flex space-x-4">
                                                                    <a href="#" class="text-blue-500 hover:text-blue-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                        </svg>
                                                                        <p>Edit</p>
                                                                    </a>
                                                                    <a href="#" class="text-red-500 hover:text-red-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                        </svg>
                                                                        <p>Delete</p>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- Baris Obat 3 -->
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">3</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Amoxicillin</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Antibiotik yang digunakan untuk infeksi bakteri.</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Dengan Resep Dokter</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Rp. 15.000</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">50</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <div class="flex space-x-4">
                                                                    <a href="#" class="text-blue-500 hover:text-blue-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                        </svg>
                                                                        <p>Edit</p>
                                                                    </a>
                                                                    <a href="#" class="text-red-500 hover:text-red-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                        </svg>
                                                                        <p>Delete</p>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- Baris tambahan lainnya -->
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">1</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Paracetamol</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Obat pereda nyeri dan penurun demam.</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Tanpa Resep Dokter</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Rp. 5.000</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">100</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <div class="flex space-x-4">
                                                                    <a href="#" class="text-blue-500 hover:text-blue-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                        </svg>
                                                                        <p>Edit</p>
                                                                    </a>
                                                                    <a href="#" class="text-red-500 hover:text-red-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                        </svg>
                                                                        <p>Delete</p>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- Baris tambahan lainnya -->
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">1</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Paracetamol</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Obat pereda nyeri dan penurun demam.</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Tanpa Resep Dokter</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Rp. 5.000</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">100</td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <div class="flex space-x-4">
                                                                    <a href="#" class="text-blue-500 hover:text-blue-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                        </svg>
                                                                        <p>Edit</p>
                                                                    </a>
                                                                    <a href="#" class="text-red-500 hover:text-red-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                        </svg>
                                                                        <p>Delete</p>
                                                                    </a>
                                                                </div>
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

@endsection
