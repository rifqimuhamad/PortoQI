@extends('dashboard.frame')
    @section('konten')
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
            <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">Home Settings</h3>
            </div>
        </div>  
        <div class=" py-4 px-6 lg:px-12 rounded-lg shadow-md"> 
          {{-- {{ $skill}}        --}}
          <form action="{{ route('setting-home.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- SubTitle Portfolio postingan -->
            <div class="mb-4">
              <label for="subjudul2" class="text-white block mb-2 font-semibold">
                SubTitle Portofolio
              </label>
              <input
                type="text"
                name="_subjudul2"
                id="subjudul2"
                value="{{ get_meta_value('_subjudul2') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('subjudul2')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Title Portoflio postingan -->
            <div class="mb-4">
              <label for="judul2" class="text-white block mb-2 font-semibold">
                Title Portoflio 
              </label>
              <input
                type="text"
                name="_judul2"
                id="judul2"
                value="{{ get_meta_value('_judul2') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('judul2')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Description Portfolio postingan -->
            <div class="mb-4">
              <label for="isi" class="text-white block mb-2 font-semibold">
                Description Portfolio
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
            
              @error('isi')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- SubTitle Client postingan -->
            <div class="mb-4">
              <label for="subjudul3" class="text-white block mb-2 font-semibold">
                SubTitle Client
              </label>
              <input
                type="text"
                name="_subjudul3"
                id="subjudul3"
                value="{{ get_meta_value('_subjudul3') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('subjudul3')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Title Client postingan -->
            <div class="mb-4">
              <label for="judul3" class="text-white block mb-2 font-semibold">
                Title Client
              </label>
              <input
                type="text"
                name="_judul3"
                id="judul3"
                value="{{ get_meta_value('_judul3') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('judul3')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Description Client postingan -->
            <div class="mb-4">
              <label for="desm" class="text-white block mb-2 font-semibold">
                Description Client
              </label>
              <input
                type="hidden"
                name="_desc3"
                id="desm"
                value="{{ get_meta_value('_desc3') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
                required
              >
              <div class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline" id="editor2">
                {!! get_meta_value('_desc3') !!} 
                </div>
            
              @error('desm')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            
            <!-- SubTitle Contact postingan -->
            <div class="mb-4">
              <label for="subjudul4" class="text-white block mb-2 font-semibold">
                SubTitle Contact
              </label>
              <input
                type="text"
                name="_subjudul4"
                id="subjudul4"
                value="{{ get_meta_value('_subjudul4') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('subjudul3')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Title Contact postingan -->
            <div class="mb-4">
              <label for="judul4" class="text-white block mb-2 font-semibold">
                Title Contact
              </label>
              <input
                type="text"
                name="_judul4"
                id="judul4"
                value="{{ get_meta_value('_judul4') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline skill" 
                required
              >
              @error('judul4')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
              @enderror
            </div>
            <!-- Description Contact postingan -->
            <div class="mb-4">
              <label for="tester" class="text-white block mb-2 font-semibold">
                Description Contact
              </label>
              <input
                type="hidden"
                name="_desc4"
                id="tester"
                value="{{ get_meta_value('_desc4') }}"
                class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
                required
              >
              <div class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline" id="editor4">
                {!! get_meta_value('_desc4') !!} 
                </div>
            
              @error('tester')
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
