<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      レビュー登録
    </h2>
  </x-slot>

  <div class="">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

          <h2 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">{{ $title }}</h2>

          {{-- エラーメッセージ --}}
          @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form method="POST" action="{{ route('movie.store', $movie->id) }}">
            @csrf

            <div class="container lg:w-2/3 mx-10 px-5 mx-auto mb-5">
              <select name="rating" id="rating" class="rounded">
                <option value="">評価を選択</option>
                <option value="1" @if ((int) old('rating') === 1) selected @endif>★</option>
                <option value="2" @if ((int) old('rating') === 2) selected @endif>★★</option>
                <option value="3" @if ((int) old('rating') === 3) selected @endif>★★★</option>
                <option value="4" @if ((int) old('rating') === 4) selected @endif>★★★★</option>
                <option value="5" @if ((int) old('rating') === 5) selected @endif>★★★★★</option>
              </select>
            </div>

            <div class="container lg:w-2/3 mx-10 px-5 py-1 mx-auto mb-5">
              <textarea id="comment" name="comment" rows="4" maxlength="1000"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="ここにレビューを書いてください（1,000字以内）">{{ old('comment') }}</textarea>
              <p id="inputlength">0/1000</p>
            </div>

            <div class="container lg:w-2/3 mx-10 px-5 py-1 mx-auto mb-5">
              <label for="tag" class="text-sm font-medium text-gray-900 dark:text-white">タグを選択（3つまで）</label><br>
              @foreach ($tags as $tag)
                <label for="{{ $tag->id }}" class="mx-1 text-lg whitespace-nowrap">
                  <input type="checkbox" name="tag[]" id="{{ $tag->id }}" value="{{ $tag->id }}"
                    {{ in_array($tag->id, old('tag', [])) ? 'checked' : '' }}><!-- $tag->idの設定値があればチェックする -->
                  {{ $tag->tag }}
                </label>
              @endforeach

              <p class="mx-auto leading-relaxed text-base mt-5">※リストにないタグを追加できます</p>
              <p class="mb-2">新規タグ1：<input type="text" name="newTag[]" value="{{ old('newTag.0') }}" class="py-1 rounded"></p>
              <p class="mb-2">新規タグ2：<input type="text" name="newTag[]" value="{{ old('newTag.1') }}" class="py-1 rounded"></p>
              <p>新規タグ3：<input type="text" name="newTag[]" value="{{ old('newTag.2') }}" class="py-1 rounded"></p>
            </div>

        </div>
        <button
          class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">内容を確認して投稿する</button>
      </div>
    </div>
    <input type="hidden" name="movie_id" value="{{ $movie->id }}">
    <input type="hidden" name="user_id" value="{{ $user_id }}">
    </form>
    {{-- <a href="/movie/{{ $movie_id }}" class="text-blue font-medium block mx-auto mr-0 py-2 px-1 focus:outline-none hover:bg-indigo-600 hover:text-white">詳細に戻る</button> --}}

    <button onclick="location.href='/movie/{{ $movie->id }}'"
      class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">詳細に戻る</button>
</x-app-layout>

{{-- asset()でJSファイルを読み込む --}}
<script src="{{ asset('js/tag_count.js') }}"></script>
