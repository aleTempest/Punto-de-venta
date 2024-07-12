@extends('layouts.app')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center -mx-3">
            <div class="w-full max-w-full px-3 mt-6 md:w-7/12 md:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                        <h6 class="mb-0">Category Name</h6>
                    </div>
                    <div class="flex-auto p-4 pt-6">
                        <form class="w-full max-w-lg" action="{{ route('categories.store') }}" method="POST">
                            <div class="mb-6 md:w-1/2">
                                <label class="block text-sm font-medium leading-5 text-gray-700">Name:</label>
                                <p class="mt-1 text-sm leading-5 text-gray-900">{{ $category->name }}</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()