<x-layout title="All Product Types">
    <x-slot name="heading">Product Types</x-slot>

    <a href="{{ route('product-types.create') }}" class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        + Add New Product Type
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded">
            <thead>
                <tr class="bg-gray-100 text-left text-sm font-semibold text-gray-700">
                    <th class="px-4 py-2 border-b">ID</th>
                    <th class="px-4 py-2 border-b">Type</th>
                    <th class="px-4 py-2 border-b">Note</th>
                    <th class="px-4 py-2 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr class="text-sm text-gray-800 hover:bg-gray-50">
                        <td class="px-4 py-2 border-b">{{ $type->id }}</td>
                        <td class="px-4 py-2 border-b">{{ $type->type }}</td>
                        <td class="px-4 py-2 border-b">{{ $type->note }}</td>
                        <td class="px-4 py-2 border-b flex items-center space-x-2">
                            <a href="{{ route('product-types.edit', $type->id) }}" class="px-2 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500 text-xs">
                                Edit
                            </a>
                            <form action="{{ route('product-types.destroy', $type->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-xs">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>