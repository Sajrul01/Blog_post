<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session()->has('status')) 
        <div class="bg-green-500 text-white p-4 rounded-md shadow-md"> 
            {{ session('status') }} 
        </div> 
    @endif 
   
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-dark dark:bg-dark-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-dark-900 dark:text-dark-100">
                <table class="min-w-full bg-dark border border-dark-300">
                    <thead class="bg-gray-600 text-white divide-y divide-gray-500">
                        <tr>
                            <th class="col">Name</th>
                            <th class="col">Title</th>
                            <th class="col">Description</th>
                            <th class="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-600 text-white divide-y divide-gray-500">
                        @foreach ($send as $sen)
                            <tr>
                                <td class="border px-6 py-4 whitespace-nowrap">{{ $sen->user->name }}</td>
                                <td class="border px-6 py-4 whitespace-nowrap">{{ $sen->title }}</td>
                                <td class="border px-6 py-4 whitespace-nowrap">{{ $sen->description }}</td>
                                <td class="border px-6 py-4 whitespace-nowrap">
                                    <a href="{{ url('/send/edit', $sen->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">EDIT</a>
                                    <a href="{{ url('/send/delete', $sen->id) }}"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">DELETE</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
      
</x-app-layout>
