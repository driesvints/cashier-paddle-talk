@extends('layouts.shop')

@section('content')

<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">Welcome to Larashop!</h1>
      <p class="mt-4 max-w-xl text-sm text-gray-700">For a limited time only, you can purchase our premium courses for our products.</p>
    </div>
  </div>

  <!-- Product grid -->
  <section aria-labelledby="products-heading" class="max-w-2xl mx-auto pt-12 pb-16 px-4 sm:pt-16 sm:pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 id="products-heading" class="sr-only">Products</h2>

    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <a href="{{ route('product', 15769) }}" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden">
              <div class="flex items-center justify-center">
                  <img src="{{ asset('images/spark.min.svg') }}" alt="" class="w-2/3 h-2/3 object-center group-hover:opacity-75">
              </div>
          </div>
          <h3 class="mt-4 text-sm text-gray-700">
            {{ $prices[15769]->product_title }}
          </h3>
          <p class="mt-1 text-lg font-medium text-gray-900">
            {{ $prices[15769]->price()->gross() }}
          </p>
        </a>

      <a href="{{ route('product', 15767) }}" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden">
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/forge.min.svg') }}" alt="" class="w-2/3 h-2/3 group-hover:opacity-75">
            </div>
        </div>
        <h3 class="mt-4 text-sm text-gray-700">
            {{ $prices[15767]->product_title }}
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
            {{ $prices[15767]->price()->gross() }}
        </p>
      </a>

      <a href="{{ route('product', 15773) }}" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden">
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/envoyer.min.svg') }}" alt="" class="w-2/3 h-2/3 object-center group-hover:opacity-75">
            </div>
        </div>
        <h3 class="mt-4 text-sm text-gray-700">
            {{ $prices[15773]->product_title }}
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
            {{ $prices[15773]->price()->gross() }}
        </p>
      </a>

      <a href="{{ route('product', 15771) }}" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden">
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/vapor.min.svg') }}" alt="" class="w-2/3 h-2/3 object-center group-hover:opacity-75">
            </div>
        </div>
        <h3 class="mt-4 text-sm text-gray-700">
            {{ $prices[15771]->product_title }}
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
            {{ $prices[15771]->price()->gross() }}
        </p>
      </a>

      <!-- More products... -->
    </div>
  </section>
@endsection
