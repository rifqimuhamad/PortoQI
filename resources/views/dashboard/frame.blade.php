<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ ENV('APP_NAME') }} - Dashboard</title>

  <link rel="stylesheet" href="{{ asset('admin') }}\assets\css\frame.css"> 
  <!-- Add Quill's CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  @vite('resources/css/app.css')


</head>
<body>
    <style>
          .ql-toolbar {
            background-color: white !important;
          }
          .tokenfield .token {
              margin: -1px 1px 1px 1px;
              height: 25px;
              line-height: 22px;
              color: #fff;
              background-color: #0b5ed7;
          }

          .tokenfield .token a {
              color: #ffffff;
              text-decoration: none;
          }
        
    </style>

        <div x-data="setup()" :class="{ 'dark': isDark }">
          <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
      
            <!-- Header -->
            <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
              <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-blue-800 dark:bg-gray-800 border-none">
                <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="{{ asset('admin') }}/images/{{ Auth::user()->avatar }}" />
                <span class="hidden md:block">{{ Auth::user()->name}} - ADMIN</span>
              </div>
              <div class="flex justify-between items-center h-14 bg-blue-800 dark:bg-gray-800 header-right">
                <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
                  <button class="outline-none focus:outline-none">
                    <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                  </button>
                  <input type="search" name="" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
                </div>
                <ul class="flex items-center">
                  <li>
                    <button
                      aria-hidden="true"
                      @click="toggleTheme"
                      class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-200 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none"
                    >
                      <svg
                        x-show="isDark"
                        width="24"
                        height="24"
                        class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke=""
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                        />
                      </svg>
                      <svg
                        x-show="!isDark"
                        width="24"
                        height="24"
                        class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke=""
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                        />
                      </svg>
                    </button>
                  </li>
                  <li>
                    <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                  </li>
                  <li>
                    <a href="{{ url('auth/logout') }}" class="flex items-center mr-4 hover:text-blue-100">
                      <span class="inline-flex mr-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                      </span>
                      Logout
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ./Header -->
          
            <!-- Sidebar -->
            <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
              <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul class="flex flex-col py-4 space-y-1">
                  <li class="px-5 hidden md:block">
                    <div class="flex flex-row items-center h-8">
                      <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                    </div>
                  </li>
                  <li>
                    <a href="{{ route('portfolio.index') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                      <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path>
                        </svg>
                      </span>
                      <span class="ml-2 text-sm tracking-wide truncate">Portfolio</span>
                      <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('clients.index') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                      <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">    
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                        </svg>
                      </span>
                      <span class="ml-2 text-sm tracking-wide truncate">Clients</span>
                      <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('agent.index') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                      <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">    
                          <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33"></path>
                        </svg>
                      </span>
                      <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('about.index') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                      <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">    
                          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                      </span>
                      <span class="ml-2 text-sm tracking-wide truncate">About</span>
                    </a>
                  </li>
                  <li class="relative">
                    <button id="dropdown1-btn" class="relative flex flex-row items-center h-11 w-full focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                      <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75"></path>
                        </svg>
                      </span>
                      <span class="ml-2 text-sm tracking-wide truncate">Setting</span>
                    </button>
                    <ul id="submenu1" class="absolute left-0 w-full bg-blue-700 z-20 hidden space-y-2 mt-2">
                      <li> 
                        <a href="{{ route('setting-home.index') }}" class="relative flex flex-row items-center h-11 px-3 focus:outline-none hover:bg-blue-600 dark:hover:bg-gray-600 text-white-600 hover:text-white-800">
                          <span class="ml-2 text-sm tracking-wide truncate">Home Setting</span>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('setting-website.index') }}" class="relative flex flex-row items-center h-11 px-3 focus:outline-none hover:bg-blue-600 dark:hover:bg-gray-600 text-white-600 hover:text-white-800">
                          <span class="ml-2 text-sm tracking-wide truncate">Websetting</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  
                  {{-- <li class="relative">
                    <button id="dropdown1-btn" class="relative flex flex-row items-center h-11 w-full focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                      <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                      </span>
                      <span class="ml-2 text-sm tracking-wide truncate">Home</span>
                    </button>
                    <ul id="submenu1" class="absolute left-0 w-full bg-blue-700 z-20 hidden space-y-2 mt-2">
                      <li> 
                        <a href="{{ route('agent.index') }}" class="relative flex flex-row items-center h-11 px-3 focus:outline-none hover:bg-blue-600 dark:hover:bg-gray-600 text-white-600 hover:text-white-800">
                          <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('about.index') }}" class="relative flex flex-row items-center h-11 px-3 focus:outline-none hover:bg-blue-600 dark:hover:bg-gray-600 text-white-600 hover:text-white-800">
                          <span class="ml-2 text-sm tracking-wide truncate">About</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="relative">
                    <button id="dropdown2-btn" class="relative flex flex-row items-center h-11 w-full focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                      <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"></path></svg>
                      </span>
                      <span class="ml-2 text-sm tracking-wide truncate">Portofolio</span>
                    </button>
                    <ul id="submenu2" class="absolute left-0 w-full bg-blue-700 z-20 hidden space-y-2 mt-2">
                      <li>
                        <a href="{{ route('portfolioSubJudul.index') }}" class="relative flex flex-row items-center h-11 px-3 focus:outline-none hover:bg-blue-600 dark:hover:bg-gray-600 text-white-600 hover:text-white-800">
                          <span class="ml-2 text-sm tracking-wide truncate">SubJudul</span>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('portfolio.index') }}" class="relative flex flex-row items-center h-11 px-3 focus:outline-none hover:bg-blue-600 dark:hover:bg-gray-600 text-white-600 hover:text-white-800">
                          <span class="ml-2 text-sm tracking-wide truncate">Portofolio</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="relative">
                    <button id="dropdown3-btn" class="relative flex flex-row items-center h-11 w-full focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                      <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"></path>
                        </svg>
                      </span>
                      <span class="ml-2 text-sm tracking-wide truncate">Clients</span>
                    </button>
                    <ul id="submenu3" class="absolute left-0 w-full bg-blue-700 z-20 hidden space-y-2 mt-2">
                      <li>
                        <a href="{{ route('clientSubJudul.index') }}" class="relative flex flex-row items-center h-11 px-3 focus:outline-none hover:bg-blue-600 dark:hover:bg-gray-600 text-white-600 hover:text-white-800">
                          <span class="ml-2 text-sm tracking-wide truncate">SubJudul</span>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('clients.index') }}" class="relative flex flex-row items-center h-11 px-3 focus:outline-none hover:bg-blue-600 dark:hover:bg-gray-600 text-white-600 hover:text-white-800">
                          <span class="ml-2 text-sm tracking-wide truncate">Clients</span>
                        </a>
                      </li>
                    </ul>
                  </li> --}}
                </ul>
                <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
              </div>
            </div>
            
            <!-- ./Sidebar -->
            
            <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
              @include('dashboard.pesan')
              @yield('konten')
            </div>


            </div>
          </div>
        </div>    
        
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
        <script src="{{ asset('admin') }}\assets\js\frame.js"></script>
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

      
        <script>
          
          var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],

            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'direction': 'rtl' }],                         // text direction

            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],

            ['clean']                                         // remove formatting button
          ];
          // Inisialisasi setiap editor dengan variabel yang berbeda
          var quill1 = new Quill('#editor', {
            theme: 'snow',
            modules: {
              toolbar: toolbarOptions
            }
          });

          var quill2 = new Quill('#editor2', {
            theme: 'snow',
            modules: {
              toolbar: toolbarOptions
            }
          });;
          var quill4 = new Quill('#editor4', {
            theme: 'snow',
            modules: {
              toolbar: toolbarOptions
            }
          });

          // Tambahkan event listeners untuk setiap editor
          quill1.on('text-change', function () {
            var content = quill1.root.innerHTML;
            document.getElementById('isi').value = content;
          });

          quill2.on('text-change', function () {
            var content = quill2.root.innerHTML;
            document.getElementById('desm').value = content;
          });

          quill4.on('text-change', function () {
            var content = quill4.root.innerHTML;
            document.getElementById('tester').value = content;
          });
          
        </script>
</body>
</html>