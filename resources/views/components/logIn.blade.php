<div class="flex items-center md:order-2 pr-10 list-none ">
  <li class="bg-[#0D285F] px-4 py-1 hover:bg-[#041538] hover:text-white shadow-lg text-white rounded-md" >
    <a href="/login/auth">Log In</a>
  </li>
</div>
<div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
  <ul class="flex flex-col  mt-4 border md:flex-row md:space-x-12 md:mt-0 md:text-sm md:font-medium md:border-0 ">
    <li>
      <a href="/" class="block py-2 pl-3 pr-4 text-primary rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0 tracking-wider" aria-current="page">Beranda</a>
    </li>
    <li>
      <button id="dropdownDataBeasiswa" data-dropdown-toggle="dropdownD" class="z-20 py-2 pl-3 pr-4 text-primary rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0 inline-flex items-center tracking-wider" type="button">Data Beasiswa <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
      
      <div id="dropdownD" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
        <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownDataBeasiswa">
          <li>
            <a href="{{route('dataBeasiswa',2019)}}" name = 'tahun' value='2019' class="block py-2 px-4 hover:bg-gray-100 ">2019</a>
          </li>
          <li>
            <a href="{{route('dataBeasiswa',2020)}}" class="block py-2 px-4 hover:bg-gray-100 ">2020</a>
          </li>
          <li>
            <a href="{{route('dataBeasiswa',2021)}}" class="block py-2 px-4 hover:bg-gray-100 ">2021</a>
          </li>
          <li>
            <a href="{{route('dataBeasiswa',2022)}}" class="block py-2 px-4 hover:bg-gray-100 ">2022</a>
          </li>
          <li>
            <a href="{{route('dataBeasiswa',2023)}}" class="block py-2 px-4 hover:bg-gray-100 ">2023</a>
          </li>
        </ul>
      </div>
    </li>
    <li>
      <button id="dropdownJenisBeasiswa" data-dropdown-toggle="dropdownJ" class="z-20 py-2 pl-3 pr-4 text-primary rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0 inline-flex items-center tracking-wider" type="button">Jenis Beasiswa <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
      <div id="dropdownJ" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
          <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownJenisBeasiswa">
            <li>
              <a href="/beasiswaInternal" class="block py-2 px-4 hover:bg-gray-100 ">Beasiswa Internal</a>
            </li>
            <li>
              <a href="{{route('beasiswaEksternal')}}" class="block py-2 px-4 hover:bg-gray-100 ">Beasiswa Eksternal</a>
            </li>
          </ul>
      </div>
    </li>
    <li>
      <a href="/seleksi" class="block py-2 pl-3 pr-4 text-primary rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0 tracking-wider">Seleksi</a>
    </li>
  </ul>
</div>



<!-- <nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <a href="/login/auth" class="flex items-center">
      <img src="{{asset('assets/logo.png')}}" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Beasiswa</span>
  </a>
  <div class="flex md:order-2">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign In</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang Kami</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tanya Jawab</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Data Beasiswa</a>
      </li>
    </ul>
  </div>
  </div>
</nav> -->