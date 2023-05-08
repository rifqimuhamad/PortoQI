@extends('dashboard.frame')
    @section('konten')
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
            <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">Portfolio</h3>
            </div>
        </div>          
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col">
              <div class="pb-4">
                <a href="{{ route('portfolio.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                  Tambah Baru
                </a>
              </div>
              <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-800 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-800">
                      <thead>
                        <tr>
                          <th scope="col" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                            Image
                          </th>
                          <th scope="col" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                            Judul
                          </th>
                          <th scope="col" class="px-6 py-3 bg-gray-800 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                            Kategori
                          </th>
                          <th scope="col" class="relative px-6 py-3 bg-gray-800 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                            Edit
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-gray-900 divide-y divide-gray-800">
                        @foreach($data as $portfolio)
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap text-gray-50">
                            <div class="flex items-center">
                              <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="{{ asset('img/portfolio/' . $portfolio->image) }}" alt="{{ $portfolio->judul }}">
                              </div>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-gray-50">
                            {{ $portfolio->judul }}
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-gray-50">
                            {{ $portfolio->kategory }}
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-gray-50">
                            <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form onsubmit="return confirm('Are you sure you want to delete?')"
                                action="{{ route('portfolio.destroy', $portfolio->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-indigo-600 hover:text-indigo-900" type="submit" name='submit'>Hapus</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        
    @endsection
