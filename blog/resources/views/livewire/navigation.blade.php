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
                        <!-- Icono X -->
                        <svg x-show="open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>


                    {{-- menu pc --}}
                </div>
                <div class="flex flex-1 items-center justify-start sm:items-stretch sm:justify-start">
                    <a href="/" class="flex shrink-0 items-center">
                        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                            alt="Your Company" class="h-8 w-auto" />
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
