<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      詳細情報
    </h2>
  </x-slot>

  <div class="">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">

        <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">{{ $movie->title }}<span
            class="text-base font-normal">　原題：{{ $movie->original_title }}</span></h1>
        <p class="font-normal mb-4 ">
          @if ($rating == 0)
            未評価
          @else
          <span class="/12 text-xl letter-spacing-xs text-yellow-400">
            @for ($i = 0; $i < $rating; $i++)
            ★
            @endfor
          </span>
          <span class="/12 text-xl font-semibold text-yellow-600">{{ number_format($rating, 1) }}</span>
          @endif
        </p>

        <div class="sm:flex sm:justify-center sm:gap-4 sm:mb-5"> <!-- 上部 -->
          <div>
            <p><img src="{{ $image1 }}" class="mb-2"></p>
            <p><img src="{{ $image2 }}"></p>
          </div>

          <div class="container sm:px-5 mx-auto">
            <div class="mx-auto">
              <div class="flex flex-wrap -m-2">

                <div class="p-2 w-full">
                  <div class="container sm:px-5 mx-auto">
                    <p class="mt-5 sm:mt-0 mb-5">{{ $movie->overview }}</p>
                    <dt class="border-l-4 border-gray-300 pl-1">ジャンル：</dt>
                    <dd class="pl-4 mb-1">
                      @foreach ($genres as $key => $genre)
                        <a href="/movie/result?genre={{ $genre->id }}"
                          class="text-indigo-600 hover:text-rose-500">{{ $genre->genre }}</a>{{ $loop->last ? '' : '、' }}
                        <!-- 最後だけカンマなし -->
                      @endforeach
                    </dd>
                    <dt class="border-l-4 border-gray-300 pl-1">公開：</dt>
                    <dd class="pl-4 mb-1"><a href="/movie/result?release_year={{ $movie->release_year }}"
                        class="text-indigo-600 hover:text-rose-500">{{ $movie->release_year }}年</a></dd>
                    <dt class="border-l-4 border-gray-300 pl-1">監督：</dt>
                    <dd class="pl-4 mb-1"><a href="/movie/result?director={{ $movie->director }}"
                        class="text-indigo-600 hover:text-rose-500">{{ $movie->director }}</a></dd>
                    <dt class="border-l-4 border-gray-300 pl-1">製作国：</dt>
                    <dd class="pl-4 mb-1"><a href="/movie/result?country={{ $movie->country->id }}"
                        class="text-indigo-600 hover:text-rose-500">{{ $movie->country->country }}</a></dd>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="sm:flex sm:justify-center sm:items-start sm:gap-4"> <!-- 下部 -->
          <div class="container px-5 mx-auto">
            @if ($tags->isEmpty())
              <p class="text-lg mb-5">タグが未登録です。</p>
            @else
              @foreach ($tags as $tag)
                <p class="inline-block text-xl title-font mb-4 mr-2 text-gray-50 bg-yellow-400 px-1 py-0.5 rounded-md hover:bg-yellow-500"><a
                    href="/movie/result?tag%5B%5D={{ $tag->id }}"
                    class="">{{ $tag->tag }}</a></p>
              @endforeach
            @endif
          </div>

          <div class="container mx-auto">
            @foreach ($reviews as $review)
              <div class="bg-gray-50 p-2 my-4">
                <span class="w-1/12 text-xs letter-spacing-xs text-yellow-400">
                  @for ($i = 0; $i < $review->rating; $i++)
                    ★
                  @endfor
                </span>
                <p>{{ $review->comment }}</p>
                <p class="text-right">{{ $review->name }}</p>
              </div>
            @endforeach
          </div>

        </div>
        <div>
          @if ($posted_user === 1)
            <button onclick="location.href='/movie/edit/{{ $movie->id }}'"
              class="mr-0 text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">レビュー編集</button>
          @else
            <button onclick="location.href='/movie/post/{{ $movie->id }}'"
              class="mr-0 text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">レビューを書く</button>
          @endif
          <div>
          </div>

        </div>


</x-app-layout>
