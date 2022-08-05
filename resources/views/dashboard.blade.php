<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @forelse ($images as $image)
                <div class="font-semibold text-2xl text-center p-6 bg-white border-b border-gray-200">
                    <div class="pb-6">{{ substr($image->name, 0, strpos($image->name, ".")) }}</div>
                    <img src="{{ asset($image->image_path) }}">
                </div>
                @empty
                <span>Nothing uploaded.</span>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
