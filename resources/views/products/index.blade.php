<x-layout title="All Products">
    <x-slot name="heading">Product List</x-slot>

    <div class="mb-4">
        <a href="{{ route('products.create') }}"
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
            + Add New Product
        </a>
    </div>

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 font-semibold text-gray-700">Code</th>
                    <th class="px-4 py-2 font-semibold text-gray-700">Name</th>
                    <th class="px-4 py-2 font-semibold text-gray-700">Type</th>
                    <th class="px-4 py-2 font-semibold text-gray-700">Category</th>
                    <th class="px-4 py-2 font-semibold text-gray-700">Unit</th>
                    <th class="px-4 py-2 font-semibold text-gray-700">Cost</th>
                    <th class="px-4 py-2 font-semibold text-gray-700">Price</th>
                    <th class="px-4 py-2 font-semibold text-gray-700">Qty</th>
                    <th class="px-4 py-2 font-semibold text-gray-700">Photo</th>
                    <th class="px-4 py-2 font-semibold text-gray-700">User</th>
                    <th class="px-4 py-2 font-semibold text-gray-700">Note</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($products as $product)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $product->p_code }}</td>
                        <td class="px-4 py-2">{{ $product->p_name }}</td>
                        <td class="px-4 py-2">{{ $product->type->type ?? 'N/A' }}</td>
                        <td class="px-4 py-2">{{ $product->category->category ?? 'N/A' }}</td>
                        <td class="px-4 py-2">{{ $product->unit }}</td>
                        <td class="px-4 py-2">{{ $product->coast }}</td>
                        <td class="px-4 py-2">{{ $product->price }}</td>
                        <td class="px-4 py-2">{{ $product->qty }}</td>
                        <td class="px-4 py-2">
                            @if ($product->photo)
                                <img src="{{ asset('storage/' . $product->photo) }}"
                                     class="w-14 h-14 object-cover rounded border"
                                     alt="Product Image">
                            @else
                                <span class="text-gray-500 italic">No photo</span>
                            @endif
                        </td>
                        <td class="px-4 py-2">{{ $product->user->name ?? 'Unknown' }}</td>
                        <td class="px-4 py-2">{{ $product->note }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="11" class="px-4 py-3 text-center text-gray-500 italic">
                            No products found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>