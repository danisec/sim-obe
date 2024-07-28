<x-layouts.app-layout title="{{ $title }}">

    <x-organism.aside />

    <main class="ease-soft-in-out relative h-full max-h-screen rounded-xl transition-all duration-200 xl:ml-64">

        <x-organism.navbar />

        <div class="mx-auto w-full px-6 py-6">
            {{ $slot }}
        </div>

    </main>

</x-layouts.app-layout>
