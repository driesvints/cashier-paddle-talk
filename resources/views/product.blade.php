@extends('layouts.shop')

@section('content')

<div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">
        <!-- Image gallery -->
        <div class="flex flex-col-reverse">

          <div class="w-full aspect-w-1 aspect-h-1">
            <!-- Tab panel, show/hide based on tab state. -->
            <div id="tabs-1-panel-1" class="bg-gray-200 w-full aspect-w-1 aspect-h-1 " aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
              <div class="flex items-center justify-center">
                <img src="{{ asset('images/'.$product->product_id.'.min.svg') }}" alt="" class="w-2/3 h-2/3 object-center sm:rounded-lg">
              </div>
            </div>

            <!-- More images... -->
          </div>
        </div>

        <!-- Product info -->
        <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
          <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $product->product_title }}</h1>

          <div class="mt-3">
            <h2 class="sr-only">Product information</h2>
            <p class="text-3xl text-gray-900">{{ $amount }}</p>
          </div>

          <!-- Reviews -->
          <div class="mt-3">
            <h3 class="sr-only">Reviews</h3>
            <div class="flex items-center">
              <div class="flex items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                {{-- <x-icon-star class="h-5 w-5 flex-shrink-0 text-indigo-500" />
                <x-icon-star class="h-5 w-5 flex-shrink-0 text-indigo-500" />
                <x-icon-star class="h-5 w-5 flex-shrink-0 text-indigo-500" />
                <x-icon-star class="h-5 w-5 flex-shrink-0 text-indigo-500" />
                <x-icon-star class="h-5 w-5 flex-shrink-0 text-indigo-500" /> --}}
              </div>
              <p class="sr-only">4 out of 5 stars</p>
            </div>
          </div>

          <div class="mt-6">
            <h3 class="sr-only">Description</h3>

            <div class="text-base text-gray-700 space-y-6">
              <p>Our premium courses offer deep insight into our products. Level up your skills!</p>
            </div>
          </div>

          <form class="mt-6">
            <div class="mt-10 flex sm:flex-col1">
                <x-paddle-button :url="$payLink">
                {{-- <x-paddle-button :url="$payLink" data-theme="none" class="max-w-xs flex-1 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 sm:w-full"> --}}
                    Buy product
                </x-paddle-button>

                {{-- <x-paddle-checkout :override="$payLink" class="w-full bg-gray-50" height="500" /> --}}
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @endsection
