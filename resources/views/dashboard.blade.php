@extends('layouts.app')
@section('title','Dashboard')
@section('background', 'bg-white')
@section('background-opc')
@section('content')

@csrf

<div id="hero" class="lg:flex items-center">
          <div class="px-5 sm:px-10 md:px-10 md:flex lg:block lg:w-1/2 lg:max-w-3xl lg:mr-8 lg:px-20">
            <div class="md:w-1/2 md:mr-10 lg:w-full lg:mr-0">
            
            <h1 class="text-5xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-5xl lg:text-6xl xl:text-8xl">
            <span class="block xl:inline">Create The</span><br>
            <span class="block text-indigo-600 xl:inline">Best Future</span>
          </h1>
          <p class="mt-5 mx-auto text-base text-yellow-400 sm:max-w-md lg:text-xl md:max-w-3xl font-extrabold">Create Your Own Dream</p>
            </div>

          </div>
          <div class="mt-6 w-full flex-1 lg:mt-0">
            <div></div>
            <img class="" src="{{url(asset('assets/landing-page.png'))}}" />
          </div>
        </div>

<!-- Section 2 -->
<!-- <section class="bg-white md:px-0">
  <div class="container items-center max-w-6xl mx-auto xl:px-5">
    <div class="flex flex-wrap items-center sm:-mx-3">
      <div class="w-full md:w-1/2 md:px-3">
        <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
            <span class="block xl:inline">Create the</span><br>
            <span class="block text-indigo-600 xl:inline">Best Future</span>
          </h1>
          <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">Create Your Own Dream</p>
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <div class="w-full h-auto overflow-hidden">
            <img src="{{url(asset('assets/landing-page.png'))}}">
          </div>
      </div>
    </div>
  </div>
</section> -->

<!-- Component Code -->

<!-- <div class="relative h-screen w-full flex items-center justify-start text-left bg-cover bg-center" style="background-image:url(https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80);">
  <div class="absolute top-0 right-0 bottom-0 left-0 bg-gray-900 opacity-75"></div>
  
  <main class="px-10 lg:px-24 z-10">
        <div class="text-left">
          <h2 class="text-4xl tracking-tight leading-10 font-extrabold sm:text-5xl text-white sm:leading-none md:text-6xl">
            Create the<br>
            <span class="text-indigo-600">Best Future</span>
          </h2>
          <p class="mt-3 text-white sm:mt-5 sm:max-w-xl md:mt-5 text-lg font-light">
          Create Your Own Dream
          </p>
        </div>
      </main>
  
</div>

Credit: Componentity.com -->
<!-- <a href="https://componentity.com" target="_blank" class="block">
  <img src="http://codenawis.com/componentity/wp-content/uploads/2020/08/logo-componentity-%E2%80%93-9.png" class="w-48 mx-auto my-5">
</a> -->



<!-- <div style="height:1600px">
    <img src="{{asset('assets/DashboardBg.jpg')}}" alt="theme" class=" object-cover absolute z-0" style=" top:0; width:100%; height:80vh" >
    <div class="absolute z-10 top-40 pl-12">
      <h1 class="text-6xl text-white drop-shadow-lg pt-5 -z-0"> <b>Create</b> Best Future, <br> </h1>
      <h1 class="text-6xl text-white drop-shadow-lg pt-5 -z-0"><b>Create</b> Your Own Dream</h1>
      <h5 class="text-2xl text-white drop-shadow-lg pt-5 font-mono -z-0">Selamat Datang ke Web Portal Beasiswa Institut Teknologi Del!</h5>
    </div>
    <div class="absolute z-10 pl-5 flex mx-20 p-5 rounded-md" style="margin-top: 550px">
      <div class="w-full bg-gray-100 py-5 px-10 rounded-md">
        <h1 class="font-bold tracking-wider text-3xl mb-2">BERITA TERBARU</h1>
        @include('blog.postArtikel')
      </div>
      <div class="border w-3/4">
        <h1 class="font-bold tracking-wider text-3xl ml-3 my-2">PENGUMUMAN</h1>
        @include('blog.postPengumuman')
      </div>
    </div>
    <div class="absolute z-10 pl-5  mx-20 p-5 rounded-md" style="margin-top: 1150px ">
      <h1 class="px-10 my-4 text-3xl font-bold ">Program yang Tersedia</h1>
      @include('daftarBeasiswa.beasiswaCard')
    </div>
</div> -->
@endsection
