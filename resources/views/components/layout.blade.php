<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>{{ $title }}</title>
</head>
<body>
<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0 text-white">
            Logo
            <!-- <img class="size-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"> -->
          </div>
          <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
    
    <!-- <a href="/" class="{{ request()->is('/') ? 'text-blue-500' : 'bg-gray-900 text-white' }} rounded-md px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a> -->

    <!-- About Link -->
    <!-- <a href="/about" class="{{ request()->is('/about') ? 'text-blue-500 font-black' : 'bg-gray-900 text-white' }} rrounded-md px-3 py-2 text-sm font-medium text-white">About</a> -->

        <x-nav-link href="/" active="{{ request()->is('/') }}">Home </x-nav-link>
        <!-- <x-nav-link href="/about" active="{{ request()->is('about') }}">About</x-nav-link> -->
        <x-nav-link href="/job" active="{{ request()->is('job') }}">Jobs</x-nav-link>
        <x-nav-link href="/employee" active="{{ request()->is('employee') }}">Employees</x-nav-link>
        <x-nav-link href="/products" active="{{ request()->is('products') }}">Products</x-nav-link>
        <x-nav-link href="/categories" active="{{ request()->is('categories') }}">Categoris</x-nav-link>
        <x-nav-link href="/product-types" active="{{ request()->is('product-types') }}">Product types</x-nav-link>
        <x-nav-link href="/about" active="{{ request()->is('about') }}">About</x-nav-link>
</div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
              <span class="absolute -inset-1.5"></span>
              
          </div>
          @guest
              <x-nav-link active="{{ request()->is('register') }}" href="/register">
                Register
              </x-nav-link>
              
              <x-nav-link active="{{ request()->is('login') }}" href="/login">
                Login
              </x-nav-link>
              @endguest

              @auth
              <form action="/logout" method="POST">
                @csrf
                <x-form-button>logout</x-form-button>
              </form>    
              @endauth
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">
      {{ $heading }}
      </h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
       {{ $slot }}
    </div>
  </main>
</div>


</body>
</html>