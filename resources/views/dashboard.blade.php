<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white">
                    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:pb-24 lg:px-8">
                        <div class="max-w-xl">
                            <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">Receipts</h1>
                            <p class="mt-2 text-sm text-gray-500">Check the your recent receipts.</p>
                        </div>

                        <div class="mt-16">
                            <h2 class="sr-only">Recent receipts</h2>

                            <div class="space-y-20">
                                @forelse ($receipts as $receipt)
                                    <div>
                                        <table class="mt-4 w-full text-gray-500 sm:mt-6">
                                            <thead class="sr-only text-sm text-gray-500 text-left sm:not-sr-only">
                                                <tr>
                                                    <th scope="col" class="sm:w-2/5 lg:w-1/3 pr-8 py-3 font-normal">Date</th>
                                                    <th scope="col" class="sm:w-2/5 lg:w-1/3 pr-8 py-3 font-normal">Price</th>
                                                    <th scope="col" class="w-0 py-3 font-normal text-right">Receipt</th>
                                                </tr>
                                            </thead>
                                            <tbody class="border-b border-gray-200 divide-y divide-gray-200 text-sm sm:border-t">
                                                <tr>
                                                    <td class="py-6 pr-8">
                                                        {{ $receipt->paid_at->format('M d, Y') }}
                                                    </td>
                                                    <td class="hidden py-6 pr-8 sm:table-cell">
                                                        {{ $receipt->amount() }}
                                                    </td>
                                                    <td class="py-6 font-medium text-right whitespace-nowrap">
                                                        <a href="{{ $receipt->receipt_url }}" class="text-indigo-600" target="_blank">View Receipt</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                @empty
                                    <a href="{{ route('home') }}" class="relative block w-full border-2 border-gray-300 border-dashed rounded-lg p-12 text-center hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                        </svg>
                                        <span class="mt-2 block text-sm font-medium text-gray-900">
                                            No receipts yet. Visit out Shop!
                                        </span>
                                    </a>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
