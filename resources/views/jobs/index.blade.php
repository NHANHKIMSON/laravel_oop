<x-layout title="Home | Page">
    <x-slot name="heading">Home</x-slot>
    <body> | Job Page </body>
    <div class="my-12">
        <a href='/job/create' type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</a>
    </div>

    @foreach ($jobs as $job)
        <li>{{ $job['title'] }} : <b>{{ $job['salary'] }}$ </b> 
        (<a class="hover:underline hover:text-red-500" href="/job/{{ $job['id'] }}">See more
        </a>)
    
    @endforeach
</x-layout>