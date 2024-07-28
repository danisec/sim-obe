<x-layouts.app-dashboard title="{{ $title }}">

    <x-molecules.breadcrumb>
        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <span class="mx-2 text-base font-medium text-gray-500">Hasil Pembelajaran</span>
            </div>
        </li>
    </x-molecules.breadcrumb>

    <div class="my-8">
        <h4 class="mb-6 text-2xl font-semibold text-gray-900">Hasil Pembelajaran</h4>

        <div class="flex flex-row items-center justify-end gap-4">
            <div>
                <a href="{{ route('hasilPembelajaran.perhitunganHasilPembelajaran') }}">
                    <x-atoms.button.button-primary :customClass="'h-12 w-56 rounded-md'" :type="'button'" :name="'Lihat Hasil Pembelajaran'" />
                </a>
            </div>

            <div>
                <a href="{{ route('hasilPembelajaran.create') }}">
                    <x-atoms.button.button-primary :customClass="'h-12 w-32 rounded-md'" :type="'button'" :name="'Tambah'" />
                </a>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto rounded-lg shadow-sm">
        <table class="w-full text-left text-base text-gray-900">
            <thead class="bg-slate-100 text-sm uppercase text-gray-900">
                <tr>
                    <th class="px-6 py-3" scope="col">
                        Kode Mata Kuliah
                    </th>
                    <th class="px-6 py-3" scope="col">
                        Nama Mata Kuliah
                    </th>
                    <th class="flex justify-center px-6 py-3" scope="col">
                        Aksi
                    </th>
                </tr>
            </thead>

            @if ($hasilPembelajaran != null && $hasilPembelajaran->count() > 0)
                @foreach ($hasilPembelajaran as $item)
                    <tbody>
                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                {{ $item->kode_mata_kuliah }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->nama_mata_kuliah }}
                            </td>
                            <td class="flex justify-center gap-4 px-6 py-4">
                                <div x-data="{ showTooltip: false }">
                                    <a class="font-medium text-gray-600"
                                        href="{{ route('hasilPembelajaran.show', $item->id_hasil_pembelajaran) }}"
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

                                    <x-molecules.modal-delete :title="'Apakah Anda akan yakin ingin menghapus hasil pembelajaran mata kuliah : ' .
                                        $item->nama_mata_kuliah .
                                        ' ?'" :action="route('hasilPembelajaran.destroy', $item->id_hasil_pembelajaran)" />
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
        {{ $hasilPembelajaran->links('vendor.pagination.tailwind') }}
    </div>

    <div class="relative my-8 overflow-x-auto rounded-lg shadow-sm">
        <table class="w-full text-left text-base text-gray-900">
            <thead class="bg-slate-100 text-sm uppercase text-gray-900">
                <tr>
                    <th class="px-6 py-3" scope="col">
                        Kode Mata Kuliah
                    </th>
                    <th class="px-6 py-3" scope="col">
                        Nama Mata Kuliah
                    </th>
                    <th class="px-6 py-3" scope="col">
                        23-MKU-CPL-01
                    </th>
                    <th class="px-6 py-3" scope="col">
                        23-MKU-CPL-02
                    </th>
                    <th class="px-6 py-3" scope="col">
                        23-MKU-CPL-03
                    </th>
                    <th class="px-6 py-3" scope="col">
                        23-MKU-CPL-04
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        MKU101
                    </th>
                    <td class="px-6 py-4">
                        Agama
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU101']) ? number_format($totalHasilPembelajaran['MKU101'] / 100, 2) : '' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU101']) ? number_format($totalHasilPembelajaran['MKU101'] / 100, 2) : '' }}
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                    </td>
                </tr>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        MKU102
                    </th>
                    <td class="px-6 py-4">
                        Pancasila dan Kewarganegaraan
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU102']) ? number_format($totalHasilPembelajaran['MKU102'] / 100, 2) : '' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU102']) ? number_format($totalHasilPembelajaran['MKU102'] / 100, 2) : '' }}
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                    </td>
                </tr>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        MKU103
                    </th>
                    <td class="px-6 py-4">
                        Bahasa Indonesia
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU103']) ? number_format($totalHasilPembelajaran['MKU103'] / 100, 2) : '' }}
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU103']) ? number_format($totalHasilPembelajaran['MKU103'] / 100, 2) : '' }}
                    </td>
                </tr>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        MKU104
                    </th>
                    <td class="px-6 py-4">
                        Pembangunan Berkelanjutan
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU104']) ? number_format($totalHasilPembelajaran['MKU104'] / 100, 2) : '' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU104']) ? number_format($totalHasilPembelajaran['MKU104'] / 100, 2) : '' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU104']) ? number_format($totalHasilPembelajaran['MKU104'] / 100, 2) : '' }}
                    </td>
                </tr>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        MKU105
                    </th>
                    <td class="px-6 py-4">
                        Wawasan Kewirausahaan
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU105']) ? number_format($totalHasilPembelajaran['MKU105'] / 100, 2) : '' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU105']) ? number_format($totalHasilPembelajaran['MKU105'] / 100, 2) : '' }}
                    </td>
                </tr>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        MKU106
                    </th>
                    <td class="px-6 py-4">
                        Dasar Logika Matematika
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU106']) ? number_format($totalHasilPembelajaran['MKU106'] / 100, 2) : '' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU106']) ? number_format($totalHasilPembelajaran['MKU106'] / 100, 2) : '' }}
                    </td>
                </tr>
                <tr class="border-b bg-white hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                        MKU107
                    </th>
                    <td class="px-6 py-4">
                        English for Specific Purposes
                    </td>
                    <td class="px-6 py-4">
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU107']) ? number_format($totalHasilPembelajaran['MKU107'] / 100, 2) : '' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ isset($totalHasilPembelajaran['MKU107']) ? number_format($totalHasilPembelajaran['MKU107'] / 100, 2) : '' }}
                    </td>
                    <td class="px-6 py-4">
                    </td>
                </tr>
                <tr class="border-b bg-slate-100 font-semibold text-gray-900 hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4" scope="row">
                    </th>
                    <td class="px-6 py-4">
                        Score CPL (Rata-rata)
                    </td>
                    <td class="px-6 py-4" id="rata-kolom-1">
                        <input id="input-rata-kolom-1" name="rata_kolom_1" type="hidden">
                    </td>
                    <td class="px-6 py-4" id="rata-kolom-2">
                        <input id="input-rata-kolom-2" name="rata_kolom_2" type="hidden">
                    </td>
                    <td class="px-6 py-4" id="rata-kolom-3">
                        <input id="input-rata-kolom-3" name="rata_kolom_3" type="hidden">
                    </td>
                    <td class="px-6 py-4" id="rata-kolom-4">
                        <input id="input-rata-kolom-4" name="rata_kolom_4" type="hidden">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-layouts.app-dashboard>
