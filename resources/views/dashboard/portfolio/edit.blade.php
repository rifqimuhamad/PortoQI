@extends('dashboard.frame')
@section('konten')
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
    <div class="md:col-span-2 xl:col-span-3">
      <h3 class="text-lg font-semibold">Edit Portfolio Item</h3>
    </div>
  </div>
  <div class=" py-4 px-6 lg:px-12 rounded-lg shadow-md">
    <form action="{{ route('portfolio.update', $data->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <!-- Judul postingan -->
      <div class="mb-4">
        <label for="judul" class="text-white block mb-2 font-semibold">
          Judul
        </label>
        <input
          type="text"
          name="judul"
          id="judul"
          value="{{ $data->judul }}"
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
          value="{{ $data->isi }}"
          class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
          required
        >
        <div class="w-full bg-gray-800 rounded-lg py-2 px-3  text-white focus:outline-none focus:shadow-outline" id="editor">
          <?php echo $data->isi; ?>
        </div>
                @error('isi')
          <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
        @enderror
      </div>

      <!-- Gambar postingan -->
      <div class="mb-4">
        <label for="image" class="text-white block mb-2 font-semibold">
          Gambar
        </label>
        <img src="{{ asset('img/portfolio/' . $data->image) }}" alt="{{ $data->judul }}" class="h-10 w-10 object-cover sm:max-w-sm mx-auto" style="float: left;">
        <input
          type="file"
          name="image"
          id="image"
          class="w-full bg-gray-800 rounded-lg py-2 px-3 text-white focus:outline-none focus:shadow-outline"
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
          <option value="design" {{ $data->kategory === 'design' ? 'selected' : ''}}>Design</option>
          <option value="webdesign" {{ $data->kategory === 'webdesign' ? 'selected' : ''}}>Web Design</option>
          <option value="wordpress" {{ $data->kategory === 'wordpress' ? 'selected' : ''}}>Wordpress</option>
          <option value="logo" {{ $data->kategory === 'logo' ? 'selected' : ''}}>Logo</option>
          <option value="poster" {{ $data->kategory === 'poster' ? 'selected' : ''}}>Poster</option>
          <option value="certificate" {{ $data->kategory === 'certificate' ? 'selected' : ''}}>Certificate</option>
        </select>

        @error('kategori')
          <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
        @enderror
      </div>

      <!-- Tombol submit -->
      <div class="flex justify-center">
        <button
          type="submit"
          class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:shadow-outline"
        >
          Update
        </button>
      </div>
    </form>
  </div>
@endsection