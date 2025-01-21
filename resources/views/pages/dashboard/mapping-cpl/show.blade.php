<x-app-dashboard title="{{ $title }}">

    <x-molecules.breadcrumb>
        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <a class="ml-1 text-sm font-medium text-gray-500 hover:text-blue-600 md:text-base"
                    href="{{ route('mappingCpl.index') }}">Mapping Cpl</a>
            </div>
        </li>

        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <span class="mx-2 text-sm font-medium text-gray-900 md:text-base">Detail Mapping Cpl</span>
            </div>
        </li>
    </x-molecules.breadcrumb>

    <div class="mx-auto my-8 w-full md:w-11/12">

        <h4 class="mb-6 text-xl font-semibold text-gray-900 md:text-2xl">Detail Mapping Capaian Pembelajaran Lulusan Mata
            Kuliah
        </h4>

        <div class="mt-8 space-y-6">

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode mata kuliah">
                    Kode Mata Kuliah
                </label>
                <input class="@error('kode_mata_kuliah') border-red-500 @enderror field-input-slate w-full capitalize"
                    name="kode_mata_kuliah" type="text" value="{{ $mappingCpl->kode_mata_kuliah }}"
                    @disabled(true) @readonly(true) />
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="nama mata kuliah">
                    Nama Mata Kuliah
                </label>
                <input class="@error('nama_mata_kuliah') border-red-500 @enderror field-input-slate w-full capitalize"
                    name="nama_mata_kuliah" type="text" value="{{ $mappingCpl->nama_mata_kuliah }}"
                    @disabled(true) @readonly(true) />
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode cpl">
                    Kode Capaian Pembelajaran Lulusan
                </label>
                <input class="@error('kode_cpl') border-red-500 @enderror field-input-slate w-full capitalize"
                    name="kode_cpl" type="text" value="{{ $mappingCpl->kode_cpl }}" @disabled(true)
                    @readonly(true) />
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode cpmk">
                    Kode Capaian Pembelajaran Mata Kuliah
                </label>
                <input class="@error('kode_cpmk') border-red-500 @enderror field-input-slate w-full capitalize"
                    name="kode_cpmk" type="text" value="{{ $mappingCpl->kode_cpmk }}" @disabled(true)
                    @readonly(true) />
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode scpmk">
                    Kode Sub Capaian Pembelajaran Mata Kuliah
                </label>
                <input class="@error('kode_scpmk') border-red-500 @enderror field-input-slate w-full capitalize"
                    name="kode_scpmk" type="text" value="{{ $mappingCpl->kode_scpmk }}" @disabled(true)
                    @readonly(true) />
            </div>

            <div class="relative overflow-x-auto rounded-lg shadow-sm">
                <h4 class="mb-6 text-lg font-semibold text-gray-900">Indikator Kinerja
                </h4>

                <table class="w-full text-left text-base text-gray-900">
                    <thead class="bg-slate-100 text-sm uppercase text-gray-900">
                        <tr>
                            <th class="px-6 py-3" scope="col">
                                Indikator
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Bobot (%)
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Kode SCPMK
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-2 py-2 font-medium text-gray-900 md:px-6 md:py-4"
                                scope="row">
                                Partisipasi / Case Method
                            </th>
                            <td class="px-1 py-2 md:px-6 md:py-4">
                                <input class="field-input-slate min-w-[250px] capitalize md:w-full" name="partisipasi"
                                    type="text"
                                    value="{{ $mappingCpl->partisipasi ? $mappingCpl->partisipasi : '' }}"
                                    @disabled(true) @readonly(true) />
                            </td>
                            <td class="px-1 py-2 md:px-6 md:py-4">
                                @php
                                    // Cek apakah ada item yang nama_indikator sama dengan 'partisipasi'
                                    $indikatorKinerja = $mappingCpl->indikatorKinerjaScpmk->firstWhere(
                                        'nama_indikator',
                                        'partisipasi',
                                    );
                                @endphp

                                <input class="field-input-slate min-w-[250px] capitalize md:w-full"
                                    name="indikator_kode_scpmk" type="text"
                                    value="{{ $indikatorKinerja ? $indikatorKinerja->indikator_kode_scpmk : '' }}"
                                    @disabled(true) @readonly(true) />
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-2 py-2 font-medium text-gray-900 md:px-6 md:py-4"
                                scope="row">
                                Proyek / Problem Based Learning
                            </th>
                            <td class="px-1 py-2 md:px-6 md:py-4">
                                <input
                                    class="@error('proyek') border-red-500 @enderror field-input-slate min-w-[250px] capitalize md:w-full"
                                    name="proyek" type="text"
                                    value="{{ $mappingCpl->proyek ? $mappingCpl->proyek : '' }}"
                                    @disabled(true) @readonly(true) />
                            </td>
                            <td class="px-1 py-2 md:px-6 md:py-4">
                                @php
                                    // Cek apakah ada item yang nama_indikator sama dengan 'proyek'
                                    $indikatorKinerja = $mappingCpl->indikatorKinerjaScpmk->firstWhere(
                                        'nama_indikator',
                                        'proyek',
                                    );
                                @endphp

                                <input class="field-input-slate min-w-[250px] capitalize md:w-full"
                                    name="indikator_kode_scpmk" type="text"
                                    value="{{ $indikatorKinerja ? $indikatorKinerja->indikator_kode_scpmk : '' }}"
                                    @disabled(true) @readonly(true) />
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-2 py-2 font-medium text-gray-900 md:px-6 md:py-4"
                                scope="row">
                                Tugas
                            </th>
                            <td class="px-1 py-2 md:px-6 md:py-4">
                                <input
                                    class="@error('tugas') border-red-500 @enderror field-input-slate min-w-[250px] capitalize md:w-full"
                                    name="tugas" type="text"
                                    value="{{ $mappingCpl->tugas ? $mappingCpl->tugas : '' }}"
                                    @disabled(true) @readonly(true) />
                            </td>
                            <td class="px-1 py-2 md:px-6 md:py-4">
                                @php
                                    // Cek apakah ada item yang nama_indikator sama dengan 'tugas'
                                    $indikatorKinerja = $mappingCpl->indikatorKinerjaScpmk->firstWhere(
                                        'nama_indikator',
                                        'tugas',
                                    );
                                @endphp

                                <input class="field-input-slate min-w-[250px] capitalize md:w-full"
                                    name="indikator_kode_scpmk" type="text"
                                    value="{{ $indikatorKinerja ? $indikatorKinerja->indikator_kode_scpmk : '' }}"
                                    @disabled(true) @readonly(true) />
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-2 py-2 font-medium text-gray-900 md:px-6 md:py-4"
                                scope="row">
                                Kuis
                            </th>
                            <td class="px-1 py-2 md:px-6 md:py-4">
                                <input
                                    class="@error('kuis') border-red-500 @enderror field-input-slate min-w-[250px] capitalize md:w-full"
                                    name="kuis" type="text"
                                    value="{{ $mappingCpl->kuis ? $mappingCpl->kuis : '' }}"
                                    @disabled(true) @readonly(true) />
                            </td>
                            <td class="px-1 py-2 md:px-6 md:py-4">
                                @php
                                    // Cek apakah ada item yang nama_indikator sama dengan 'kuis'
                                    $indikatorKinerja = $mappingCpl->indikatorKinerjaScpmk->firstWhere(
                                        'nama_indikator',
                                        'kuis',
                                    );
                                @endphp

                                <input class="field-input-slate min-w-[250px] capitalize md:w-full"
                                    name="indikator_kode_scpmk" type="text"
                                    value="{{ $indikatorKinerja ? $indikatorKinerja->indikator_kode_scpmk : '' }}"
                                    @disabled(true) @readonly(true) />
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-2 py-2 font-medium text-gray-900 md:px-6 md:py-4"
                                scope="row">
                                Ujian Tertulis (Evaluasi tengah semester)
                            </th>
                            <td class="px-1 py-2 md:px-6 md:py-4">
                                <input
                                    class="@error('evaluasi_tengah_semester') border-red-500 @enderror field-input-slate min-w-[250px] capitalize md:w-full"
                                    name="evaluasi_tengah_semester" type="text"
                                    value="{{ $mappingCpl->evaluasi_tengah_semester ? $mappingCpl->evaluasi_tengah_semester : '' }}"
                                    @disabled(true) @readonly(true) />
                            </td>
                            <td class="px-1 py-2 md:px-6 md:py-4">
                                @php
                                    // Cek apakah ada item yang nama_indikator sama dengan 'evaluasi_tengah_semester'
                                    $indikatorKinerja = $mappingCpl->indikatorKinerjaScpmk->firstWhere(
                                        'nama_indikator',
                                        'evaluasi_tengah_semester',
                                    );
                                @endphp

                                <input class="field-input-slate min-w-[250px] capitalize md:w-full"
                                    name="indikator_kode_scpmk" type="text"
                                    value="{{ $indikatorKinerja ? $indikatorKinerja->indikator_kode_scpmk : '' }}"
                                    @disabled(true) @readonly(true) />
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-2 py-2 font-medium text-gray-900 md:px-6 md:py-4"
                                scope="row">
                                Ujian Tertulis (Evaluasi Akhir semester)
                            </th>
                            <td class="px-1 py-2 md:px-6 md:py-4">
                                <input
                                    class="@error('evaluasi_akhir_semester') border-red-500 @enderror field-input-slate min-w-[250px] capitalize md:w-full"
                                    name="evaluasi_akhir_semester" type="text"
                                    value="{{ $mappingCpl->evaluasi_akhir_semester ? $mappingCpl->evaluasi_akhir_semester : '' }}"
                                    @disabled(true) @readonly(true) />
                            </td>
                            <td class="px-1 py-2 md:px-6 md:py-4">
                                @php
                                    // Cek apakah ada item yang nama_indikator sama dengan 'evaluasi_akhir_semester'
                                    $indikatorKinerja = $mappingCpl->indikatorKinerjaScpmk->firstWhere(
                                        'nama_indikator',
                                        'evaluasi_akhir_semester',
                                    );
                                @endphp

                                <input class="field-input-slate min-w-[250px] capitalize md:w-full"
                                    name="indikator_kode_scpmk" type="text"
                                    value="{{ $indikatorKinerja ? $indikatorKinerja->indikator_kode_scpmk : '' }}"
                                    @disabled(true) @readonly(true) />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex justify-center">
                <a href="{{ route('mappingCpl.index') }}">
                    <x-atoms.button.button-gray :customClass="'w-52 text-center rounded-lg px-5 py-3'" :type="'button'" :name="'Kembali'" />
                </a>
            </div>
        </div>
    </div>

</x-app-dashboard>
