<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="post"action="{{ route('owner.sample.update') }}"enctype="multipart/form-data">
                        @csrf
                        <input type="text"name="name"placeholder="名前">

                        @if (isset($name))
                            <p>{{ $name }}</p>
                        @endif

                        <input type="file"accept="image/png,image/jpeg,image/jpg">
                        <button type="submit"
                            class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">保存する</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
