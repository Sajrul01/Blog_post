<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post_edit') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-8">
        <div class="max-w-xl mx-auto p-6 bg-gray-800 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-white">Edit a Post</h2>
            <form action="" method="POST" class="bg-gray-800">
                @csrf
                @method('PUT')
                <div class="mt-4">
                    <label for="title" class="block text-sm font-medium text-gray-600 text-white">Title</label>
                    <input type="text" name="title" id="title" value="{{$send->title}}"
                        class="mt-1 p-2 w-full border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div class="mt-4">
                    <label for="description"
                        class="block text-sm font-medium text-gray-600 text-white">Description</label>
                    <textarea name="description" id="description"
                        class="mt-1 p-2 w-full h-32 border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 
                        focus:ring-blue-500 focus:border-transparent">{{$send->description}}</textarea>
                </div>
                <div class="mt-6">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full primary-btn focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">Update</button>
                </div>
            </form>
           
        </div>
    </div>
</x-app-layout>
