@props(['title', 'action'])

<div class="fixed inset-0 z-50 flex items-center justify-center bg-black/20" x-show="isOpen"
    x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95"
    x-transition:enter-end="transform opacity-100 scale-100" x-cloak>

    <div class="w-full rounded-lg bg-white p-8 shadow-lg md:w-7/12 md:p-12">
        <h2 class="mb-1 text-xl font-semibold md:text-2xl">Konfirmasi</h2>

        <p class="text-base font-normal text-gray-900">{{ $title }}</p>

        <div class="mt-8 flex justify-start gap-4">
            <button class="rounded-md border border-gray-300 px-6 py-2.5 text-gray-900" type="button"
                @click="isOpen = false">
                Batal
            </button>

            <form action={{ $action }} method="POST">
                @method('delete')
                @csrf

                <button
                    class="rounded-md bg-red-500 px-6 py-2.5 text-white hover:bg-red-600 focus:bg-red-600 focus:ring-red-600"
                    type="submit">
                    Hapus
                </button>
            </form>
        </div>
    </div>

</div>
