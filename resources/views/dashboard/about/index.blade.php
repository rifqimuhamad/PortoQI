@extends('dashboard.frame')
    @section('konten')
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
            <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">About</h3>
            </div>
        </div>  
        <div class=" py-4 px-6 lg:px-12 rounded-lg shadow-md"> 
          {{-- {{ $skill}}        --}}
          <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Subjudul Language postingan -->
            <div class="mb-4">
              <label for="subjudul" class="text-white block mb-2 font-semibold">
                Subjudul
              </label>
              <input
                type="text"
                name="_subjudul1"
                id="subjudul"
                value="{{ get_meta_value('_subjudul1') }}"
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
                name="_judulkiri"
                id="title"
                value="{{ get_meta_value('_judulkiri') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('title')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Title Social Media postingan -->
            <div class="mb-4">
              <label for="name" class="text-white block mb-2 font-semibold">
                Title Social Media
              </label>
              <input
                type="text"
                name="_judulkanan"
                id="titlesm"
                value="{{ get_meta_value('_judulkanan') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('titlesm')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Description Title postingan -->
            <div class="mb-4">
              <label for="description" class="text-white block mb-2 font-semibold">
                Description Title
              </label>
              <input
                type="hidden"
                name="_dkiri"
                id="isi"
                value="{{ get_meta_value('_dkiri') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
                required
              >
              <div class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline" id="editor">
                {!! get_meta_value('_dkiri') !!} 
                </div>
            
              @error('isi')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Description Social Media postingan -->
            <div class="mb-4">
              <label for="description" class="text-white block mb-2 font-semibold">
                Description Social Media
              </label>
              <input
                type="hidden"
                name="_dkanan"
                id="desm"
                value="{{ get_meta_value('_dkanan') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
                required
              >
              <div class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline" id="editor2">
                {!! get_meta_value('_dkanan') !!} 
                </div>
            
              @error('desm')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Instagram postingan -->
            <div class="mb-4">
              <label for="skill" class="text-white block mb-2 font-semibold">
                Instagram
              </label>
              <input
                type="text"
                name="_instagram"
                id="instagram"
                value="{{ get_meta_value('_instagram') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('instagram')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Facebook postingan -->
            <div class="mb-4">
              <label for="skill" class="text-white block mb-2 font-semibold">
                Facebook
              </label>
              <input
                type="text"
                name="_facebook"
                id="facebook"
                value="{{ get_meta_value('_facebook') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('facebook')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Linkedin postingan -->
            <div class="mb-4">
              <label for="skill" class="text-white block mb-2 font-semibold">
                Linkedin
              </label>
              <input
                type="text"
                name="_linkedin"
                id="linkedin"
                value="{{ get_meta_value('_linkedin') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('linkedin')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- GitHub postingan -->
            <div class="mb-4">
              <label for="github" class="text-white block mb-2 font-semibold">
                GitHub
              </label>
              <input
                type="text"
                name="_github"
                id="github"
                value="{{ get_meta_value('_github') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('github')
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
