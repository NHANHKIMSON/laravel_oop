<x-layout title="Register | Page">

    <x-slot name="heading">Register</x-slot>

<form method="POST" action="/register" class="max-w-sm mx-auto">
    @csrf
    <div class="mb-5">
        <x-form-label for="name">Full Name</x-form-label>
        <x-input id="name"  name="name" placeholder="Enter your Full name"></x-input>
        <x-validation-error name="name"/>
    </div>
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
    <div class="mb-5">
      <x-form-label for="password_confirmation">Confirm Password</x-form-label>
      <x-input id="password_confirmation" name="password_confirmation" placeholder="Enter your confirm passworld"/>
      <x-validation-error name="password_confirmation"/>
    </div>
    {{-- <div class="flex items-start mb-5">
      <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
      </div>
      <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
    </div> --}}
    <x-form-button type="submit">
        Register
    </x-form-button>
  </form>
  

</x-layout>