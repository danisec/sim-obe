<x-layouts.app-dashboard title="{{ $title }}">

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
                <span class="mx-2 text-base font-medium text-gray-500">Add Mapping Cpl</span>
            </div>
        </li>
    </x-molecules.breadcrumb>

    <div class="mx-auto my-8 w-11/12">

        <h4 class="mb-6 text-2xl font-semibold text-gray-900">Tambah Mapping Capaian Pembelajaran Lulusan Mata Kuliah
        </h4>

        <form class="mt-8 space-y-6" action="{{ route('mappingCpl.store') }}" method="POST">
            @csrf

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode mata kuliah">
                    Kode Mata Kuliah
                </label>
                <input class="@error('kode_mata_kuliah') border-red-500 @enderror field-input-slate w-full capitalize"
                    name="kode_mata_kuliah" type="text" value="{{ old('kode_mata_kuliah') }}"
                    placeholder="Kode Mata Kuliah" required autofocus />

                @error('kode_mata_kuliah')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="nama mata kuliah">
                    Nama Mata Kuliah
                </label>
                <input class="@error('nama_mata_kuliah') border-red-500 @enderror field-input-slate w-full"
                    name="nama_mata_kuliah" type="text" value="{{ old('nama_mata_kuliah') }}"
                    placeholder="Nama Mata Kuliah" required />

                @error('nama_mata_kuliah')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode cpl">
                    Kode Capaian Pembelajaran Lulusan
                </label>
                <select class="@error('kode_cpl') border-red-500 @enderror field-input-slate w-full" id="kodeCpl"
                    name="kode_cpl" required>
                    <option selected disabled hidden>Pilih Kode CPL</option>

                    @foreach ($capaianPembelajaranLulusan as $item)
                        <option value="{{ $item->kode_cpl }}"
                            {{ old('kode_cpl') == $item->kode_cpl ? 'selected' : '' }}>
                            {{ $item->kode_cpl }}
                        </option>
                    @endforeach
                </select>

                @error('kode_cpl')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode cpmk">
                    Kode Capaian Pembelajaran Mata Kuliah
                </label>
                <select class="@error('kode_cpmk') border-red-500 @enderror field-input-slate w-full" id="kodeCpmk"
                    name="kode_cpmk" required>

                    <option selected disabled hidden>Pilih Kode CPMK</option>
                </select>

                @error('kode_cpmk')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode scpmk">
                    Kode Sub Capaian Pembelajaran Mata Kuliah
                </label>
                <select class="@error('kode_scpmk') border-red-500 @enderror field-input-slate w-full" id="kodeScpmk"
                    name="kode_scpmk" required>

                    <option selected disabled hidden>Pilih Kode SCPMK</option>
                </select>

                @error('kode_scpmk')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
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
                                    value="{{ old('partisipasi') }}" placeholder="Bobot Partisipasi / Case Method" />
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                Proyek / Problem Based Learning
                            </th>
                            <td class="px-6 py-4">
                                <input
                                    class="@error('proyek') border-red-500 @enderror field-input-slate w-full capitalize"
                                    id="inputBobotProyek" name="proyek" type="number" value="{{ old('proyek') }}"
                                    placeholder="Bobot Proyek / Problem Based Learning" />
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                Tugas
                            </th>
                            <td class="px-6 py-4">
                                <input
                                    class="@error('tugas') border-red-500 @enderror field-input-slate w-full capitalize"
                                    id="inputBobotTugas" name="tugas" type="number" value="{{ old('tugas') }}"
                                    placeholder="Bobot Tugas" />
                            </td>
                        </tr>

                        <tr class="border-b bg-white hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                Kuis
                            </th>
                            <td class="px-6 py-4">
                                <input
                                    class="@error('kuis') border-red-500 @enderror field-input-slate w-full capitalize"
                                    id="inputBobotKuis" name="kuis" type="number" value="{{ old('kuis') }}"
                                    placeholder="Bobot Kuis" />
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
                                    type="number" value="{{ old('evaluasi_tengah_semester') }}"
                                    placeholder="Bobot Ujian Tertulis (Evaluasi Tengah Semester)" />
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
                                    type="number" value="{{ old('evaluasi_akhir_semester') }}"
                                    placeholder="Bobot Ujian Tertulis (Evaluasi Akhir Semester)" />
                            </td>
                        </tr>

                        <tr class="border-b bg-slate-100 font-semibold hover:bg-slate-100">
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                Total Bobot
                            </th>
                            <td class="px-6 py-4">
                                <input class="field-input-slate w-full" id="totalBobot" @readonly(true)
                                    @disabled(true) />
                            </td>
                        </tr>
                    </tbody>
                </table>

                <span class="font-base my-2 flex justify-end text-sm text-gray-900">Nilai maksimal adalah 100%.</span>
            </div>

            <div class="flex flex-row gap-4">
                <a href="{{ route('mappingCpl.index') }}">
                    <x-atoms.button.button-gray :customClass="'w-52 text-center rounded-lg px-5 py-3'" :type="'button'" :name="'Kembali'" />
                </a>
                <x-atoms.button.button-primary :customClass="'w-full text-center rounded-lg px-5 py-3'" :type="'submit'" :name="'Simpan'" />
            </div>
        </form>
    </div>

</x-layouts.app-dashboard>
