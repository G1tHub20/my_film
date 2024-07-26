<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          詳細情報
      </h2>
  </x-slot>

  <div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">

          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">{{ $movie->title }}<span class="font-normal"> {{ $rating==0 ? '未評価' : number_format($rating, 1) }}</span></h1>
          
          <div class="flex justify-center gap-4 mb-5"> <!-- 上部 -->
          <div>
            <p><img src="{{ $image1 }}" class="mb-2"></p>
            <p><img src="{{ $image2 }}"></p>
          </div>

            <div class="container px-5 mx-auto">
              <div class="mx-auto">
                <div class="flex flex-wrap -m-2">
                  
                  <div class="p-2 w-full">
                    <div class="container px-5 mx-auto">
                      {{-- <p>あらすじ：</p> --}}
                      <p class="mb-5">{{ $movie->overview }}</p>
                      <p>ジャンル：
                      @foreach($genres as $key => $genre)
                      <a href="/movies/result?genre={{ $genre->id }}" class="hover:underline hover:decoration-indigo-600">{{ $genre->genre }}</a>{{ $loop->last ? '' : '、' }} <!-- 最後だけカンマなし -->
                      @endforeach
                      </p>
                      <p>公開年：<a href="/movies/result?release_year={{ $movie->release_year }}" class="hover:underline hover:decoration-indigo-600">{{ $movie->release_year }}</a></p>
                      <p>監督：<a href="/movies/result?director={{ $movie->director }}" class="hover:underline hover:decoration-indigo-600">{{ $movie->director }}</a></p>
                      <p>製作国：<a href="/movies/result?country={{ $movie->country->id }}" class="hover:underline hover:decoration-indigo-600">{{ $movie->country->country }}</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="flex justify-center items-start gap-4"> <!-- 下部 -->
          <div class="container px-5 mx-auto">
          @if($tags->isEmpty())
          <p class="text-lg mb-5">タグが未登録です。</p>
          @else
            @foreach($tags as $tag)
              <p class="sm:text-xl text-xl font-medium title-font mb-4 text-gray-900"><a href="/movies/result?tag%5B%5D={{ $tag->id }}" class="hover:underline hover:decoration-indigo-600">{{ $tag->tag }}</a></p>
            @endforeach
          @endif
          </div>

          <div class="container mx-auto">
          @foreach($reviews as $review)
          <div class="bg-amber-100 p-2 my-4">
            <p>評価：
              @for ($i = 0; $i < $review->rating; $i++)
                ★
              @endfor
            </p>
            <p>レビュー：{{ $review->comment }}</p>
            <p>ユーザID：{{ $review->user_id }}</p>
          </div>
          @endforeach
          </div>

      </div>
      @if($posted_user === 1)
      <button onclick="location.href='/movies/edit/{{ $movie_id }}'" class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">レビュー編集</button>
      @else
      <button onclick="location.href='/movies/post/{{ $movie_id }}'" class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">レビューを書く</button>
      @endif
      </div>
    
  </div>
  
  {{-- <button onclick="history.back()" class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">一覧に戻る</button> --}}
  {{-- <button onclick="location.href='/movies/result'" class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">一覧に戻る</button> --}}

</x-app-layout>