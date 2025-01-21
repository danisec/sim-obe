<x-app-layout title="{{ $title }}">

    <div class="flex h-screen bg-gray-50" x-data="{ isSideMenuOpen: false }" :class="{ 'overflow-hidden': isSideMenuOpen }">

        <x-aside />

        <div class="flex w-full flex-1 flex-col">

            <x-organism.navbar />

            <main class="h-full overflow-y-auto">
                <div class="mx-auto p-6">
                    {{ $slot }}
                </div>
            </main>

        </div>

    </div>

</x-app-layout>
