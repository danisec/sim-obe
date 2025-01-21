<x-app-dashboard title="{{ $title }}">

    <x-molecules.breadcrumb>
        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <span class="mx-2 text-sm font-medium text-gray-500 md:text-base">Data cpl-cpmk-scpmk</span>
            </div>
        </li>
    </x-molecules.breadcrumb>

    <div class="my-8">
        <h4 class="mb-6 text-xl font-semibold text-gray-900 md:text-2xl">Data CPL-CPMK-SCPMK</h4>

        <div class="flex flex-row items-center justify-end">
            <div>
                <a href="{{ route('capaianPembelajaran.import') }}">
                    <x-atoms.button.button-primary :customClass="'h-12 w-32 rounded-md'" :type="'button'" :name="'Import'" />
                </a>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto rounded-lg shadow-sm">
        <table class="w-full text-left">
            <thead class="bg-slate-100 text-sm uppercase text-gray-900">
                <tr>
                    <th class="px-6 py-3" scope="col">
                        Kode CPL
                    </th>
                    <th class="px-6 py-3" scope="col">
                        Deskripsi Capaian Pembelajaran Lulusan
                    </th>
                    <th class="flex justify-center px-6 py-3" scope="col">
                        Aksi
                    </th>
                </tr>
            </thead>

            @if ($capaianPembelajaranLulusan != null && $capaianPembelajaranLulusan->count() > 0)
                @foreach ($capaianPembelajaranLulusan as $item)
                    <tbody class="text-sm text-gray-900 md:text-base">
                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                {{ $item->kode_cpl }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->deskripsi_cpl }}
                            </td>
                            <td class="flex justify-center gap-4 px-6 py-4">
                                <div x-data="{ showTooltip: false }">
                                    <a class="font-medium text-gray-600"
                                        href="{{ route('capaianPembelajaran.show', $item->id_cpl) }}"
                                        @mouseenter="showTooltip = true" @mouseleave="showTooltip = false">
                                        <x-atoms.svg.eye />
                                    </a>

                                    <div class="absolute rounded bg-gray-100 px-2 py-1 text-sm text-gray-900"
                                        x-show="showTooltip">
                                        Detail
                                    </div>
                                </div>

                                <div x-data="{ isOpen: false }">
                                    <button class="text-red-600 focus:outline-none" type="button"
                                        @click="isOpen = true">
                                        <x-atoms.svg.trash />
                                    </button>

                                    <x-molecules.modal-delete :title="'Apakah Anda akan yakin ingin menghapus kode CPL : ' .
                                        $item->kode_cpl .
                                        ' ?'" :action="route('capaianPembelajaran.destroy', $item->id_cpl)" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            @else
                <tbody>
                    <tr class="border-b bg-white">
                        <td class="px-6 py-4 text-center font-medium text-gray-600" colspan="3">
                            Data belum ada.
                        </td>
                    </tr>
                </tbody>
            @endif
        </table>
    </div>

    <div class="bg-white p-6">
        {{ $capaianPembelajaranLulusan->links('vendor.pagination.tailwind') }}
    </div>

</x-app-dashboard>
