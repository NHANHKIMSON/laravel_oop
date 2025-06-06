<x-layout title="Categories">
    <x-slot name="heading">Categories</x-slot>

    <a href="{{ route('categories.create') }}"
       class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition mb-4">
        Add Category
    </a>

    @if(session('success'))
        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 border border-green-300 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 border border-gray-300 rounded-md">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold">ID</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold">Category</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold">Note</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($categories as $cat)
                <tr>
                    <td class="px-4 py-2 text-sm">{{ $cat->id }}</td>
                    <td class="px-4 py-2 text-sm">{{ $cat->category }}</td>
                    <td class="px-4 py-2 text-sm">{{ $cat->note }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route('categories.edit', $cat->id) }}"
                           class="inline-block bg-yellow-400 text-white text-sm px-3 py-1 rounded hover:bg-yellow-500 transition">
                            Edit
                        </a>
                        <form action="{{ route('categories.destroy', $cat->id) }}" method="POST" class="inline-block"
                              onsubmit="return confirm('Delete this category?')">
                            @csrf @method('DELETE')
                            <button type="submit"
                                    class="bg-red-600 text-white text-sm px-3 py-1 rounded hover:bg-red-700 transition">
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