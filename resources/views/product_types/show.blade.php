<x-layout title="Product Type Details">
    <x-slot name="heading">View Product Type</x-slot>

    <div class="bg-white p-6 rounded shadow max-w-xl">
        <p><strong>ID:</strong> {{ $productType->id }}</p>
        <p><strong>Type:</strong> {{ $productType->type }}</p>
        <p><strong>Note:</strong> {{ $productType->note }}</p>

        <a href="{{ route('product-types.index') }}" class="text-blue-600 hover:underline mt-4 inline-block">Back to List</a>
    </div>
</x-layout>