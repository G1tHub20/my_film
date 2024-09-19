<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      検索
    </h2>
  </x-slot>

  <div class="">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mx-auto">
        <div class="p-6 bg-white border-b-8 border-gray-100">

          <form method="get" action="{{ route('movie.result') }}">
            <div class="container px-5 pt-5">
              <div class="flex flex-col text-center w-full mb-4">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-1 text-gray-900">映画を探しましょう
                </h1>
                <p class="leading-relaxed text-base">気になるタグ、または詳細条件から映画を検索してください</p>
              </div>
            </div>

            <div class="container lg:w-2/3 py-2 mx-auto mb-5">
              @foreach ($tags as $tag)
                <label for="{{ $tag->id }}" class="group mx-1 text-lg rounded-md bg-gray-100 cursor-pointer whitespace-nowrap">
                  <input type="checkbox" name="tag[]" id="{{ $tag->id }}" class="hidden peer"
                    value="{{ $tag->id }}">
                    <span class="peer-checked:bg-yellow-400 peer-checked:text-gray-50 inlione-block px-1 py-0.5 rounded-md">
                      {{ $tag->tag }}
                    </span>
                </label>
              @endforeach
            </div>


            <!-- 詳細条件のアコーディオン -->
            <div id="accordion-collapse" class="container mx-auto" data-accordion="collapse">
              <div id="accordion-collapse-heading-2" class="container lg:w-2/3 mx-auto">
                <button type="button"
                  class="flex items-center justify-between px-5 py-3 font-medium leading-4 rtl:text-right text-black-500 border border-b-0 border-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-2" aria-expanded="true"
                  aria-controls="accordion-collapse-body-2">
                  詳しい条件で検索
                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </div>
              <div id="accordion-collapse-body-2" class="" aria-labelledby="accordion-collapse-heading-2">
                
                <div class="lg:w-2/3 mx-auto p-5 border border-gray-200 dark:border-gray-700">
                  <div class="flex sm:items-center mb-3 flex-col sm:flex-row">
                    <label class="block sm:w-1/5 font-bold sm:text-right pr-4" for="title">タイトル</label>
                    <input type="text"
                      class="block text-base leading-4 w-full sm:w-full lg:w-1/2 py-2 px-3 text-gray-700 border rounded focus:outline-none focus:bg-white"
                      id="title" name="title" value="{{ old('title') }}">
                  </div>

                  <div class="flex sm:items-center mb-3 flex-col sm:flex-row">
                    <label class="block sm:w-1/5 font-bold sm:text-right pr-4" for="genre">ジャンル</label>
                    <select name="genre" class="text-base leading-4 w-full sm:w-full lg:w-1/3">
                      <option value=""></option>
                      @foreach ($genre_names as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="flex sm:items-center mb-3 flex-col sm:flex-row">
                    <label class="block sm:w-1/5 font-bold sm:text-right pr-4" for="release_year">公開</label>
                    <select name="release_year" class="text-base leading-4 w-full sm:w-full lg:w-1/3">
                      <option value=""></option>
                      @foreach($release_year as $i)
                        <option value="{{ $i }}">{{ $i }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="flex sm:items-center mb-3 flex-col sm:flex-row">
                    <label class="block sm:w-1/5 font-bold sm:text-right pr-4" for="director">監督</label>
                    <select name="director" class="text-base leading-4 w-full sm:w-full lg:w-1/3">
                      <option value=""></option>
                      @foreach ($directors as $director)
                        <option value="{{ $director }}">{{ $director }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="flex sm:items-center mb-3 flex-col sm:flex-row">
                    <label class="block sm:w-1/5 font-bold sm:text-right pr-4" for="country">製作国</label>
                    <select name="country" class="text-base leading-4 w-full sm:w-full lg:w-1/3">
                      <option value=""></option>
                      @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->country }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

              </div>

            </div><!-- #accordion-collapse -->

            <div class="flex justify-center">
              <button type="reset"
                class="text-gray-500 bg-gray-100 border-0 py-2 px-8 focus:outline-none rounded text-lg hover:bg-gray-200 mr-5">クリア</button>
              <button
                class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索</button>
            </div>
          </form>
        </div>

        <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg mx-auto">
          <p class="w-4/12"><span class="text-yellow-400">★</span>4.5以上の映画</p>
          <table class="table-auto w-full">
            <thead>
              <tr>
                <th class="w-5/12 text-left">
                  タイトル
                </th>
                <th class="w-4/12 text-left">ジャンル</th>
                <th class="w-1/12 text-left">
                  公開
                </th>
                <th class="w-2/12 text-left">
                  評価
                </th>
              </tr>
            </thead>
            @foreach ($movies as $movie)
              <tbody>
                <tr class="divide-y divide-slate-400 flex flex-col sm:table-row">
                  <td class="border-t border-slate-400 w-5/12 text-indigo-600"><a href="/movie/{{ $movie['id'] }}"
                      class="text-blue font-medium inline-block mx-auto mr-0 py-2 px-1 focus:outline-none hover:text-rose-500">{{ $movie->title }}</button>
                  </td>
                  <td class="w-4/12">
                    @foreach ($genres[$movie->id] as $key => $genre)
                      {{ $genre }}{{ $loop->last ? '' : '、' }}
                    @endforeach
                  </td>
                  <td class="w-1/12">{{ $movie->release_year }}</a></td>
                  <td title="{{ $movie->rating }}" class="w-2/12 text-xs letter-spacing-xs text-yellow-400">
                    @for ($i = 0; $i < $movie->rating; $i++)
                      ★
                    @endfor
                  </td>
                </tr>
              </tbody>
            @endforeach
          </table>
        </div>
      </div>
    </div>
</x-app-layout>
