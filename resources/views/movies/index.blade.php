<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          検索
      </h2>
  </x-slot>

  <div class="py-5">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg lg:w-2/3  mx-auto">
              <div class="p-6 bg-white border-b border-gray-200">

                <form method="get" action="{{ route('movies.result') }}">
                    <div class="container px-5 pt-5">
                      <div class="flex flex-col text-center w-full mb-4">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">映画を探しましょう</h1>
                        <p class="leading-relaxed text-base">気になるタグ、または詳細条件から映画を検索してください</p>
                      </div>
                    </div>

                <div class="container w-full py-2 mx-auto mb-10">
                    @foreach($tags as $tag)
                      <label for="{{ $tag->id }}" class="mx-1 text-lg font-bold">
                        <input type="checkbox" name="tag[]" id="{{ $tag->id }}" value="{{ $tag->id }}">{{ $tag->tag }}
                      </label>
                    @endforeach
                </div>
                  
                <!-- 詳細条件のアコーディオン -->
                <div id="accordion-collapse" class="container mx-auto" data-accordion="collapse">

                  <div id="accordion-collapse-heading-2">
                    <button type="button" class="flex items-center justify-between px-5 py-3 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    より詳しい条件で検索
                      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                      </svg>
                    </button>
                  </div>
                  <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="lg:w-2/3 mx-auto p-5 border border-gray-200 dark:border-gray-700">
        
                      タイトル<input type="text" id="title" name="title" value="{{ old('title') }}"><br>
                      公開年
                      <select name="release_year">
                        <option value=""></option>
                        {{-- @for($i=2024; $i>=1950; $i--) --}}
                        @for($i=2024; $i>=1950; $i--)
                          <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                      </select><br>
                      監督
                      <select name="director">
                        <option value=""></option>
                      @foreach($directors as $director)
                        <option value="{{ $director->id }}">{{ $director->director }}</option>
                      @endforeach
                      </select><br>
                      製作国
                      <select name="country">
                        <option value=""></option>
                      @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->country }}</option>
                      @endforeach
                      </select><br>
                    </div>
                  </div>
                  
                </div><!-- #accordion-collapse -->
                  
                  <input type="reset" class="text-white bg-indigo-300 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-400 rounded text-lg mt-10" value="条件をクリア">
                  <button class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索</button>
                
                </form>
          </div>
      </div>
  </div>
</x-app-layout>
