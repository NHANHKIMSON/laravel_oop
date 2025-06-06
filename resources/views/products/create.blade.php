<x-layout title="Create New Product">
    <x-slot name="heading">Add Product</x-slot>

    <div class="max-w-3xl mx-auto mt-6 bg-white p-6 rounded-lg shadow">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="p_code" class="block text-sm font-medium text-gray-700">Product Code</label>
                <input type="text" name="p_code" id="p_code" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2">
            </div>

            <div>
                <label for="p_name" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input type="text" name="p_name" id="p_name" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2">
            </div>

            <div>
                <label for="p_type_id" class="block text-sm font-medium text-gray-700">Product Type</label>
                <select name="p_type_id" id="p_type_id" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2 bg-white">
                    <option value="" disabled selected>-- Select Product Type --</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                    @endforeach
                </select>
                @error('p_type_id')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="cate_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="cate_id" id="cate_id" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2 bg-white">
                    <option value="" disabled selected>-- Select Category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
                @error('cate_id')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="unit" class="block text-sm font-medium text-gray-700">Unit</label>
                <input type="text" name="unit" id="unit" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2">
            </div>

            <div>
                <label for="coast" class="block text-sm font-medium text-gray-700">Cost</label>
                <input type="number" step="0.01" name="coast" id="coast" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2">
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" step="0.01" name="price" id="price" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2">
            </div>

            <div>
                <label for="qty" class="block text-sm font-medium text-gray-700">Quantity</label>
                <input type="number" name="qty" id="qty" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2">
            </div>

            <div>
                <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
                <input type="file" name="photo" id="photo"
                       class="mt-1 block w-full text-sm text-gray-700 border border-gray-300 rounded-md file:mr-4 file:py-2 file:px-4 file:border-0 file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200">
            </div>

            <div>
                <label for="note" class="block text-sm font-medium text-gray-700">Note</label>
                <textarea name="note" id="note" rows="3"
                          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2"></textarea>
            </div>

            <div>
                <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition">
                    Create Product
                </button>
            </div>
        </form>
    </div>
</x-layout>