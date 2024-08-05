<x-app-dashboard title="{{ $title }}">

    <x-molecules.breadcrumb>
        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <a class="ml-1 text-base font-medium text-gray-900 hover:text-blue-600"
                    href="{{ route('mappingCpl.index') }}">Hasil Pembelajaran</a>
            </div>
        </li>

        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <span class="mx-2 text-base font-medium text-gray-500">Detail Hasil Pembelajaran</span>
            </div>
        </li>
    </x-molecules.breadcrumb>

    <div class="mx-auto my-8 w-11/12">

        <h4 class="mb-6 text-2xl font-semibold text-gray-900">Detail Hasil Pembelajaran
        </h4>

        <div class="mt-8 space-y-6">

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode mata kuliah">
                    Kode Mata Kuliah
                </label>
                <input class="@error('kode_mata_kuliah') border-red-500 @enderror field-input-slate w-full capitalize"
                    name="kode_mata_kuliah" type="text" value="{{ $hasilPembelajaran->kode_mata_kuliah }}"
                    @disabled(true) @readonly(true) />
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="nama mata kuliah">
                    Nama Mata Kuliah
                </label>
                <input class="@error('nama_mata_kuliah') border-red-500 @enderror field-input-slate w-full capitalize"
                    name="nama_mata_kuliah" type="text" value="{{ $hasilPembelajaran->nama_mata_kuliah }}"
                    @disabled(true) @readonly(true) />
            </div>

            <div class="relative overflow-x-auto rounded-lg shadow-sm">
                <table class="w-full text-left text-base text-gray-900">
                    <thead class="bg-slate-100 text-sm uppercase text-gray-900">
                        <tr>
                            <th class="px-6 py-3" scope="col">
                                Partisipasi Case Method
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Proyek / Problem Based Learning
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Tugas
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Kuis
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Ujian Tertulis (Evaluasi Tengah Semester)
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Ujian Tertulis (Evaluasi Akhir Semester)
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($hasilPembelajaran && $hasilPembelajaran->nilaiHasilPembelajaran)
                            @foreach ($hasilPembelajaran->nilaiHasilPembelajaran as $item)
                                <tr class="border-b bg-white hover:bg-slate-100">
                                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                        {{ $item->partisipasi ?? '-' }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $item->proyek ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->tugas ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->kuis ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->evaluasi_tengah_semester ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->evaluasi_akhir_semester ?? '-' }}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="px-6 py-4 text-center" colspan="6">Data tidak ditemukan</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="flex justify-center">
                <a href="{{ route('hasilPembelajaran.index') }}">
                    <x-atoms.button.button-gray :customClass="'w-52 text-center rounded-lg px-5 py-3'" :type="'button'" :name="'Kembali'" />
                </a>
            </div>
        </div>
    </div>

</x-app-dashboard>
