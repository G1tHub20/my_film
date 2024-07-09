<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          一覧
      </h2>
  </x-slot>

  <div class="lg:w-2/3 mx-auto py-5">
    <div class="lg:w-2/3 mx-auto bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
            {{-- bladeテンプレート --}}
              @if(!$movies->isEmpty())
                <div class="container mx-auto">
                @foreach($movies as $movie)
                  <div class="container p-2 my-4 mx-auto bg-amber-100">
                    <p>タイトル：{{ $movie->title }}</p>
                    <p>ジャンル：
                      @foreach($genres[$movie->id] as $genre)
                        {{ $genre }}{{ $loop->last ? '' : '、' }}
                      @endforeach
                    </p>
                    <p>公開年：{{ $movie->release_year }}</p>
                    <p>監督：{{ $movie->director }}</p>
                    <p>製作国：{{ $movie->country->country }}</p>
                    <p><a href="/movies/{{ $movie['id'] }}" class="text-blue-500">➡詳細を見る</a></p>
                    </div>
                    @endforeach
                  </div>
                @else
                    <p class="text-center">条件に一致する映画は見つかりませんでした。</p>
                @endif
                  <button onclick="history.back()" class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索に戻る</button>
    </div>
                </x-app-layout>
