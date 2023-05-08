@extends('dashboard.frame')
    @section('konten')
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
            <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">Clients</h3>
            </div>
        </div>  
        <div class=" py-4 px-6 lg:px-12 rounded-lg shadow-md">        
          <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Judul postingan -->
            <div class="mb-4">
              <label for="judul" class="text-white block mb-2 font-semibold">
                Judul
              </label>
              <input
                type="text"
                name="judul"
                id="judul"
                value="{{ old('judul') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
                required
              >
        
              @error('judul')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
        
            <!-- Gambar postingan -->
            <div class="mb-4">
              <label for="image" class="text-white block mb-2 font-semibold">
                Gambar
              </label>
              <input
                type="file"
                name="image"
                id="image"
                value="{{ old('image') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
                required
              >
        
              @error('image')
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
