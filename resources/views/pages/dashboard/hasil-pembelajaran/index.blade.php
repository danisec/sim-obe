<x-app-dashboard title="{{ $title }}">

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
                    @foreach ($allCplCodes as $cplCode)
                        <th class="px-6 py-3" scope="col">
                            {{ $cplCode }}
                        </th>
                    @endforeach
                </tr>
            </thead>

            <tbody>
                @foreach ($hasilPembelajaran as $item)
                    <tr class="border-b bg-white hover:bg-slate-100">
                        <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                            {{ $item->kode_mata_kuliah }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->nama_mata_kuliah }}
                        </td>
                        @foreach ($allCplCodes as $cplCode)
                            <td class="px-6 py-4">
                                @php
                                    $kodeMK = $item->kode_mata_kuliah;
                                    // Memeriksa apakah kode mata kuliah memiliki data hasil pembelajaran
                                    $value = isset($totalHasilPembelajaran[$kodeMK])
                                        ? $totalHasilPembelajaran[$kodeMK]
                                        : 0;
                                    // Memeriksa apakah kode CPL ada dalam kodeCPL untuk mata kuliah ini
                                    $cplValues = $kodeCPL[$kodeMK] ?? [];
                                    echo in_array($cplCode, $cplValues) ? number_format($value / 100, 2) : '';
                                @endphp
                            </td>
                        @endforeach
                    </tr>
                @endforeach

                @foreach ($allCplCodes as $index => $cplCode)
                    <input class="cpl-code" id="cpl-code-{{ $index }}" type="hidden"
                        value="{{ $cplCode }}">
                @endforeach

                <tr class="border-b bg-slate-100 font-semibold text-gray-900 hover:bg-slate-100">
                    <th class="whitespace-nowrap px-6 py-4 text-center" scope="row" colspan="2">
                        Score CPL (Rata-rata)
                    </th>
                    @foreach ($allCplCodes as $index => $cplCode)
                        <td class="px-6 py-4" id="rata-kolom-{{ $index + 1 }}">
                            <input id="input-rata-kolom-{{ $index + 1 }}" name="rata_kolom_{{ $index + 1 }}"
                                type="hidden">
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>

</x-app-dashboard>
