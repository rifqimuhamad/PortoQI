@extends('dashboard.frame')
    @section('konten')
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
            <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">About</h3>
            </div>
        </div>  
        <div class=" py-4 px-6 lg:px-12 rounded-lg shadow-md"> 
          {{-- {{ $skill}}        --}}
          <form action="{{ route('portfolioSubJudul.update') }}" method="POST">
            @csrf
            <!-- Subjudul  postingan -->
            <div class="mb-4">
              <label for="subjudul" class="text-white block mb-2 font-semibold">
                Subjudul
              </label>
              <input
                type="text"
                name="_subjudul2"
                id="subjudul"
                value="{{ get_meta_value('_subjudul2') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('subjudul')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Title postingan -->
            <div class="mb-4">
              <label for="name" class="text-white block mb-2 font-semibold">
                Title
              </label>
              <input
                type="text"
                name="_judul2"
                id="title"
                value="{{ get_meta_value('_judul2') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('title')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Description postingan -->
            <div class="mb-4">
              <label for="description" class="text-white block mb-2 font-semibold">
                Description
              </label>
              <input
                type="hidden"
                name="_desc"
                id="isi"
                value="{{ get_meta_value('_desc') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
                required
              >
              <div class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline" id="editor">
                {!! get_meta_value('_desc') !!} 
                </div>
            
              @error('description')
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
