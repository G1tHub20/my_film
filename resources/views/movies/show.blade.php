<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          詳細情報
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                
                <section class="text-gray-600 body-font relative">
                
                  <div class="container px-5 mx-auto">
                    <div class="lg:w-1/2 md:w-2/3 mx-auto">
                      <div class="flex flex-wrap -m-2">
                        
                        <div class="p-2 w-full">
                          <div class="container px-5 py-5 mx-auto">
                            <p>タイトル：{{ $movie->title }}</p>
                            <p>あらすじ：{{ $movie->overview }}</p>
                            <p>ジャンル：{{ $movie->genre }}</p>
                            <p>公開年：{{ $movie->release_year }}</p>
                            <p>監督：{{ $movie->director->director }}</p>
                            {{-- <p>配給：{{ $movie->distributor->distributor }}</p> --}}
                            <p>製作国：{{ $movie->country->country }}</p>
                            </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </section>
                
              </div>
          </div>
      </div>
  </div>

  <button onclick="history.back()" class="text-white block bg-indigo-500 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">一覧に戻る</button>

</x-app-layout>
