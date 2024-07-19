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
                  {{-- <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2"> --}}
                  <div id="accordion-collapse-body-2" class="" aria-labelledby="accordion-collapse-heading-2">
                  <div class="lg:w-2/3 mx-auto p-5 border border-gray-200 dark:border-gray-700">
                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                      <label class="block sm:w-1/3 font-bold sm:text-right mb-1 pr-4" for="title">タイトル</label>
                      <input type="text" class="block w-full sm:w-2/3 py-2 px-3 text-gray-700 border rounded focus:outline-none focus:bg-white" id="title" name="title" value="{{ old('title') }}">
                    </div>

                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                    <label class="block sm:w-1/3 font-bold sm:text-right mb-1 pr-4" for="genre">ジャンル</label>
                      <select name="genre">
                        <option value=""></option>
                      @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                      @endforeach
                      </select>
                      </div>

                      <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                        <label class="block sm:w-1/3 font-bold sm:text-right mb-1 pr-4" for="release_year">公開年</label>
                      <select name="release_year">
                        <option value=""></option>
                        @for($i=2020; $i>=1985; $i-=5)
                        @if($i == 2020)
                          <option value="{{ $i }}">{{ $i }}～</option>
                        @else
                          <option value="{{ $i }}">{{ $i }}～{{ $i+4 }}</option>
                        @endif
                        @endfor
                        {{-- @for($i=2025; $i>=1985; $i-5)
                          <option value="{{ $i }}">{{ $i }}</option>
                        @endfor --}}
                      </select>
                    </div>

                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                    <label class="block sm:w-1/3 font-bold sm:text-right mb-1 pr-4" for="director">監督</label>
                      <select name="director">
                        <option value=""></option>
                      @foreach($directors as $director)
                        <option value="{{ $director }}">{{ $director }}</option>
                      @endforeach
                      </select>
                    </div>

                    <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                      <label class="block sm:w-1/3 font-bold sm:text-right mb-1 pr-4" for="country">製作国</label>
                      <select name="country">
                        <option value=""></option>
                      @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->country }}</option>
                      @endforeach
                      </select><br>
                    </div>
                    </div>

                  </div>
                  
                </div><!-- #accordion-collapse -->
                  
                <div class="flex justify-center">
                  <button type="reset" class="text-gray-500 bg-gray-100 border-0 py-2 px-8 focus:outline-none rounded text-lg hover:bg-gray-200 mr-5">クリア</button>
                  <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索</button>
                </div>
                </form>
          </div>
      </div>
  </div>
</x-app-layout>
