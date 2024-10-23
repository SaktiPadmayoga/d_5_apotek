<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacare-Produk-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100">
    @include('includes.navbar')
    
    <form class="max-w-3xl mx-auto mt-32 bg-white px-14 py-8 rounded-lg bg-opacity-70 shadow-lg">
        <div class="flex w-full justify-between items-center">
            
            <div class="relative">
                <button id="dropdown-button" 
                        class="flex-shrink-0 z-10 inline-flex items-center h-10 py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" 
                        type="button">
                    Kategori
                    <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                
                <div id="dropdown" class="hidden absolute bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                        <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tanpa resep dokter</button></li>
                        <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dengan resep dokter</button></li>
                    </ul>
                </div>
            </div>
    
            <div class="relative w-full flex items-center">
                <input type="search" id="search-dropdown" class="block h-10 p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-s-lg focus:ring-green-500 focus:border-green-500" placeholder="Temukan obat yang anda butuhkan..." required />
                <button type="submit" class="h-10 p-2.5 text-sm font-medium text-white bg-green-700 rounded-e-lg border border-green-700 hover:bg-green-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>
    
    
    <main class="flex gap-5 pt-16 px-20 justify-center">
        <div class="flex flex-col items-center gap-4">
            <div class="flex rounded-md shadow-md h-[15vh] w-64 bg-white overflow-hidden">
                <img src="https://vivaapotek.co.id/_nuxt/img/Banner-Bottom-01.156151a.png" alt="" class="w-full h-full object-cover">
            </div>            
            <div class="flex flex-col rounded-md shadow-lg h-[50vh] w-64 bg-white overflow-hidden">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHzXGRgN4go89cnHOuGaQzuQGOhTTmy5A6cw&s" alt="" class="w-full h-full object-cover">
            </div>
            
        </div>
        
        <div id="product-container" class="grid grid-cols-12 flex-wrap gap-5 pb-20">
            
        </div>
    </main>
    
    <nav aria-label="Page navigation example" class="text-center flex justify-center items-center pb-20">
        <ul id="pagination" class="inline-flex -space-x-px text-base h-10">
            
        </ul>
    </nav>
    @include('includes.footer')
    
    <script>
        const products = [];
        for (let i = 0; i < 100; i++) {
            products.push({
                name: `Product ${i + 1}`,
                price: `Rp. ${20 + i}.000`,
                image: 'https://images.tokopedia.net/img/cache/700/VqbcmM/2023/1/17/259b5571-e748-40db-8a53-697a15c866a9.jpg'
            });
        }

        const productContainer = document.getElementById("product-container");
        const pagination = document.getElementById("pagination");
        const itemsPerPage = 20;
        let currentPage = 1;
        const totalPages = Math.ceil(products.length / itemsPerPage);

        function showProducts(page) {
            productContainer.innerHTML = '';
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const paginatedProducts = products.slice(start, end);

            paginatedProducts.forEach(product => {
                const productCard = `
                <div class="col-span-3 max-w-sm p-5 rounded-md shadow-md h-auto bg-white bg-opacity-65 transition-transform transform hover:-translate-y-2 hover:shadow-lg">
                    <a href="{{url('product/produk-view')}}">
                        <img src="${product.image}" alt="Product Image" class="object-cover object-center w-full rounded-md h-44">
                        <h2 class="text-xl font-semibold tracking-wide mt-3">${product.name}</h2>
                        <p class="dark:text-gray-800">${product.price}</p>
                    </a>
                </div>
                
                `;
                productContainer.innerHTML += productCard;
            });
        }

        
        function setupPagination() {
            pagination.innerHTML = '';

            const prevButton = `<li>
                <button onclick="prevPage()" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</button>
            </li>`;
            pagination.innerHTML += prevButton;

            
            for (let i = 1; i <= totalPages; i++) {
                const pageButton = `
                <li>
                    <button onclick="goToPage(${i})" class="flex items-center justify-center px-4 h-10 leading-tight ${i === currentPage ? 'bg-green-700 text-white' : 'text-gray-500 bg-white'} border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">${i}</button>
                </li>`;
                pagination.innerHTML += pageButton;
            }

            
            const nextButton = `<li>
                <button onclick="nextPage()" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</button>
            </li>`;
            pagination.innerHTML += nextButton;
        }

        
        function nextPage() {
            if (currentPage < totalPages) {
                currentPage++;
                showProducts(currentPage);
                setupPagination();
            }
        }

        
        function prevPage() {
            if (currentPage > 1) {
                currentPage--;
                showProducts(currentPage);
                setupPagination();
            }
        }

        
        function goToPage(page) {
            currentPage = page;
            showProducts(page);
            setupPagination();
        }

        
        showProducts(currentPage);
        setupPagination();

        const dropdownButton = document.getElementById('dropdown-button');
        const dropdownMenu = document.getElementById('dropdown');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
