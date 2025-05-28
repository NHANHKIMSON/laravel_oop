<x-layout title="About | Page">
    <x-slot name="heading">
        Edit Job: {{$job->title }}
    </x-slot>

    <section class="bg-gray-50 ">
        <div class="flex flex-col items-center justify-center px-6 py-12 mx-auto">
            <div class="w-full rounded-xl dark:bg-black shadow-md dark:border dark:border-gray-700 sm:max-w-md p-6">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 text-center">
                    Create a New Job
                </h1>

                <!-- @if (session('success'))
                    <div class="mb-4 text-green-600 dark:text-green-400 text-sm text-center font-semibold">
                        {{ session('success') }}
                    </div>
                @endif -->

                <form action="/job/{{ $job->id }}" method="POST" class="space-y-5">
                    @csrf
                    @method("PATCH")
                    {{-- Job Title --}}
                    <div>
                        <label for="title" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">
                            Job Title
                        </label>
                        <input
                            value="{{$job->title}}"
                            type="text"
                            name="title"
                            id="title"
                            placeholder="e.g. Frontend Developer"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-white dark:border-gray-600"
                        />
                        @error('title')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Salary --}}
                    <div>
                        <label for="salary" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">
                            Salary ($)
                        </label>
                        <input
                            value={{ $job['salary'] }}
                            type="text"
                            name="salary"
                            id="salary"
                            placeholder="e.g. 2000"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-white dark:border-gray-600"
                        />
                        @error('salary')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Remember --}}
                    <div class="flex items-center">
                        <input
                            id="remember"
                            name="remember"
                            type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <label for="remember" class="ml-2 text-sm text-gray-600 dark:text-gray-300">
                            Remember job info
                        </label>
                    </div>

                    {{-- Submit --}}
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
                        Update Job
                    </button>

                    {{-- <x-button form="form-delete">
                        Delete
                    </x-button> --}}

                    <button type="submit" id="form-delete">Delete</button>

                    <p class="text-sm text-center text-gray-500 dark:text-gray-400">
                        Want to see job listings?
                        <a href="/jobs" class="text-blue-600 hover:underline dark:text-blue-400">Browse here</a>
                    </p>
                </form>
                <form id="form-delete" action="/job/{{$job->id}}">
                    @csrf
                    @method("DELETE")
                    <button  hidden></button>
                </form>
            </div>
        </div>
    </section>
</x-layout>