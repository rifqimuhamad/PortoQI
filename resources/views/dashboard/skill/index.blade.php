@extends('dashboard.frame')
    @section('konten')
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
            <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">Skill</h3>
            </div>
        </div>  
        <div class=" py-4 px-6 lg:px-12 rounded-lg shadow-md"> 
          {{-- {{ $skill}}        --}}
          <form action="{{ route('skill.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Programming Language postingan -->
            <div class="mb-4">
              <label for="judul" class="text-white block mb-2 font-semibold">
                Programming Language
              </label>
              <input
                type="text"
                name="_language"
                id="tokenfield"
                value="{{ get_meta_value('_language') }}"
                class="form-control skill w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
        
              @error('judul')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Workflow postingan -->
            <div class="mb-4">
              <label for="isi" class="text-white block mb-2 font-semibold">
                Workflow
              </label>
              <input
                type="hidden"
                name="_workflow"
                id="isi"
                value="{{ get_meta_value('_workflow') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
                required
              >
              <div class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline" id="editor">
                {{ get_meta_value('_workflow') }} 
                </div>
            
                      @error('isi')
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
