<x-layout title="Employee | Page">
    <x-slot name="heading">Employee | Page</x-slot>
    <div class="w-full">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-center">
        @foreach ($employees as $employee)
            <div class="mx-auto w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-end px-4 pt-4">
                    <!-- Dropdown -->
                </div>
                <div class="flex flex-col items-center pb-10">
                <img 
                        class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover" 
                        src="{{ $employee['photo'] ?? asset('https://cdna.artstation.com/p/assets/images/images/044/667/570/original/maddie_creates-pfp.gif?1640784763') }}" 
                        alt="Profile Picture"
                    />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $employee->name }}</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $employee->email }}</span>
                    <div class="flex mt-4 md:mt-6">
                        <a href="/employee/{{ $employee['id'] }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">View Detail</a>
                        <a href="#" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100">Message</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    </div>
</x-layout>
