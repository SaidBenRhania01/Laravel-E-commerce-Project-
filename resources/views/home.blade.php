
  @include('layouts.head')
  @include('layouts.nav')

<!-- Hero Section -->
<div class="bg-gradient-to-r from-blue-500 to-purple-600 py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold text-white mb-4">Welcome to the Best Store Ever!</h1>
            <p class="text-xl text-gray-200 mb-8">Discover amazing products at unbeatable prices.</p>
            <a href="products" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Shop Now</a>
        </div>
    </div>

    <!-- About Section -->
    <div class="container mx-auto my-16 px-4">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose Us?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                We offer the best quality products with fast delivery and excellent customer service. Our store is trusted by thousands of happy customers worldwide.
            </p>
        </div>
    </div>

    
    <div id="products" class="container mx-auto my-16 px-4">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Featured Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <img src="https://imgs.search.brave.com/vsA5XrzQVRax5LNI7ySVVC05g_K0i7VhP8qWkkI8cl8/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAzLzI1LzE0LzIx/LzM2MF9GXzMyNTE0/MjE0NV9Pb1BoNzA3/Q21BU28wVEt5ZG5h/Q2ZHODRTejdVbWxy/MS5qcGc" alt="" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Air Force 1</h3>
                    <p class="text-gray-600 mb-4">High-quality product with amazing features.</p>
                    <p class="text-gray-900 font-bold">$49.99</p>
                </div>
            </div>

            
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <img src="https://imgs.search.brave.com/nAF0weR0MAa_PZacwO4Cq12X-z7yJTtTGeRwbpCRM7Q/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZS1jZG4uaHlwYi5z/dC9odHRwczovL2h5/cGViZWFzdC5jb20v/aW1hZ2UvMjAyMi8w/NC9PZmZpY2lhbC1J/bWFnZXMtb2YtdGhl/LUFpci1Kb3JkYW4t/NC0lRTIlODAlOUNN/aWxpdGFyeS1CbGFj/ayVFMiU4MCU5RC0x/LmpwZz9xPTc1Jnc9/ODAwJmNicj0xJmZp/dD1tYXg" alt="" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Jordan 4 </h3>
                    <p class="text-gray-600 mb-4">Affordable and reliable for everyday use.</p>
                    <p class="text-gray-900 font-bold">$29.99</p>
                </div>
            </div>

            
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <img src="https://imgs.search.brave.com/CrFmrw6vwnIpdvHQCRUoSzXhbj1Q_iGO_Q0vpp_9Dtc/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9teXdh/dGNobGxjLmNvbS9j/ZG4vc2hvcC9maWxl/cy9JTUdfNDk5N184/NTEyOTU3MS1lNjA3/LTQ4ZWUtODFmYi02/M2Y1YjI0YzgzZTQu/anBnP3Y9MTczODYw/MzMwNyZ3aWR0aD0x/NDQ1" alt="Product 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Rolex Sprite</h3>
                    <p class="text-gray-600 mb-4">Premium product with advanced features.</p>
                    <p class="text-gray-900 font-bold">$25000.00</p>
                </div>
            </div>
        </div>
    </div>

   
    <div class="bg-gray-800 py-8">
        <div class="container mx-auto text-center">
            <p class="text-gray-200">&copy; 2025 SaidWebsite Best Store Ever. All rights reserved.</p>
        </div>
    </div>