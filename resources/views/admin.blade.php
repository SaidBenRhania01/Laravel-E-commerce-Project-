@include('layouts.head')
@include('layouts.nav')



<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
<div class="col-span-full flex justify-center">
    <a href="{{ route('products.create') }}">
        <button type="button" class="w-[700px] py-4 px-8 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 transition duration-200 ease-in-out border-2 border-indigo-600">
            Add Product
        </button>
    </a>
</div>


    @foreach ($products as $product)
        <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white transition-transform transform hover:scale-105">
            <img src="{{ asset('storage/' . str_replace('public/', '', $product->photo)) }}" class="w-full h-56 object-cover" alt="{{ $product->name }}">

            <div class="p-4">
                <h5 class="text-xl font-semibold mb-2">{{ $product->name }}</h5>
                <p class="text-gray-600 mb-2">Category: <span class="font-medium text-gray-800">{{ $product->categorie }}</span></p>
                <p class="text-gray-900 font-bold mb-4">Price: <span class="text-indigo-600">${{ $product->price }}</span></p>
            </div>
            <div class="flex justify-between p-4 bg-gray-100 rounded-b-lg">
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure want to Delete This Product');">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-700 transition duration-150">Delete</button>
            </form>

                <!-- <a href="{{route('products.destroy',$product->id)}}">
                <button class="text-red-500 hover:text-red-700 transition duration-150">Delete</button>
                </a> -->
                <a href="{{ route('products.edit',$product->id) }}"><button class="text-blue-500 hover:text-blue-700 transition duration-150">Edit</button></a>
            </div>
        </div>
    @endforeach 
</div>


