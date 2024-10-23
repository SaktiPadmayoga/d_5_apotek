<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacare-Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <!-- Material Tailwind CSS -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body >

    

    <div class="flex items-center justify-center min-h-screen bg-gray-500 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1710162734135-8dc148f53abe?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        
        <div class="  rounded-xl overflow-hidden flex flex-col md:flex-row max-w-5xl w-full mx-4 md:h-[80vh] shadow-2xl" >
            <div class="md:w-1/2 flex items-center justify-center">
                <img src="img/logo.png" alt="" class="w-full h-auto object-fill p-10">
                
            </div>
            <div class="md:w-1/2 bg-white bg-opacity-70 backdrop-blur-md p-6 px-12 flex items-center justify-center"> 
                <div class="w-full max-w-md opacity-100">
                    <a href="#" class="flex items-center mb-5 text-3xl font-semibold text-black justify-center ">
                        <img class="w-8 h-8 mr-3" src="img/logo.png" alt="logo">
                        PharmaCare    
                    </a>
                    <h1 class=" font-bold leading-tight tracking-tight text-black md:text-xl mb-6">
                        Ayo Daftar di PharmaCare
                    </h1>
                    <form class="space-y-4" action="#">
                        <div>
                            <label for="nama" class="block mb-2 text-sm font-medium text-black">Nama</label>
                            <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="User 1" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-black">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-black">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2" required>
                        </div>
                        <div>
                            <label for="no-tlp" class="block mb-2 text-sm font-medium text-black">No. Handphone</label>
                            <input type="number" name="no-tlp" id="no-tlp" placeholder="081XXXXXXXXX" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2" required>
                        </div>
                        
                        <div class="flex items-center ">
                            <a href="{{ url('home') }}" class="w-full text-white bg-green-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Daftar
                            </a>
                        </div>
                        
                        <p class="text-sm font-light text-gray-500">
                            Sudah memiliki akun? <a href="{{ url('login') }}" class="font-medium text-green-600 hover:underline">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>  