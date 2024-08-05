<x-app-dashboard title="{{ $title }}">

    <x-molecules.breadcrumb>
        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <a class="ml-1 text-base font-medium text-gray-900 hover:text-blue-600"
                    href="{{ route('mappingCpl.index') }}">Mapping Cpl</a>
            </div>
        </li>

        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <span class="mx-2 text-base font-medium text-gray-500">Ubah Mapping Cpl</span>
            </div>
        </li>
    </x-molecules.breadcrumb>

    <div class="mx-auto my-8 w-full">

        <h4 class="mb-6 text-2xl font-semibold text-gray-900">Ubah Mapping Capaian Pembelajaran Lulusan Mata Kuliah
        </h4>

        <form class="mt-8 space-y-6" action="{{ route('mappingCpl.update', $mappingCpl->id_mapping_cpl) }}"
            method="POST">
            @method('PUT')
            @csrf

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode mata kuliah">
                    Kode Mata Kuliah
                </label>
                <input class="field-input-slate w-full" name="kode_mata_kuliah" type="text"
                    value="{{ $mappingCpl->kode_mata_kuliah }}" @readonly(true)>
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="nama mata kuliah">
                    Nama Mata Kuliah
                </label>
                <input class="field-input-slate w-full" name="nama_mata_kuliah" type="text"
                    value="{{ $mappingCpl->nama_mata_kuliah }}" @readonly(true)>
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode cpl">
                    Kode Capaian Pembelajaran Lulusan
                </label>
                <input class="field-input-slate w-full" name="kode_cpl" type="text"
                    value="{{ $mappingCpl->kode_cpl }}" @readonly(true)>
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode cpmk">
                    Kode Capaian Pembelajaran Mata Kuliah
                </label>
                <input class="field-input-slate w-full" name="kode_cpmk" type="text"
                    value="{{ $mappingCpl->kode_cpmk }}" @readonly(true)>
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode scpmk">
                    Kode Sub Capaian Pembelajaran Mata Kuliah
                </label>
                <input class="field-input-slate w-full" name="kode_scpmk" type="text"
                    value="{{ $mappingCpl->kode_scpmk }}" @readonly(true)>
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
                            <th class="w-56 px-6 py-3" scope="col">
                                Bobot (%)
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Kode SCPMK
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                Partisipasi / Case Method
                            </th>
                            <td class="px-6 py-4">
                                <input
                                    class="@error('partisipasi') border-red-500 @enderror field-input-slate w-full capitalize"
                                    id="inputBobotPartisipasi" name="partisipasi" type="number"
                                    value="{{ $mappingCpl->partisipasi ? $mappingCpl->partisipasi : '' }}"
                                    placeholder="Bobot Partisipasi / Case Method" min="0" max="100" />
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    // Cek apakah ada item yang nama_indikator sama dengan 'partisipasi'
                                    $indikatorKinerja = $mappingCpl->indikatorKinerjaScpmk->firstWhere(
                                        'nama_indikator',
                                        'partisipasi',
                                    );
                                @endphp

                                <input name="nama_indikator[]" type="hidden" value="partisipasi">
                                <select
                                    class="@error('indikator_kode_scpmk') border-red-500 @enderror field-input-slate indikatorKodeScpmk w-full"
                                    name="indikator_kode_scpmk[]">
                                    <option value="" selected>Pilih Kode SCPMK</option>

                                    @foreach ($mappingCpl->indikatorKinerjaScpmk as $itemMappingCpl)
                                        @if (!is_null($itemMappingCpl->indikator_kode_scpmk))
                                            <option value="{{ $itemMappingCpl->indikator_kode_scpmk }}"
                                                {{ $indikatorKinerja ? ($indikatorKinerja->indikator_kode_scpmk == $itemMappingCpl->indikator_kode_scpmk ? 'selected' : '') : '' }}>
                                                {{ $itemMappingCpl->indikator_kode_scpmk }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                Proyek / Problem Based Learning
                            </th>
                            <td class="px-6 py-4">
                                <input
                                    class="@error('proyek') border-red-500 @enderror field-input-slate w-full capitalize"
                                    id="inputBobotProyek" name="proyek" type="number"
                                    value="{{ $mappingCpl->proyek ? $mappingCpl->proyek : '' }}"
                                    placeholder="Bobot Proyek / Problem Based Learning" min="0" max="100" />
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    // Cek apakah ada item yang nama_indikator sama dengan 'proyek'
                                    $indikatorKinerja = $mappingCpl->indikatorKinerjaScpmk->firstWhere(
                                        'nama_indikator',
                                        'proyek',
                                    );
                                @endphp

                                <input name="nama_indikator[]" type="hidden" value="proyek">
                                <select
                                    class="@error('indikator_kode_scpmk') border-red-500 @enderror field-input-slate indikatorKodeScpmk w-full"
                                    name="indikator_kode_scpmk[]">
                                    <option value="" selected>Pilih Kode SCPMK</option>

                                    @foreach ($mappingCpl->indikatorKinerjaScpmk as $itemMappingCpl)
                                        @if (!is_null($itemMappingCpl->indikator_kode_scpmk))
                                            <option value="{{ $itemMappingCpl->indikator_kode_scpmk }}"
                                                {{ $indikatorKinerja ? ($indikatorKinerja->indikator_kode_scpmk == $itemMappingCpl->indikator_kode_scpmk ? 'selected' : '') : '' }}>
                                                {{ $itemMappingCpl->indikator_kode_scpmk }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                Tugas
                            </th>
                            <td class="px-6 py-4">
                                <input
                                    class="@error('tugas') border-red-500 @enderror field-input-slate w-full capitalize"
                                    id="inputBobotTugas" name="tugas" type="number"
                                    value="{{ $mappingCpl->tugas ? $mappingCpl->tugas : '' }}"
                                    placeholder="Bobot Tugas" min="0" max="100" />
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    // Cek apakah ada item yang nama_indikator sama dengan 'tugas'
                                    $indikatorKinerja = $mappingCpl->indikatorKinerjaScpmk->firstWhere(
                                        'nama_indikator',
                                        'tugas',
                                    );
                                @endphp

                                <input name="nama_indikator[]" type="hidden" value="tugas">
                                <select
                                    class="@error('indikator_kode_scpmk') border-red-500 @enderror field-input-slate indikatorKodeScpmk w-full"
                                    name="indikator_kode_scpmk[]">
                                    <option value="" selected>Pilih Kode SCPMK</option>

                                    @foreach ($mappingCpl->indikatorKinerjaScpmk as $itemMappingCpl)
                                        @if (!is_null($itemMappingCpl->indikator_kode_scpmk))
                                            <option value="{{ $itemMappingCpl->indikator_kode_scpmk }}"
                                                {{ $indikatorKinerja ? ($indikatorKinerja->indikator_kode_scpmk == $itemMappingCpl->indikator_kode_scpmk ? 'selected' : '') : '' }}>
                                                {{ $itemMappingCpl->indikator_kode_scpmk }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                Kuis
                            </th>
                            <td class="px-6 py-4">
                                <input
                                    class="@error('kuis') border-red-500 @enderror field-input-slate w-full capitalize"
                                    id="inputBobotKuis" name="kuis" type="number"
                                    value="{{ $mappingCpl->kuis ? $mappingCpl->kuis : '' }}" placeholder="Bobot Kuis"
                                    min="0" max="100" />
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    // Cek apakah ada item yang nama_indikator sama dengan 'kuis'
                                    $indikatorKinerja = $mappingCpl->indikatorKinerjaScpmk->firstWhere(
                                        'nama_indikator',
                                        'kuis',
                                    );
                                @endphp

                                <input name="nama_indikator[]" type="hidden" value="kuis">
                                <select
                                    class="@error('indikator_kode_scpmk') border-red-500 @enderror field-input-slate indikatorKodeScpmk w-full"
                                    name="indikator_kode_scpmk[]">
                                    <option value="" selected>Pilih Kode SCPMK</option>

                                    @foreach ($mappingCpl->indikatorKinerjaScpmk as $itemMappingCpl)
                                        @if (!is_null($itemMappingCpl->indikator_kode_scpmk))
                                            <option value="{{ $itemMappingCpl->indikator_kode_scpmk }}"
                                                {{ $indikatorKinerja ? ($indikatorKinerja->indikator_kode_scpmk == $itemMappingCpl->indikator_kode_scpmk ? 'selected' : '') : '' }}>
                                                {{ $itemMappingCpl->indikator_kode_scpmk }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                Ujian Tertulis (Evaluasi tengah semester)
                            </th>
                            <td class="px-6 py-4">
                                <input
                                    class="@error('evaluasi_tengah_semester') border-red-500 @enderror field-input-slate w-full capitalize"
                                    id="inputBobotEvaluasiTengahSemester" name="evaluasi_tengah_semester"
                                    type="number"
                                    value="{{ $mappingCpl->evaluasi_tengah_semester ? $mappingCpl->evaluasi_tengah_semester : '' }}"
                                    placeholder="Bobot Ujian Tertulis (Evaluasi Tengah Semester)" min="0"
                                    max="100" />
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    // Cek apakah ada item yang nama_indikator sama dengan 'evaluasi_tengah_semester'
                                    $indikatorKinerja = $mappingCpl->indikatorKinerjaScpmk->firstWhere(
                                        'nama_indikator',
                                        'evaluasi_tengah_semester',
                                    );
                                @endphp

                                <input name="nama_indikator[]" type="hidden" value="evaluasi_tengah_semester">
                                <select
                                    class="@error('indikator_kode_scpmk') border-red-500 @enderror field-input-slate indikatorKodeScpmk w-full"
                                    name="indikator_kode_scpmk[]">
                                    <option value="" selected>Pilih Kode SCPMK</option>

                                    @foreach ($mappingCpl->indikatorKinerjaScpmk as $itemMappingCpl)
                                        @if (!is_null($itemMappingCpl->indikator_kode_scpmk))
                                            <option value="{{ $itemMappingCpl->indikator_kode_scpmk }}"
                                                {{ $indikatorKinerja ? ($indikatorKinerja->indikator_kode_scpmk == $itemMappingCpl->indikator_kode_scpmk ? 'selected' : '') : '' }}>
                                                {{ $itemMappingCpl->indikator_kode_scpmk }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                Ujian Tertulis (Evaluasi Akhir semester)
                            </th>
                            <td class="px-6 py-4">
                                <input
                                    class="@error('evaluasi_akhir_semester') border-red-500 @enderror field-input-slate w-full capitalize"
                                    id="inputBobotEvaluasiAkhirSemester" name="evaluasi_akhir_semester"
                                    type="number"
                                    value="{{ $mappingCpl->evaluasi_akhir_semester ? $mappingCpl->evaluasi_akhir_semester : '' }}"
                                    placeholder="Bobot Ujian Tertulis (Evaluasi Akhir Semester)" min="0"
                                    max="100" />
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    // Cek apakah ada item yang nama_indikator sama dengan 'evaluasi_akhir_semester'
                                    $indikatorKinerja = $mappingCpl->indikatorKinerjaScpmk->firstWhere(
                                        'nama_indikator',
                                        'evaluasi_akhir_semester',
                                    );
                                @endphp

                                <input name="nama_indikator[]" type="hidden" value="evaluasi_akhir_semester">
                                <select
                                    class="@error('indikator_kode_scpmk') border-red-500 @enderror field-input-slate indikatorKodeScpmk w-full"
                                    name="indikator_kode_scpmk[]">
                                    <option value="" selected>Pilih Kode SCPMK</option>

                                    @foreach ($mappingCpl->indikatorKinerjaScpmk as $itemMappingCpl)
                                        @if (!is_null($itemMappingCpl->indikator_kode_scpmk))
                                            <option value="{{ $itemMappingCpl->indikator_kode_scpmk }}"
                                                {{ $indikatorKinerja ? ($indikatorKinerja->indikator_kode_scpmk == $itemMappingCpl->indikator_kode_scpmk ? 'selected' : '') : '' }}>
                                                {{ $itemMappingCpl->indikator_kode_scpmk }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </td>
                        </tr>

                        <tr class="border-b bg-slate-100 font-semibold hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-bold text-gray-900" scope="row">
                                Total Bobot
                            </th>
                            <td class="px-6 py-4">
                                <input class="field-input-slate w-full" id="totalBobot" @readonly(true)
                                    @disabled(true) />
                            </td>
                        </tr>
                    </tbody>
                </table>

                <span class="font-base my-2 flex justify-end text-sm font-semibold text-gray-900">Nilai maksimal adalah
                    100%.</span>
            </div>

            <div class="flex flex-row gap-4">
                <a href="{{ route('mappingCpl.index') }}">
                    <x-atoms.button.button-gray :customClass="'w-52 text-center rounded-lg px-5 py-3'" :type="'button'" :name="'Kembali'" />
                </a>
                <x-atoms.button.button-primary :customClass="'w-full text-center rounded-lg px-5 py-3'" :type="'submit'" :name="'Ubah'" />
            </div>
        </form>
    </div>

</x-app-dashboard>
