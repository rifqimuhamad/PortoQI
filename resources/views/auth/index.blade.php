<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link rel="stylesheet" href="{{ asset('build\assets\app-47bfb29a.css') }}"> 
  <script src="{{ asset('build\assets\app-a6d2e222.js') }}"></script> --}}
  @vite('resources/css/app.css')


</head>
<body>
 <!-- header Section Start -->
 <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
  <div class="container">
      <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="#" width="100" height="50" class="mx-4 py-4 bg-primary opacity-60 transition duration-500 hover:bg-primary-0 hover:opacity-100">
              <img src="{{ asset('img\logo\logo-1.png') }}" alt="Muhamad Rifqi" width="100" height="50">
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

<!-- Body Login Start -->
    @if (Session::has('error'))
        <section class="flex items-center justify-center py-4">
          <div class="container">
              <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                  <p class="font-bold">Error</p>
                  <p>{{ Session::get('error') }}</p>
              </div>
          </div>
      </section>
    @endif


<section class="pt-20 pb-20 bg-gray-50 min-h-screen flex items-center justify-center">
    <!-- login container -->
    <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
      <!-- form -->
      <div class="md:w-1/2 px-8 md:px-16">
        <h2 class="font-bold text-2xl text-[#002D74]">Login</h2>
        <p class="text-xs mt-4 text-[#002D74]">If you are already a member, easily log in</p>
        
        <button class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300 text-[#002D74]">
          <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25px">
            <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
            <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
            <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
            <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
          </svg>
          <a href='{{ url('auth/redirect') }}'>
            Login with Google
          </a>
        </button>
      </div>
  
      <!-- image -->
      <div class="md:block hidden w-1/2">
        <img class="rounded-2xl" src="{{ asset('img\logo\login.webp') }}">
      </div>
    </div>
  </section>
<!-- Body Login end-->


<!-- footer Section start -->
<footer class="bg-dark pt-20 pb-20">
    <div class="mx-auto container xl:px-20 lg:px-12 sm:px-6 px-4 py-12">
      <div class="flex flex-col items-center justify-center">
          <div>
            <h1 class="text-gray-800 dark:text-white hover:text-gray-500">Muhamad Rifqi</h1>
              {{-- <svg class="text-gray-800 dark:text-white hover:text-gray-500" width="111" height="19" viewBox="0 0 111 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path
                      d="M3.376 15.336H11.728V18H0.0640001V2.16H3.376V15.336ZM18.154 18.24C17.354 18.24 16.634 18.096 15.994 17.808C15.354 17.52 14.842 17.064 14.458 16.44C14.09 15.816 13.906 14.992 13.906 13.968V6H17.194V13.176C17.194 14.104 17.386 14.752 17.77 15.12C18.154 15.472 18.706 15.648 19.426 15.648C20.114 15.648 20.722 15.4 21.25 14.904C21.794 14.392 22.066 13.576 22.066 12.456V6H25.354V18H22.426L22.306 15.912C21.906 16.696 21.354 17.28 20.65 17.664C19.946 18.048 19.114 18.24 18.154 18.24ZM31.4779 6L33.9979 10.176L36.5419 6H40.2619L36.0139 11.928L40.3339 18H36.5179L33.8539 13.656L31.1419 18H27.4219L31.8379 11.928L27.6379 6H31.4779ZM44.134 4.272C42.774 4.272 42.094 3.688 42.094 2.52C42.094 1.336 42.774 0.743999 44.134 0.743999C45.494 0.743999 46.174 1.336 46.174 2.52C46.174 3.688 45.494 4.272 44.134 4.272ZM45.766 6V18H42.478V6H45.766ZM64.7314 6H68.2354L64.3954 18H60.6034L57.9874 9.84L55.4674 18H51.6754L47.8354 6H51.3394L53.7394 15.192L56.4034 6H59.6674L62.3554 15.192L64.7314 6ZM75.4188 5.76C76.6188 5.76 77.6828 6.008 78.6108 6.504C79.5388 7 80.2588 7.712 80.7708 8.64C81.2988 9.568 81.5628 10.688 81.5628 12C81.5628 13.312 81.2988 14.432 80.7708 15.36C80.2588 16.288 79.5388 17 78.6108 17.496C77.6828 17.992 76.6188 18.24 75.4188 18.24C74.2028 18.24 73.1308 17.992 72.2028 17.496C71.2908 17 70.5708 16.288 70.0428 15.36C69.5308 14.432 69.2748 13.312 69.2748 12C69.2748 10.688 69.5308 9.568 70.0428 8.64C70.5708 7.712 71.2908 7 72.2028 6.504C73.1308 6.008 74.2028 5.76 75.4188 5.76ZM75.4188 8.208C74.5228 8.208 73.8188 8.528 73.3068 9.168C72.8108 9.792 72.5628 10.736 72.5628 12C72.5628 13.264 72.8108 14.216 73.3068 14.856C73.8188 15.48 74.5228 15.792 75.4188 15.792C76.2988 15.792 76.9868 15.48 77.4828 14.856C77.9948 14.216 78.2508 13.264 78.2508 12C78.2508 10.736 77.9948 9.792 77.4828 9.168C76.9868 8.528 76.2988 8.208 75.4188 8.208ZM89.7859 5.76C90.9859 5.76 92.0499 6.008 92.9779 6.504C93.9059 7 94.6259 7.712 95.1379 8.64C95.6659 9.568 95.9299 10.688 95.9299 12C95.9299 13.312 95.6659 14.432 95.1379 15.36C94.6259 16.288 93.9059 17 92.9779 17.496C92.0499 17.992 90.9859 18.24 89.7859 18.24C88.5699 18.24 87.4979 17.992 86.5699 17.496C85.6579 17 84.9379 16.288 84.4099 15.36C83.8979 14.432 83.6419 13.312 83.6419 12C83.6419 10.688 83.8979 9.568 84.4099 8.64C84.9379 7.712 85.6579 7 86.5699 6.504C87.4979 6.008 88.5699 5.76 89.7859 5.76ZM89.7859 8.208C88.8899 8.208 88.1859 8.528 87.6739 9.168C87.1779 9.792 86.9299 10.736 86.9299 12C86.9299 13.264 87.1779 14.216 87.6739 14.856C88.1859 15.48 88.8899 15.792 89.7859 15.792C90.6659 15.792 91.3539 15.48 91.8499 14.856C92.3619 14.216 92.6179 13.264 92.6179 12C92.6179 10.736 92.3619 9.792 91.8499 9.168C91.3539 8.528 90.6659 8.208 89.7859 8.208ZM103.217 18.24C102.225 18.24 101.337 17.992 100.553 17.496C99.7851 17 99.1771 16.296 98.7291 15.384C98.2971 14.456 98.0811 13.336 98.0811 12.024C98.0811 10.696 98.3131 9.568 98.7771 8.64C99.2411 7.696 99.8651 6.984 100.649 6.504C101.449 6.008 102.345 5.76 103.337 5.76C104.201 5.76 104.945 5.968 105.569 6.384C106.193 6.8 106.665 7.352 106.985 8.04V0.743999H110.273V18H107.321L107.177 15.672C106.841 16.472 106.321 17.104 105.617 17.568C104.913 18.016 104.113 18.24 103.217 18.24ZM104.177 15.72C105.025 15.72 105.705 15.392 106.217 14.736C106.729 14.064 106.985 13.12 106.985 11.904C106.985 10.752 106.729 9.864 106.217 9.24C105.721 8.6 105.057 8.28 104.225 8.28C103.329 8.28 102.625 8.6 102.113 9.24C101.617 9.864 101.369 10.784 101.369 12C101.369 13.216 101.617 14.144 102.113 14.784C102.609 15.408 103.297 15.72 104.177 15.72Z"
                      fill="currentColor"
                  />
              </svg> --}}
          </div>
          <div class="flex flex-wrap sm:gap-10 gap-8 items-center justify-center mt-8">
              <a href="#home" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">Home</a>
              <a href="#about" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">Tentang Saya</a>
              <a href="#portfolio" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">Portfolio</a>
              <a href="#clients" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">Clients</a>
              <a href="#contact" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">Kontak</a>
          </div>
          <div class="w-full pt-10 ">
            <div class="flex items-center justify-center">
              <!-- Instagram -->
              <a href="https://www.instagram.com/yailahqi/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                  <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>                    </a>
              <!-- Facebook -->
              <a href="https://www.facebook.com/rifqi223/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                  <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>                    </a>
              <!-- linkedin -->
              <a href="https://www.linkedin.com/in/muhamad-rifqi1/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                  <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>                    </a>
              <!-- Github -->
              <a href="https://github.com/rifqimuhamad" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                  <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
              </a>
            </div>
          </div>
  
          <div class="flex items-center mt-6">
              <p class="text-base leading-4 text-gray-800 dark:text-gray-400">2023 <span class="font-semibold">Muhamad Rifqi</span></p>
              <div class="border-l border-gray-800 pl-2 ml-2">
                  <p class="text-base leading-4 text-gray-800 dark:text-gray-400">Inc. All rights reserved</p>
              </div>
          </div>
      </div>
    </div>
  </footer>
  <!-- foother Section end -->
  
  
  <script src="{{ asset('admin') }}\assets\js\script.js"></script>
  </body>
  </html>