@include('layouts.head')
@include('layouts.nav')

<div class="bg-gradient-to-r from-blue-500 to-purple-600 py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold text-white mb-4">Welcome to the Best Store Ever!</h1>
            <p class="text-xl text-gray-200 mb-8">Discover amazing products at unbeatable prices.</p>
        </div>
    </div>
<div class="bg-gradient-to-r from-blue-50 to-purple-50">
    <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-semibold mb-6 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent animate-gradient">
    Products
</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products as $product)
            <div class="card max-w-sm rounded-lg overflow-hidden shadow-lg bg-white transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <img src="{{ asset('storage/' . str_replace('public/', '', $product->photo)) }}" class="w-full h-56 object-cover" alt="{{ $product->name }}">
                <div class="p-4">
                    <h5 class="text-xl font-semibold mb-2 text-gray-800">{{ $product->name }}</h5>
                    <p class="text-gray-600 mb-2">Category: <span class="font-medium text-gray-800">{{ $product->categorie }}</span></p>
                    <p class="text-gray-900 font-bold mb-4">Price: <span class="text-indigo-600">${{ $product->price }}</span></p>
                    <div class="flex justify-center">
                        <button class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 transition duration-200 transform hover:scale-105">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</div>
