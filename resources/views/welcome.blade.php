@extends('layouts.app')
@section('content')

<div class="flex justify-center items-center min-h-screen">
  <div class="w-full max-w-full md:w-6/12 xl:w-4/12">
    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="relative flex items-center justify-center">
        <a class="block shadow-xl rounded-2xl">
          <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard/assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
        </a>
      </div>
      <div class="flex-auto px-1 pt-6">
        <div class="flex flex-col items-center">
          <h1 class="text-fuchsia-500">Welcome</h1>
          <a href="/login" class="inline-block px-6 py-3 mb-4 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Login</a>
          <a href="/register" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Register</a>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection