<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          詳細情報
      </h2>
  </x-slot>

  <div class="py-5">
      <div class="max-w-7xl mx-auto sm:p-6 lg:px-8">
          <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white">

              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">{{ $title }}<span> {{ number_format($rating, 1) }}</span></h1>

              <div class="flex justify-center gap-4"> <!-- 上部 -->
              <div>
                <p><img src="{{ $image1 }}"></p>
                <p><img src="{{ $image2 }}"></p>
              </div>

                <div class="container px-5 mx-auto">
                  <div class="mx-auto">
                    <div class="flex flex-wrap -m-2">
                      
                      <div class="p-2 w-full">
                        <div class="container px-5 mx-auto">
                          <p>あらすじ：</p>
                          <p>{{ $overview }}</p>
                          <p>ジャンル：</p>
                          @foreach($genres as $genre)
                            {{ $genre->genre }}{{ $loop->last ? '' : '、' }} <!-- サイトだけカンマなし -->
                          @endforeach
                          <p>公開年：{{ $release_year }}</p>
                          <p>監督：{{ $director }}</p>
                          <p>製作国：{{ $country }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="flex justify-center items-center gap-4"> <!-- 下部 -->
              
              <div class="container px-5 mx-auto">
                <p>タグ：</p>
                @foreach($tags as $tag)
                  <p class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">{{ $tag->tag }}</p>
                @endforeach
              </div>

              <div class="container mx-auto">
              @foreach($reviews as $review)
              <div class="bg-amber-100 p-2 my-4">
                <p>評価：
                  @for ($i = 0; $i < $review->rating; $i++)
                    ★
                  @endfor
                </p>
                <p>レビュー：{{ $review->review }}</p>
                <p>ユーザID：{{ $review->user_id }}</p>
              </div>
              @endforeach
              </div>

          </div>
      </div>
      <button onclick="location.href='/movies/post/{{ $movie_id }}'" class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">レビューを書く</button>
      {{-- <button onclick="location.href='{{ route('movies/post', ['id' => $movie_id]}}'" class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">レビューを書く</button> --}}

  </div>

  <button onclick="history.back()" class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">一覧に戻る</button>

</x-app-layout>