@if ($errors->any())
    <section class="flex items-center justify-center py-4">
        <div class="container">
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">Error</p>
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endif

@if (Session::has('success'))
    <section class="flex items-center justify-center py-4">
        <div class="container">
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                <p class="font-bold">Success</p>
                <p>{{ Session::get('success') }}</p>
            </div>
        </div>
    </section>  
@endif