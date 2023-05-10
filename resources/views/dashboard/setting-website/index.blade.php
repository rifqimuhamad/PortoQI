@extends('dashboard.frame')
    @section('konten')
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
            <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">Website Settings</h3>
            </div>
        </div>  
        <div class=" py-4 px-6 lg:px-12 rounded-lg shadow-md"> 
          {{-- {{ $skill}}        --}}
          <form action="{{ route('setting-website.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Name Website postingan -->
            <div class="mb-4">
              <label for="greeting" class="text-white block mb-2 font-semibold">
                Name Website
              </label>
              <input
                type="text"
                name="_nameWebsite"
                id="nameWebsite"
                value="{{ get_meta_value('_nameWebsite') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('nameWebsite')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Slogan postingan -->
            <div class="mb-4">
              <label for="slogan" class="text-white block mb-2 font-semibold">
                Slogan 
              </label>
              <input
                type="text"
                name="_slogan"
                id="slogan"
                value="{{ get_meta_value('_slogan') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('slogan')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- descWebsite postingan -->
            <div class="mb-4">
              <label for="descWebsite" class="text-white block mb-2 font-semibold">
                Descripsi Website
              </label>
              <input
                type="text"
                name="_descWebsite"
                id="descWebsite"
                value="{{ get_meta_value('_descWebsite') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('descWebsite')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Keywords postingan -->
            <div class="mb-4">
              <label for="descWebsite" class="text-white block mb-2 font-semibold">
                Keywords
              </label>
              <input
                type="text"
                name="_keywords"
                id="Keywords"
                value="{{ get_meta_value('_keywords') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('Keywords')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Default Image postingan -->
            <div class="mb-4">
              <label for="defaultImg" class="text-white block mb-2 font-semibold">
                Default Image
              </label>
              <img src="{{ asset('img/agent/' . get_meta_value('_defaultImg')) }}" alt="{{ get_meta_value('_name') }}" class="h-10 w-10 object-cover sm:max-w-sm mx-auto" style="float: left;">
              <input
                type="file"
                name="_defaultImg"
                id="defaultImg"
                value="{{ get_meta_value('_defaultImg') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
              >

              @error('defaultImg')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- LOgo postingan -->
            <div class="mb-4">
              <label for="logo" class="text-white block mb-2 font-semibold">
                Logo
              </label>
              <img src="{{ asset('img/agent/' . get_meta_value('_logo')) }}" alt="{{ get_meta_value('_name') }}" class="h-10 w-10 object-cover sm:max-w-sm mx-auto" style="float: left;">
              <input
                type="file"
                name="_logo"
                id="logo"
                value="{{ get_meta_value('_logo') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
              >

              @error('logo')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Gambar postingan -->
            <div class="mb-4">
              <label for="icon" class="text-white block mb-2 font-semibold">
                Icons
              </label>
              <img src="{{ asset('img/agent/' . get_meta_value('_icon')) }}" alt="{{ get_meta_value('_name') }}" class="h-10 w-10 object-cover sm:max-w-sm mx-auto" style="float: left;">
              <input
                type="file"
                name="_icon"
                id="icon"
                value="{{ get_meta_value('_icon') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
              >

              @error('icon')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            
            <!-- Tombol submit -->
            <div class="flex justify-center">
              <button
                type="submit"
                class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:shadow-outline"
              >
                Kirim
              </button>
            </div>
          </form>
        </div>          
    @endsection
