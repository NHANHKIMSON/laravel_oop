<x-layout title="Edit Category">
    <x-slot name="heading">Edit Category</x-slot>

    <form action="{{ route('categories.update', $category->id) }}" method="POST" class="max-w-md mx-auto mt-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-semibold mb-2">Category Name</label>
            <input type="text" name="category" id="category" value="{{ old('category', $category->category) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                   required>
        </div>

        <div class="mb-4">
            <label for="note" class="block text-gray-700 font-semibold mb-2">Note</label>
            <textarea name="note" id="note" rows="3"
                      class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">{{ old('note', $category->note) }}</textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                    class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                Update Category
            </button>
        </div>
    </form>
</x-layout>