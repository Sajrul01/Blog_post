<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-8">
        <div class="max-w-xl mx-auto p-6 bg-dark rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">Create a Post</h2>

            <form action="" method="POST" class="bg-dark">
                @csrf

                <div class="mt-4">
                    <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                    <input type="text" name="title" id="title" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mt-4">
                    <label for="description" class="block text-sm font-medium text-gray-600">Description</label>
                    <textarea name="description" id="description" class="mt-1 p-2 w-full h-32 border rounded-md"></textarea>
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-blue font-bold py-2 px-4 rounded-full primary-btn ">Submit</button>
                </div>
            </form>
            @if (session()->has('status'))
                <div class="bg-gray-500 text-white p-2 rounded-md shadow-md">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>

</x-app-layout>
