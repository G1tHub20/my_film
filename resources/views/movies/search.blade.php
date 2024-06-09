<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          検索
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  search<br>
                  {{-- <a href="{{ route('movies/index') }}" class="text-blue-500">一覧へ</a> --}}
                  <a href="{{ route('movies.index') }}" class="text-blue-500">一覧へ</a>
                  <section class="text-gray-600 body-font">
                    <div class="container px-5 py-10 mx-auto">
                      <div class="flex flex-col text-center w-full mb-4">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">好きな映画を探しましょう</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">気になるタグから、または詳細条件から映画を検索してください</p>
                      </div>
                      <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                          <label for="full-name" class="leading-7 text-lg text-gray-600">タグ</label>
                          <input type="text" id="full-name" name="full-name" placeholder="ワクワクする" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">search</button>
                    </div>
                </div>
                <div class="container mx-10 px-5 py-2 mx-auto">
                    @foreach($values as $value)
                        <span class="">{{ $value->tag }}</span>
                    @endforeach
                </div>
                  </section>

                  <section>
                    <div id="accordion-collapse" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1">
                        <!-- 詳細条件のアコーディオン -->
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                            <span>詳細条件</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="display" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-2 w-full">
                                製作年<input type="text" id="" name="" value="{{ old('') }}"><br>
                                監督<input type="text" id="" name="" value="{{ old('') }}"><br>
                                配給<input type="text" id="" name="" value="{{ old('') }}"><br>
                                製作国<input type="text" id="" name="" value="{{ old('') }}"><br>
                                キャスト<input type="text" id="" name="" value="{{ old('') }}"><br>
                            </div>

                          </div>

                    </div>
                  </section>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
