<div>

    <nav x-data="{ open: false }"
        class="relative bg-gray-800/50 after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div @click.outside="open = false" class="absolute inset-y-0 left-0 flex items-center sm:hidden">


                    <!-- Mobile menu button-->
                    <button @click="open = !open" type="button" command="--toggle" commandfor="mobile-menu"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>

                        <!-- Icono hamburguesa -->
                        <svg x-show="!open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        
                    </button>


                    {{-- menu pc --}}
                </div>
                <div class="flex flex-1 items-center justify-start sm:items-stretch sm:justify-start">
                    <a href="/" class="flex shrink-0 items-center">
                        <svg role="img" width="48" height="48" viewBox="0 0 24 24" fill="#8B5DFF" xmlns="http://www.w3.org/2000/svg"><title>Loot Crate</title><path d="M19.895 11.048a.116.116 0 0 0 .031.201c1.621.579 2.393.66 2.393 2.081v4.011c0 .716-.051.88-.531 1.254-.877.683-6.185 4.747-6.392 4.913-.774.62-1.169.556-2.054.339a515.44 515.44 0 0 1-9.945-2.577c-1.746-.47-1.701-2.064-1.701-3.203 0-3.945-.015-7.468-.015-11.202 0-1.186.049-1.222.95-1.881.83-.607 4.296-3.135 6.153-4.499.553-.406.828-.607 1.618-.406 1.616.41 6.664 1.649 9.382 2.339 2.083.529 2.535.893 2.535 2.326V8.38c0 .465-.007.638-.408.981-.202.173-1.348 1.14-2.016 1.687Zm1.624-2.556a.113.113 0 0 0 .141-.112c.001-1.414.011-2.495.011-3.666 0-.622-.35-1.137-1.121-1.343C16.501 2.29 10.486.866 10.191.778c-.197-.059-.322.108-.322.199-.001 4.294.029 7.832.029 11.854 0 .741.408 1.525 1.292 1.765 3.582.973 6.578 1.655 10.331 2.667a.115.115 0 0 0 .143-.112c.001-.848.014-1.405.014-1.95 0-2.27.279-2.679-1.57-3.194-2.198-.612-5.306-1.378-5.554-1.441-.485-.124-.548-.266-.548-.591 0-.122-.011-2.346-.003-2.869.002-.157.006-.31.157-.397.134-.077.264-.046.664.053.448.111 4.598 1.186 6.695 1.73Zm-7.65 14.735a.114.114 0 0 0 .142-.111c.001-1.185.017-2.484.017-3.352 0-1.475.182-1.334-1.064-1.639-1.474-.36-4.433-1.146-5.967-1.552-.355-.094-.459-.424-.459-.998 0-1.726-.006-4.575-.006-6.577 0-1.834.193-1.599-.703-1.832-.565-.146-2.468-.637-3.313-.828-.144-.032-.225.085-.225.224-.003 3.939.053 8.211.053 11.994 0 1.228.439 1.815 1.321 2.051 3.589.963 6.446 1.652 10.204 2.62Z"/></svg>
                    </a>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                            {{-- <a href="#" aria-current="page"
                                class="rounded-md bg-gray-950/50 px-3 py-2 text-sm font-medium text-white">Dashboard</a> --}}

                                @foreach ($categories as $category)
                                    <a href="{{ route('posts.category',$category) }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">{{ $category->nombre }}</a>
                                @endforeach
                            
                            
                        </div>
                    </div>
                </div>

                @auth
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                        {{-- boton notificacion --}}
                        <button type="button"
                            class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6">
                                <path
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="relative ml-3" x-data="{ open: false }">
                            <div>
                                <button @click="open = !open" type="button"
                                    class="relative flex rounded-full hover:ring-2 hover:ring-white focus:outline-none focus:ring-2 focus:ring-white">
                                    <img src="{{ auth()->user()->profile_photo_url }}"
                                        alt="Profile" class="size-8 rounded-full bg-gray-800 object-cover object-center" />
                                </button>
                            </div>

                            <div x-show="open" @click.outside="open = false" x-transition
                                class="absolute right-0 mt-2 w-48 origin-top-right rounded-md bg-gray-800 py-1 shadow-lg z-50">
                                <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Tu perfil</a>
                                <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Dashboard</a>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" @click.prevent="$root.submit();">Cerrar sesión</a>
                            </form>
                            </div>
                        </div>

                    </div>
                @else
                        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Login</a>
                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Register</a>

                @endauth

                    
            </div>
        </div>

        {{-- mobile menu  --}}
        <el-disclosure x-show="open" id="mobile-menu" hidden class="block sm:hidden">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                @foreach ($categories as $category)
                    <a href="{{ route('posts.category',$category) }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">{{ $category->nombre }}</a>
                @endforeach
            </div>
            
        </el-disclosure>

    </nav>

</div>
