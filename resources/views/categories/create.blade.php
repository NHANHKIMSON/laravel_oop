<x-layout title="Create Category">
    <x-slot name="heading">Add New Category</x-slot>

    <form action="{{ route('categories.store') }}" method="POST" class="space-y-6 mt-6">
        @csrf
        <div>
            <label for="category" class="block text-sm font-medium text-gray-700">Category Name</label>
            <input
                type="text"
                name="category"
                id="category"
                required
                class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 px-3 py-2"
            >
        </div>
        <div>
            <label for="note" class="block text-sm font-medium text-gray-700">Note</label>
            <textarea
                name="note"
                id="note"
                class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 px-3 py-2"
            ></textarea>
        </div>
        <button
            type="submit"
            class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition duration-200"
        >
            Create Category
        </button>
    </form>
</x-layout>