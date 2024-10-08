<nav x-data="{ open: false }" class=" border-b border-gray-100">
  <!-- Primary Navigation Menu -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-10 lg:h-12">
      <div class="flex">
        <!-- Logo -->
        <div class="shrink-0 flex items-center">
        </div>

        <!-- Navigation Links -->
        <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
          <x-nav-link :href="route('movie.index')" :active="request()->routeIs('movie.index')">
            <img src="https://img.icons8.com/?size=100&id=9010&format=png&color=000000" alt="TOP" class="h-8 sm:h-full font-medium">
          </x-nav-link>
          @if (request()->routeIs('movie.result'))
            <x-nav-link :href="route('movie.result')" :active="request()->routeIs('movie.result')" class="font-medium">
              一覧
            </x-nav-link>
            @elseif(request()->is('movie/admin'))
            <x-nav-link :href="route('movie.admin')" :active="request()->is('movie/admin')" class="font-medium">
                管理者用
            </x-nav-link>
            @elseif(request()->is('movie/post/*'))
            <x-nav-link :href="route('movie.post', ['id' => request()->route('id')])" :active="request()->is('movie/post/*')" class="font-medium">
                レビュー登録
            </x-nav-link>
            @elseif(request()->is('movie/edit/*'))
            <x-nav-link :href="route('movie.edit', ['id' => request()->route('id')])" :active="request()->is('movie/edit/*')" class="font-medium">
                レビュー編集
            </x-nav-link>
            @elseif(request()->is('movie/*'))
              <x-nav-link :href="route('movie.show', ['id' => request()->route('id')])" :active="request()->is('movie/*')" class="font-medium">
                詳細情報
              </x-nav-link>
          @endif
        </div>
      </div>

      <!-- Settings Dropdown -->
      <div class="hidden sm:flex sm:items-center sm:ml-6">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button
              class="flex items-center text-base font-normal text-gray-900 hover:border-gray-300 focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
              <div>{{ Auth::user()->name }}さん</div>

              <div class="ml-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </button>
          </x-slot>

          <x-slot name="content">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ __('ログアウト') }}
              </x-dropdown-link>
            </form>
          </x-slot>
        </x-dropdown>
      </div>

      <!-- Hamburger -->
      <div class="-mr-2 flex items-center sm:hidden">
        <button @click="open = ! open"
          class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
      {{-- <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link> --}}
      {{-- <x-responsive-nav-link :href="route('movie.index')" :active="request()->routeIs('.index')">
        TOP
      </x-responsive-nav-link> --}}
    </div>

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200">
      <div class="px-4">
        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
        {{-- <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div> --}}
      </div>

      <div class="mt-3 space-y-1">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
            this.closest('form').submit();">
            {{ __('ログアウト') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
  </div>
</nav>
