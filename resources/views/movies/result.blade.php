<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      一覧
    </h2>
  </x-slot>

  
  <div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg mx-auto">
        {{-- bladeテンプレート --}}
      <p class="text-base">検索条件 {{ $search_param }}</p>
        @if($movies->isEmpty())
      <p class="text-lg mb-5">該当する映画が見つかりませんでした。</p>
    @else
    <p class="text-lg mb-5">{{ count($movies) }}本の映画が見つかりました。</p>
  <table class="table-auto w-full">
        <thead>
          <tr>
            <th class="w-4/12 text-left">
              @sortablelink('title', 'タイトル')
            </th>
            <th class="w-4/12 text-left">ジャンル</th>
            <th class="w-1/12 text-left">
              @sortablelink('release_year', '公開年')
            </th>
            <th class="w-2/12 text-left">
              @sortablelink('director', '監督')
            </th>
            <th class="w-1/12 text-left">
              @sortablelink('rating', '評価')
            </th>
          </tr>
        </thead>
        @foreach($movies as $movie)
        <tbody>
          <tr class="divide-y divide-slate-400">
            <td class="border-t border-slate-400 w-4/12 text-indigo-600"><a href="/movies/{{ $movie['id'] }}" class="text-blue font-medium block mx-auto mr-0 py-2 px-1 focus:outline-none hover:bg-indigo-600 hover:text-white">{{ $movie->title }}</button></td>
            <td class="w-4/12">
              @foreach($genres[$movie->id] as $key => $genre)
              {{-- <a href="/movies/result?genre={{ $key }}" class="hover:underline hover:decoration-indigo-600">{{ $genre }}</a>{{ $loop->last ? '' : '、' }} --}}
                {{ $genre }}{{ $loop->last ? '' : '、' }}
              @endforeach</td>
            <td class="w-1/12">{{ $movie->release_year }}</a></td>
            <td class="w-2/12">{{ $movie->director }}</td>
            {{-- <td class="w-1/12">{{ $movie->country->country }}</td> --}}
            <td class="w-1/12">{{ $movie->rating }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
      @endif
      <button onclick="history.back()" class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索に戻る</button>
    </div>
    </div>
                </x-app-layout>
