@extends('dashboard.frame')
    @section('konten')
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
            <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">Portfolio</h3>
            </div>
        </div>  
        <div class=" py-4 px-6 lg:px-12 rounded-lg shadow-md">        
          <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
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
        
            <!-- Deskripsi postingan -->
            <div class="mb-4">
              <label for="isi" class="text-white block mb-2 font-semibold">
                Deskripsi
              </label>
              <input
                type="hidden"
                name="isi"
                id="isi"
                value="{{ old('isi') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
                required
              >
              <div class="w-full bg-gray-800 rounded-lg py-2 px-3  text-white focus:outline-none focus:shadow-outline" id="editor">
              @error('isi')
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
        
            <!-- Kategori postingan -->
            <div class="mb-4">
              <label for="kategory" class="text-white block mb-2 font-semibold">
                Kategori
              </label>
              <select
                name="kategory"
                id="kategory"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
              >
                <option value="">Pilih Kategori</option>
                <option value="none">Pilih Kategori</option>
                <option value="design">Design</option>
                <option value="webdesign">Web Design</option>
                <option value="wordpress">Wordpress</option>
                <option value="logo">Logo</option>
                <option value="poster">Poster</option>
                <option value="certificate">Certificate</option>
              </select>
        
              @error('kategory')
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
