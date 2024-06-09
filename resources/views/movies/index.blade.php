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
                  index<br>
                  <a href="{{ route('movies.search') }}" class="text-blue-500">検索に戻る</a>
              </div>
              {{-- bladeテンプレート --}}
              @foreach($values as $value)
              {{ $value->id }}<br>
              {{ $value->title }}<br>
              {{ $value->release_year }}<br>
              {{ $value->director_id }}<br>
              {{ $value->distributor_id }}<br>
              {{ $value->country_id }}<br>
              @endforeach
          </div>
      </div>
  </div>
</x-app-layout>
