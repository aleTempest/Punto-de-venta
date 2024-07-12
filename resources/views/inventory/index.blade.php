@extends('layouts.app')
@section('content')
<table class="items-center justify-center w-full mb-0 align-top border-gray-200 text-slate-500">
<thead class="align-bottom">
    <tr>
        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Product Name</th>
        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">In Date</th>
        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Out Date</th>
        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Amount</th>
        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Movement</th>
        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Reason</th>
        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap">
            <a href="{{ route('inventory.create') }}" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs"><i class="fa-solid fa-plus"></i></a>
        </th>
    </tr>
</thead>
<tbody>
@forelse ($inventory as $item)
    <tr>
        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
            <div class="my-auto">
                <h6 class="mb-0 text-sm leading-normal">{{ $item->product->name }}</h6>
            </div>
        </td>        
        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
            <div class="my-auto">
                    <h6 class="mb-0 text-sm leading-normal">{{ $item->in_date }}</h6>
            </div>
        </td>        
        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
            <div class="my-auto">
                <h6 class="mb-0 text-sm leading-normal">{{ $item->out_date }}</h6>
            </div>
        </td>
        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
            <div class="my-auto">
                <h6 class="mb-0 text-sm leading-normal">{{ $item->amount }}</h6>
            </div>
        </td>
        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
            <div class="my-auto">
                <h6 class="mb-0 text-sm leading-normal">{{ $item->movement }}</h6>
            </div>
        </td>
        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
            <div class="my-auto">
                <h6 class="mb-0 text-sm leading-normal">{{ $item->reason }}</h6>
            </div>
        </td>
        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
            <div class="relative">
            <button dropdown-trigger aria-expanded="false" type="button" class="inline-block px-6 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-sm ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs"><i class="fa-solid fa-list-ul"></i></button>
            <p class="hidden transform-dropdown-show"></p>
            <ul dropdown-menu class="z-10 text-sm lg:shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 before:text-5.5 transform-dropdown pointer-events-none absolute left-auto top-1/2 m-0 -mr-4 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-0 py-2 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-7 before:left-auto before:top-0 before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                <form action="{{ route('inventory.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <li>
                        <button type="submit" class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300">Delete</button>
                    </li>
                </form>
                <li>
                    <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300" href="{{ route('inventory.edit', $item->id) }}">Edit</a>
                </li>
                <li>
                    <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300" href="{{ route('inventory.show', $item->id) }}">Show</a>
                </li>
            </ul>
            </div>
        </td>
    </tr>
@empty
<tr>
    <td>
        <strong>No Product in Inventory Found!</strong>
    </td>
</tr>
@endforelse
</tbody>
</table>

@endsection()