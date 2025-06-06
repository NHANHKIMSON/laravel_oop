<x-layout title="Create Product Type">
    <x-slot name="heading">Add New Product Type</x-slot>

    <form action="{{ route('product-types.store') }}" method="POST" class="max-w-xl">
        @csrf
        <div class="mb-4">
            <label for="type" class="block font-medium mb-1">Type</label>
            <input type="text" name="type" id="type" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="note" class="block font-medium mb-1">Note</label>
            <textarea name="note" id="note" rows="3" class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Create Type</button>
    </form>
</x-layout>