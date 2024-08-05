<x-app-dashboard title="{{ $title }}">

    <x-molecules.breadcrumb>
        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <a class="ml-1 text-base font-medium text-gray-900 hover:text-blue-600"
                    href="{{ route('hasilPembelajaran.index') }}">Hasil Pembelajaran</a>
            </div>
        </li>

        <li aria-current="page">
            <div class="flex items-center">
                <x-atoms.svg.arrow-right />
                <span class="mx-2 text-base font-medium text-gray-500">Tambah Hasil Pembelajaran</span>
            </div>
        </li>
    </x-molecules.breadcrumb>

    <div class="mx-auto my-8 w-11/12">

        <div class="mb-8">
            <h4 class="mb-6 text-2xl font-semibold text-gray-900">Download Template Nilai Hasil Pembelajaran</h4>

            <div>
                <a href="{{ asset('storage/template_nilai/template_nilai.xls') }}">
                    <button
                        class="flex h-12 w-full flex-row items-center justify-center gap-2 rounded-md bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            color="#FFFFFF" fill="none">
                            <path
                                d="M12 14.5L12 4.5M12 14.5C11.2998 14.5 9.99153 12.5057 9.5 12M12 14.5C12.7002 14.5 14.0085 12.5057 14.5 12"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M20 16.5C20 18.982 19.482 19.5 17 19.5H7C4.518 19.5 4 18.982 4 16.5"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        Download
                    </button>
                </a>
            </div>
        </div>

        <h4 class="mb-6 text-2xl font-semibold text-gray-900">Tambah Hasil Pembelajaran
        </h4>

        <form class="mt-8 space-y-6" action="{{ route('hasilPembelajaran.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div>
                <label class="mb-2 block text-base font-medium text-gray-900" for="kode mata kuliah">
                    Kode Mata Kuliah
                </label>

                <select class="@error('kode_mata_kuliah') border-red-500 @enderror field-input-slate w-full"
                    id="kodeMataKuliah" name="kode_mata_kuliah" required>
                    <option selected disabled hidden>Pilih Kode Mata Kuliah</option>

                    @foreach ($mataKuliah as $itemMataKuliah)
                        <option value="{{ $itemMataKuliah->kode_mata_kuliah }}"
                            {{ old('kode_mata_kuliah') == $itemMataKuliah->kode_mata_kuliah ? 'selected' : '' }}>
                            {{ $itemMataKuliah->kode_mata_kuliah . ' - ' . $itemMataKuliah->nama_mata_kuliah }}
                        </option>
                    @endforeach
                </select>

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

                <select class="@error('nama_mata_kuliah') border-red-500 @enderror field-input-slate w-full"
                    id="namaMataKuliah" name="nama_mata_kuliah" required>
                    <option selected disabled hidden>Pilih Nama Mata Kuliah</option>
                </select>

                @error('nama_mata_kuliah')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex w-full flex-col">
                <label class="mb-2 block text-base font-medium text-gray-900" for="nilai">
                    Nilai
                </label>
                <input
                    class="block w-full rounded-lg border border-gray-200 bg-white text-sm shadow-sm file:me-4 file:border-0 file:bg-gray-50 file:px-4 file:py-3 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50"
                    id="file-input" name="import_file_nilai" type="file" @required(true)>
                <p class="mt-1 text-sm text-gray-600">File support .xlsx, .xls</p>
            </div>

            <div class="flex flex-row gap-4">
                <a href="{{ route('hasilPembelajaran.index') }}">
                    <x-atoms.button.button-gray :customClass="'w-52 text-center rounded-lg px-5 py-3'" :type="'button'" :name="'Kembali'" />
                </a>
                <x-atoms.button.button-primary :customClass="'w-full text-center rounded-lg px-5 py-3'" :type="'submit'" :name="'Simpan'" />
            </div>
        </form>
    </div>

</x-app-dashboard>
