<!-- component -->
<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- Favicon -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer>
    
    </script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <!-- Material Tailwind CSS -->
    @vite(['resources/css/app.css','resources/js/app.js']);


    
</head>
<body class="relative bg-green-100 overflow-hidden max-h-screen">
    <header class="fixed right-0 top-0 left-60 bg-green-100 py-3  px-4 h-16">
      <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-end pr-4 pt-2 "> 
            <h3 class="text-lg fw-bold">Admin 1</h3>
            <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer ml-3" src="https://imgx.parapuan.co/crop/0x0:0x0/x/photo/2024/01/18/avatar-the-last-airbenderjpg-20240118123533.jpg" alt="User dropdown">
            <!-- Dropdown menu -->
            <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                <div>Bonnie Green</div>
                <div class="font-medium truncate">name@flowbite.com</div>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                <li>
                    <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                </ul>
                <div class="py-1">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </div>
            </div>
        </div>
      </div>
    </header>
  
    <aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
      <div class="flex flex-col justify-between h-full">
        <div class="flex-grow">
          <div class="px-4 py-6 text-center border-b">
            <h1 class="text-xl font-bold leading-none"><span class="text-green-700">PharmaCare</span> Admin</h1>
          </div>
          <div class="p-4">
            <ul class="space-y-3">
              <li>
                <a href="{{ url('/admin/dashboard') }}" class="flex items-center {{ Request::is('admin/dashboard') ? 'bg-green-200 text-green-900' : 'bg-white hover:bg-green-50 text-gray-900' }} rounded-xl font-bold text-sm py-3 px-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                  </svg>Dashboard
                </a>
              </li>
              <li>
                <a href="{{ url('/admin/manage-products') }}" class="flex items-center {{ Request::is('admin/manage-products') ? 'bg-green-200 text-green-900' : 'bg-white hover:bg-green-50 text-gray-900' }} rounded-xl font-bold text-sm py-3 px-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                  </svg>Manage Produk
                </a>
              </li>
              
            </ul>
          </div>
        </div>
        <div class="p-4">
          <a href="{{url('/logout')}}" class="inline-flex items-center justify-center h-9 px-4 w-full rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="" viewBox="0 0 16 16">
                <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
            <span class="font-bold text-sm ml-2">Logout</span>
        </a>
        
        </div>
      </div>
    </aside>
  
    <main class="flex flex-col flex-grow">
        @yield('content')
    </main>
    
  </body>
</html>