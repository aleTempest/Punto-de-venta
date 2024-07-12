@extends('layouts.app')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center -mx-3">
            <div class="w-full max-w-full px-3 mt-6 md:w-7/12 md:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                        <h6 class="mb-0">Product Details</h6>
                    </div>
                    <div class="flex-auto p-4 pt-6">
                        <div class="mb-6">
                            <label class="block text-sm font-medium leading-5 text-gray-700">Name:</label>
                            <p class="mt-1 text-sm leading-5 text-gray-900">{{ $product->name }}</p>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium leading-5 text-gray-700">Category Name:</label>
                            <p class="mt-1 text-sm leading-5 text-gray-900">{{ $product->category->name }}</p>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium leading-5 text-gray-700">Colors:</label>
                            <p class="mt-1 text-sm leading-5 text-gray-900">{{ $product->colors }}</p>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium leading-5 text-gray-700">Purchase Date:</label>
                            <p class="mt-1 text-sm leading-5 text-gray-900">{{ $product->purchase_date }}</p>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium leading-5 text-gray-700">Purchase Price:</label>
                            <p class="mt-1 text-sm leading-5 text-gray-900">{{ $product->purchase_price }}</p>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium leading-5 text-gray-700">Purchase Date:</label>
                            <p class="mt-1 text-sm leading-5 text-gray-900">{{ $product->sale_price }}</p>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium leading-5 text-gray-700">Short desc.</label>
                            <p class="mt-1 text-sm leading-5 text-gray-900">{{ $product->short_desc }}</p>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium leading-5 text-gray-700">Long desc.</label>
                            <p class="mt-1 text-sm leading-5 text-gray-900">{{ $product->long_desc }}</p>
                        </div>
                        <a href="{{ route('products.edit', $product->id) }}" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection