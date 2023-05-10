<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{!! get_meta_value('_nameWebsite') !!} | {!! get_meta_value('_slogan') !!}</title>
  <meta name="description" content="{!! get_meta_value('_descWebsite') !!}">
  <meta name="keywords" content="{!! get_meta_value('_keywords') !!}">
  <meta name="author" content="Muhamad Rifqi">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="{!! get_meta_value('_nameWebsite') !!}">
  <meta property="og:description" content="{!! get_meta_value('_descWebsite') !!}">
  <meta property="og:image" content="{{ asset(get_meta_value('_defaultImg')) }}">
  <meta property="og:url" content="muhamadrifqi.com">
  <meta property="og:type" content="{!! get_meta_value('_keywords') !!}">
  <meta name="twitter:card" content="{!! get_meta_value('_keywords') !!}">
  <meta name="twitter:title" content="{!! get_meta_value('_nameWebsite') !!}">
  <meta name="twitter:description" content="{!! get_meta_value('_descWebsite') !!}">
  <meta name="twitter:image" content="{{ asset(get_meta_value('_defaultImg')) }}">
  {{-- <meta name="twitter:site" content="@username_akun_Twitter Anda">
  <meta name="twitter:creator" content="@username_penulis_Twitter"> --}}
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset(get_meta_value('_icon')) }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset(get_meta_value('_icon')) }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset(get_meta_value('_icon')) }}">



  @vite('resources/css/app.css')
  <!-- CSS code for the pop-up -->

  {{-- <script>
    window.onload = function() {
      alert("Hello! Welcome to this site.\nThis site is still in the development stage thanks");
    }
    </script> --}}
</head>
<body>
 <!-- header Section Start -->
 <header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
  <div class="container">
      <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="#" width="100" height="50" class="mx-4 py-4 bg-primary opacity-60 transition duration-500 hover:bg-primary-0 hover:opacity-100">
              <img src="{{ asset(get_meta_value('_logo')) }}" alt="{!! get_meta_value('_nameWebsite') !!}" width="100" height="50">
            </a>
          </div>
          <div class="flex items-center px-4">
              <button class="block absolute right-4 lg:hidden" id="hamburger" name="hamburger" type="button">
                  <span class="ha-line transition duration-300 ease-in-out origin-top-left"></span>
                  <span class="ha-line transition duration-300 ease-in-out"></span>
                  <span class="ha-line transition duration-300 ease-in-out origin-bottom-left"></span>
              </button>
              <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                <ul class="block lg:flex">
                  <li class="group">
                    <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Home</a>
                  </li>
                  <li class="group">
                    <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Tentang Saya</a>
                  </li>
                  <li class="group">
                    <a href="#portfolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Portfolio</a>
                  </li>
                  <li class="group">
                    <a href="#clients" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Clients</a>
                  </li>
                  <li class="group">
                    <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Kontak</a>
                  </li>
                </ul>
              </nav>
          </div>
      </div>
  </div>

</header>
<!-- header Section end -->


<!-- Agent Section Start -->
<section id="home" class="pt-36">
  <div class="container">
      <div class="flex flex-wrap mx-auto">
          <div class="w-full self-center px-6 lg:w-1/2">
              <h1 class="text-base font-semibold text-primary md:text-xl">{!! get_meta_value('_greeting') !!}<span class="block font-bold text-dark text-5xl mt-1">{!! get_meta_value('_name') !!}</span></h1>
              <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">{!! get_meta_value('_skill') !!}</h2>
              <div class="font-medium text-secondary mb-10 leading-relaxed">
                {!! get_meta_value('_description') !!}
              </div>
              <a href="{{ asset(get_meta_value('_cv')) }}" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Download My CV</a>
          </div>
          <div class="w-full self-end px-6 lg:w-1/2 hidden md:block">
            <div class="relative mt-10 lg:mt-9 lg:right-0">
                <img width="400" height="400" src="{{ asset(get_meta_value('_photo')) }}" alt="profil" class="w-auto max-w-full mx-auto sm:w-64 md:w-96 lg:w-full">
                <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                    <svg width="250" height="250" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#14b8a6" d="M29.2,-51C39.7,-44.6,51.4,-40.5,58,-32.4C64.6,-24.2,66.3,-12.1,69.9,2.1C73.5,16.3,79,32.6,73.7,43C68.4,53.4,52.3,58,38.2,56.7C24.1,55.5,12,48.5,-1.8,51.7C-15.7,54.8,-31.4,68.2,-43.4,68.2C-55.4,68.2,-63.6,54.9,-67.6,41.3C-71.6,27.7,-71.3,13.8,-66.7,2.6C-62.1,-8.6,-53.4,-17.2,-49.1,-30.2C-44.8,-43.3,-45,-60.8,-37.6,-69.1C-30.2,-77.3,-15.1,-76.3,-2.9,-71.3C9.4,-66.3,18.7,-57.5,29.2,-51Z" transform="translate(100 100) scale(1.2)"/>
                    </svg>
                </span>
            </div>
        </div>
        
        
      </div>
  </div>
</section>

<!-- Agent Section end -->

<!-- About Section start -->
<section id="about" class="pt-36 pb-32">
  <div class="container">
      <div class="flex flex-wrap mx-auto">
        <div class="w-full self-center px-6 lg:pl-16 lg:w-1/2">
          <h4 class="font-bold uppercase text-primary text-lg mb-3">{!! get_meta_value('_subjudul1') !!}</h4>
              <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">{!! get_meta_value('_judulkiri') !!}</h2>
              <div class="font-medium text-base text-secondary max-w-xl lg:text-lg">
                  {!! get_meta_value('_dkiri') !!}
              </div>
          </div>
          <div class="w-full self-center px-6 lg:pl-16 lg:w-1/2">
            <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">{!! get_meta_value('_judulkanan') !!}</h3>
              <div class="font-medium text-base text-secondary mb-6 lg:text-lg">
                {!! get_meta_value('_dkanan') !!}              
              </div>
              <div class="flex items-center">
                  <!-- Instagram -->
                  <a href="{!! get_meta_value('_instagram') !!}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                      <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>                    </a>
                  <!-- Facebook -->
                  <a href="{!! get_meta_value('_facebook') !!}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                      <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>                    </a>
                  <!-- linkedin -->
                  <a href="{!! get_meta_value('_linkedin') !!}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                      <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>                    </a>
                  <!-- Github -->
                  <a href="{!! get_meta_value('_github') !!}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                      <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                  </a>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- About Section end -->
<!-- portfolio Section start -->
<section id="portfolio" class="pt-36 pb-16 bg-slate-100">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg text-primary mb-2">{!! get_meta_value('_subjudul2') !!}</h4>
        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">{!! get_meta_value('_judul2') !!}</h2>
        <div class="font-medium text-md text-secondary md:text-lg">
          {!! get_meta_value('_desc') !!}
        </div>
      </div>
    </div>
    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
      @foreach($portfolios as $portfolio)
      <div class="mb-12 p-4 md:w-1/2">
        <div class="rouded-md shadow-md overflow-hidden">
          <img src="{{ asset('img/portfolio/' . $portfolio->image) }}" alt="{{ $portfolio->judul }}" class="w-full">
        </div>
        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">{{ $portfolio->judul }}</h3>
        <div class="font-medium text-base text-secondary">
          {!! $portfolio->isi !!}
        </div>
        {{-- <p class="font-medium text-base text-secondary">{{ $portfolio->isi }}</p> --}}
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Clients Section start -->
<section id="clients" class="pt-36 pb-32 bg-slate-700">
  <div class="container">
    <div class="w-full px-4">
      <div class="mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg text-primary mb-2">{!! get_meta_value('_subjudul3') !!}</h4>
        <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">{!! get_meta_value('_judul3') !!}</h2>
        <div class="font-medium text-md text-secondary md:text-lg">
          {!! get_meta_value('_desc3') !!}
        </div>
      </div>
    </div>
    <div class="w-full px-4">
      <div class="flex flex-wrap items-center justify-center">
      @foreach($clients as $data)
        <a href="#" class="max-w-[170px]   mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
          <img src="{{ asset('img/clients/' . $data->image) }}" alt="{{ $data->judul }}">
        </a>
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- Clients Section end -->
<!-- Kontak Section Start -->
<section id="contact" class="pt-36 pb-32">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg text-primary mb-2">{!! get_meta_value('_subjudul4') !!}</h4>
        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">{!! get_meta_value('_judul3') !!}</h2>
        <div class="font-medium text-md text-secondary md:text-lg">
          {!! get_meta_value('_desc4') !!}
        </div>      
      </div>
    </div>
    @if (session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success:</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
      </div>
    @endif
    <form action="{{ route('send.email') }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      @csrf
      <div class="w-full lg:w-2/3 lg:mx-auto">
        <div class="w-full px-4 mb-8">
          <label for="nama" class="text-base font-bold text-primary">Nama</label>
          <input type="text" id="nama" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"/>
        </div>
        <div class="w-full px-4 mb-8">
          <label for="email" class="text-base font-bold text-primary">Email</label>
          <input type="text" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"/>
        </div>
        <div class="w-full px-4 mb-8">
          <label for="pesan" class="text-base font-bold text-primary">Pesan</label>
          <textarea type="text" id="pesan" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
        </div>
        <div class="w-full">
          <button type="submit" class="text-base text-white font-semibold bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim Pesan</button>
        </div>
      </div>
    </form>
  </div>
</section>
<!-- Kontak Section end -->

<!-- footer Section start -->
<footer class="bg-gray-800 text-white mt-10">
  <div class="container mx-auto py-8 px-4">
      <div class="grid grid-cols-1 gap-y-4 md:grid-cols-12">

          <!-- Logo -->
          <div class="md:col-span-4">
              <img src="{{ asset('img/' . get_meta_value('_logo')) }}" alt="Logo {{ ENV('APP_NAME') }}" class="w-32 mb-4" />
              <p class="text-sm mb-4">{!! get_meta_value('_descWebsite') !!}</p>

              <!-- Social Media Section -->
              <div class="flex">
                <!-- Instagram -->
                <a href="{!! get_meta_value('_instagram') !!}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-gray-600 text-gray-600 hover:border-blue-500 hover:bg-blue-500 hover:text-white">
                  <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>                    </a>
                </a>
                <!-- Facebook -->
                <a href="{!! get_meta_value('_facebook') !!}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-gray-600 text-gray-600 hover:border-blue-500 hover:bg-blue-500 hover:text-white">
                  <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>                    </a>
                </a>
                <!-- LinkedIn -->
                <a href="{!! get_meta_value('_linkedin') !!}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-gray-600 text-gray-600 hover:border-blue-500 hover:bg-blue-500 hover:text-white">
                  <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>                    </a>
                </a>
                <!-- GitHub -->
                <a href="{!! get_meta_value('_github') !!}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-gray-600 text-gray-600 hover:border-blue-500 hover:bg-blue-500 hover:text-white">
                  <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                </a>
              </div>
          </div>

          <!-- Other content -->
          <div class="md:col-span-8">
              <!-- Other content here -->
          </div>
      </div>

      <!-- Copyright Section -->
      <div class="text-center mt-8" id="copyright-container" data-appname="{{ env('APP_NAME') }}">
      </div>
  </div>
</footer>
<!-- foother Section end -->

<script src="{{ asset('admin') }}/assets/js/script.js"></script>
</body>
</html>