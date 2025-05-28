<x-layout title="Home | Page">
    <x-slot name="heading">
        {{-- <a href='/job/{{ $job->id }}/edit' type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a> --}}

        <form action="">
            <x-button href='/job/{{ $job->id }}/edit' >
            Edit
        </x-button>
        </form>

    </x-slot>

    <p> {{$job->title}} </p>
    <p>{{ $job->salary }}</p>
</x-layout>