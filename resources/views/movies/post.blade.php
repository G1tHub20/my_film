<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          レビューを書く
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <h2 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">{{ $title }}</h2>
        
        @if( $errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('movies.store', $movie_id) }}">
          @csrf
          <input type="hidden" name="movie_id" value="{{ $movie_id }}">
          <input type="hidden" name="user_id" value="{{ $user_id }}">
          
        <div class="container lg:w-2/3 mx-10 px-5 py-2 mx-auto mb-5">
            <label for="rating" class="text-sm font-medium text-gray-900 dark:text-white">評価</label>
            <select name="rating" id="rating">
              <option value="">評価を選択</option>
              <option value="1">★</option>
              <option value="2">★★</option>
              <option value="3">★★★</option>
              <option value="4">★★★★</option>
              <option value="5">★★★★★</option>
          </select>
        </div>

        <div class="container lg:w-2/3 mx-10 px-5 py-2 mx-auto mb-5">
          {{-- <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">本文</label> --}}
          <textarea id="message" name="review" rows="4" maxlength="1000" required class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ここにレビューを書いてください（1,000字以内）"></textarea>
        </div>

        <div class="container lg:w-2/3 mx-10 px-5 py-2 mx-auto mb-5">
          {{-- <label for="rating" class="text-sm font-medium text-gray-900 dark:text-white">評価</label> --}}
          <label for="tag" class="text-sm font-medium text-gray-900 dark:text-white">タグを選択（3つまで）</label><br>
          @foreach($tags as $tag)
            <label for="{{ $tag->id }}" class="mx-1 text-lg">
              <input type="checkbox" name="tag[]" id="{{ $tag->id }}" value="{{ $tag->id }}">{{ $tag->tag }}
            </label>
          @endforeach

          <p class="mx-auto leading-relaxed text-base mt-2">※リストにないタグを追加できます</p>
          <input name="newTag[]" maxlength="20">
          <input name="newTag[]" maxlength="20">
          <input name="newTag[]" maxlength="20">
        </div>

          </div>
          <button class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">内容を確認して投稿する</button>
      </div>
  </div>
</form>

<button onclick="history.back()" class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">詳細に戻る</button>
</x-app-layout>

{{-- asset()でJSファイルを読み込む --}}
<script src="{{ asset('js/tag_count.js') }}"></script>