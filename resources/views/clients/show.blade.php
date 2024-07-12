@extends('layouts.app')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center -mx-3">
            <div class="w-full max-w-full px-3 mt-6 md:w-7/12 md:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                        <h6 class="mb-0">Client</h6>
                    </div>
                    <div class="flex-auto p-4 pt-6">
                        <div class="mb-6">
                            <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Name:</label>
                            <p id="name" class="text-sm leading-5 text-gray-900">{{ $client->name }}</p>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email:</label>
                            <p id="email" class="text-sm leading-5 text-gray-900">{{ $client->email }}</p>
                        </div>
                        <div class="mb-6">
                            <label for="phone" class="block text-sm font-medium leading-5 text-gray-700">Phone Number:</label>
                            <p id="phone" class="text-sm leading-5 text-gray-900">{{ $client->phone }}</p>
                        </div>
                        <div class="mb-6">
                            <label for="address" class="block text-sm font-medium leading-5 text-gray-700">Address:</label>
                            <p id="address" class="text-sm leading-5 text-gray-900">{{ $client->address }}</p>
                        </div>
                        <div class="mb-6">
                            <label for="rfc" class="block text-sm font-medium leading-5 text-gray-700">RFC:</label>
                            <p id="rfc" class="text-sm leading-5 text-gray-900">{{ $client->rfc }}</p>
                        </div>
                        <div class="mb-6">
                            <label for="business_name" class="block text-sm font-medium leading-5 text-gray-700">Business Name:</label>
                            <p id="business_name" class="text-sm leading-5 text-gray-900">{{ $client->business_name }}</p>
                        </div>
                        <div class="mb-6">
                            <label for="postal_code" class="block text-sm font-medium leading-5 text-gray-700">Postal Code:</label>
                            <p id="postal_code" class="text-sm leading-5 text-gray-900">{{ $client->postal_code }}</p>
                        </div>
                        <div class="mb-6">
                            <label for="tax_regime" class="block text-sm font-medium leading-5 text-gray-700">Tax Regime:</label>
                            <p id="tax_regime" class="text-sm leading-5 text-gray-900">{{ $client->tax_regime }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection