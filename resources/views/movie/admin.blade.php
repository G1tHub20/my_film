<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      映画を追加
    </h2>
  </x-slot>

  <div class="">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mx-auto">
        <div class="p-2 sm:p-6 bg-white border-b-8 border-gray-100">

          <div class="container px-5 pt-5">
            <div class="flex flex-col text-center w-full mb-4">
          <p class="leading-relaxed text-base">追加したい映画を<a href="https://www.themoviedb.org/search/movie?query=&language=ja-JP" target="_blank" class="text-indigo-600 hover:text-red-600 hover:underline">TMDB</a>で検索し、その映画IDを入力して「映画を追加」を押してください</p>
          <form method="get" action="{{ route('movie.getApiData') }}">
            <div class="flex sm:items-center mb-3 flex-col sm:flex-row">
              <label class="block sm:w-2/5 font-bold sm:text-right pr-4" for="tmdb_id">映画ID（TMDB）</label>
              <input type="text"
                class="block text-base leading-4 w-full sm:w-full lg:w-1/4 py-1 px-3 text-gray-700 rounded focus:outline-none focus:bg-white"
                id="tmdb_id" name="tmdb_id" value="{{ old('tmdb_id') }}">
            </div>

            <div class="flex justify-center">
              <button type="reset" class="text-gray-500 bg-gray-100 border-0 py-2 px-8 focus:outline-none rounded text-lg hover:bg-gray-200 mr-5">クリア</button>
              <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">映画を追加</button>
            </div>

          
      </div>
    </form>
    </div>
  </div>
</x-app-layout>
