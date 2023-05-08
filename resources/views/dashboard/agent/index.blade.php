@extends('dashboard.frame')
    @section('konten')
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
            <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">Profile</h3>
            </div>
        </div>  
        <div class=" py-4 px-6 lg:px-12 rounded-lg shadow-md"> 
          {{-- {{ $skill}}        --}}
          <form action="{{ route('agent.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- greeting postingan -->
            <div class="mb-4">
              <label for="greeting" class="text-white block mb-2 font-semibold">
                Greeting
              </label>
              <input
                type="text"
                name="_greeting"
                id="greeting"
                value="{{ get_meta_value('_greeting') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('greeting')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Name  postingan -->
            <div class="mb-4">
              <label for="name" class="text-white block mb-2 font-semibold">
                Name
              </label>
              <input
                type="text"
                name="_name"
                id="name"
                value="{{ get_meta_value('_name') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('name')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Skill  postingan -->
            <div class="mb-4">
              <label for="skill" class="text-white block mb-2 font-semibold">
                Skill
              </label>
              <input
                type="text"
                name="_skill"
                id="skill"
                value="{{ get_meta_value('_skill') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('skill')
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
                name="_description"
                id="isi"
                value="{{ get_meta_value('_description') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
                required
              >
              <div class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline" id="editor">
                {{ get_meta_value('_description') }} 
                </div>
            
              @error('description')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Gambar postingan -->
            <div class="mb-4">
              <label for="photo" class="text-white block mb-2 font-semibold">
                Photo
              </label>
              {{-- <img src="{{ asset('img/portfolio/' . $data->image) }}" alt="{{ $data->judul }}" class="h-10 w-10 object-cover sm:max-w-sm mx-auto" style="float: left;"> --}}
              <input
                type="file"
                name="_photo"
                id="photo"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
              >

              @error('photo')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- CV postingan -->
            <div class="mb-4">
              <label for="cv" class="text-white block mb-2 font-semibold">
                Photo
              </label>
              {{-- <img src="{{ asset('img/portfolio/' . $data->image) }}" alt="{{ $data->judul }}" class="h-10 w-10 object-cover sm:max-w-sm mx-auto" style="float: left;"> --}}
              <input
                type="file"
                name="_cv"
                id="cv"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
              >

              @error('cv')
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
