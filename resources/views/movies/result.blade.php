<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      一覧
    </h2>
  </x-slot>
  
  <div class="lg:w-2/3 mx-auto py-5">
    <div class="mx-auto bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
      {{-- bladeテンプレート --}}
    @if($movies->isEmpty())
    <p class="text-center text-lg mb-5">該当する映画が見つかりませんでした。</p>
    @else
<table class="table-auto w-full">
        <thead>
          <tr>
            <th class="w-3/12 text-left">タイトル</th>
            <th class="w-4/12 text-left">ジャンル</th>
            <th class="w-1/12 text-left">公開年</th>
            <th class="w-2/12 text-left">監督</th>
            <th class="w-2/12 text-left">製作国</th>
          </tr>
        </thead>
        @foreach($movies as $movie)
        <tbody>
          <tr class="divide-y divide-slate-400">
            <td class="border-t border-slate-400 w-3/12 text-indigo-600 "><a href="/movies/{{ $movie['id'] }}" class="text-blue font-medium block mx-auto mr-0 py-2 px-1 focus:outline-none hover:bg-indigo-600 hover:text-white">{{ $movie->title }}</button></td>
            <td class="w-4/12">
              @foreach($genres[$movie->id] as $genre)
                {{ $genre }}{{ $loop->last ? '' : '、' }}
              @endforeach</td>
            <td class="w-1/12">{{ $movie->release_year }}</td>
            <td class="w-2/12">{{ $movie->director }}</td>
            <td class="w-2/12">{{ $movie->country->country }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
      @endif
      <button onclick="history.back()" class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索に戻る</button>
    </div>
    </div>
                </x-app-layout>
