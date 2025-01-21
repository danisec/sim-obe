<x-app-dashboard title="{{ $title }}">

    <x-molecules.breadcrumb>
        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <a class="ml-1 text-sm font-medium text-gray-900 hover:text-blue-600 md:text-base"
                    href="{{ route('capaianPembelajaran.index') }}">Data cpl-cpmk-scpmk</a>
            </div>
        </li>

        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <span class="mx-2 text-sm font-medium text-gray-500 md:text-base">Detail cpl-cpmk-scpmk</span>
            </div>
        </li>
    </x-molecules.breadcrumb>

    <div class="mx-auto my-8 w-full">

        <h4 class="mb-6 text-xl font-semibold text-gray-900 md:text-2xl">Detail CPL-CPMK-SCPMK</h4>

        <div id="wrapper-first-scroll">
            <div id="div-scroll">
            </div>
        </div>

        <div class="overflow-x-auto" id="wrapper-second-scroll">
            <table class="min-w-full border-collapse border border-gray-300">
                <thead class="bg-slate-100 text-sm uppercase text-gray-900">
                    <tr>
                        <th class="border border-gray-300 bg-slate-100 px-6 py-3 md:sticky md:left-0">Kode CPL</th>
                        <th class="border border-gray-300 bg-slate-100 px-6 py-3 md:sticky md:left-[100px]">Deskripsi
                            CPL
                        </th>
                        <th class="border border-gray-300 px-6 py-3">Kode CPMK</th>
                        <th class="border border-gray-300 px-6 py-3">Deskripsi CPMK</th>
                        <th class="border border-gray-300 px-6 py-3">Kode SCPMK</th>
                        <th class="border border-gray-300 px-6 py-3">Deskripsi SCPMK</th>
                        <th class="border border-gray-300 px-6 py-3">Kemampuan</th>
                        <th class="border border-gray-300 px-6 py-3">Aspek</th>
                        <th class="border border-gray-300 px-6 py-3">Nama Mata Kuliah</th>
                    </tr>
                </thead>

                <tbody class="text-sm text-gray-900 md:text-base">
                    @php
                        $totalRowspan = 0;
                    @endphp
                    @foreach ($cplCpmkScpmk->capaianPembelajaranMataKuliah as $itemCPMK)
                        @php
                            $totalRowspan += count($itemCPMK->subCapaianPembelajaranMataKuliah);
                        @endphp
                    @endforeach

                    @php
                        $firstCPL = true;
                    @endphp

                    @foreach ($cplCpmkScpmk->capaianPembelajaranMataKuliah as $itemCPMK)
                        @php
                            $rowSpanCPMK = count($itemCPMK->subCapaianPembelajaranMataKuliah) ?: 1;
                        @endphp
                        @foreach ($itemCPMK->subCapaianPembelajaranMataKuliah as $indexSCPMK => $itemSCPMK)
                            <tr class="bg-white hover:bg-slate-100">
                                @if ($firstCPL)
                                    <td class="border border-gray-300 bg-white px-6 py-4 md:sticky md:left-0"
                                        rowspan="{{ $totalRowspan }}">
                                        {{ $cplCpmkScpmk->kode_cpl }}
                                    </td>
                                    <td class="border border-gray-300 bg-white px-6 py-4 md:sticky md:left-[100px]"
                                        rowspan="{{ $totalRowspan }}">
                                        {{ $cplCpmkScpmk->deskripsi_cpl }}
                                    </td>
                                    @php
                                        $firstCPL = false;
                                    @endphp
                                @endif
                                @if ($indexSCPMK === 0)
                                    <td class="border border-gray-300 px-2 py-4" rowspan="{{ $rowSpanCPMK }}">
                                        {{ $itemCPMK->kode_cpmk }}
                                    </td>
                                    <td class="border border-gray-300 px-2 py-4" rowspan="{{ $rowSpanCPMK }}">
                                        {{ $itemCPMK->deskripsi_cpmk }}
                                    </td>
                                @endif
                                <td class="border border-gray-300 px-2 py-4">{{ $itemSCPMK->kode_scpmk }}</td>
                                <td class="border border-gray-300 px-2 py-4">{{ $itemSCPMK->deskripsi_scpmk }}</td>
                                <td class="border border-gray-300 px-2 py-4">{{ $itemSCPMK->kemampuan }}</td>
                                <td class="border border-gray-300 px-2 py-4">{{ $itemSCPMK->aspek }}</td>
                                <td class="border border-gray-300 px-0 py-4">
                                    <div class="w-full divide-y divide-gray-300">
                                        @foreach ($itemSCPMK->mataKuliah as $mataKuliah)
                                            <div class="px-6 py-1">
                                                {{ $mataKuliah->nama_mata_kuliah }}
                                            </div>
                                        @endforeach
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @if ($rowSpanCPMK === 0)
                            <tr class="bg-white hover:bg-slate-100">
                                <td class="border border-gray-300 px-6 py-4">{{ $cplCpmkScpmk->kode_cpl }}</td>
                                <td class="border border-gray-300 px-6 py-4">{{ $cplCpmkScpmk->deskripsi_cpl }}</td>
                                <td class="border border-gray-300 px-6 py-4">{{ $itemCPMK->kode_cpmk }}</td>
                                <td class="border border-gray-300 px-6 py-4">{{ $itemCPMK->deskripsi_cpmk }}</td>
                                <td class="border border-gray-300 px-6 py-4"></td>
                                <td class="border border-gray-300 px-6 py-4"></td>
                                <td class="border border-gray-300 px-6 py-4"></td>
                                <td class="border border-gray-300 px-6 py-4"></td>
                                <td class="border border-gray-300 px-6 py-4"></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex justify-center">
            <a href="{{ route('capaianPembelajaran.index') }}">
                <x-atoms.button.button-gray :customClass="'w-52 text-center rounded-lg px-5 py-3'" :type="'button'" :name="'Kembali'" />
            </a>
        </div>
    </div>

</x-app-dashboard>
