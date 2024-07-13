@extends('layouts.app')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center -mx-3">
            <div class="w-full max-w-full px-3 mt-6 md:w-7/12 md:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                        <h6 class="mb-0">Quotation</h6>
                    </div>
                    <div class="flex-auto p-4 pt-6">
                        <form class="w-full max-w-lg" action="{{ route('quotations.update', $quotation->id) }}" method="post">
                            <div class="mb-6">
                                <label class="block text-sm font-medium leading-5 text-gray-700">Product name</label>
                                <p class="mt-1 text-sm leading-5 text-gray-900">{{ $quotation->product->name  }}</p>
                            </div>
                            <div class="mb-6">
                                <label class="block text-sm font-medium leading-5 text-gray-700">Client name</label>
                                <p class="mt-1 text-sm leading-5 text-gray-900">{{ $quotation->client->name  }}</p>
                            </div>
                            <div class="mb-6">
                                <label class="block text-sm font-medium leading-5 text-gray-700">Quotation Date</label>
                                <p class="mt-1 text-sm leading-5 text-gray-900">{{ $quotation->quotation_date }}</p>
                            </div>
                            <div class="mb-6">
                                <label class="block text-sm font-medium leading-5 text-gray-700">Validity</label>
                                <p class="mt-1 text-sm leading-5 text-gray-900">{{ $quotation->validity }}</p>
                            </div>
                            <div class="mb-6">
                                <label class="block text-sm font-medium leading-5 text-gray-700">Comments</label>
                                <p class="mt-1 text-sm leading-5 text-gray-900">{{ $quotation->comments }}</p>
                            </div>
                            <div class="mb-6">
                                <label class="block text-sm font-medium leading-5 text-gray-700">Amount</label>
                                <p class="mt-1 text-sm leading-5 text-gray-900">{{ $quotation->amount }}</p>
                            </div>
                            <div class="mb-6">
                                <label class="block text-sm font-medium leading-5 text-gray-700">Total</label>
                                <p class="mt-1 text-sm leading-5 text-gray-900">{{ $quotation->total }}</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()