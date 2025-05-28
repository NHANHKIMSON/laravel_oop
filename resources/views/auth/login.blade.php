<x-layout title="Login | Page">

    <x-slot name="heading">Login</x-slot>

<form method="POST" action="/login" class="max-w-sm mx-auto">
    @csrf
    <div class="mb-5">
        <x-form-label for="email">Email</x-form-label>
        <x-input id="email"  name="email" placeholder="Enter your email"></x-input>
        <x-validation-error name="email"/>
    </div>
    <div class="mb-5">
      <x-form-label for="password">Password</x-form-label>
      <x-input id="password" name="password" placeholder="Enter your passworld"></x-input>
      <x-validation-error name="password"/>
    </div>
    {{-- <div class="flex items-start mb-5">
      <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
      </div>
      <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
    </div> --}}
    <x-form-button type="submit">
        Login
    </x-form-button>
  </form>
  

</x-layout>