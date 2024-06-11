<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          一覧
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  result<br>
                  <a href="{{ route('movies.index') }}" class="text-blue-500">検索に戻る</a>
              </div>
              {{-- bladeテンプレート --}}
              @foreach($movies as $movie)
              <div class="container px-5 py-5 mx-auto">
                <p>タイトル：{{ $movie->title }}</p>
                <p>製作年：{{ $movie->release_year }}</p>
                <p>監督：{{ $movie->director->director }}</p>
                <p>配給：{{ $movie->distributor->distributor }}</p>
                <p>製作国：{{ $movie->country->country }}</p>
              </div>
              @endforeach
          </div>
      </div>
  </div>
</x-app-layout>