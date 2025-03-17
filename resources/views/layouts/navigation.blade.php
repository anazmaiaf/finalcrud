<nav class="fixed top-0 z-50 w-full bg-blush dark:bg-blush">

  <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">

        <!-- Nome -->
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
         </button>
        <a class="flex ms-2 md:me-24">
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white dark:text-white">PureLook</span>
        </a>
      </div>
      
      <!-- Bolinha do usuário -->
        <div class="flex items-center">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white-500 dark:text-white-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                    <div>{{ Auth::user()->name }}</div>

                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>

        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-blush sm:translate-x-0 dark:bg-blush" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-blush dark:bg-blush">
      <ul class="space-y-2 font-medium">
        <li>
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" class="text-white hover:bg-transparent hover:text-current hover:text-white">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>
        </li>

        <li>
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" class="text-white hover:bg-transparent hover:text-current hover:text-white">
                    {{ __('Produtos') }}
                </x-responsive-nav-link>
            </div>
        </li>
      </ul>
   </div>
</aside>