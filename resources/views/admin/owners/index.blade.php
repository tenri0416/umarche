<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           オーナー管理
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

    <section class="text-gray-600 body-font">
  <div class="container px-5 mx-auto">


    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Plan</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Speed</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Storage</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Price</th>
            <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($owners as $owner)
            <tr>
                <td class="px-4 py-3">{{$owner->name}}</td>
                <td class="px-4 py-3">{{$owner->email}}</td>
                <td class="px-4 py-3">{{$owner->created_at->diffForHumans()}}</td>
                <td class="px-4 py-3 text-lg text-gray-900"></td>
                <td class="w-10 text-center"></td>
            </tr>
             @endforeach
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
